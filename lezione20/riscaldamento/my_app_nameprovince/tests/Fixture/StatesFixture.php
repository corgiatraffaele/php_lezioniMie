<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatesFixture
 */
class StatesFixture extends TestFixture
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
                'id' => 1,
                'name' => 'Lorem ipsum d',
                'abbreviation' => 'Lorem ip',
                'created' => '2022-04-07 07:15:50',
                'modified' => '2022-04-07 07:15:50',
            ],
        ];
        parent::init();
    }
}
