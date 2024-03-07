<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MobilTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MobilTable Test Case
 */
class MobilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MobilTable
     */
    protected $Mobil;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Mobil',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Mobil') ? [] : ['className' => MobilTable::class];
        $this->Mobil = $this->getTableLocator()->get('Mobil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Mobil);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MobilTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
