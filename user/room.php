		<div class="col-lg-8">
            <div class="panel panel-default" style="height:50px;">
				<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span  id="user_details"><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($cmem); ?></span></span> <?php echo $chatrow['chat_name']; ?></strong></span>
				<div class="showme hidden" style="position: absolute; left:-120px; top:20px;">
					<div class="well">
						<strong>Membro/s:</strong>
						<div style="height: 10px;"></div>
					<?php
						$rm=mysqli_query($conn,"select * from chat_member left join `user` on user.userid=chat_member.userid where chatroomid='$id'");
						while($rmrow=mysqli_fetch_array($rm)){
							?>
							<span>
							<?php
								$creq=mysqli_query($conn,"select * from chatroom where chatroomid='$id'");
								$crerow=mysqli_fetch_array($creq);
								
								if ($crerow['userid']==$rmrow['userid']){
									?>
										<span class="glyphicon glyphicon-user"></span>
									<?php
								}
								
							?>
							<?php echo $rmrow['uname']; ?></span><br>
							<?php
						}
						
					?>
						
					</div>
				</div>
				<div class="pull-right" style="margin-right:10px; margin-top:7px;">
					<?php
						if ($chatrow['userid']==$_SESSION['id']){
							?>
							<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobby</a>
							<a href="#delete_room" data-toggle="modal" class="btn btn-danger">Deletar Sala</a>
							<a href="#add_member" data-toggle="modal" class="btn btn-primary">Adicionar Membro</a>
							<?php
						}
						else{
							?>

<?php                       
  if (isset($_POST['atualziar'])){
      echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>"; 
  }                          
?>                            
							<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
							<?php
						}
					?>
				</div>
			</div>
			<div>
                <form method="post">
                    Se a aula terminar, clique no botão Atualizar. <button class="btn btn-warning" type="submit" name="atualizar">Atualizar Aula</button>
                </form>
                <?php $aula = $chatrow['aula'];?>
                <center><iframe class="pb-video-frame" width="100%" height="340" src="https://www.youtube.com/embed/<?php echo $aula;?>?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe></center>
				<div class="panel panel-default" style="height: 400px;">
					<div style="height:10px;"></div>
					<span style="margin-left:10px;">Bem vindo a sala</span><br>
					<span style="font-size:10px; margin-left:10px;"><i>OBS: Evite usar linguagem desapropriada ou você será silenciado</i></span>
					<div style="height:10px;"></div>
					<div id="chat_area" style="margin-left:10px; max-height:320px; overflow-y:scroll;">
					</div>
				</div>
				
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Digitar mensagem..." id="chat_msg">
					<span class="input-group-btn">
					<button class="btn btn-success" type="submit" id="send_msg" value="<?php echo $id; ?>">
					<span class="glyphicon glyphicon-comment"></span> Enviar
					</button>
<script>
	function displayChat(){
		id = <?php echo $id; ?>;
		$.ajax({
			url: 'fetch_chat.php',
			type: 'POST',
			async: false,
			data:{
				id: id,
				fetch: 1,
			},
			success: function(response){
				$('#chat_area').html(response);
				$("#chat_area").scrollTop($("#chat_area")[0].scrollHeight);
			}
		});
	}

    setInterval("displayChat()", 10000)

</script>                        
					</span>
				</div>
				
			</div>			
		</div>