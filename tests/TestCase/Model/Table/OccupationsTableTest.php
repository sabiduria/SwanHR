<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OccupationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OccupationsTable Test Case
 */
class OccupationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OccupationsTable
     */
    protected $Occupations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Occupations',
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
        $config = $this->getTableLocator()->exists('Occupations') ? [] : ['className' => OccupationsTable::class];
        $this->Occupations = $this->getTableLocator()->get('Occupations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Occupations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OccupationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
