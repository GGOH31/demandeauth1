<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrancheAgesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrancheAgesTable Test Case
 */
class TrancheAgesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrancheAgesTable
     */
    public $TrancheAges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TrancheAges',
        'app.Suspects',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TrancheAges') ? [] : ['className' => TrancheAgesTable::class];
        $this->TrancheAges = TableRegistry::getTableLocator()->get('TrancheAges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrancheAges);

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
