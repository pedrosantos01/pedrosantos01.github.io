<?php

  // Destinatário
  $para = "montenegrotransfer@hotmail.com";

  // Assunto do e-mail
  $assunto = "Contato do site";

  // Campos do formulário de contato
  $nome = $_POST['nome'];
  $empresa = $_POST['empresa'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $telefone = $_POST['telefone'];
  $titulo = $_POST['titulo'];

  // Monta o corpo da mensagem com os campos
  $corpo = "Nome: $nome <br>Empresa: $empresa <br>";
  $corpo .= "E-mail: $email <br>Mensagem: $mensagem";

  // Cabeçalho do e-mail
  $header = "From: $nome <$para> Reply-to: $email ";
  $header .= "Content-Type: text/html; charset=iso-8859-1 ";

  mail($para, $assunto, $corpo, $header);

  $msg = "Sua mensagem foi enviada com sucesso.";

  // Mostra a mensagem acima e redireciona para index.html
  echo "<script>location.href=`index.html`; alert(`$msg`);</script>";

?> 