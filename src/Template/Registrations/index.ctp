<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
*/

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/test.js"></script>

<div class="events index large-9 medium-8 columns content">
  <h3><?= __('Registrations') ?></h3>

  <pre><?php var_dump($participationPlan); ?></pre>
  <table cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('event_name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('event_place') ?></th>
        <th scope="col"><?= $this->Paginator->sort('event_start_time') ?></th>
        <th scope="col"><?= $this->Paginator->sort('event_end_time') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
        <th>status</th>
        <th>参加ボタン</th>
        <th>不参加ボタン</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      ///一覧のループ
      <?php foreach ($events as $event): ?>
        <tr>
          <td><?= h($event->event_name) ?></td>
          <td><?= h($event->event_place) ?></td>
          <td><?= h($event->event_start_time) ?></td>
          <td><?= h($event->event_end_time) ?></td>
          <td class="actions">
            <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
          </td>

          //Actionsstatus 参加登録済みor不参加登録済み
          <td><?php if ($myparticipationPlans[$this->Number->format($event->id)]["status"] == 1){
            //var_dump($myparticipationPlans[$this->Number->format($event->id)]["status"]);
            echo "参加登録済み";
          }elseif($myparticipationPlans[$this->Number->format($event->id)]["status"] == 2){
            echo "不参加登録済み";
          }else{
            echo "未登録";
          }
          ?>
        </td>

        <td>参加→不参加

          <?= $this->Form->create(null,['url' => ['controller' => 'ParticipationPlans','action' => 'jointoescape', '6'], 'type' => 'post']); ?>

          <?= $this->Form->hidden('event_id',['value'=>'6']); ?>
          <?= $this->Form->hidden('user_id',['value'=>'6']); ?>
          <?= $this->Form->hidden('status',['value'=>'2']); ?>


          <?= $this->Form->hidden('participation_start_time',['value'=>'2019-06-14 09:44:00']); ?>
          <?= $this->Form->hidden('participation_end_time',['value'=>'2019-06-14 09:44:00']); ?>

          <?= $this->Form->button(__('参加→不参加')); ?>
          <?= $this->Form->end(); ?>
        </td>

        <td>未参加→参加

          <//?= var_dump($event->id)?>
          <//?= var_dump($login_user)?>

          <?= $this->Form->create(null,['url' => ['controller' => 'ParticipationPlans','action' => 'join'], 'type' => 'post']); ?>

          <?= $this->Form->hidden('event_id',['value'=>'6']); ?>
          <?= $this->Form->hidden('user_id',['value'=>'6']); ?>
          <?= $this->Form->hidden('status',['value'=>'1']); ?>


          <?= $this->Form->hidden('participation_start_time',['value'=>'2019-06-14 09:44:00']); ?>
          <?= $this->Form->hidden('participation_end_time',['value'=>'2019-06-14 09:44:00']); ?>

          <?= $this->Form->button(__('未参加→参加')); ?>
          <?= $this->Form->end(); ?>
        </td>
        <td class="join">
          <//?= $this->Form->postLink(__('参加'), ['action' => 'join', $event->id], ['data' => $event->id], ['confirm' => __('[{0}]に参加しますか?', $event->id)]) ?>
        </td>
        <td class="escape">
          <//?= $this->Form->postLink(__('不参加'), ['action' => 'change', $event->id], ['data' => 'escape'], ['confirm' => __('[{0}]には参加しません。よろしいですか?', $event->id)]) ?>
        </td>
        <td><button id=<?= $event->id ?> class="join" value=<?=$event->event_name ?>>参加ボタン</button></td>
        <td><button id=<?= $event->id ?> class="escape" value=<?=$event->event_name ?>>不参加ボタン</button></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>






<div id="tag">
</div>
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
    <li><?= $this->Html->link(__('New Event'),  ['controller' => 'ParticipationPlans', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Participation Plans'), ['controller' => 'ParticipationPlans', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Participation Plan'), ['controller' => 'ParticipationPlans', 'action' => 'add']) ?></li>
  </ul>
</nav>
