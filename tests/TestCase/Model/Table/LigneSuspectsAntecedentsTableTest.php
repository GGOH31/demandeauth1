<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LigneSuspectsAntecedentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LigneSuspectsAntecedentsTable Test Case
 */
class LigneSuspectsAntecedentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LigneSuspectsAntecedentsTable
     */
    public $LigneSuspectsAntecedents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LigneSuspectsAntecedents',
        'app.Suspects',
        'app.Antecedents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LigneSuspectsAntecedents') ? [] : ['className' => LigneSuspectsAntecedentsTable::class];
        $this->LigneSuspectsAntecedents = TableRegistry::getTableLocator()->get('LigneSuspectsAntecedents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LigneSuspectsAntecedents);

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
