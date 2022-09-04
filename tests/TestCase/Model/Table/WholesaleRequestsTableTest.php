<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WholesaleRequestsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WholesaleRequestsTable Test Case
 */
class WholesaleRequestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WholesaleRequestsTable
     */
    protected $WholesaleRequests;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.WholesaleRequests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('WholesaleRequests') ? [] : ['className' => WholesaleRequestsTable::class];
        $this->WholesaleRequests = $this->getTableLocator()->get('WholesaleRequests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->WholesaleRequests);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WholesaleRequestsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
