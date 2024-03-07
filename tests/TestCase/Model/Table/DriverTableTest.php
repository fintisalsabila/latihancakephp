<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DriverTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DriverTable Test Case
 */
class DriverTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DriverTable
     */
    protected $Driver;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Driver',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Driver') ? [] : ['className' => DriverTable::class];
        $this->Driver = $this->getTableLocator()->get('Driver', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Driver);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DriverTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
