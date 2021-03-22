<?php require "../conexao.php"; ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
<div class="col-lg-12">
            <div class="panel panel-default" style="height:50px;">
				<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong>Sala: <?php echo $chatrow['chat_name']; ?></strong></span>
				<div class="pull-right" style="margin-right:10px; margin-top:7px;">
					<a href="#add_member" data-toggle="modal" class="btn btn-primary btn-sm">Adicionar Membros</a>
					<a href="#delete_room" data-toggle="modal" class="btn btn-danger btn-sm">Deletar Sala</a>
					<a href="index.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
				</div>
				<div class="showme hidden" style="position: absolute; left:570px; top:20px;">
					<div class="well">
						<strong>Room Member/s:</strong>
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
			</div>
			<div>
                <?php $aula = $chatrow['aula'];?>
                
                <center><iframe class="pb-video-frame" width="100%" height="340" src="https://www.youtube.com/embed/<?php echo $aula;?>?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe></center> 
				<div class="panel panel-default" style="height: 400px;" id="teste">
					<div style="height:10px;"></div>
					<span style="margin-left:10px;">Bem vindo, </span><br>
					<span style="font-size:10px; margin-left:10px;"><i>Observação: Evite usar palavras desapropriadas, ou você será silenciado.</i></span>
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
				</div><br>
	<table class="table table-striped table-bordered table-hover" id="userList">
        <thead>
            <th colspan="3" style="text-align: center">Alunos online</th>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
				<th>Status</th>
                
			</tr>
		</thead>
		<tbody>
		<?php
            $date = date('d/m/yy');
            $hora = date('h');
            $turno = date('A');
            if (($hora <=12) and ($turno=='AM')){
                
			$query=mysqli_query($connect,"SELECT DISTINCT nome,codigo, data from `acessos` where acesso = 'Aluno' and data like '$date%' and data not like '$date 12%' and data not like '$date 01%' and data not like '$date 02%' and data not like '$date 03%' and data not like '$date 04%' and data not like '$date 05%' and data not like '$date 06%'");
			while($row=mysqli_fetch_array($query)){
                $codes = $row['codigo'];
			?>
			<tr>
				<td><input type="hidden" id="ename<?php echo $row['codigo']; ?>" value="<?php echo $row['nome']; ?>"><?php echo $row['nome']; ?></td>
<?php                
			$query2=mysqli_query($connect,"SELECT serie from `estudantes` where code = '$codes'");
			while($row2=mysqli_fetch_array($query2)){
			?>    
                <td>
                <?php echo $row2['serie'];?>
                </td>
                <td><input type="hidden" id="ename<?php echo $row['data']; ?>" value="<?php echo "Online desde ".$row['data']; ?>"><?php 
                $rest = substr($row['data'], -8);
                echo "Online em/desde ".$rest ; ?></td>
			</tr>
			<?php
			}}}
		?>
        </tbody>
    </table> 				
			</div>			
		</div>
