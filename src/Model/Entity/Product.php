<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property string $material
 * @property string $brand
 * @property string $style
 * @property string $colour
 * @property int $units_in_stock
 * @property string $size
 * @property int $weight
 * @property string|null $finish
 * @property int|null $wholesale_price
 * @property int|null $sale_price
 * @property string|null $manufacturing
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\OrderItem[] $order_items
 * @property \App\Model\Entity\ProductCategory[] $product_categories
 * @property \App\Model\Entity\ProductImage[] $product_images
 * @property \App\Model\Entity\ProductReview[] $product_reviews
 * @property \App\Model\Entity\ShoppingSession[] $shopping_sessions
 */
class Product extends Entity
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
        'name' => true,
        'description' => true,
        'price' => true,
        'material' => true,
        'brand' => true,
        'style' => true,
        'colour' => true,
        'units_in_stock' => true,
        'size' => true,
        'weight' => true,
        'finish' => true,
        'wholesale_price' => true,
        'sale_price' => true,
        'manufacturing' => true,
        'created_at' => true,
        'modified_at' => true,
        'order_items' => true,
        'product_categories' => true,
        'product_images' => true,
        'product_reviews' => true,
        'shopping_sessions' => true,
    ];
}
