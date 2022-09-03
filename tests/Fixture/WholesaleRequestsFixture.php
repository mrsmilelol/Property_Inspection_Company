<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WholesaleRequestsFixture
 */
class WholesaleRequestsFixture extends TestFixture
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
                'business_name' => 1,
                'abn' => 'Lorem ipsum dolor sit amet',
                'address_line_1' => 'Lorem ipsum dolor sit amet',
                'address_line_2' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'business_type' => 'Lorem ipsum dolor sit amet',
                'payment_method' => 'Lorem ipsum dolor sit amet',
                'message' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created_at' => 1662189222,
                'modified_at' => 1662189222,
            ],
        ];
        parent::init();
    }
}
