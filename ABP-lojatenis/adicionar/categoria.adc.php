<?php

$categoria = new Categoria();
$categoria -> setNome("Tenis");
$categoria -> setId ("1");
$categoria ->adicionar();

?>
<DOCTYPE! html>
<head>

</head>
<body>
	<div>
	<form name>
			<label>Nome:</label><br>
			<input type="text" name="nome_input"/><br>
			<br>
			<label>ID:</label><br>
			<input type="text" name="id_input"/><br>
			<br>
			<input type="submit" name="btn_salvar" value="Clique aqui para salvar"/><br>
			<br>
			
		</form>
	</div>
</body>
</html>
