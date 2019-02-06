<meta charset="utf-8">
<?php
	$vnome=$_POST["nome"];
	$vemail=$_POST["email"];
	$vtel=$_POST["telefone"];
	$vassunto=$_POST["assunto"];
	$vmensagem=$_POST["mensagem"];

	$arquivo = "assets/txt/contato/contato.txt";     
	$criar = fopen($arquivo, "a+"); 
	$texto = "
\r\n********** Contato de Cliente **********\r\n
Nome: $vnome\n
Email: $vemail\n
Tel: $vtel\n
Assunto: $vassunto\n
Mensagem: $vmensagem\n
=========================================================================================\n";

	file_put_contents($arquivo, $texto, FILE_APPEND);

	echo "<script>window.location='contato.html';alert('Sua mensagem foi enviada com sucesso!\\nEstaremos retornando em breve!');</script>";

?>