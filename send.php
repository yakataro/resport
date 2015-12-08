<?php 
//php.iniの編集ができない場合の言語とエンコード指定
mb_language("japanese");
mb_internal_encoding("utf-8");
  
if(!empty($_POST['mail'])){
    $to=$_POST['mail'];
    $name=$_POST['name'];
    $msg=$_POST['msg'];

 

 
  
$success=mb_send_mail($to,"お名前：".$name"　本文：".$msg);
}
?>
  
  
<?php 
if($success){
    echo('送信しました');
}else{
    echo('送信失敗！！');
}
?>
