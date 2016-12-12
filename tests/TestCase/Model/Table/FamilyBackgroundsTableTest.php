<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamilyBackgroundsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamilyBackgroundsTable Test Case
 */
class FamilyBackgroundsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FamilyBackgroundsTable
     */
    public $FamilyBackgrounds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.family_backgrounds',
        'app.users',
        'app.appointments',
        'app.hours',
        'app.anthropometrics_data'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FamilyBackgrounds') ? [] : ['className' => 'App\Model\Table\FamilyBackgroundsTable'];
        $this->FamilyBackgrounds = TableRegistry::get('FamilyBackgrounds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FamilyBackgrounds);

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
