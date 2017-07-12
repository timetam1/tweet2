# tweet2
<?php
session_start();

if(!empty($_POST)){
	//エラー項目の確認
	if($_POST['name']==''){
		$error['name']='blank';
	}
	if($_POST['email']==''){
		$error['email']='blank';
	}
	if(strlen($_POST['password'])<4){
		$error['password']='blank';
	}
	if($_POST['password']==''){
		$error['password']='blank';
	}
	if(empty($error)){
		$_SESSION['join']=$_POST;
		header('Location:check.php');
		exit();
	}
}
?>
<p>記入してください</p>
<form action = "" method ="post">
<dl>
	<dt>ニックネーム
	</dt>
	<dd>
		<input type = "text" name = "name">
	</dd>

	<dt>メールアドレす
	</dt>
	<dd>
		<input type ="text" name ="email">
	</dd>

	<dt>パスワード
	</dt>
	<dd>
		<input type ="password" name ="password">
	</dd>
</dl>
<input type ="submit" value =" 送信する"/>
	
</form>
