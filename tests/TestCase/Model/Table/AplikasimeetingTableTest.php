<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AplikasimeetingTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AplikasimeetingTable Test Case
 */
class AplikasimeetingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AplikasimeetingTable
     */
    protected $Aplikasimeeting;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aplikasimeeting',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aplikasimeeting') ? [] : ['className' => AplikasimeetingTable::class];
        $this->Aplikasimeeting = $this->getTableLocator()->get('Aplikasimeeting', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aplikasimeeting);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AplikasimeetingTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
