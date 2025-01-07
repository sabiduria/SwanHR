<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Proexperience> $proexperiences
 */
?>
<div class="mt-3">
    <?= $this->Html->link(__('New Proexperience'), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
    <h3><?= __('Proexperiences') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="datatable-buttons">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('startdate') ?></th>
                    <th><?= $this->Paginator->sort('endate') ?></th>
                    <th><?= $this->Paginator->sort('institution') ?></th>
                    <th><?= $this->Paginator->sort('occupation') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proexperiences as $proexperience): ?>
                <tr>
                    <td><?= $this->Number->format($proexperience->id) ?></td>
                    <td><?= $proexperience->hasValue('user') ? $this->Html->link($proexperience->user->id, ['controller' => 'Users', 'action' => 'view', $proexperience->user->id]) : '' ?></td>
                    <td><?= h($proexperience->startdate) ?></td>
                    <td><?= h($proexperience->endate) ?></td>
                    <td><?= h($proexperience->institution) ?></td>
                    <td><?= h($proexperience->occupation) ?></td>
                    <td><?= h($proexperience->created) ?></td>
                    <td><?= h($proexperience->modified) ?></td>
                    <td><?= h($proexperience->createdby) ?></td>
                    <td><?= h($proexperience->modifiedby) ?></td>
                    <td><?= h($proexperience->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proexperience->id], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proexperience->id], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proexperience->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>