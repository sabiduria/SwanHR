<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $secondname
 * @property string|null $lastname
 * @property int $occupation_id
 * @property string|null $maritalstatus
 * @property string|null $email
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $birthplace
 * @property \Cake\I18n\Date|null $birthdate
 * @property string|null $gender
 * @property string|null $nationality
 * @property string|null $typeofidentitypiece
 * @property string|null $identitypiecenumber
 * @property string|null $address_number
 * @property string|null $address_avenue
 * @property string|null $address_district
 * @property string|null $address_municipality
 * @property string|null $education_level
 * @property string|null $education_option
 * @property \Cake\I18n\Date|null $affectation_date
 * @property string|null $username
 * @property string|null $password
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $createdby
 * @property string|null $modifiedby
 * @property bool|null $deleted
 *
 * @property \App\Model\Entity\Occupation $occupation
 * @property \App\Model\Entity\Attendance[] $attendances
 * @property \App\Model\Entity\Dependent[] $dependents
 * @property \App\Model\Entity\Leave[] $leaves
 * @property \App\Model\Entity\Leavesbalance[] $leavesbalances
 * @property \App\Model\Entity\Proexperience[] $proexperiences
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'firstname' => true,
        'secondname' => true,
        'lastname' => true,
        'occupation_id' => true,
        'maritalstatus' => true,
        'email' => true,
        'phone1' => true,
        'phone2' => true,
        'birthplace' => true,
        'birthdate' => true,
        'gender' => true,
        'nationality' => true,
        'typeofidentitypiece' => true,
        'identitypiecenumber' => true,
        'address_number' => true,
        'address_avenue' => true,
        'address_district' => true,
        'address_municipality' => true,
        'education_level' => true,
        'education_option' => true,
        'affectation_date' => true,
        'username' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'occupation' => true,
        'attendances' => true,
        'dependents' => true,
        'leaves' => true,
        'leavesbalances' => true,
        'proexperiences' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
