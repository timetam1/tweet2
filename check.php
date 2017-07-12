# tweet2
 <?php
session_start();
require('dbconnect.php');

if(!isset($_SESSION['join'])){
	header('Loation:index.php');
	exit();
 }

 if(!empty($_POST)){
 	//登録処理をする
 	$sql = sprintf('INSERT INTO members SET name= "%s",email= "%s",passowrd= "%s",created = "%s"',
 		mysqli_real_escape_string($db,$_SESSION['join']['name']),
 		mysqli_real_escape_string($db,$_SESSION['join']['email']),
 		mysqli_real_escape_string($db,$_SESSION['join']['password']),
 		date('Y-m-d H:i:s')
 		);
 	mysqli_query($db,$sql) or die(mysqli_error($db));
 	unset($_SESSION['join']);

 	header('Location:thanks.php');
 	exit();
 }
 ?>
<form action = "" method ="post">
	<dl>
		<dt>ニックネーム</dt>
		<dd>
			<?php htmlspecialchars($_SESSION['join']['name'],ENT_QUOTES,'UTF-8');?>
		</dd>

		<dt>メールアドれす</dt>
		<dd>
			<?php htmlspecialchars($_SESSION['join']['email'],ENT_QUOTES,'UTF-8');?>
		</dd>

		<dt>パスワード</dt>
		<dd>
		【表示されません】
		</dd>
	</dl>
	<div><a href = "index.php?action = rewrite">&laquo;&nbsp;書き直す</a>
	<input type ="submit" value  ="送信する"/>
	</div>
</form>
