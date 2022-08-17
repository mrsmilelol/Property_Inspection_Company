<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int|null $order_id
 * @property string $payment_type
 * @property string $provider
 * @property int $account_no
 * @property int $security_no
 * @property int $expiry_date
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\Order $order
 */
class Payment extends Entity
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
        'order_id' => true,
        'payment_type' => true,
        'provider' => true,
        'account_no' => true,
        'security_no' => true,
        'expiry_date' => true,
        'created_at' => true,
        'modified_at' => true,
        'order' => true,
    ];
}
