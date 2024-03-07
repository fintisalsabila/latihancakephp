<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AksesorisruanganTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AksesorisruanganTable Test Case
 */
class AksesorisruanganTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AksesorisruanganTable
     */
    protected $Aksesorisruangan;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aksesorisruangan',
        'app.Ruangan',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aksesorisruangan') ? [] : ['className' => AksesorisruanganTable::class];
        $this->Aksesorisruangan = $this->getTableLocator()->get('Aksesorisruangan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aksesorisruangan);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AksesorisruanganTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AksesorisruanganTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
