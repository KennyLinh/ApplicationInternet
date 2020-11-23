<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubsubjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubsubjectsTable Test Case
 */
class SubsubjectsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubsubjectsTable
     */
    public $Subsubjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Subsubjects',
        'app.Selections',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Subsubjects') ? [] : ['className' => SubsubjectsTable::class];
        $this->Subsubjects = TableRegistry::getTableLocator()->get('Subsubjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subsubjects);

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
