<div class="login">
	<p class="header-title"></p>
	<//?= $posted ?>
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create('',['name'=>'myform']) ?>
	<fieldset>
		<legend>アカウント名とパスワードを入力して下さい。</legend>

		<!-- ユーザーネームカテゴリーのドロップダウン -->
		<select class="select-categories">
			<option value=''>選択してください</option>
			<?php foreach ($categories as $category_id => $category): ?>

				<option value='<?= $category_id ?>'><?= $category ?></option>
				//<//? console.log($category_id) ?>

			<?php endforeach; ?>

		</select>


		<!-- ユーザーネームのドロップダウン -->
		<select id = "user_name" name="user_name">

			<option value=''>名前のカテゴリーを選択してください</option>

			<?php foreach ($json_allusers as $key => $value): ?>
				<option value='<?= $key ?>'><?= $category_key ?></option>
			<?php endforeach; ?>

		</select>

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

		<?php $json_allusers = json_encode($allusers) ?>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script type="text/javascript">

		//１つめのドロップダウンが選択されたら、２つめの子要素を変更する。
		var arr = <?php echo($json_allusers); ?>;

		$(function($) {
			$('.select-categories').change(function() {

				$('#user_name').children().remove();


				var category_id = $(this).val();
				//console.log(category_id);

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

		//パスワード
		var passA = [0,0,0,0,0,0,0,0,0,0,0,0];

		$(function($){
			$('.button').on('click', function (){
				var passB = 0;
				var count = 0;
				var id = $(this).attr("id");
				// alert(id);

				if(passA[id-1]==0){
					passA[id-1] = 1;
					$(this).css({
						'border-style' : 'solid',
						'border-width' : '4px',
						'border-color' : 'red'
					});
				}else{
					passA[id-1] = 0;
					$(this).css({
						'border-style' : 'solid',
						'border-width' : '4px',
						'border-color' : '#f5f2e9'
					});
				}

//joinだけ
				 passB = parseInt(passA.join(''),2);
			//	passB = passA.join('');
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

		</script>

	</fieldset>
	<?= $this->Form->button(__('Login')); ?>
	<?= $this->Form->end() ?>
</div>
