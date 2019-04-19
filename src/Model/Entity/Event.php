<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $event_name
 * @property string $event_place
 * @property \Cake\I18n\FrozenTime $event_start_time
 * @property \Cake\I18n\FrozenTime $event_end_time
 *
 * @property \App\Model\Entity\ParticipationPlan[] $participation_plans
 */
class Event extends Entity
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
        'event_name' => true,
        'event_place' => true,
        'event_start_time' => true,
        'event_end_time' => true,
        'participation_plans' => true
    ];
}
