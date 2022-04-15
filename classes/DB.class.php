<?php
class DB{
public string $servidor    = "localhost";
public string $usuario     = "root";
public string $senha       = "123456789";
public string $nome_banco  = "aula_php";
	public static function conexao(){
	       $conexao    = null;
       
	try{
	      $conexao     = new PDO(
		"mysqlhost = self::$servidor",
		dbnome 	   = self::$nome_banco",
		  	     self::$usuario,
			     self::senha
);
	}catch(PDOExeption $e){
	      echo "Erro de Conexão". $e -> getMessage();

	}
       return $conexao;
	}
}
?>
