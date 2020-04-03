<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AntecedentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AntecedentsTable Test Case
 */
class AntecedentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AntecedentsTable
     */
    public $Antecedents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Antecedents',
        'app.LigneSuspectsAntecedents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Antecedents') ? [] : ['className' => AntecedentsTable::class];
        $this->Antecedents = TableRegistry::getTableLocator()->get('Antecedents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Antecedents);

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
