<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShoppingSessionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShoppingSessionsTable Test Case
 */
class ShoppingSessionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShoppingSessionsTable
     */
    protected $ShoppingSessions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ShoppingSessions',
        'app.Users',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ShoppingSessions') ? [] : ['className' => ShoppingSessionsTable::class];
        $this->ShoppingSessions = $this->getTableLocator()->get('ShoppingSessions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ShoppingSessions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ShoppingSessionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ShoppingSessionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
