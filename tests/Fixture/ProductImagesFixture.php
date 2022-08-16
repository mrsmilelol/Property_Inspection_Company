<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductImagesFixture
 */
class ProductImagesFixture extends TestFixture
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
                'product_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1660625868,
                'modified_at' => 1660625868,
            ],
        ];
        parent::init();
    }
}
