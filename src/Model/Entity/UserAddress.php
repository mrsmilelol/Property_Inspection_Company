<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserAddress Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $address_line_1
 * @property string|null $address_line_2
 * @property string $city
 * @property string $country
 * @property string $state
 * @property string $postcode
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $modified_at
 *
 * @property \App\Model\Entity\User $user
 */
class UserAddress extends Entity
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
        'user_id' => true,
        'address_line_1' => true,
        'address_line_2' => true,
        'city' => true,
        'country' => true,
        'state' => true,
        'postcode' => true,
        'created_at' => true,
        'modified_at' => true,
        'user' => true,
    ];
}
