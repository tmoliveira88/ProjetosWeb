<meta charset="utf-8">
<?php
	$vempresa=$_POST["empresa"];
	$vnome=$_POST["nome"];
	$vtel=$_POST["telefone"];
	$vemail=$_POST["email"];

	$arquivo = "assets/txt/cadastro/cadastro.txt";     
	$criar = fopen($arquivo, "a+"); 
	$texto = "
\r\n********** Cadastro de Cliente - Teste de 10 dias Grátis **********\r\n
Empresa: $vempresa\n
Nome: $vnome\n
Tel: $vtel\n
Email: $vemail\n
=========================================================================================\n";

	file_put_contents($arquivo, $texto, FILE_APPEND);

	echo "<script>window.location='cadastro.html';alert('Seu cadastro foi concluído com sucesso!\\nEm breve você receberá no seu e-mail as instruções para o teste!');</script>";

?>