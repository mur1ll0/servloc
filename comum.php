<?/*
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
		      <a class="navbar-brand  hidden-xs" href="#">
		        <img alt="SERVLOC" src="static/img/logonada.png"/>
		      </a>
		    </div>

		    <ul class="nav navbar-nav  navbar-right">

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

			</div>
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
		</script>

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
