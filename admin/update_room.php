<?php
	include('../conn.php');
	if(isset($_POST['edit'])){
		
		$id=$_POST['id'];
		$name=$_POST['name'];
		$pass=$_POST['pass'];
        $aula=$_POST['aula'];
		
		mysqli_query($conn,"update chatroom set chat_name='$name', chat_password='$pass' , aula='$aula' where chatroomid='$id'");
		
	}

?>