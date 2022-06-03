<?php

$produtos = Produto::listar();
foreach($produtos as $produto){
$nome = $produto->getNome();
$id = $produto->getId();
$descricao = $produto->getDescricao();
$tamanho = $produto->getTamanho(); 
$cor = $produto->getCor();
$estoque = $produto->getEstoque();
$preco = $produto->getPreco();
$fk_categoria = $produto->getFk_categoria();
echo $nome , $id, $descricao, $tamanho, $cor, $estoque, $preco, $fk_categoria ;
}

?>
LISTAR

<DOCTYPE! html>
<head>

</head>
<body>
	<div>
		<table>
		<tr>
		<td>nome</td>
        <td>Id</td>
		<td>Descrição</td>
		<td>Tamanho</td>
        <td>Cor</td>
        <td>Estoque</td>
        <td>Preco</td>
        <td>Categoria</td>
		</tr>
		
		</table>
			
			
		
	</div>
</body>
</html>
