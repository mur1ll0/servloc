<?/*
###########################################################
#                      --PÁGINA PILOTOS--                 #
#                                                         #
#                Autor: Murillo André Maleski             #
#                         Taxi Aéreo                      #
###########################################################
*/?>

<?php
	require 'comum.php';
	
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taxi Aéreo - Pilotos</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
	<link href="jQueryAssets/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php
	navbar();
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-0">
				<h1 class="text-left">Pilotos t</h1>
			</div>
		</div>
		<hr>
	</div>
	<div class="container">
		<div class="row text-left">
			<div class="well-md">
				<div class="input-group"><span class="input-group-btn">
					<button class="btn btn-default" type="button" data-toggle="modal" data-target="#Modal" onClick="novoPiloto()">Novo<br></button>
					<button class="btn btn-default" type="button" data-toggle="modal" data-target="#Modal" onClick="editPiloto()">Editar<br></button>
					<button class="btn btn-default" type="button" id="delPiloto">Deletar<br></button>
					<div id="dataPilotos_filter" class="dataTables_filter">
						<label>Pesquisarteste<input class="" placeholder="" aria-controls="dataPilotos" type="search"></label>
					</div>
					<!--/span>
					<input id="dataPilotos_filter" aria-controls="dataPilotos" type="search" class="form-control" placeholder="Pesquisar"-->
				</div>
			</div>
			<table class="table table-hover" id="dataPilotos">
				<thead class="thead-dark">
				<tr>
					<th scope="col">Nome </th>
					<th scope="col">Data Nascimento </th>
					<th scope="col">ANAC </th>
					<th scope="col"> Validade CHT</th>
					<th scope="col">Tipo Habilitação </th>
				</tr>
				</thead>
				<tbody>
					<?php
						$pilotos = query('SELECT * from piloto;');
						for($i=0; $i<sizeof($pilotos); ++$i){
							echo '<tr>';
							echo '<td>'.$pilotos[$i][1].'</td>';
							echo '<td>'.$pilotos[$i][2].'</td>';
							echo '<td>'.$pilotos[$i][3].'</td>';
							echo '<td>'.$pilotos[$i][4].'</td>';
							echo '<td>'.$pilotos[$i][5].'</td>';
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="Modal" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-header">
					<h3 class="modal-title" id="novoModalTitle">Modal Title</h3>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
				<!--Botões Fim-->
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" id="saveBut" class="btn btn-primary" onClick="submitForm()">Salvar</button>
				</div>
			</div>
		</div>
	</div>
	
<?php
	footer();
?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
	<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js"></script>
	<script src="jQueryAssets/jquery.dataTables.min.js"</script>
	
	<script type="text/javascript">
		$(function() {
			$( "#Datepicker1" ).datepicker({
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				nextText: 'Próximo',
				prevText: 'Anterior',
				dateFormat:"dd-mm-yy",
				changeYear:true,
				changeMonth:true,
				yearRange:"1900:2018"
				}); 
		});
		$(function() {
			$( "#Datepicker2" ).datepicker({
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				nextText: 'Próximo',
				prevText: 'Anterior',
				dateFormat:"dd-mm-yy",
				changeYear:true,
				changeMonth:true
				}); 
		});
	</script>
	
	<script>
	function submitForm(){
		$.ajax({
			type: "POST",
			url: 'forms.php',
			data: $('#pilotos_form').serialize(),
			success: function(response){
				$('#Modal .modal-header .modal-title').html("Resultado em POST");
				$('#Modal .modal-body').html(response);
				$("#saveBut").hide();
			}
		});
	}
	</script>

	<script>
	function novoPiloto(){
		$('#Modal .modal-header .modal-title').html("Novo piloto");
		$('#Modal .modal-body').html('
			<!--Botões Inicio-->
			<form id="pilotos_form">
				<div class="input-group"><span id="addon1" class="input-group-addon">Nome</span>
					<input name="pilName" type="text" class="form-control" placeholder="Digite um nome" aria-describedby="addon1">
				</div>
				<div class="input-group"><span id="addon2" class="input-group-addon">Data Nascimento</span>
					<input name="nasc" type="text" class="datePicker" id="Datepicker1">
				</div>
				<div class="input-group"><span id="addon3" class="input-group-addon">Código ANAC</span>
					<input name="anac" type="text" class="form-control" placeholder="Digite o código ANAC" aria-describedby="addon3">
				</div>
				<div class="input-group"><span id="addon4" class="input-group-addon">Validade CHT</span>
					<input name="valCHT" type="text" class="datePicker" id="Datepicker2">
				</div>
				<div class="input-group"><span id="addon5" class="input-group-addon">Tipo Habilitação</span>
					<input name="tipoH" type="text" class="form-control" placeholder="Digite o tipo da Habilitação" aria-describedby="addon5">
				</div>
			</form>
		');
		$("#saveBut").show();
	}
	</script>
	
	<script>
		$(document).ready(function(){
			var table = $('#dataPilotos').DataTable({
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
			$('#dataPilotos tbody').on('click', 'tr', function(){
				if ($(this).hasClass('selected')){
					$(this).removeClass('selected');
				}
				else{
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			$('#delPiloto').click(function(){
				var dados = table.row('.selected').data();
				alert(dados);
				table.row('.selected').remove().draw(false);
			});
		});
		
	</script>

</body>
</html>