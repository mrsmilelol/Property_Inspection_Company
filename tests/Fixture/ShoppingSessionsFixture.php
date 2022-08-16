<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShoppingSessionsFixture
 */
class ShoppingSessionsFixture extends TestFixture
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
                'quantity' => 1,
                'created_at' => 1660625877,
                'modified_at' => 1660625877,
            ],
        ];
        parent::init();
    }
}
