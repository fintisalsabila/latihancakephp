<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aksesorisruangan Model
 *
 * @property \App\Model\Table\RuanganTable&\Cake\ORM\Association\BelongsTo $Ruangan
 *
 * @method \App\Model\Entity\Aksesorisruangan newEmptyEntity()
 * @method \App\Model\Entity\Aksesorisruangan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aksesorisruangan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aksesorisruangan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aksesorisruangan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aksesorisruangan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aksesorisruangan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AksesorisruanganTable extends Table
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

        $this->setTable('aksesorisruangan');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ruangan', [
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
            ->integer('ruangan_id')
            ->allowEmptyString('ruangan_id');

        $validator
            ->scalar('nama_aksesoris')
            ->maxLength('nama_aksesoris', 255)
            ->allowEmptyString('nama_aksesoris');

        $validator
            ->integer('jumlah')
            ->allowEmptyString('jumlah');

        $validator
            ->scalar('kondisi')
            ->maxLength('kondisi', 50)
            ->allowEmptyString('kondisi');

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
        $rules->add($rules->existsIn('ruangan_id', 'Ruangan'), ['errorField' => 'ruangan_id']);

        return $rules;
    }
}
