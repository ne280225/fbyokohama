<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParticipationPlan $participationPlan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Participation Plan'), ['action' => 'edit', $participationPlan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Participation Plan'), ['action' => 'delete', $participationPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participationPlan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Participation Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participation Plan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="participationPlans view large-9 medium-8 columns content">
    <h3><?= h($participationPlan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $participationPlan->has('user') ? $this->Html->link($participationPlan->user->id, ['controller' => 'Users', 'action' => 'view', $participationPlan->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $participationPlan->has('event') ? $this->Html->link($participationPlan->event->id, ['controller' => 'Events', 'action' => 'view', $participationPlan->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($participationPlan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($participationPlan->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participation Start Time') ?></th>
            <td><?= h($participationPlan->participation_start_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participation End Time') ?></th>
            <td><?= h($participationPlan->participation_end_time) ?></td>
        </tr>
    </table>
</div>
