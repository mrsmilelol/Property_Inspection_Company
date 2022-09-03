<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WholesaleRequest Entity
 *
 * @property int $id
 * @property string $business_name
 * @property string $abn
 * @property string $address_line_1
 * @property string|null $address_line_2
 * @property string $phone
 * @property string $business_type
 * @property string $payment_method
 * @property string|null $message
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
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
        'business_name' => true,
        'abn' => true,
        'address_line_1' => true,
        'address_line_2' => true,
        'phone' => true,
        'business_type' => true,
        'payment_method' => true,
        'message' => true,
        'status' => true,
        'created_at' => true,
        'modified_at' => true,
    ];
}
