<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AksesorisruanganFixture
 */
class AksesorisruanganFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aksesorisruangan';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'ruangan_id' => 1,
                'nama_aksesoris' => 'Lorem ipsum dolor sit amet',
                'jumlah' => 1,
                'kondisi' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
