<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relationship $relationship
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Relationship'), ['action' => 'edit', $relationship->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Relationship'), ['action' => 'delete', $relationship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relationship->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Relationships'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Relationship'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="relationships view content">
            <h3><?= h($relationship->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($relationship->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($relationship->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($relationship->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($relationship->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($relationship->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($relationship->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $relationship->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Dependents') ?></h4>
                <?php if (!empty($relationship->dependents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Relationship Id') ?></th>
                            <th><?= __('Fistname') ?></th>
                            <th><?= __('Secondname') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($relationship->dependents as $dependent) : ?>
                        <tr>
                            <td><?= h($dependent->id) ?></td>
                            <td><?= h($dependent->user_id) ?></td>
                            <td><?= h($dependent->relationship_id) ?></td>
                            <td><?= h($dependent->fistname) ?></td>
                            <td><?= h($dependent->secondname) ?></td>
                            <td><?= h($dependent->lastname) ?></td>
                            <td><?= h($dependent->gender) ?></td>
                            <td><?= h($dependent->created) ?></td>
                            <td><?= h($dependent->modified) ?></td>
                            <td><?= h($dependent->createdby) ?></td>
                            <td><?= h($dependent->modifiedby) ?></td>
                            <td><?= h($dependent->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dependents', 'action' => 'view', $dependent->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dependents', 'action' => 'edit', $dependent->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dependents', 'action' => 'delete', $dependent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependent->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>