<div class="users form">
	<?= $posted ?>
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<fieldset>
		<legend>アカウント名とパスワードを入力して下さい。</legend>
		<!-- <//?= $this->Form->input('user_name',['value'=>'']) ?> -->
<!-- <//?= $this->Form->hidden('event_id',['value'=>$event->id]); ?> -->
		<?= $this->Form->input('password') ?>

		<!-- ユーザーネームカテゴリーのドロップダウン -->
		<select class="select-categories">
			<option value=''>選択してください</option>
			<?php foreach ($categories as $category_id => $category): ?>

				<option value='<?= $category_id ?>'><?= $category ?></option>
				<? console.log($category_id) ?>

			<?php endforeach; ?>
		</select>

		<!-- ユーザーネームのドロップダウン -->
		<!-- <select class="select-user"> -->
		<select id="user_name">

			<option value=''>名前のカテゴリーを選択してください</option>

			<?php foreach ($json_allusers as $key => $value): ?>

				<option value='<?= $key ?>'><?= $category_key ?></option>

			<?php endforeach; ?>

		</select>

		<?php $json_allusers = json_encode($allusers) ?>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script type="text/javascript">


		var arr = <?php echo($json_allusers); ?>;

			$(function($) {
			$('.select-categories').change(function() {

				$('#user_name').children().remove();


				var category_id = $(this).val();
				console.log(category_id);

				var count = 0;
				var arr = <?php echo($json_allusers); ?>;
				Object.keys(arr).forEach(function(key) {
					if(key == category_id){
						Object.keys(arr[key]).forEach(function(k) {
							console.log(arr[key][k]);
							if(count == 0){
									$('#user_name').append($('<option>').html('選択してください').val(''));
							}
							$('#user_name').append($('<option>').html(arr[key][k]).val(arr[key][k]));
							count++;
						});
					}
				});
if(count == 0){
					$('#user_name').append($('<option>').html('名前のカテゴリーを選択してください').val(''));
			}

 			});
		});

//これは使う
// 		$(function($) {
// 			console.log("ok1");
// 			$('#user_name').change(function() {
// console.log("ok2");
// 				$('#user-name').val($('#user-name').val());
// 				//console.log(category_id);
// 			});
// 		});



		// var arr = <//?php echo($json_allusers); ?>;
		// console.log(arr);
		// // Object.keys(arr).forEach(function(key) {
		// Object.keys(arr).forEach(function(key) {
		// 	if(key == '1'){
		// 		Object.keys(arr[key]).forEach(function(k) {
		// 			console.log(arr[key][k]);
		// 		});
		// 	}
		// });

	</script>

</fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
