<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemandeAutorisationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemandeAutorisationsTable Test Case
 */
class DemandeAutorisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DemandeAutorisationsTable
     */
    public $DemandeAutorisations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DemandeAutorisations',
        'app.Motifs',
        'app.Demandeurs',
        'app.Utilisateurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DemandeAutorisations') ? [] : ['className' => DemandeAutorisationsTable::class];
        $this->DemandeAutorisations = TableRegistry::getTableLocator()->get('DemandeAutorisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DemandeAutorisations);

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
