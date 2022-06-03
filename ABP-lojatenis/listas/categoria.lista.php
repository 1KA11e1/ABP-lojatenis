<?php

$produtos = Categoria::listar();
foreach($categorias as $categoria){
$nome = $categoria->getNome();
$id = $categoria->getId();
 echo $nome , $id ;
}
?>