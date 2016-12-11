<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnthropometricsDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnthropometricsDataTable Test Case
 */
class AnthropometricsDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnthropometricsDataTable
     */
    public $AnthropometricsData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.anthropometrics_data',
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
        $config = TableRegistry::exists('AnthropometricsData') ? [] : ['className' => 'App\Model\Table\AnthropometricsDataTable'];
        $this->AnthropometricsData = TableRegistry::get('AnthropometricsData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AnthropometricsData);

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
