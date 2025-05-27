<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payslip $payslip
 */

use App\Controller\PayrollsController;

$salary_per_day = PayrollsController::getSalaryPerDay($payslip->user_id);
$salary_per_month = $payslip->nber_days * $salary_per_day;
$hour_sup = ($payslip->hour_sup * ($salary_per_day / 8));

$cnss_qpo = round(($payslip->salary*5) / 100, 2);
$ipr = round((($payslip->salary - $cnss_qpo) * 15) / 100, 2);
$house = round(($payslip->salary * 30) / 100, 2);
$sick = round(($payslip->salary * 30) / 100, 2);
$retenus = $cnss_qpo + $ipr;
$indemnities = $house + $sick;
$net_salary = $payslip->salary + $indemnities - $retenus;
?>

<div class="row" style="font-family:MingLiu">
    <div class="" style="padding-top: 2%; padding-bottom: 2%;">
        <table class="table table-borderless table-sm">
            <tr>
                <td style="width: 20%;">
                    <div class="text-center">
                        <?= $this->Html->image('ISL.png', ['style' => 'width:50%']) ?>
                    </div>
                </td>
                <td colspan="3" style="width: 60%;">
                    <div class="text-center">
                        <h1>BULLETIN DE PAIE</h1>
                    </div>
                </td>
                <td style="width: 20%;"></td>
            </tr>
            <tr>
                <td class="text-center">Adresse : N° 110, Route Karavia, C/ Annexe</td>
                <td></td>
                <td></td>
                <td colspan="2" style="padding-bottom: 5%;">
                    <strong>No. CNSS :</strong> XXXX <br>
                    <strong>MOIS :</strong> XXXXX <br>
                    <strong>ANNEE :</strong> 2025
                </td>
            </tr>
            <tr>
                <td style="width: 20%;"></td>
                <td style="width: 20%;">Noms :</td>
                <td style="width: 20%;"><?= $payslip->user->secondname . ' ' . $payslip->user->lastname ?></td>
                <td style="width: 20%;">Emploi : </td>
                <td style="width: 20%;">XXXXXXXXX</td>
            </tr>
            <tr>
                <td></td>
                <td>Prenom :</td>
                <td><?= $payslip->user->firstname ?></td>
                <td>Classe : </td>
                <td>XXXXXXXXX</td>
            </tr>
            <tr>
                <td></td>
                <td>No. CNSS :</td>
                <td><?= $payslip->user->cnss ?></td>
                <td>Base Jours/Mois : </td>
                <td>XXXXXXXXX</td>
            </tr>
            <tr>
                <td></td>
                <td>Sit. Fam :</td>
                <td>XXXXXXXXX</td>
                <td>Taux (2) : </td>
                <td>XXXXXXXXX</td>
            </tr>
            <tr>
                <td style="padding-bottom: 5%;"></td>
                <td>Contrat :</td>
                <td>XXXXXXXXX</td>
                <td>Date d'entree : </td>
                <td><?= $payslip->user->affectation_date ?></td>
            </tr>

        </table>

        <table class="table table-bordered table-sm">
            <tr>
                <td style="width: 60%;"><strong>Libellés</strong></td>
                <td style="width: 10%;"><strong>Nbre ou Base</strong></td>
                <td style="width: 10%;"><strong>Gains</strong></td>
                <td style="width: 10%;"><strong>Retenues</strong></td>
                <td style="width: 10%;"><strong>Totaux</strong></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="5">
                    <strong>Remunérations</strong>
                </td>
            </tr>
            <tr>
                <td>Remunération jours travaillés (1)</td>
                <td><?= $payslip->nber_days === null ? '' : $this->Number->format($payslip->nber_days) ?></td>
                <td><?= $salary_per_month === null ? '' : $this->Number->format($salary_per_month) ?></td>
                <td>0</td>
                <td><?= $salary_per_month === null ? '' : $this->Number->format($salary_per_month) ?></td>
            </tr>
            <tr>
                <td>Heures Supplémentaires (2)</td>
                <td><?= $payslip->hour_sup === null ? '' : $this->Number->format($payslip->hour_sup) ?> heure(s)</td>
                <td><?= $hour_sup === null ? '' : $this->Number->format($hour_sup) ?></td>
                <td>0</td>
                <td><?= $hour_sup === null ? '' : $this->Number->format($hour_sup) ?></td>
            </tr>
            <tr>
                <td>Primes (3)</td>
                <td>-</td>
                <td><?= $payslip->primes === null ? '' : $this->Number->format($payslip->primes) ?></td>
                <td>0</td>
                <td><?= $payslip->primes === null ? '' : $this->Number->format($payslip->primes) ?></td>
            </tr>
            <tr>
                <td>Remunération brute (4)</td>
                <td>-</td>
                <td>-</td>
                <td>0</td>
                <td>
                    <strong><?= $payslip->salary === null ? '' : $this->Number->format($payslip->salary) ?></strong>
                </td>
            </tr>
            <tr class="table-secondary">
                <td colspan="5">
                    <strong>Cotisations & Impôts</strong>
                </td>
            </tr>
            <tr>
                <td>CNSS QPO (5)</td>
                <td></td>
                <td></td>
                <td><?= $cnss_qpo ?></td>
                <td></td>
            </tr>
            <tr>
                <td>IPR (5)</td>
                <td></td>
                <td></td>
                <td><?= $ipr ?></td>
                <td></td>
            </tr>
            <tr class="table-secondary">
                <td colspan="5">
                    <strong>Indemnités</strong>
                </td>
            </tr>
            <tr>
                <td>Indemnité de Logement (7)</td>
                <td>-</td>
                <td><?= $house ?></td>
                <td>0</td>
                <td><?= $house ?></td>
            </tr>
            <tr>
                <td>Indemnité de transport (8)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Indemnité maladie (9)</td>
                <td>-</td>
                <td><?= $sick ?></td>
                <td>0</td>
                <td><?= $sick ?></td>
            </tr>
            <tr>
                <td colspan="4">
                    <strong>Total Indemnités</strong>
                </td>
                <td><?= $indemnities ?></td>
            </tr>
            <tr>
                <td colspan="4">
                    <strong>Total Retenues</strong>
                </td>
                <td><?= $retenus ?></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 5%;"></td>
                <td colspan="2">NET A PAYER :</td>
                <td>
                    <strong><?= $net_salary ?></strong>
                </td>
            </tr>
        </table>

        <table class="table table-bordered">
            <tr>
                <td style="width: 30%;" colspan="2" rowspan="3" class="text-center">Signature de l'Employé (e) </td>
                <td style="width: 30%;" colspan="2" rowspan="3" class="text-center">Représentant de ISL</td>
                <td style="width: 15%;">Mode de Paiement :</td>
                <td style="width: 25%;"></td>
            </tr>
            <tr>
                <td>Banque :</td>
                <td><?= h($payslip->bank) ?></td>
            </tr>
            <tr>
                <td>Compte No. :</td>
                <td><?= h($payslip->bank_account) ?></td>
            </tr>


        </table>
    </div>
</div>


