<!DOCTYPE html>
<?php 
	include("dados.php");
	//var_dump($cardapio);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cardapio</title>
</head>
<body>
	<?php 
		foreach($cardapio as $key => $value){
	?>
	<article>
		<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>>a</a>
		<h2><?=$value['nome'];?></h2>
		<h4>peso da porção: <?=$value['tamanho'];?></h4>
		<h4>preço: <?=$value['preco'];?></h4>
	</article>
	<?php 
		}
	?>
</body>
</html>