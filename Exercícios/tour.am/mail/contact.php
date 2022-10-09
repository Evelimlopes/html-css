<?php
if(empty($_POST['name']) || empty($_POST['user']) || empty($_POST['password']) || !filter_var($_POST['email'], FILTRAR_VALIDAR_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_user = strip_tags(htmlspecialchars($_POST['user']));
$password = strip_tags(htmlspecialchars($_POST['password']));

$to = "touram@example.com"; //Mude este e-mail para seu//
$user = "$m_user:  $name";
$body = "Você recebeu uma nova mensagem do formulário de contato de seu site.\n". "Aqui estão os detalhes:
  \n\nName: $name
  \n\n\nEmail: $email
  \n\n user: $m_user
  \n\n password: $password";

$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $user, $body, $header)){
  http_response_code(500);

}else{
  if($user == "" || $user == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo login deve ser preenchido');window.location.href='
  cadastro.html';</script>";
    }else{
      $query = "INSERT INTO usuarios (user, password) VALUES ('$user','$password')";
      $insert = mysql_query($query,$connect);
      
      if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');window.location.
        href='login.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');window.location
        .href='cadastro.html'</script>";
      }
    }
  }

?>
