<?php
/*
###########################################################
#          --RECURSOS EM COMUM ENTRE AS PÁGINAS--         #
#                                                         #
#                Autor: Murillo André Maleski             #
#                          SERVLOC                        #
#                                                         #
#  Funções para adicionar recursos básicos às páginas do  #
#  projeto, evitando repetição de código desnecessária.   #
###########################################################
*/?>

<?php
	require 'static/php/connection.php';

	session_start();
	
	var_dump($_SESSION['user_id']);

	/*---------------------------------
	--   Cabeçalho da Página, MENU   --
	---------------------------------*/
	function c_header(){
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Servloc</title>
			<link rel="stylesheet" type="text/css" href="static/layout/stylesheets/vendors.min.css"/>
			<link rel="stylesheet" type="text/css" href="static/layout/stylesheets/algaworks.min.css"/>
			<link rel="stylesheet" type="text/css" href="static/layout/stylesheets/application.css"/>
			<link rel="stylesheet" type="text/css" href="static/stylesheets/trab.css">
			<link rel="stylesheet" type="text/css" href="static/stylesheets/multi-select.css"/>
			<link rel="stylesheet" type="text/css" href="static/stylesheets/amsify.suggestags.css"/>
			<link rel="stylesheet" type="text/css" href="static/stylesheets/jquery.dataTables.min.css"/>
			<script type="text/javascript" src="static/sprite/iconwc.js"></script>
		</head>

		<body>
			<nav class="navbar  navbar-fixed-top  navbar-default  js-sticky-reference" id="main-navbar">
				<div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand  hidden-xs" href="/servloc/index.php">
						<img alt="SERVLOC" src="static/img/logo.png"/>
					  </a>
					</div>

					<div id="navbar2" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="/servloc/index.php">Home</a></li>
							<li><a href="/servloc/cadastro-servico.php">Cadastrar Serviços</a></li>
							<?php
							if (!isset($_SESSION['user_id'])){
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logar</a>
								<ul class="dropdown-menu">
									<div class="container-fluid">
										<form onsubmit="login();" id="form_login" class="form-vertical  js-form-loading">
											<div class="form-group">
												<label>Usuário</label>
												<input name='usuario' id="usuario" type="text" class="form-control" maxLength="10" value=""/>
											</div>
											<div class="form-group">
												<label>Senha</label>
												<input name='senha' id="senha" type="password" class="form-control" maxLength="12" value=""/>
											</div>
											<div class="form-group">
												<button class="btn  btn-primary" type="submit">Entrar</button>
											</div>
										</form>
									</div>
								</ul>
							</li>
							<li><a href="/servloc/cadastro-cliente.php">Cadastrar Usuário</a></li>
							<?php
							}
							else{
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								  <i class="fa  fa-user"></i>
								</a>
								<ul class="dropdown-menu">
								  <li>
									<div class="aw-logged-user">
									  <img src="https://api.adorable.io/avatars/80/joaodascouves"
										width="80" height="80" alt="João das Couves" class="aw-logged-user__picture" />
									  <span class="aw-logged-user__name"><?php echo $_SESSION['user_name']?></span>
									</div>
								  </li>
								  <li role="separator" class="divider"></li>
								  <li><a href="#">Meu perfil</a></li>
								  <li><a href="#">Alterar senha</a></li>
								  <li><a href="#">Pagamentos</a></li>
								</ul>
							  </li>
							  <li>
								<a href="#" onclick="logout()"><em class="fa  fa-sign-out"></em></a>
							  </li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>

			    <!--ul class="nav navbar-nav  navbar-right">
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			          <i class="fa  fa-user"></i>
			        </a>
			        <ul class="dropdown-menu">
			          <li>
			            <div class="aw-logged-user">
			              <img src="https://api.adorable.io/avatars/80/joaodascouves"
			                width="80" height="80" alt="João das Couves" class="aw-logged-user__picture" />
			              <span class="aw-logged-user__name">João das Couves</span>
			            </div>
			          </li>
			          <li role="separator" class="divider"></li>
			          <li><a href="#">Meu perfil</a></li>
			          <li><a href="#">Alterar senha</a></li>
			          <li><a href="#">Pagamentos</a></li>
			        </ul>
			      </li>
			      <li>
			        <a href="#"><em class="fa  fa-sign-out"></em></a>
			      </li>
			    </ul>
				</div-->
			</nav>

<?php
	}


	/*---------------------------------
	--        Rodapé da Página       --
	---------------------------------*/
	function c_footer(){
?>
		<div>
			<footer class="aw-layout-footer  js-content">
				<div class="container-fluid">
					<span class="aw-footer-disclaimer">Universidade Federal da Fronteira Sul - UFFS</span>
				</div>
			</footer>
		</div>
	</div>

		<script src="static/javascripts/vendors/jquery-1.11.1.min.js"></script>
		<script src="static/layout/javascripts/vendors.min.js"></script>
		<script src="static/layout/javascripts/algaworks.min.js"></script>
		<script src="static/javascripts/vendors/jquery.maskMoney.min.js"></script>
		<script src="static/javascripts/trab.js"></script>
		<script src="static/javascripts/vendors/jquery.multi-select.js" type="text/javascript"></script>
		<script src="static/javascripts/vendors/jquery.amsify.suggestags.js" type="text/javascript"></script>
		<script type="text/javascript">
			//OPTGROUP
			$('#optgroup').multiSelect({ selectableOptgroup: true });

			//SUGGESTAGS
			$('input[name="tags"]').amsifySuggestags({
			  type : 'bootstrap',
			  suggestions: ['Black', 'White', 'Red', 'Blue', 'Green', 'Orange'],
			  afterAdd: function(value) {
				// after add
			  },
			  afterRemove: function(value) {
				// after remove
			  }
			});
			$('.js-sidebar, .js-content').toggleClass('is-toggled');

			//LOGIN
			function login(){
				var form = document.getElementById('form_login');
				xhr = new XMLHttpRequest();

				xhr.open('POST', 'static/php/class-valida-login.php');
				xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				xhr.onload = function() {
					if (xhr.status === 200) {
						alert(xhr.responseText);
					}
					else if (xhr.status !== 200) {
						alert('Request failed.  Returned status of ' + xhr.status);
					}
				};
				xhr.send(new URLSearchParams(new FormData(form)).toString());
			}
				
			//LOGOUT
			function logout(){
				var form = document.getElementById('form_login');
				xhr = new XMLHttpRequest();

				xhr.open('GET', 'static/php/class-valida-login.php?action=logout', true);
				xhr.onload = function() {
					if (xhr.status === 200) {
						alert(xhr.responseText);
					}
					else if (xhr.status !== 200) {
						alert('Request failed.  Returned status of ' + xhr.status);
					}
				};
				xhr.send(null);
			}
		</script>

<?php
	}


	/*---------------------------------
	--        Opções de Select       --
	---------------------------------*/

	function opt_select_estado(){
		?>
			<option value="*">Selecione o Estado</option>
			<option value="ac">Acre</option>
			<option value="al">Alagoas</option>
			<option value="am">Amazonas</option>
			<option value="ap">Amapá</option>
			<option value="ba">Bahia</option>
			<option value="ce">Ceará</option>
			<option value="df">Distrito Federal</option>
			<option value="es">Espírito Santo</option>
			<option value="go">Goiás</option>
			<option value="ma">Maranhão</option>
			<option value="mt">Mato Grosso</option>
			<option value="ms">Mato Grosso do Sul</option>
			<option value="mg">Minas Gerais</option>
			<option value="pa">Pará</option>
			<option value="pb">Paraíba</option>
			<option value="pr">Paraná</option>
			<option value="pe">Pernambuco</option>
			<option value="pi">Piauí</option>
			<option value="rj">Rio de Janeiro</option>
			<option value="rn">Rio Grande do Norte</option>
			<option value="ro">Rondônia</option>
			<option value="rs">Rio Grande do Sul</option>
			<option value="rr">Roraima</option>
			<option value="sc">Santa Catarina</option>
			<option value="se">Sergipe</option>
			<option value="sp">São Paulo</option>
			<option value="to">Tocantins</option>

		<?php
	}

	function opt_select_servico(){
		?>
			<optgroup label='Construção Civil'>
				<option value='1'>Pedreiro</option>
				<option value='2'>Eletrecista</option>
				<option value='3'>Encanador</option>
				<option value='4'>Arquitetura</option>
				<option value='5'>Paisagismo</option>
			</optgroup>
			<optgroup label='Prestação de Serviços'>
				<option value='6'>Montador de Móveis</option>
				<option value='7'>Mudança</option>
			</optgroup>

		<?php
	}

	/*---------------------------------
	--             --
	---------------------------------*/
	function teste(){
?>
		<p>Teste</p>

<?php
	}
?>
