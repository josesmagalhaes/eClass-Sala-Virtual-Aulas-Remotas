<div class="col-lg-4">
	<div class="panel panel-default">
	<?php
		$me=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");
		$numme=mysqli_num_rows($me);
	?>
		<div class="panel-heading"><center><strong>Minhas Salas <span class="badge"><?php echo $numme; ?></span></strong></center></div>
		<div class="panel-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="myChatRoom">
			<thead>
			<th>Salas</th>
			<th>Aulas Ministradas</th>
			</thead>
			<tbody>
			<?php
				$my=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");
					while($myrow=mysqli_fetch_array($my)){
						$nq=mysqli_query($conn,"select * from chat_member where chatroomid='".$myrow['chatroomid']."'");
						?>
						<tr>
							<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($nq); ?></span> <a href="chatroom.php?id=<?php echo $myrow['chatroomid']; ?>"><?php echo $myrow['chat_name']; ?></a></td>
							<td>
								<?php
                                    if ($myrow['chatroomid']==4){
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
                                    }else if ($myrow['chatroomid']==5){
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
                                    }
                                    else if ($myrow['chatroomid']==6){
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
                                     }

                                ?>
							</td>
						</tr>
						<?php
					}
			?>
			</tbody>
		</table>
	</div>
	
	</div>
</div>