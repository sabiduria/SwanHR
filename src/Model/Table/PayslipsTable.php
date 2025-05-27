<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payslips Model
 *
 * @property \App\Model\Table\PayrollsTable&\Cake\ORM\Association\BelongsTo $Payrolls
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Payslip newEmptyEntity()
 * @method \App\Model\Entity\Payslip newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Payslip> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payslip get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Payslip findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Payslip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Payslip> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payslip|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Payslip saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Payslip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payslip>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Payslip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payslip> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Payslip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payslip>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Payslip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Payslip> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PayslipsTable extends Table
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

        $this->setTable('payslips');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Payrolls', [
            'foreignKey' => 'payroll_id',
            'joinType' => 'INNER',
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
            ->integer('payroll_id')
            ->notEmptyString('payroll_id');

        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->numeric('hour_sup')
            ->allowEmptyString('hour_sup');

        $validator
            ->numeric('nber_days')
            ->allowEmptyString('nber_days');

        $validator
            ->numeric('primes')
            ->allowEmptyString('primes');

        $validator
            ->numeric('salary')
            ->allowEmptyString('salary');

        $validator
            ->scalar('bank')
            ->maxLength('bank', 45)
            ->allowEmptyString('bank');

        $validator
            ->scalar('bank_account')
            ->maxLength('bank_account', 45)
            ->allowEmptyString('bank_account');

        $validator
            ->boolean('published')
            ->allowEmptyString('published');

        $validator
            ->boolean('payed')
            ->allowEmptyString('payed');

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
        $rules->add($rules->existsIn(['payroll_id'], 'Payrolls'), ['errorField' => 'payroll_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
