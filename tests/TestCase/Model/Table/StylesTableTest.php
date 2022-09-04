<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StylesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StylesTable Test Case
 */
class StylesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StylesTable
     */
    protected $Styles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Styles',
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
        $config = $this->getTableLocator()->exists('Styles') ? [] : ['className' => StylesTable::class];
        $this->Styles = $this->getTableLocator()->get('Styles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Styles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StylesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
