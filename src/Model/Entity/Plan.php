<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plan Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $dairy_product_id
 * @property int $vegetable_id
 * @property int $fruit_id
 * @property int $flour_id
 * @property int $meat_id
 * @property int $fat_id
 * @property int $explanation_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\DairyProduct $dairy_product
 * @property \App\Model\Entity\Vegetable $vegetable
 * @property \App\Model\Entity\Fruit $fruit
 * @property \App\Model\Entity\Flour $flour
 * @property \App\Model\Entity\Meat $meat
 * @property \App\Model\Entity\Fat $fat
 * @property \App\Model\Entity\Explanation $explanation
 */
class Plan extends Entity
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
        '*' => true,
        'id' => false
    ];
}
