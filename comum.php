<?/*
###########################################################
#          --RECURSOS EM COMUM ENTRE AS PÁGINAS--         #
#                                                         #
#                Autor: Murillo André Maleski             #
#                   Diário de Bordo Online                #
#                                                         #
#  Funções para adicionar recursos básicos às páginas do  #
#  projeto, evitando repetição de código desnecessária.   #
###########################################################
*/?>

<?php
	require 'connection.php';
	

	/*---------------------------------
	--   Cabeçalho da Página, MENU   --
	---------------------------------*/
	function c_header(){
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Diário de Bordo</title>
		<link rel="stylesheet" type="text/css" media="screen" href="estilo.css"/>
	</head>

	<body>
		<div id="header">
			<ul>
				<li><p>Diário de Bordo Online</p></li>
				<div id="menu">
				<li><a href="index.php">Início</a></li>
				<li><a href="pilotos.php">Pilotos</a></li>
				<li><a href="">Aeronaves</a></li>
				<li><a href="">Diário de Bordo</a></li>
				<li><a href="">Relatórios</a></li>
				</div>
			</ul>
			</div>
			<hr>
		</div>

<?php
	}
	
	/*---------------------------------
	--        Rodapé da Página       --
	---------------------------------*/
	function c_footer(){
?>
		<div id="footer">
			<ul>
				<li id="uffs"><p><a href="http://cc.uffs.edu.br/" target="_blank">UFFS</a></p></li>
				<li><p>Universidade Federal da Fronteira Sul - UFFS</br>Ciência da Computação</p></li>
				<li id="perfect-world"><p><a href="http://www.wanmei.com/" target="_blank">Perfect World</a></p></li>
				<li><p>Copyright © 2018, Murillo André Maleski</br>Todos os direitos reservados.</p></li>
			</ul>
		</div>
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

