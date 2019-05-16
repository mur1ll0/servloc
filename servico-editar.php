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
				<table id="servtable" class="table table-bordered table-hover">
					<thead class="thead-dark">
						<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Descrição</th>
					  </tr>
					</thead>
					<tbody>
						<?php $sqlquery = "SELECT codigo, nome, descricao
																FROM servicos
																WHERE ativo = 1";
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
					//AJAX VAI AQUI - UPDATE servicos SET ativo = 0 WHERE codigo = $dados[0]
					table.row('.selected').remove().draw(false);
				});
			});

		</script>
	</body>
</html>
