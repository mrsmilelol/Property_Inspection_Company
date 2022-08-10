<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $description
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $modified_at
 *
 * @property \App\Model\Entity\Category $parent_category
 * @property \App\Model\Entity\Category[] $child_categories
 * @property \App\Model\Entity\ProductCategory[] $product_categories
 * @property \App\Model\Entity\Product[] $products
 */
class Category extends Entity
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
        'parent_id' => true,
        'description' => true,
        'created_at' => true,
        'modified_at' => true,
        'parent_category' => true,
        'child_categories' => true,
        'product_categories' => true,
        'products' => true,
    ];
}
