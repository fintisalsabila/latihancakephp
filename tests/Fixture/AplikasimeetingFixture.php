<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AplikasimeetingFixture
 */
class AplikasimeetingFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aplikasimeeting';
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
                'nama' => 'Lorem ipsum dolor sit amet',
                'tanggal' => '2024-03-05',
                'waktu_mulai' => '06:24:32',
                'waktu_selesai' => '06:24:32',
            ],
        ];
        parent::init();
    }
}
