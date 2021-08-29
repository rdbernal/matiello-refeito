<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $contato = addslashes($_POST['telefone']);
    
    
    
    $to = "felixadvogadosad@gmail.com";
    $subject = "Contato - Maurício Felix Advogados";
    $body = "Nome: ".$nome."\r\n".
            "E-mail: ".$email."\r\n".
            "Celular: ".$contato;
    $header = "From:contato@felixadvogados.adv.br"."\r\n".
              "Reply-To:".$email."\r\n".
              "X=Mailer:PHP/".phpversion();
              
    
    mail($to,$subject,$body,$header);
    header("Location: index.html?mailsend");

    
}


?>