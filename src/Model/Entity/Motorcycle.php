<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Motorcycle Entity
 *
 * @property string $id
 * @property string|null $code_mtr
 * @property string|null $code_ahm
 * @property string|null $name
 * @property string|null $type_mtr
 * @property int|null $active
 * @property int|null $create_by
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modi_by
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Motorcycle extends Entity
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
        'code_mtr' => true,
        'code_ahm' => true,
        'name' => true,
        'type_mtr' => true,
        'active' => true,
        'create_by' => true,
        'created' => true,
        'modi_by' => true,
        'modified' => true,
    ];
}
