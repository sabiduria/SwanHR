<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proexperience $proexperience
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proexperience'), ['action' => 'edit', $proexperience->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proexperience'), ['action' => 'delete', $proexperience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proexperience->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proexperiences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proexperience'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="proexperiences view content">
            <h3><?= h($proexperience->id) ?></h3>
            <table>
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