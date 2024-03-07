<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MobilFixture
 */
class MobilFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mobil';
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
                'nopol' => 'Lorem ipsum dolor ',
                'merk_nama' => 'Lorem ipsum dolor sit amet',
                'departmen' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'tahun_produksi' => 'Lorem ipsum dolor sit amet',
                'warna' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
