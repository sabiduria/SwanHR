<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('secondname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('occupation_id') ?></th>
                    <th><?= $this->Paginator->sort('maritalstatus') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone1') ?></th>
                    <th><?= $this->Paginator->sort('phone2') ?></th>
                    <th><?= $this->Paginator->sort('birthplace') ?></th>
                    <th><?= $this->Paginator->sort('birthdate') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('nationality') ?></th>
                    <th><?= $this->Paginator->sort('typeofidentitypiece') ?></th>
                    <th><?= $this->Paginator->sort('identitypiecenumber') ?></th>
                    <th><?= $this->Paginator->sort('address_number') ?></th>
                    <th><?= $this->Paginator->sort('address_avenue') ?></th>
                    <th><?= $this->Paginator->sort('address_district') ?></th>
                    <th><?= $this->Paginator->sort('address_municipality') ?></th>
                    <th><?= $this->Paginator->sort('education_level') ?></th>
                    <th><?= $this->Paginator->sort('education_option') ?></th>
                    <th><?= $this->Paginator->sort('affectation_date') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('createdby') ?></th>
                    <th><?= $this->Paginator->sort('modifiedby') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->firstname) ?></td>
                    <td><?= h($user->secondname) ?></td>
                    <td><?= h($user->lastname) ?></td>
                    <td><?= $user->hasValue('occupation') ? $this->Html->link($user->occupation->name, ['controller' => 'Occupations', 'action' => 'view', $user->occupation->id]) : '' ?></td>
                    <td><?= h($user->maritalstatus) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->phone1) ?></td>
                    <td><?= h($user->phone2) ?></td>
                    <td><?= h($user->birthplace) ?></td>
                    <td><?= h($user->birthdate) ?></td>
                    <td><?= h($user->gender) ?></td>
                    <td><?= h($user->nationality) ?></td>
                    <td><?= h($user->typeofidentitypiece) ?></td>
                    <td><?= h($user->identitypiecenumber) ?></td>
                    <td><?= h($user->address_number) ?></td>
                    <td><?= h($user->address_avenue) ?></td>
                    <td><?= h($user->address_district) ?></td>
                    <td><?= h($user->address_municipality) ?></td>
                    <td><?= h($user->education_level) ?></td>
                    <td><?= h($user->education_option) ?></td>
                    <td><?= h($user->affectation_date) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td><?= h($user->createdby) ?></td>
                    <td><?= h($user->modifiedby) ?></td>
                    <td><?= h($user->deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>