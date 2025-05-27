<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payrollinfos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Payrollinfo newEmptyEntity()
 * @method \App\Model\Entity\Payrollinfo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Payrollinfo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payrollinfo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Payrollinfo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Payrollinfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Payrollinfo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payrollinfo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Payrollinfo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Payrollinfo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payrollinfo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Payrollinfo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payrollinfo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Payrollinfo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payrollinfo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Payrollinfo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payrollinfo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PayrollinfosTable extends Table
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

        $this->setTable('payrollinfos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->numeric('salary_per_day')
            ->allowEmptyString('salary_per_day');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
