<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occupation $occupation
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="occupations view content">
            <h3><?= h($occupation->name) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($occupation->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= h($occupation->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= h($occupation->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($occupation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($occupation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($occupation->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $occupation->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($occupation->users)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Firstname') ?></th>
                            <th><?= __('Secondname') ?></th>
                            <th><?= __('Lastname') ?></th>
                            <th><?= __('Occupation Id') ?></th>
                            <th><?= __('Maritalstatus') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone1') ?></th>
                            <th><?= __('Phone2') ?></th>
                            <th><?= __('Birthplace') ?></th>
                            <th><?= __('Birthdate') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Nationality') ?></th>
                            <th><?= __('Typeofidentitypiece') ?></th>
                            <th><?= __('Identitypiecenumber') ?></th>
                            <th><?= __('Address Number') ?></th>
                            <th><?= __('Address Avenue') ?></th>
                            <th><?= __('Address District') ?></th>
                            <th><?= __('Address Municipality') ?></th>
                            <th><?= __('Education Level') ?></th>
                            <th><?= __('Education Option') ?></th>
                            <th><?= __('Affectation Date') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Modifiedby') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($occupation->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->firstname) ?></td>
                            <td><?= h($user->secondname) ?></td>
                            <td><?= h($user->lastname) ?></td>
                            <td><?= h($user->occupation_id) ?></td>
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
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td><?= h($user->createdby) ?></td>
                            <td><?= h($user->modifiedby) ?></td>
                            <td><?= h($user->deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class' => 'btn btn-success btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete this record ?')]) ?>
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