<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SymptomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SymptomesTable Test Case
 */
class SymptomesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SymptomesTable
     */
    public $Symptomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Symptomes',
        'app.LigneSuspectsSymptomes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Symptomes') ? [] : ['className' => SymptomesTable::class];
        $this->Symptomes = TableRegistry::getTableLocator()->get('Symptomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Symptomes);

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
