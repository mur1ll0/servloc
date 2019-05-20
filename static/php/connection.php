<?php
/*
###########################################################
#              --CONEXÕES COM BANCO DE DADOS--            #
#                                                         #
#                Autor: Murillo André Maleski             #
#                      SERVLOV - CIMATCH                  #
###########################################################
*/

	error_reporting(0); // Disable all errors.

	/*---------------------------------
	--      Abrir conexão MySQL      --
	---------------------------------*/
	function connect_db(){

		$db_host = '127.0.0.1';
		$db_port = '3306';
		$db_database = 'servlocbd';
		$db_user = 'root';
		$db_password = '';

		/*Para permitir acessar o MySQL remotamente:
			/etc/mysql/mysql.conf.d/mysqld.conf
			Comentar linha (#): bind-address		= 127.0.0.1
		*/

		$connect = mysqli_connect($db_host, $db_user, $db_password, $db_database, $db_port);
		if(mysqli_connect_errno()){
			die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}
		else{
			return $connect;
		}
	}

	/*---------------------------------
	--    Executar Consulta MySQL    --
	---------------------------------*/
	function query($sql){
		$connect = connect_db();
		$q = mysqli_query($connect, $sql);
		if(!$q){
			die('Erro ao realizar a consulta.');
		}
		mysqli_close($connect);

		/*GUARDAR RESULTADO DA QUERY EM UMA VARIÁVEL:
			$q recebe um objeto MYSQLI_STORE_RESULT, que não serve para usar no site HTML
			A função mysqli_fetch_row($q) converte o objeto em um array de resultados
			$resultado recebe o array dos resultados, para usar no site HTML
		*/
		while($r = mysqli_fetch_row($q)) $resultado[] = $r;

		//$resultado[] = mysqli_fetch_row($q);

		return $resultado;
	}

	/*---------------------------------
	--         Verificar Login       --
	---------------------------------*/
	function verify_login($user, $pass){
		//SQL INJECTION: " 'or 1='1 "
		$resultado = query('SELECT * FROM users WHERE name = "'.$user.'" AND passwd = "'.$pass.'";');
		if(!$resultado) return False;
		else return True;
	}

?>
