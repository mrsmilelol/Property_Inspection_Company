<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductReviewsFixture
 */
class ProductReviewsFixture extends TestFixture
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
                'user_id' => 1,
                'product_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'rating' => 1,
                'created_at' => 1660625873,
                'modified_at' => 1660625873,
            ],
        ];
        parent::init();
    }
}
