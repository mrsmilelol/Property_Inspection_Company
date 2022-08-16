<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
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
                'parent_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1660625828,
                'modified_at' => 1660625828,
            ],
        ];
        parent::init();
    }
}
