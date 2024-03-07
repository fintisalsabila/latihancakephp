<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RuanganTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RuanganTable Test Case
 */
class RuanganTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RuanganTable
     */
    protected $Ruangan;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ruangan',
        'app.Aksesorisruangan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ruangan') ? [] : ['className' => RuanganTable::class];
        $this->Ruangan = $this->getTableLocator()->get('Ruangan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ruangan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RuanganTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
