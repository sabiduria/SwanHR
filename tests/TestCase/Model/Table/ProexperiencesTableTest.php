<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProexperiencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProexperiencesTable Test Case
 */
class ProexperiencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProexperiencesTable
     */
    protected $Proexperiences;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Proexperiences',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Proexperiences') ? [] : ['className' => ProexperiencesTable::class];
        $this->Proexperiences = $this->getTableLocator()->get('Proexperiences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Proexperiences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProexperiencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProexperiencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
