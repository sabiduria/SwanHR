<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PayrollinfosFixture
 */
class PayrollinfosFixture extends TestFixture
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
                'user_id' => 1,
                'salary_per_day' => 1,
                'created' => '2025-05-21 11:31:48',
                'modified' => '2025-05-21 11:31:48',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
