<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuspectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuspectsTable Test Case
 */
class SuspectsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuspectsTable
     */
    public $Suspects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Suspects',
        'app.TrancheAges',
        'app.LigneSuspectsAntecedents',
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
        $config = TableRegistry::getTableLocator()->exists('Suspects') ? [] : ['className' => SuspectsTable::class];
        $this->Suspects = TableRegistry::getTableLocator()->get('Suspects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Suspects);

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
