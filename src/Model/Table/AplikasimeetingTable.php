<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aplikasimeeting Model
 *
 * @method \App\Model\Entity\Aplikasimeeting newEmptyEntity()
 * @method \App\Model\Entity\Aplikasimeeting newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aplikasimeeting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aplikasimeeting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aplikasimeeting[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aplikasimeeting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aplikasimeeting[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AplikasimeetingTable extends Table
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

        $this->setTable('aplikasimeeting');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nama')
            ->maxLength('nama', 255)
            ->allowEmptyString('nama');

        $validator
            ->date('tanggal')
            ->allowEmptyDate('tanggal');

        $validator
            ->time('waktu_mulai')
            ->allowEmptyTime('waktu_mulai');

        $validator
            ->time('waktu_selesai')
            ->allowEmptyTime('waktu_selesai');

        return $validator;
    }
}
