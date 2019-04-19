<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $user_name
 * @property int $password
 * @property int $user_role_id
 * @property int $user_name_category_id
 *
 * @property \App\Model\Entity\UserRole $user_role
 * @property \App\Model\Entity\UserNameCategory $user_name_category
 * @property \App\Model\Entity\ParticipationPlan[] $participation_plans
 */
class User extends Entity
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
        'user_name' => true,
        'password' => true,
        'user_role_id' => true,
        'user_name_category_id' => true,
        'user_role' => true,
        'user_name_category' => true,
        'participation_plans' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
