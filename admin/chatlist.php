<div class="col-lg-12">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-list"></span> Salas de Aula</strong></span>
		<div class="pull-right" style="margin-right:10px; margin-top:7px;">
			<a href="#add_chatroom" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
		</div>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
        <thead>
            <tr>
                <th>Turma</th>
                <th>Senha</th>
				<th>Data de Criação</th>
                <th>Aula</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
		<?php
            $k=1;
			$query=mysqli_query($conn,"select * from chatroom order by date_created desc");
			while($row=mysqli_fetch_array($query)){
				$num=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."'");
			?>
			<tr>
				<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($num); ?></span> <input type="hidden" id="name<?php echo $row['chatroomid']; ?>" value="<?php echo $row['chat_name']; ?>"><?php echo $row['chat_name']; ?></td>
				<td><input type="hidden" id="pass<?php echo $row['chatroomid']; ?>" value="<?php echo $row['chat_password']; ?>"><?php echo $row['chat_password']; ?></td>
				<td><?php echo date('d/m/Y - h:i A', strtotime($row['date_created'])); ?></td>
                <td><a href="#" data-toggle="modal" data-target="#ExemploModalCentralizado_<?php echo $k;?>"><?php echo $row['aula']; ?></a></td>
				<td><a href="chatroom.php?id=<?php echo $row['chatroomid']; ?>" class="btn btn-info"><span class="glyphicon glyphicon-comment"></span> Entrar</a> || 
					<button class="btn btn-warning edit" value="<?php echo $row['chatroomid']; ?>"><span class="glyphicon glyphicon-pencil"></span> Trocar de Aula</button> || 
					<button class="btn btn-danger delete" value="<?php echo $row['chatroomid']; ?>"><span class="glyphicon glyphicon-trash"></span> Deletar</button>
				</td>
			</tr>
<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado_<?php echo $k;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
        <h5><strong>Esta aula está em execução...</strong></h5>
        <hr>
          <center><iframe class="pb-video-frame" width="78%" height="250" src="https://www.youtube.com/embed/<?php echo $row['aula'];?>?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe></center>         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>             
			<?php $k++;
			}
		?>
        </tbody>
    </table> 
    
		<table width="100%" class="table table-striped table-bordered table-hover" id="myChatRoom">
			<thead>
			<th>Salas</th>
			<th>Aulas Ministradas</th>
			</thead>
			<tbody>
						<tr>
							<td>1º ANO</td>
							<td>
								<?php
                                        echo "<h5>Aulas de Maio</h5>
										<a href='../../eescolar/aluno/aulasvirtuais1.html' target='_blank'>Clique aqui</a><br>
										<h5>Física - 10/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Inglês - 10/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Ensino Religioso - 10/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Sociologia - 10/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
										<h5>Filosofia - 12/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>História - 12/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 12/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Espanhol - 12/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a> 
                                        <h5>___________________________________</h5>
										<h5>História - 15/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Sociologia - 15/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Biologia - 15/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Português - 15/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Geografia - 16/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Arte - 16/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Ensino Religioso - 16/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Inglês - 16/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>   
                                        <h5>___________________________________</h5>
  										<h5>Português - 17/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 17/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 17/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Matemática - 17/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Geografia - 18/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Inglês - 18/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Biologia - 18/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Matemática - 18/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
  										<h5>História - 19/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 19/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 19/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Filosofia - 19/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
  										<h5>Português - 22/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 22/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 22/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Geografia - 22/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                          
                                        <h5>___________________________________</h5>
  										<h5>História - 23/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Espanhol - 23/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 23/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Português - 23/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a> 
                                        <h5>___________________________________</h5>
  										<h5>Arte - 24/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Educação Física - 24/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 24/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Geografia - 24/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Português - 25/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Espanhol - 25/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 25/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Biologia - 25/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                     
                                        ";
                                ?>
							</td>
						</tr>
						<tr>
						 <td>2º ANO</td>
						 <td>
						 <?php
                                        echo "<h5>Aulas de Maio</h5>
										<a href='../../eescolar/aluno/aulasvirtuais2.html' target='_blank'>Clique aqui</a><br>
										<h5>Física - 10/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Inglês - 10/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>  
 										<h5>Sociologia - 10/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
										<h5>Filosofia - 12/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>História - 12/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 12/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Espanhol - 12/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a> 
                                        <h5>___________________________________</h5>
										<h5>História - 15/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Sociologia - 15/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Biologia - 15/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Português - 15/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Geografia - 16/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Arte - 16/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a> 
 										<h5>Inglês - 16/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>   
                                        <h5>___________________________________</h5>
  										<h5>Português - 17/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 17/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 17/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Matemática - 17/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Geografia - 18/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Inglês - 18/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Biologia - 18/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Matemática - 18/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
  										<h5>História - 19/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 19/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 19/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Filosofia - 19/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
  										<h5>Português - 22/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 22/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 22/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Geografia - 22/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                          
                                        <h5>___________________________________</h5>
  										<h5>História - 23/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Espanhol - 23/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 23/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Português - 23/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a> 
                                        <h5>___________________________________</h5>
  										<h5>Arte - 24/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Educação Física - 24/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 24/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Geografia - 24/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Português - 25/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Espanhol - 25/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 25/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Biologia - 25/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                     
                                        ";
						 ?>
						 </td>
						 <tr>
						 <td>3º ANO</td>    
						 <td>
						 <?php
                                        echo "<h5>Aulas de Maio</h5>
										<a href='../../eescolar/aluno/aulasvirtuais3.html' target='_blank'>Clique aqui</a><br>
										<h5>Física - 10/06/2020 8h às 8h35</h5>
										<h5>Física - 10/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Inglês - 10/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Sociologia - 10/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
										<h5>Filosofia - 12/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>História - 12/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 12/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Espanhol - 12/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a> 
                                        <h5>___________________________________</h5>
										<h5>História - 15/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Sociologia - 15/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Biologia - 15/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Português - 15/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Geografia - 16/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
 										<h5>Inglês - 16/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>   
                                        <h5>___________________________________</h5>
  										<h5>Português - 17/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 17/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 17/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Matemática - 17/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Geografia - 18/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Inglês - 18/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Biologia - 18/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Matemática - 18/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
  										<h5>História - 19/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 19/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 19/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Filosofia - 19/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>  
                                        <h5>___________________________________</h5>
  										<h5>Português - 22/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Física - 22/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 22/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Geografia - 22/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                          
                                        <h5>___________________________________</h5>
  										<h5>História - 23/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Espanhol - 23/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 23/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Português - 23/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a> 
                                        <h5>___________________________________</h5>
										<h5>Educação Física - 24/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Química - 24/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Geografia - 24/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                        <h5>___________________________________</h5>
  										<h5>Português - 25/06/2020 8h às 8h35</h5>
										<a href='' target='_blank'>Em breve</a> 
										<h5>Espanhol - 25/06/2020 9h às 9h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
 										<h5>Matemática - 25/06/2020 10h às 10h35</h5>
										<a href='' target='_blank'>Em breve</a>   
 										<h5>Biologia - 25/06/2020 11h às 11h35</h5>
										<a href='' target='_blank'>Em breve</a>                                         
                                     
                                        ";  
						 ?>
						     
						     
						 </td>    
						     
						 </tr>
						    
						    
						    
						    
						</tr>
			</tbody>
		</table>    
</div>

