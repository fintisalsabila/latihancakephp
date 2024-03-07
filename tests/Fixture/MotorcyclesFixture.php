<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MotorcyclesFixture
 */
class MotorcyclesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '1f460460-4673-4fde-a08e-b21621731cd3',
                'code_mtr' => 'Lorem ipsum d',
                'code_ahm' => 'L',
                'name' => 'Lorem ipsum dolor sit amet',
                'type_mtr' => '',
                'active' => 1,
                'create_by' => 1,
                'created' => '2024-03-05 06:27:36',
                'modi_by' => 1,
                'modified' => '2024-03-05 06:27:36',
            ],
        ];
        parent::init();
    }
}
