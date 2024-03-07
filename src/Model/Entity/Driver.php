<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Driver Entity
 *
 * @property int $id
 * @property string|null $nama
 * @property int|null $umur
 * @property string|null $jenis_kelamin
 * @property string|null $alamat
 */
class Driver extends Entity
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
        'nama' => true,
        'umur' => true,
        'jenis_kelamin' => true,
        'alamat' => true,
    ];
}
