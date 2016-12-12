<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BackgroundsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BackgroundsTable Test Case
 */
class BackgroundsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BackgroundsTable
     */
    public $Backgrounds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.backgrounds',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Backgrounds') ? [] : ['className' => 'App\Model\Table\BackgroundsTable'];
        $this->Backgrounds = TableRegistry::get('Backgrounds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Backgrounds);

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
