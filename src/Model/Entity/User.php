<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property int|null $user_type_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\UserType $user_type
 * @property \App\Model\Entity\ProductReview[] $product_reviews
 * @property \App\Model\Entity\ShoppingSession[] $shopping_sessions
 * @property \App\Model\Entity\UserAddress[] $user_addresses
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
     * @var array<string, bool>
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'firstname' => true,
        'lastname' => true,
        'phone' => true,
        'email' => true,
        'user_type_id' => true,
        'created_at' => true,
        'modified_at' => true,
        'user_type' => true,
        'product_reviews' => true,
        'shopping_sessions' => true,
        'user_addresses' => true,
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
