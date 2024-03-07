<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ruangan Model
 *
 * @property \App\Model\Table\AksesorisruanganTable&\Cake\ORM\Association\HasMany $Aksesorisruangan
 *
 * @method \App\Model\Entity\Ruangan newEmptyEntity()
 * @method \App\Model\Entity\Ruangan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ruangan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ruangan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ruangan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ruangan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ruangan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ruangan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ruangan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ruangan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ruangan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ruangan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ruangan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RuanganTable extends Table
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

        $this->setTable('ruangan');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Aksesorisruangan', [
            'foreignKey' => 'ruangan_id',
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
            ->scalar('nomor_ruangan')
            ->maxLength('nomor_ruangan', 20)
            ->allowEmptyString('nomor_ruangan');

        $validator
            ->decimal('luas')
            ->allowEmptyString('luas');

        $validator
            ->integer('lantai')
            ->allowEmptyString('lantai');

        $validator
            ->scalar('deskripsi')
            ->allowEmptyString('deskripsi');

        return $validator;
    }
}
