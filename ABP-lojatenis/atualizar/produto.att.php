<?php
$produto = new Produto(1);
$produto->setNome(“produto 01”);
$produto->setId(000-000);
$produto->setDescricao("É um tenis pra por no pé");
$produto->setTamanho(40);
$produto->setCor("Preto e branco");
$produto->setEstoque(834);
$produto->setPreco(199.99);
$produto->setFk_categoria(1);
$produto->atualizar();
?>