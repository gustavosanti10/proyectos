<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MateriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MateriasTable Test Case
 */
class MateriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MateriasTable
     */
    protected $Materias;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Materias',
        'app.Estudiantes',
        'app.Profesors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Materias') ? [] : ['className' => MateriasTable::class];
        $this->Materias = TableRegistry::getTableLocator()->get('Materias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Materias);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
