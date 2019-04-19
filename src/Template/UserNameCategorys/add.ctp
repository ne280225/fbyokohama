<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserNameCategory $userNameCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Name Categorys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userNameCategorys form large-9 medium-8 columns content">
    <?= $this->Form->create($userNameCategory) ?>
    <fieldset>
        <legend><?= __('Add User Name Category') ?></legend>
        <?php
            echo $this->Form->control('user_name_category_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
