<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\User $user
*/
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List User Roles'), ['controller' => 'UserRoles', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New User Role'), ['controller' => 'UserRoles', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Participation Plans'), ['controller' => 'ParticipationPlans', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Participation Plan'), ['controller' => 'ParticipationPlans', 'action' => 'add']) ?></li>
  </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
  <!-- <//?= $this->Form->create($user,['name'=>'myform'],['onsubmit' => 'return send()']) ?> -->
  <?= $this->Form->create($user,['name'=>'myform']) ?>
  <fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php
    echo $this->Form->control('user_name');
    //echo $this->Form->control('password');
    echo $this->Form->control('user_role_id');
    echo $this->Form->control('user_name_category_id');
    ?>
  </fieldset>
  <!-- パスワードのボタン -->
  <div class="button_table">
  <ul>
    <li>
      <button id ="1" class="button" type="button"><img src="../img/mouse.jpg" class="button1_img"></span></button>
      <button id ="2" class="button" type="button"><img src="../img/cow.jpg" class="button2_img"></span></button>
      <button id ="3" class="button" type="button"><img src="../img/tiger.jpg" class="button3_img"></span></button>
    </li>
    <li>
      <button id ="4" class="button" type="button"><img src="../img/rabbit.jpg" class="button4_img"></span></button>
      <button id ="5" class="button" type="button"><img src="../img/dragon.jpg" class="button5_img"></span></button>
      <button id ="6" class="button" type="button"><img src="../img/sheep.jpg" class="button6_img"></span></button>
    </li>
    <li>
      <button id ="7" class="button" type="button"><img src="../img/house.jpg" class="button7_img"></span></button>
      <button id ="8" class="button" type="button"><img src="../img/snake.jpg" class="button8_img"></span></button>
      <button id ="9" class="button" type="button"><img src="../img/monkey.jpg" class="button9_img"></span></button>
    </li>
    <li>
      <button id ="10" class="button" type="button"><img src="../img/bird.jpg" class="button10_img"></span></button>
      <button id ="11" class="button" type="button"><img src="../img/dog.jpg" class="button11_img"></span></button>
      <button id ="12" class="button" type="button"><img src="../img/boar.jpg" class="button12_img"></span></button>
    </li>
  </ul>
</div>
  <?= $this->Form->button('submit',['type' => 'submit','onclick' => 'return send()']); ?>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
//パスワード
var passA = [0,0,0,0,0,0,0,0,0,0,0,0];
var count = 0;

$(function($){
  $('.button').on('click', function (){
    var passB = 0;
    var id = $(this).attr("id");
    // alert(id);

    if(passA[id-1]==0){
      passA[id-1] = 1;
      count += 1;
      $(this).css({
        'border-style' : 'solid',
        'border-width' : '5px',
        'border-color' : 'red'
      });
    }else{
      passA[id-1] = 0;
      count -= 1;
      $(this).css({
        'border-style' : 'solid',
        'border-width' : '5px',
        'border-color' : 'white'
      });
    }

    passB = parseInt(passA.join(''),2);
    //passB = passA.join('');
    alert(passB);
    // alert(e.toString(10));

    $(function() {
      var ele = document.createElement('input');
      ele.setAttribute('type', 'hidden');
      ele.setAttribute('id', 'password');
      ele.setAttribute('name', 'password');
      ele.setAttribute('value', passB);
      // 要素を追加
      document.myform.appendChild(ele);
    });
  });
});

function send() {
  alert(count);

  if(count < 3) {
    alert('3つ以上選択してください');
    return false;
  }
}
</script>
