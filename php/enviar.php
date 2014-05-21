<?php

   //define o cabeçalho como padrao para caracteres especiais
   $headers = "Content-type:text/html; charset=iso-8859-1";
         
   //destinatário do email
   $para = "contato@host.com.br";
   
   //recebe os dados do formulário
   $nome = $_POST["nome"];
   $telefone = $_POST["telefone"];
   $email  = $_POST["email"];
   $assunto = $_POST["assunto"];
   $mensagem  = $_POST["mensagem"];
   
   //validando o campo nome
   if (($nome == ""))
      {
   echo "<script>alert('Preencha o campo nome.');</script>";
   echo "<script>history.go(-1);</script>";
      }
	  
	//validando o campo e-mail
   if (substr_count($email,"@") == 0 || substr_count($email,".") == 0)
      {
   echo "<script>alert('Por favor, utilize um e-mail vaido');</script>";
   echo "<script>history.go(-1);</script>";
      }

   //validando o campo assunto
   if (($assunto == ""))
      {
   echo "<script>alert('Preencha o campo assunto.');</script>";
   echo "<script>history.go(-1);</script>";
      }

   //validando o campo nmensagem
   if (($mensagem == ""))
      {
   echo "<script>alert('Preencha o campo mensagem.');</script>";
   echo "<script>history.go(-1);</script>";
      }

   //composição do corpo do e-mail para o destinatário
   $corpo   = "<h3>De:</h3> ";
   $corpo  .= $nome;
   $corpo  .= "<br>";
   $corpo  .= $telefone;
   $corpo  .= "<br>";
   $corpo  .= $email;
   $corpo  .= "<br>";
   $corpo  .= "<h3>Mensagem</h3>";
   $corpo  .= "<p>";
   $corpo .= $mensagem;
   $corpo  .= "</p>";
   
   //enviar e-mail  para o destinatário
   mail($para,$assunto,$corpo,$headers); 

   //mensagem de confirmação
   echo "<script>alert('Sua mensagem foi enviada com sucesso');</script>"; 
   
   //redireciona devolta para a página de contato.
   echo "<meta http-equiv='refresh' content='1;URL=index.html'>";

?>