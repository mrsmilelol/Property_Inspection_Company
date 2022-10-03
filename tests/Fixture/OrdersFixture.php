<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'total' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'created_at' => 1664682456,
                'modified_at' => 1664682456,
            ],
        ];
        parent::init();
    }
}
