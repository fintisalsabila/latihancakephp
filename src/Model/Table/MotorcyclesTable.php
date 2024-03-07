<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Motorcycles Model
 *
 * @method \App\Model\Entity\Motorcycle newEmptyEntity()
 * @method \App\Model\Entity\Motorcycle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Motorcycle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Motorcycle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Motorcycle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Motorcycle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Motorcycle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Motorcycle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motorcycle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motorcycle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Motorcycle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Motorcycle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Motorcycle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MotorcyclesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('motorcycles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('code_mtr')
            ->maxLength('code_mtr', 15)
            ->allowEmptyString('code_mtr')
            ->add('code_mtr', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('code_ahm')
            ->maxLength('code_ahm', 3)
            ->allowEmptyString('code_ahm');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('type_mtr')
            ->maxLength('type_mtr', 1)
            ->allowEmptyString('type_mtr');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->integer('create_by')
            ->allowEmptyString('create_by');

        $validator
            ->integer('modi_by')
            ->allowEmptyString('modi_by');

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
        $rules->add($rules->isUnique(['code_mtr'], ['allowMultipleNulls' => true]), ['errorField' => 'code_mtr']);

        return $rules;
    }
}
