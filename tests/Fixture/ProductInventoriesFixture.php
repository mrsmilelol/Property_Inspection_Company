<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductInventoriesFixture
 */
class ProductInventoriesFixture extends TestFixture
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
                'product_name' => 'Lorem ipsum dolor sit amet',
                'product_quantity' => 1,
                'created_at' => 1660109316,
                'modified_at' => 1660109316,
            ],
        ];
        parent::init();
    }
}
