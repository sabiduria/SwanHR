<?php
declare(strict_types=1);

namespace App\Model\Table;

use ArrayObject;
use Cake\Event\EventInterface;
use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Leavestypes Model
 *
 * @property \App\Model\Table\LeavesTable&\Cake\ORM\Association\HasMany $Leaves
 * @property \App\Model\Table\LeavesbalancesTable&\Cake\ORM\Association\HasMany $Leavesbalances
 *
 * @method \App\Model\Entity\Leavestype newEmptyEntity()
 * @method \App\Model\Entity\Leavestype newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Leavestype> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Leavestype get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Leavestype findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Leavestype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Leavestype> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Leavestype|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Leavestype saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Leavestype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leavestype>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Leavestype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leavestype> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Leavestype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leavestype>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Leavestype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Leavestype> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeavestypesTable extends Table
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

        $this->setTable('leavestypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Leaves', [
            'foreignKey' => 'leavestype_id',
        ]);
        $this->hasMany('Leavesbalances', [
            'foreignKey' => 'leavestype_id',
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->numeric('maxdaysperyear')
            ->allowEmptyString('maxdaysperyear');

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

    public function afterSave(EventInterface $event, $entity, ArrayObject $options): void
    {
        if ($entity->isNew()) {
            // Fetch all users
            $usersTable = TableRegistry::getTableLocator()->get('Users');
            $users = $usersTable->find('all');

            // Add rows to Leavesbalances for each user
            $leavesbalancesTable = TableRegistry::getTableLocator()->get('Leavesbalances');
            foreach ($users as $user) {
                $leavesbalancesTable->save($leavesbalancesTable->newEntity([
                    'user_id' => $user->id,
                    'leavestype_id' => $entity->id,
                    'availablebalance' => $entity->maxdaysperyear,
                    'balanceyear' => date('Y'),
                    'created' => date('Y-m-d H:i:s'),
                    'modified' => date('Y-m-d H:i:s'),
                    'createdby' => "SwanHR",
                    'modifiedby' => "SwanHR",
                    'deleted' => 0,
                ]));
            }
        }
    }
}
