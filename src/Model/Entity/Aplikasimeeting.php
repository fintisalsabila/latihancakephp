<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aplikasimeeting Entity
 *
 * @property int $id
 * @property string|null $nama
 * @property \Cake\I18n\FrozenDate|null $tanggal
 * @property \Cake\I18n\Time|null $waktu_mulai
 * @property \Cake\I18n\Time|null $waktu_selesai
 */
class Aplikasimeeting extends Entity
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
        'tanggal' => true,
        'waktu_mulai' => true,
        'waktu_selesai' => true,
    ];
}
