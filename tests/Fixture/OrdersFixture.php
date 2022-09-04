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
                'shopping_session_id' => 1,
                'total' => 1,
                'created_at' => 1662173736,
                'modified_at' => 1662173736,
            ],
        ];
        parent::init();
    }
}
