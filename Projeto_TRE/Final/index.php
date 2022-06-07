<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
</head>

<body style="background: aquamarine;margin:100px;">
<form method="post" action="insert.php" name="dados" onSubmit="return enviardados();">
<table width="588" border="0" align="center">

<tr>
    <td height="85">
        <p><strong>
            <font face="Verdana, Arial, Helvetica, sans-serif">
                <font size="1">
                </font>
            </font>
            </strong></p>
    </td>
</tr>
<tr>
<td height="22"></td>
<td>
    <p style="text-align:center;"><button  style= "height:50px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="municipio.php">Municipio
    </button>

    <p style="text-align:center;"><button  style= "height:50px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="partido.php">Partido
    </button>

    <p style="text-align:center;"><button  style= "height:50px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="candidato.php">Candidato
    </button>
    
    
    <p style="text-align:center;"><button  style= "height:50px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="eleitor.php">Eleitor
    </button>

    </td>
</tr>
</table>
</form>
</body>

</html>