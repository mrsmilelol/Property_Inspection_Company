<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CancelledOrdersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CancelledOrdersTable Test Case
 */
class CancelledOrdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CancelledOrdersTable
     */
    protected $CancelledOrders;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CancelledOrders',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CancelledOrders') ? [] : ['className' => CancelledOrdersTable::class];
        $this->CancelledOrders = $this->getTableLocator()->get('CancelledOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CancelledOrders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CancelledOrdersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CancelledOrdersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
