my_confirm(){
  ret = confirm("予定を変更しますか?");
  if (ret == true){
    exit();
  }
}

// $(function(){
//   $('.change').click(function(){
//     $(this).text("pushd!!!!");
//     alert('['+$(this).val()+']に参加しますか？');
//   });
// });
// $(function(){
//   $('.escape').click(function(){
//     $(this).text("pushd!!!!");
//     alert('['+$(this).val()+']に不参加でよろしいですか？');
//   });
// });
