<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mobil Model
 *
 * @method \App\Model\Entity\Mobil newEmptyEntity()
 * @method \App\Model\Entity\Mobil newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Mobil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mobil get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mobil findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Mobil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mobil[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mobil|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mobil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mobil[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mobil[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mobil[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mobil[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MobilTable extends Table
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

        $this->setTable('mobil');
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
            ->scalar('nopol')
            ->maxLength('nopol', 20)
            ->allowEmptyString('nopol');

        $validator
            ->scalar('merk_nama')
            ->maxLength('merk_nama', 255)
            ->allowEmptyString('merk_nama');

        $validator
            ->scalar('departmen')
            ->maxLength('departmen', 255)
            ->allowEmptyString('departmen');

        $validator
            ->scalar('type')
            ->allowEmptyString('type');

        $validator
            ->scalar('tahun_produksi')
            ->allowEmptyString('tahun_produksi');

        $validator
            ->scalar('warna')
            ->maxLength('warna', 50)
            ->allowEmptyString('warna');

        return $validator;
    }
}
