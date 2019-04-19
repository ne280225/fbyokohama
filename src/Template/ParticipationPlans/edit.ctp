<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParticipationPlan $participationPlan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $participationPlan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $participationPlan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Participation Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="participationPlans form large-9 medium-8 columns content">
    <?= $this->Form->create($participationPlan) ?>
    <fieldset>
        <legend><?= __('Edit Participation Plan') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('event_id', ['options' => $events]);
            echo $this->Form->control('status');
            echo $this->Form->control('participation_start_time');
            echo $this->Form->control('participation_end_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
