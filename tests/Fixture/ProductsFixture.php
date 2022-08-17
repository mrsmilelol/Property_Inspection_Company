<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'price' => 1,
                'material' => 'Lorem ipsum dolor sit amet',
                'brand' => 'Lorem ipsum dolor sit amet',
                'style' => 'Lorem ipsum dolor sit amet',
                'colour' => 'Lorem ipsum dolor sit amet',
                'units_in_stock' => 1,
                'size' => 'Lorem ipsum dolor sit amet',
                'weight' => 1,
                'finish' => 'Lorem ipsum dolor sit amet',
                'wholesale_price' => 1,
                'sale_price' => 1,
                'manufacturing' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1660627764,
                'modified_at' => 1660627764,
            ],
        ];
        parent::init();
    }
}
