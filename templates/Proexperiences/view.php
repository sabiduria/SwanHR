<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proexperience $proexperience
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="proexperiences view content">
            <h3><?= h($proexperience->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $proexperience->hasValue('user') ? $this->Html->link($proexperience->user->id, ['controller' => 'Users', 'action' => 'view', $proexperience->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution') ?></th>
                    <td><?= h($proexperience->institution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occupation') ?></th>
                    <td><?= h($proexperience->occupation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($proexperience->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($proexperience->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($proexperience->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Startdate') ?></th>
                    <td><?= h($proexperience->startdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endate') ?></th>
                    <td><?= h($proexperience->endate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($proexperience->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($proexperience->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $proexperience->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comments') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($proexperience->comments)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>