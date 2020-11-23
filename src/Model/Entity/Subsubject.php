<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subsubject Entity
 *
 * @property int $id
 * @property int $department_id
 * @property int $selection_id
 * @property string $code
 * @property string $name
 *
 * @property \App\Model\Entity\Selection $selection
 */
class Subsubject extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [

        'department_id' => true,
        'selection_id' => true,
        'code' => true,
        'name' => true,
        'selection' => true,
    ];
}
