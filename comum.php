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
		<script type="text/javascript" src="static/sprite/iconwc.js"></script>
	</head>

	<body>
		<nav class="navbar  navbar-fixed-top  navbar-default  js-sticky-reference" id="main-navbar">
		  <div class="container-fluid">
	
		  	<div class="navbar-header">
		      <a class="navbar-brand  hidden-xs" href="#">
		        <img alt="SERVLOC" src="static/img/logonada.png"/>
		      </a>
	
		      <ul class="nav  navbar-nav">
		        <li>
		          <a href="#" class="js-sidebar-toggle"><i class="fa  fa-bars"></i></a>
		        </li>
		      </ul>
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
		
		<aside class="aw-layout-sidebar  js-sidebar">
			<div class="aw-layout-sidebar__content">
	
	    	<nav class="aw-menu  js-menu">
	      		<ul class="aw-menu__list">
	
	        		<li class="aw-menu__item">
			          <a href="dashboard.html"><i class="fa  fa-fw  fa-home"></i><span>Dashboard</span></a>
	    		    </li>
	
	        		<li class="aw-menu__item  is-active">
	          			<a href="#">
	            			<i class="fa  fa-fw  fa-file-text"></i><span>Cadastros</span>
	            			<i class="aw-menu__navigation-icon  fa"></i>
	          			</a>

						<ul class="aw-menu__list  aw-menu__list--sublist">
			            	<li class="aw-menu__item  aw-menu__item--link"><a href="cadastro-produto.html">Cadastro de produto</a></li>
			            	<li class="aw-menu__item  aw-menu__item--link  is-active"><a href="pesquisa-produtos.html">Pesquisa de produtos</a></li>
			            	<li class="aw-menu__item  aw-menu__item--link"><a href="tabela-sem-dados.html">Tabela sem dados</a></li>
			          	</ul>
	        		</li>
	
			        <li class="aw-menu__item  is-expanded">
			          <a href="#">
			            <i class="fa  fa-fw  fa-file-text"></i><span>Páginas comuns</span>
			            <i class="aw-menu__navigation-icon  fa"></i>
			          </a>
			
			          <ul class="aw-menu__list  aw-menu__list--sublist">
			            <li class="aw-menu__item  aw-menu__item--link"><a href="pagina-vazia.html">Página vazia</a></li>
			            <li class="aw-menu__item  aw-menu__item--link"><a href="login.html">Login</a></li>
			            <li class="aw-menu__item  aw-menu__item--link"><a href="esqueceu-a-senha.html">Esqueceu a senha</a></li>
			            <li class="aw-menu__item  aw-menu__item--link"><a href="403.html">403</a></li>
			            <li class="aw-menu__item  aw-menu__item--link"><a href="404.html">404</a></li>
			            <li class="aw-menu__item  aw-menu__item--link"><a href="500.html">500</a></li>
			          </ul>
			        </li>
	
	      		</ul>
	    	</nav>
			</div>
		</aside>

<?php
	}
	
	function c_header_sideless(){
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
		</script>
		
		</body>
	</html>

<?php
	}
	
	function c_footer_sideless(){
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
		
		</body>
	</html>

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

