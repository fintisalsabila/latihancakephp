<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ruangan Entity
 *
 * @property int $id
 * @property string|null $nomor_ruangan
 * @property string|null $luas
 * @property int|null $lantai
 * @property string|null $deskripsi
 *
 * @property \App\Model\Entity\Aksesorisruangan[] $aksesorisruangan
 */
class Ruangan extends Entity
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
        'nomor_ruangan' => true,
        'luas' => true,
        'lantai' => true,
        'deskripsi' => true,
        'aksesorisruangan' => true,
    ];
}
