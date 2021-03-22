<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['msg'] = "Usuário não deve ter caracteres especiais!"; 
			header('location: index.php');
		}
		else{
			
		$fusername=$username;
		
		$password = check_input($_POST["password"]);
		$fpassword=$password;
		
		$query=mysqli_query($conn,"select * from `user` where username='$fusername' and password='$fpassword'");
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login não permitido! Favor checar as credenciais de acesso!";
			header('location: index.php');
		}
		else{
			
			$row=mysqli_fetch_array($query);
			if ($row['access']==1){
				$_SESSION['id']=$row['userid'];
                $code = $row['userid'];
                $date = date('d/m/yy h:m:s');
                
                    $nome_User = mysqli_query($conn,"SELECT uname FROM user WHERE userid = '$code'");
                        if (mysqli_num_rows($nome_User)==''){
                        }else{
                            while($resultados = mysqli_fetch_array($nome_User)){
                                $nomeUsuario = $resultados['uname'];
                            }
                        }                
                
                
                $querry = mysqli_query($conn,"insert into online (code, nome, data) values ('$code','$nomeUsuario',$date')");
				?>
				<script>
					window.alert('Login Permitido, bem vindo Adminstrador!');
					window.location.href='admin/';
				</script>
				<?php
                
			}
			else{
				$_SESSION['id']=$row['userid'];
				?>
				<script>
					window.alert('Login Permitido, bem vindo Usuário!');
					window.location.href='user/';
				</script>
				<?php
			}
		}
		
		}
	}
?>