<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParticipationPlansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParticipationPlansTable Test Case
 */
class ParticipationPlansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParticipationPlansTable
     */
    public $ParticipationPlans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ParticipationPlans',
        'app.Users',
        'app.Events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ParticipationPlans') ? [] : ['className' => ParticipationPlansTable::class];
        $this->ParticipationPlans = TableRegistry::getTableLocator()->get('ParticipationPlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ParticipationPlans);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
