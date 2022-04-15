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

$k8al = new Tenis();
$k8al -> nome    = "Kyrie Infinity EP 8 Irving Aluminum.";
$k8al -> ID_nike = "DC9134-400";
$k8al -> tamanho = "41";
$k8al -> cor     = "ALUMINUM/SAIL-BLACK";
$k8al -> estoque = "298";
$k8al -> preco   = "949.99"; 

$regatanets = new Regatas();
$regatanets -> nome    = "Brooklyn Nets swingman jersey classic edition 2021.";
$regatanets -> nike_id = "GE480202J5";
$regatanets -> tamanho = "M";
$regatanets -> cor     = "Azul, branco e vermelho";
$regatanets -> estoque = "38 restantes";
$regatanets -> preco   = "487";

$servico = new Servico();
$servico -> nome      = "Leve ao cliente";
$servico -> categoria = "Delivery";
$servico -> periodo   = "10min a 7 dias dependendo do local destinado";
$servico -> preco     = "De 10 a 40 reais";


/*echo "<pre>";
var_dump();
var_dump();
var_dump();
var_dump();
var_dump();
echo "</pre>";*/
?>