<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LigneSuspectsSymptomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LigneSuspectsSymptomesTable Test Case
 */
class LigneSuspectsSymptomesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LigneSuspectsSymptomesTable
     */
    public $LigneSuspectsSymptomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LigneSuspectsSymptomes',
        'app.Suspects',
        'app.Symptomes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LigneSuspectsSymptomes') ? [] : ['className' => LigneSuspectsSymptomesTable::class];
        $this->LigneSuspectsSymptomes = TableRegistry::getTableLocator()->get('LigneSuspectsSymptomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LigneSuspectsSymptomes);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
