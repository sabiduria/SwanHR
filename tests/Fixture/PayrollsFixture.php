<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PayrollsFixture
 */
class PayrollsFixture extends TestFixture
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
                'payroll_period' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2025-05-21',
                'end_date' => '2025-05-21',
                'actived' => 1,
                'created' => '2025-05-21 11:06:06',
                'modified' => '2025-05-21 11:06:06',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
