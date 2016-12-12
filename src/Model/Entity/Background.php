<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Background Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $heart_disease
 * @property string $HTA
 * @property string $diabetes
 * @property string $dyslipidemia
 * @property string $allergy
 * @property string $ulcer
 * @property string $bone_problem
 * @property string $gastritis
 * @property string $colitis
 * @property string $stress
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
