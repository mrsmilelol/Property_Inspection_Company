<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WholesaleRequest Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $business_name
 * @property string|null $website
 * @property string $abn
 * @property string $business_phone
 * @property string $address_line_1
 * @property string|null $address_line_2
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $position
 * @property string|null $message
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\User $user
 */
class WholesaleRequest extends Entity
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
        'business_name' => true,
        'website' => true,
        'abn' => true,
        'business_phone' => true,
        'address_line_1' => true,
        'address_line_2' => true,
        'first_name' => true,
        'last_name' => true,
        'phone' => true,
        'email' => true,
        'position' => true,
        'message' => true,
        'status' => true,
        'created_at' => true,
        'modified_at' => true,
        'user' => true,
    ];
}
