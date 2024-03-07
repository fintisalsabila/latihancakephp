<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mobil Entity
 *
 * @property int $id
 * @property string|null $nopol
 * @property string|null $merk_nama
 * @property string|null $departmen
 * @property string|null $type
 * @property string|null $tahun_produksi
 * @property string|null $warna
 */
class Mobil extends Entity
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
        'nopol' => true,
        'merk_nama' => true,
        'departmen' => true,
        'type' => true,
        'tahun_produksi' => true,
        'warna' => true,
    ];
}
