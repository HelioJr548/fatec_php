<?php
session_start();
include('conexao.php');

#pegando o valor da ação via URL
$acao = $_GET['acao'];

switch($acao){
    case 'login_diretoria':
		if(empty($_POST['id']) || empty($_POST['acesso'])) {
			header('Location: diretoria.php');
			exit();
		}
		
		$idDiretoria = mysqli_real_escape_string($conexao, $_POST['id']);
		$acesso = mysqli_real_escape_string($conexao, $_POST['acesso']);
		
		$query = "select idDiretoria from Diretoria where idDiretoria = '{$idDiretoria}' and acesso = '{$acesso}'";
		
		$result = mysqli_query($conexao, $query);
		
		$row = mysqli_num_rows($result);
		
		if($row == 1) {
			$_SESSION['id'] = $idDiretoria;
			header('Location: painel.php');
			exit();
		} else {
			$_SESSION['nao_autenticado'] = true;
			header('Location: diretoria.php');
			exit();
		}

        break;

	case 'login_prof':
		if(empty($_POST['idprof']) || empty($_POST['acesso'])) {
			header('Location: professor.php');
			exit();
		}
		
		$IdProfessor = mysqli_real_escape_string($conexao, $_POST['idprof']);
		$acesso = mysqli_real_escape_string($conexao, $_POST['acesso']);
		
		$query = "SELECT IdProfessor from professores where IdProfessor = '{$IdProfessor}' and Email = '{$acesso}'";
		
		$result = mysqli_query($conexao, $query);
		
		$row = mysqli_num_rows($result);
		
		if($row == 1) {
			$_SESSION['idprof'] = $IdProfessor;
			header('Location: painelprof.php');
			exit();
		} else {
			$_SESSION['nao_autenticado'] = true;
			header('Location: professor.php');
			exit();
		}
	}
