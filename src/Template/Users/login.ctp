<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
		<legend>アカウント名とパスワードを入力して下さい。</legend>
		<?= $this->Form->input('user_name') ?>
		<?= $this->Form->input('password') ?>
		  <pre><?php var_dump($allusers); ?></pre>
		<?= $this->Form->select('categories',$categories,["empty" => "choose one"]); ?>

		<?= $allusers[1][6] ?>

		<? foreach($allusers as $key1=>$value1){ ?>
			<? foreach($value1 as $key2=>$value2){ ?>
					<?= $key1; ?>
		  <? } ?>
		<? }?>

	</fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
