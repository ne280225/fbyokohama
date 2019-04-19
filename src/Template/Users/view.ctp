<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participation Plans'), ['controller' => 'ParticipationPlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participation Plan'), ['controller' => 'ParticipationPlans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Role') ?></th>
            <td><?= $user->has('user_role') ? $this->Html->link($user->user_role->id, ['controller' => 'UserRoles', 'action' => 'view', $user->user_role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= $this->Number->format($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Name Category Id') ?></th>
            <td><?= $this->Number->format($user->user_name_category_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Participation Plans') ?></h4>
        <?php if (!empty($user->participation_plans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Participation Start Time') ?></th>
                <th scope="col"><?= __('Participation End Time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->participation_plans as $participationPlans): ?>
            <tr>
                <td><?= h($participationPlans->id) ?></td>
                <td><?= h($participationPlans->user_id) ?></td>
                <td><?= h($participationPlans->event_id) ?></td>
                <td><?= h($participationPlans->status) ?></td>
                <td><?= h($participationPlans->participation_start_time) ?></td>
                <td><?= h($participationPlans->participation_end_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ParticipationPlans', 'action' => 'view', $participationPlans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ParticipationPlans', 'action' => 'edit', $participationPlans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ParticipationPlans', 'action' => 'delete', $participationPlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participationPlans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
