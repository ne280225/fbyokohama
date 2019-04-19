<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ParticipationPlan Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $participation_start_time
 * @property \Cake\I18n\FrozenTime $participation_end_time
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Event $event
 */
class ParticipationPlan extends Entity
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
        'user_id' => true,
        'event_id' => true,
        'status' => true,
        'participation_start_time' => true,
        'participation_end_time' => true,
        'user' => true,
        'event' => true
    ];
}
