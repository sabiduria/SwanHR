<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependents Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RelationshipsTable&\Cake\ORM\Association\BelongsTo $Relationships
 *
 * @method \App\Model\Entity\Dependent newEmptyEntity()
 * @method \App\Model\Entity\Dependent newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Dependent> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependent get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Dependent findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Dependent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Dependent> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependent|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Dependent saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Dependent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dependent>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dependent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dependent> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dependent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dependent>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dependent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dependent> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DependentsTable extends Table
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

        $this->setTable('dependents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Relationships', [
            'foreignKey' => 'relationship_id',
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
            ->integer('relationship_id')
            ->notEmptyString('relationship_id');

        $validator
            ->scalar('fistname')
            ->maxLength('fistname', 45)
            ->allowEmptyString('fistname');

        $validator
            ->scalar('secondname')
            ->maxLength('secondname', 45)
            ->allowEmptyString('secondname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 45)
            ->allowEmptyString('lastname');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->allowEmptyString('gender');

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
        $rules->add($rules->existsIn(['relationship_id'], 'Relationships'), ['errorField' => 'relationship_id']);

        return $rules;
    }
}
