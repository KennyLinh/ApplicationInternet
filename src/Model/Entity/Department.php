<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Department Entity
 *
 * @property int $id
 * @property string $code
 * @property string $name
 *
 * @property \App\Model\Entity\Selection $selection
 * @property \App\Model\Entity\Subsubject $subsubject
 * @property \App\Model\Entity\Order[] $orders
 */
class Department extends Entity
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
        'id' => true,
        'code' => true,
        'name' => true,
        'selection' => true,
        'subsubject' => true,
        'orders' => true,
    ];
}
