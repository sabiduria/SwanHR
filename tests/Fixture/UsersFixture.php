<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'firstname' => 'Lorem ipsum dolor sit amet',
                'secondname' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'occupation_id' => 1,
                'maritalstatus' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone1' => 'Lorem ipsum d',
                'phone2' => 'Lorem ipsum d',
                'birthplace' => 'Lorem ipsum dolor sit amet',
                'birthdate' => '2025-01-07',
                'gender' => 'Lo',
                'nationality' => 'Lorem ipsum dolor sit amet',
                'typeofidentitypiece' => 'Lorem ipsum dolor sit amet',
                'identitypiecenumber' => 'Lorem ipsum dolor sit amet',
                'address_number' => 'Lorem ipsum dolor sit amet',
                'address_avenue' => 'Lorem ipsum dolor sit amet',
                'address_district' => 'Lorem ipsum dolor sit amet',
                'address_municipality' => 'Lorem ipsum dolor sit amet',
                'education_level' => 'Lorem ipsum dolor sit amet',
                'education_option' => 'Lorem ipsum dolor sit amet',
                'affectation_date' => '2025-01-07',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-07 18:32:16',
                'modified' => '2025-01-07 18:32:16',
                'createdby' => 'Lorem ipsum dolor sit amet',
                'modifiedby' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
            ],
        ];
        parent::init();
    }
}
