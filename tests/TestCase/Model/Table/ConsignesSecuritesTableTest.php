<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsignesSecuritesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsignesSecuritesTable Test Case
 */
class ConsignesSecuritesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsignesSecuritesTable
     */
    public $ConsignesSecurites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ConsignesSecurites',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ConsignesSecurites') ? [] : ['className' => ConsignesSecuritesTable::class];
        $this->ConsignesSecurites = TableRegistry::getTableLocator()->get('ConsignesSecurites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ConsignesSecurites);

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
