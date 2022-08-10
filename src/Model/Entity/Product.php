<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $inventory_id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property string $material
 * @property string $brand
 * @property string $style
 * @property string $colour
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $modified_at
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\ProductInventory $product_inventory
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
        'category_id' => true,
        'inventory_id' => true,
        'name' => true,
        'description' => true,
        'price' => true,
        'material' => true,
        'brand' => true,
        'style' => true,
        'colour' => true,
        'created_at' => true,
        'modified_at' => true,
        'category' => true,
        'product_inventory' => true,
        'order_items' => true,
        'product_categories' => true,
        'product_images' => true,
        'product_reviews' => true,
        'shopping_sessions' => true,
    ];
}
