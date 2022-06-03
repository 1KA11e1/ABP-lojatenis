<?php

$cliente = new Cliente();
$cliente -> nome            = "Alerrandro Barata";
$cliente -> cpf             = "047.722.863-09";
$cliente -> data_nascimento = "03/05/2002";
$cliente -> email           = "alerrandrobarata12@gmail.com";

$funcionario = new Funcionario();
$funcionario -> nome            = "Alek Fumaça";
$funcionario -> cpf             = "988.877.677-86";
$funcionario -> data_nascimento = "19/11/1599";
$funcionario -> email           = "alekfumaça1599@gmail.com";

$servico = new Servico();
$servico -> nome      = "Leve ao cliente";
$servico -> categoria = "Delivery";
$servico -> periodo   = "10min a 7 dias dependendo do local destinado";
$servico -> preco     = "De 10 a 40 reais";

/*$produto = new ();
$produto->setNome(“TenisERegatas 01”);
$produto->setId();
$produto->setTamanho();
$produto->setCor();
$produto->setEstoque();
$produto->setPreco(9.99);
$produto->adicionar();*/

$produtos = Produto::istar();
foreach($produtos as $produto){
$id = $produto->getId();
$descricao = $produto->getDescricao();
$preco = $produto->getPreco();
 $quantidade = $produto->getQuantidade();
 echo $id $descricao $preco $quantidade;
}


/*echo "<pre>";
var_dump();
var_dump();
var_dump();
var_dump();
var_dump();
echo "</pre>";*/
?>
