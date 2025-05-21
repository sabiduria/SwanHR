<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PayslipsFixture
 */
class PayslipsFixture extends TestFixture
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
                'payroll_id' => 1,
                'user_id' => 1,
                'hour_sup' => 1,
                'nber_days' => 1,
                'primes' => 1,
                'bank' => 'Lorem ipsum dolor sit amet',
                'banck_account' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-05-21 11:06:01',
                'modified' => '2025-05-21 11:06:01',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
