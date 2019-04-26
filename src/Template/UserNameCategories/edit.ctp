<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserNameCategory $userNameCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userNameCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userNameCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Name Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userNameCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($userNameCategory) ?>
    <fieldset>
        <legend><?= __('Edit User Name Category') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
