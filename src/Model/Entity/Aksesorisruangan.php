<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aksesorisruangan Entity
 *
 * @property int $id
 * @property int|null $ruangan_id
 * @property string|null $nama_aksesoris
 * @property int|null $jumlah
 * @property string|null $kondisi
 *
 * @property \App\Model\Entity\Ruangan $ruangan
 */
class Aksesorisruangan extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ruangan_id' => true,
        'nama_aksesoris' => true,
        'jumlah' => true,
        'kondisi' => true,
        'ruangan' => true,
    ];
}
