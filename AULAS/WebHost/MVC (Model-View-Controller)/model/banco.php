<?php
#passo 1
require_once("init.php");

# definindo a classe para conexão com banco de dados
class Banco
{
    #Escopoo atributo Public ele pode ser acessado e alterado do lado de fora por qualquer
    #Escopoo atributo Private so pode ser acessado de dewntro de classe
    #Escopoo atributo Protected pode ser invocado por suas subclasses e em qualquer lugar da classe, sem problemass
    
    protected $mysqli;
    
    # Metodos são as funções existentes somente dentro de cada objeto
    # public function __construct() inicializa quanto a classe é acionada, o __construct() pode ou bao receber valores de entrada 
    public function __construct()
    {
        echo "conexão efetuada com sucesso";
        $this->conecao();
    }
    
    # Métodos criados para iniciar a conexão com o banco de dados
    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }
}

?>