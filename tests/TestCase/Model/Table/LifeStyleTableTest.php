<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LifeStyleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LifeStyleTable Test Case
 */
class LifeStyleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LifeStyleTable
     */
    public $LifeStyle;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.life_style'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LifeStyle') ? [] : ['className' => 'App\Model\Table\LifeStyleTable'];
        $this->LifeStyle = TableRegistry::get('LifeStyle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LifeStyle);

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
