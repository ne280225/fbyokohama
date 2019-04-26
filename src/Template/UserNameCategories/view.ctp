<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserNameCategory $userNameCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Name Category'), ['action' => 'edit', $userNameCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Name Category'), ['action' => 'delete', $userNameCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userNameCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Name Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Name Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userNameCategories view large-9 medium-8 columns content">
    <h3><?= h($userNameCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($userNameCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userNameCategory->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($userNameCategory->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Name') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('User Role Id') ?></th>
                <th scope="col"><?= __('User Name Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($userNameCategory->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->user_name) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->user_role_id) ?></td>
                <td><?= h($users->user_name_category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
