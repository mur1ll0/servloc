<?/*
###########################################################
#                      --EDITAR SERVIÇOS--                #
#                                                         #
#                Autor: Murillo André Maleski             #
#                           SERVLOC                       #
###########################################################
*/?>

<?php
	require 'comum.php';

	session_start();

	c_header();
?>


	<div class="aw-layout-page">

		<section class="aw-layout-content  js-content">
			<div class="page-header">
				<div class="container-fluid">
					<h1>
						Serviços
					</h1>
				</div>
			</div>

			<div class="container-fluid">
				<table name="servtable" id="servtable" class="table table-bordered table-hover">
					<thead class="thead-dark">
						<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Descrição</th>
					  </tr>
					</thead>
					<tbody>
						<?php $sqlquery = 'SELECT servicos.codigo, nome, descricao
												FROM servicos
												inner join servicos_pessoas on (servicos.codigo = servicos_pessoas.servico)
												WHERE ativo = 1 and
												pessoa = '.$_SESSION["user_id"].';';
																
																
							$resultado = query($sqlquery);
							foreach ($resultado as $row	) {
							  echo "<tr>";
									echo "<td>". $row[0]. "</td>";
									echo "<td>". $row[1]. "</td>";
									echo "<td>". $row[2]. "</td>";
								echo "</tr>";
							}

						?>
					</tbody>
				</table>

				<div class="form-group">
					<button name="btn-sair" id="btn-sair" class="btn  btn-secondary" type="submit">Sair</button>
					<button name="btn-excluir" id="btn-excluir" class="btn  btn-danger" type="submit">Excluir</button>
					<button name="btn-editar" id="btn-editar" class="btn  btn-primary" type="submit">Editar</button>
				</div>
			</div>
		</section>

<?php
	c_footer();
?>
		<script src="static/javascripts/vendors/jquery-1.11.1.min.js"></script>
		<script src="static/javascripts/vendors/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
				var table = $('#servtable').DataTable({
					"language": {
						"sEmptyTable": "Nenhum registro encontrado",
						"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
						"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
						"sInfoFiltered": "(Filtrados de _MAX_ registros)",
						"sInfoPostFix": "",
						"sInfoThousands": ".",
						"sLengthMenu": "_MENU_ resultados por página",
						"sLoadingRecords": "Carregando...",
						"sProcessing": "Processando...",
						"sZeroRecords": "Nenhum registro encontrado",
						"sSearch": "Pesquisar",
						"oPaginate": {
							"sNext": "Próximo",
							"sPrevious": "Anterior",
							"sFirst": "Primeiro",
							"sLast": "Último"
						},
						"oAria": {
							"sSortAscending": ": Ordenar colunas de forma ascendente",
							"sSortDescending": ": Ordenar colunas de forma descendente"
						}
					}
				});
				$('#servtable tbody').on('click', 'tr', function(){
					if ($(this).hasClass('selected')){
						$(this).removeClass('selected');
					}
					else{
						table.$('tr.selected').removeClass('selected');
						$(this).addClass('selected');
					}
				});
				$('#btn-excluir').click(function(){
					var dados = table.row('.selected').data();
					//editaServ(1,dados[0]);
					table.row('.selected').remove().draw(false);
				});
				$('#btn-editar').click(function(){
					var dados = table.row('.selected').data();
					window.location.href = '/servloc/cadastro-servico.php?edit='+dados[0];
				});
			});

			function editaServ(opcao,servId){
				var dados = new Array(2);
				dados[0] = opcao;
				dados[1] = servId;
				window.location.href = "http://localhost/servloc/cadastro-servico.php"


				// xhr = new XMLHttpRequest();
				// xhr.open('POST', 'static/php/class-edita-serv.php');
				// xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				// xhr.onload = function() {
				// 	if (xhr.status === 200) {
				// 		if (opcao == 1){
				// 			location.replace = xhr.responseText;
				// 		}else{
				// 			alert(xhr.responseText);
				// 		}
				// 	}
				// 	else if (xhr.status !== 200) {
				// 		alert('Request failed.  Returned status of ' + xhr.status);
				// 	}
				// };
				// xhr.send(dados);
			}
		</script>
	</body>
</html>
