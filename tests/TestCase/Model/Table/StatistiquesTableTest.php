<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatistiquesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatistiquesTable Test Case
 */
class StatistiquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatistiquesTable
     */
    public $Statistiques;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Statistiques',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Statistiques') ? [] : ['className' => StatistiquesTable::class];
        $this->Statistiques = TableRegistry::getTableLocator()->get('Statistiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Statistiques);

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
