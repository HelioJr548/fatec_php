<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
	<title>Login Diretoria</title></title>

</head>

<body>

<form method="post" action="crud.php?acao=login_diretoria" name="dados" onSubmit="return enviardados();">

		
	<h1>Fazer Login como:</h1>
        <a href="diretoria.php">
            <input name="Submit" type="button" class="formobjects" value="Diretoria">
        </a><br><br>
        <a href="professor.php">
            <input name="Submit" type="button" class="formobjects" value="Professor">
        </a>
        
	</form>