<?php

class Regatas
{
    public  $nome;
    public  $ID_nike;
    public  $tamanho;
    public  $cor;
    public  $estoque;
    public  $preço;
    
    public function entrada_estoque($quantidade){
        $this -> estoque = $this -> estoque + $quantidade;
    }
    public function saida_estoque($quantidade){
        $this -> estoque = $this -> estoque + $quantidade;
    }
}
?>