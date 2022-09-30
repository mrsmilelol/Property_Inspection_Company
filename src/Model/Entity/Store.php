<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Store Entity
 *
 * @property int $id
 * @property string|null $address
 * @property string|null $suburb
 * @property string|null $city
 * @property string|null $country
 * @property string|null $state
 * @property string|null $post_code
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 */
class Store extends Entity
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
        'address' => true,
        'suburb' => true,
        'city' => true,
        'country' => true,
        'state' => true,
        'post_code' => true,
        'created_at' => true,
        'modified_at' => true,
    ];
}
