<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payslip Entity
 *
 * @property int $id
 * @property int $payroll_id
 * @property int $user_id
 * @property float|null $hour_sup
 * @property float|null $nber_days
 * @property float|null $primes
 * @property string|null $bank
 * @property string|null $banck_account
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $createdby
 * @property string|null $modifiedby
 * @property bool|null $deleted
 *
 * @property \App\Model\Entity\Payroll $payroll
 * @property \App\Model\Entity\User $user
 */
class Payslip extends Entity
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
        'payroll_id' => true,
        'user_id' => true,
        'hour_sup' => true,
        'nber_days' => true,
        'primes' => true,
        'bank' => true,
        'banck_account' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'payroll' => true,
        'user' => true,
    ];
}
