<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PayrollinfosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PayrollinfosTable Test Case
 */
class PayrollinfosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PayrollinfosTable
     */
    protected $Payrollinfos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Payrollinfos',
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
        $config = $this->getTableLocator()->exists('Payrollinfos') ? [] : ['className' => PayrollinfosTable::class];
        $this->Payrollinfos = $this->getTableLocator()->get('Payrollinfos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Payrollinfos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PayrollinfosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PayrollinfosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
