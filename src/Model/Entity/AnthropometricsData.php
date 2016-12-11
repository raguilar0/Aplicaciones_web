<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AnthropometricsData Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\Time $date
 * @property float $height
 * @property float $weight
 * @property float $waist_circumference
 * @property float $hip_circumference
 * @property float $em
 * @property float $total_fat
 * @property float $visceral_fat
 * @property float $imc
 * @property float $muscle
 * @property int $skindfolds
 * @property float $triceps
 * @property float $subscapular
 * @property float $abdominal
 * @property float $sp
 * @property string $blood_pressure
 * @property int $pulse
 * @property float $weight_goal
 * @property float $fat_goal
 *
 * @property \App\Model\Entity\User $user
 */
class AnthropometricsData extends Entity
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
