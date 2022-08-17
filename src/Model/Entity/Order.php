<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int|null $shopping_session_id
 * @property int $total
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\ShoppingSession $shopping_session
 * @property \App\Model\Entity\OrderItem[] $order_items
 * @property \App\Model\Entity\Payment[] $payments
 */
class Order extends Entity
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
        'shopping_session_id' => true,
        'total' => true,
        'created_at' => true,
        'modified_at' => true,
        'shopping_session' => true,
        'order_items' => true,
        'payments' => true,
    ];
}
