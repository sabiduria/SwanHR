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
 * Users Model
 *
 * @property \App\Model\Table\OccupationsTable&\Cake\ORM\Association\BelongsTo $Occupations
 * @property \App\Model\Table\AttendancesTable&\Cake\ORM\Association\HasMany $Attendances
 * @property \App\Model\Table\DependentsTable&\Cake\ORM\Association\HasMany $Dependents
 * @property \App\Model\Table\LeavesTable&\Cake\ORM\Association\HasMany $Leaves
 * @property \App\Model\Table\LeavesbalancesTable&\Cake\ORM\Association\HasMany $Leavesbalances
 * @property \App\Model\Table\ProexperiencesTable&\Cake\ORM\Association\HasMany $Proexperiences
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField(['firstname', 'secondname', 'lastname']);
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Occupations', [
            'foreignKey' => 'occupation_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Attendances', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Dependents', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Leaves', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Leavesbalances', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Proexperiences', [
            'foreignKey' => 'user_id',
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
            ->scalar('firstname')
            ->maxLength('firstname', 45)
            ->allowEmptyString('firstname');

        $validator
            ->scalar('secondname')
            ->maxLength('secondname', 45)
            ->allowEmptyString('secondname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 45)
            ->allowEmptyString('lastname');

        $validator
            ->integer('occupation_id')
            ->notEmptyString('occupation_id');

        $validator
            ->scalar('maritalstatus')
            ->maxLength('maritalstatus', 45)
            ->allowEmptyString('maritalstatus');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone1')
            ->maxLength('phone1', 15)
            ->allowEmptyString('phone1');

        $validator
            ->scalar('phone2')
            ->maxLength('phone2', 15)
            ->allowEmptyString('phone2');

        $validator
            ->scalar('birthplace')
            ->maxLength('birthplace', 45)
            ->allowEmptyString('birthplace');

        $validator
            ->date('birthdate')
            ->allowEmptyDate('birthdate');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 2)
            ->allowEmptyString('gender');

        $validator
            ->scalar('nationality')
            ->maxLength('nationality', 45)
            ->allowEmptyString('nationality');

        $validator
            ->scalar('typeofidentitypiece')
            ->maxLength('typeofidentitypiece', 45)
            ->allowEmptyString('typeofidentitypiece');

        $validator
            ->scalar('identitypiecenumber')
            ->maxLength('identitypiecenumber', 45)
            ->allowEmptyString('identitypiecenumber');

        $validator
            ->scalar('address_number')
            ->maxLength('address_number', 45)
            ->allowEmptyString('address_number');

        $validator
            ->scalar('address_avenue')
            ->maxLength('address_avenue', 45)
            ->allowEmptyString('address_avenue');

        $validator
            ->scalar('address_district')
            ->maxLength('address_district', 45)
            ->allowEmptyString('address_district');

        $validator
            ->scalar('address_municipality')
            ->maxLength('address_municipality', 45)
            ->allowEmptyString('address_municipality');

        $validator
            ->scalar('education_level')
            ->maxLength('education_level', 45)
            ->allowEmptyString('education_level');

        $validator
            ->scalar('education_option')
            ->maxLength('education_option', 45)
            ->allowEmptyString('education_option');

        $validator
            ->date('affectation_date')
            ->allowEmptyDate('affectation_date');

        $validator
            ->scalar('bio')
            ->requirePresence('bio', 'create')
            ->notEmptyString('bio');

        $validator
            ->scalar('username')
            ->maxLength('username', 45)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->existsIn(['occupation_id'], 'Occupations'), ['errorField' => 'occupation_id']);

        return $rules;
    }

    public function afterSave(EventInterface $event, $entity, ArrayObject $options): void
    {
        if ($entity->isNew()) {
            // Fetch all leavestypes
            $leavestypesTable = TableRegistry::getTableLocator()->get('Leavestypes');
            $leavestypes = $leavestypesTable->find('all');

            // Add rows to Leavesbalances for each leavestype
            $leavesbalancesTable = TableRegistry::getTableLocator()->get('Leavesbalances');
            foreach ($leavestypes as $leavestype) {
                $leavesbalancesTable->save($leavesbalancesTable->newEntity([
                    'user_id' => $entity->id,
                    'leavestype_id' => $leavestype->id,
                    'availablebalance' => $leavestype->maxdaysperyear,
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
