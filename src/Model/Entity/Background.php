<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Background Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $disease_1
 * @property string $disease_2
 * @property string $disease_3
 * @property string $disease_4
 * @property string $disease_5
 * @property string $disease_6
 * @property string $disease_7
 * @property string $disease_8
 * @property string $disease_9
 * @property string $disease_10
 * @property string $family_disease_1
 * @property string $family_disease_2
 * @property string $family_disease_3
 * @property string $family_disease_4
 *
 * @property \App\Model\Entity\User $user
 */
class Background extends Entity
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
