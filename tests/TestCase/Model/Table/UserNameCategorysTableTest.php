<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserNameCategorysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserNameCategorysTable Test Case
 */
class UserNameCategorysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserNameCategorysTable
     */
    public $UserNameCategorys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserNameCategorys',
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
        $config = TableRegistry::getTableLocator()->exists('UserNameCategorys') ? [] : ['className' => UserNameCategorysTable::class];
        $this->UserNameCategorys = TableRegistry::getTableLocator()->get('UserNameCategorys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserNameCategorys);

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
