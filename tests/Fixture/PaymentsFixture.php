<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
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
                'payment_type' => 'Lorem ipsum dolor sit amet',
                'provider' => 'Lorem ipsum dolor sit amet',
                'account_no' => 1,
                'security_no' => 1,
                'expiry_date' => 1,
                'created_at' => 1660108385,
                'modified_at' => 1660108385,
            ],
        ];
        parent::init();
    }
}
