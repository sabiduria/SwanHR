<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="dependents view content">
            <h3><?= h($dependent->id) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $dependent->hasValue('user') ? $this->Html->link($dependent->user->id, ['controller' => 'Users', 'action' => 'view', $dependent->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Relationship') ?></th>
                    <td><?= $dependent->hasValue('relationship') ? $this->Html->link($dependent->relationship->name, ['controller' => 'Relationships', 'action' => 'view', $dependent->relationship->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fistname') ?></th>
                    <td><?= h($dependent->fistname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Secondname') ?></th>
                    <td><?= h($dependent->secondname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($dependent->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($dependent->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($dependent->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($dependent->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dependent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($dependent->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($dependent->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $dependent->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>