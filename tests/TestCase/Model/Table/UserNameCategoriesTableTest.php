<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserNameCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserNameCategoriesTable Test Case
 */
class UserNameCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserNameCategoriesTable
     */
    public $UserNameCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserNameCategories',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserNameCategories') ? [] : ['className' => UserNameCategoriesTable::class];
        $this->UserNameCategories = TableRegistry::getTableLocator()->get('UserNameCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserNameCategories);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
