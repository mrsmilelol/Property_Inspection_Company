<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTypesTable Test Case
 */
class UserTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTypesTable
     */
    protected $UserTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserTypes',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserTypes') ? [] : ['className' => UserTypesTable::class];
        $this->UserTypes = $this->getTableLocator()->get('UserTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
