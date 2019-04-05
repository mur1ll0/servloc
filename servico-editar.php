<?/*
###########################################################
#                     --CADASTRO SERVIÇOS--               #
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
				<form method = "POST" class="form-vertical  js-form-loading">

					<table id="servtable" class="table table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
						    <th>Titulo</th>
						    <th>Descrição</th>
						  </tr>
						</thead>
						<tbody>
							<?php $sqlquery = "SELECT codigo, titulo, descricao
																	FROM servicos
																	WHERE ativo = 1";
								connect_db();
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
            <button id="btn-sair" class="btn  btn-secondary" type="submit">Sair</button>
            <button id="btn-excluir" class="btn  btn-danger" type="submit">Excluir</button>
            <button id="btn-editar" class="btn  btn-primary" type="submit">Editar</button>
					</div>

				</form>
			</div>
		</section>

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
			});

		</script>
	</body>
</html>

<?php
	c_footer();
?>
