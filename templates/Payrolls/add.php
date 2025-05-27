<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */

function generateMonthYearSelect($label_name, $name = "month_year", $selected = null)
{
    $currentYear = date("Y");
    $html = "<label for='$name'>" . $label_name . "</label>\n";
    $html .= "<select class='form-select' name='$name' id='$name'>\n";

    for ($month = 1; $month <= 12; $month++) {
        //$value = str_pad($month, 2, "0", STR_PAD_LEFT) . "-$currentYear";
        $value = date("F", mktime(0, 0, 0, $month, 1)) . "-$currentYear";
        $label = date("F", mktime(0, 0, 0, $month, 1)) . "-$currentYear";
        $isSelected = ($value === $selected) ? " selected" : "";
        $html .= "<option value=\"$value\"$isSelected>$label</option>\n";
    }

    $html .= "</select>\n";
    return $html;
}

?>
<div class="mt-3">
    <?= $this->Form->create($payroll) ?>
        <div class="row gy-2">
            <div class="col-xl-12">
                <?= generateMonthYearSelect('Payroll Period', 'payroll_period')  ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('start_date', ['empty' => true, 'class' => 'form-control', 'label' => 'Start date']); ?>
            </div>
            <div class="col-xl-6">
                <?= $this->Form->control('end_date', ['empty' => true, 'class' => 'form-control', 'label' => 'End date']); ?>
            </div>
        </div>
        <div class="mt-3 mb-3">
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
        </div>
    <?= $this->Form->end() ?>
</div>
