<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParticipationPlan[]|\Cake\Collection\CollectionInterface $participationPlans
 */
?>
<div class="registrations index large-9 medium-8 columns content">
    <h3><?= __('参加申し込み画面　(registrations#index)') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participation_start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participation_end_time') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participationPlans as $participationPlan): ?>
            <tr>
                <td><?= $this->Number->format($participationPlan->id) ?></td>
                <td><?= $participationPlan->has('event') ? $this->Html->link($participationPlan->event->event_name, ['controller' => 'Events', 'action' => 'view', $participationPlan->event->id]) : '' ?></td>
                <td><?= $this->Number->format($participationPlan->status) ?></td>
                <td><?= h($participationPlan->participation_start_time) ?></td>
                <td><?= h($participationPlan->participation_end_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $participationPlan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participationPlan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $participationPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participationPlan->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Participation Plan'), ['controller' => 'ParticipationPlans','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participation Plan'), ['controller' => 'ParticipationPlans','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
