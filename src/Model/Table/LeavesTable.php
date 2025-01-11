<?php
declare(strict_types=1);

namespace App\Model\Table;

use ArrayObject;
use Cake\Event\EventInterface;
use Cake\I18n\DateTime;
use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use DateInterval;
use DatePeriod;

/**
 * Leaves Model
 *
 * @property \App\Model\Table\LeavestypesTable&\Cake\ORM\Association\BelongsTo $Leavestypes
 * @property \App\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Leave newEmptyEntity()
 * @method \App\Model\Entity\Leave newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Leave> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Leave get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Leave findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Leave patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Leave> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Leave|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Leave saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Leave>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leave>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Leave>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leave> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Leave>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leave>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Leave>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leave> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeavesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('leaves');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Leavestypes', [
            'foreignKey' => 'leavestype_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('leavestype_id')
            ->notEmptyString('leavestype_id');

        $validator
            ->integer('status_id')
            ->allowEmptyString('status_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->date('startdate')
            ->allowEmptyDate('startdate');

        $validator
            ->date('enddate')
            ->allowEmptyDate('enddate');

        $validator
            ->scalar('reason')
            ->allowEmptyString('reason');

        $validator
            ->scalar('approvedby')
            ->maxLength('approvedby', 45)
            ->allowEmptyString('approvedby');

        $validator
            ->date('approveddate')
            ->allowEmptyDate('approveddate');

        $validator
            ->scalar('createdby')
            ->maxLength('createdby', 45)
            ->allowEmptyString('createdby');

        $validator
            ->scalar('modifiedby')
            ->maxLength('modifiedby', 45)
            ->allowEmptyString('modifiedby');

        $validator
            ->boolean('deleted')
            ->allowEmptyString('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['leavestype_id'], 'Leavestypes'), ['errorField' => 'leavestype_id']);
        $rules->add($rules->existsIn(['status_id'], 'Statuses'), ['errorField' => 'status_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }

    public function afterSave(EventInterface $event, $entity, ArrayObject $options): void
    {
        // Define the "Approved" status ID
        $approvedStatusId = 2; // Replace with the actual ID for "Approved" in your statuses table

        // Check if the status has been updated to "Approved"
        if ($entity->isDirty('status_id') && $entity->status_id == $approvedStatusId && $entity->approvedby == "") {
            // Calculate the number of leave days, excluding holidays and weekends
            $startDate = new DateTime($entity->startdate);
            $endDate = new DateTime($entity->enddate);
            $interval = new DateInterval('P1D');
            $dateRange = new DatePeriod($startDate, $interval, $endDate->add($interval));

            // Fetch holiday dates in the range
            $holidaysTable = TableRegistry::getTableLocator()->get('Holidays');
            $holidays = $holidaysTable->find('list', ['valueField' => 'holidaydate'])
                ->where([
                    'holidaydate >=' => $startDate->format('Y-m-d'),
                    'holidaydate <=' => $endDate->format('Y-m-d'),
                ])
                ->toArray();

            // Count leave days excluding holidays and weekends
            $daysRequested = 0;
            foreach ($dateRange as $date) {
                $dayOfWeek = $date->format('N'); // Day of the week (1 = Monday, 7 = Sunday)
                if (!in_array($date->format('Y-m-d'), $holidays) && $dayOfWeek < 6) {
                    $daysRequested++; // Exclude Saturdays (6) and Sundays (7)
                }
            }

            // Fetch the Leavesbalance entry for the user and leave type
            $leavesbalancesTable = TableRegistry::getTableLocator()->get('Leavesbalances');
            $balance = $leavesbalancesTable->find()
                ->where([
                    'user_id' => $entity->user_id,
                    'leavestype_id' => $entity->leavestype_id,
                    'balanceyear' => date('Y'),
                ])
                ->first();

            if ($balance) {
                // Decrease the available balance
                $balance->availablebalance -= $daysRequested;
                $leavesbalancesTable->save($balance);
            }
        }
    }
}
