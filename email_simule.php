<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {
    
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $contato = addslashes($_POST['telephone']);
    $servico = addslashes($_POST['services']);
    $parcelas = addslashes($_POST['parcelas'])
    $valorParcelas = addslashes($_POST['valorParcelas'])
    $message = addslashes($_POST['message']);


    $to = "rodrigobernal19@gmail.com";
    $subject = "Contato - Matiello Assessoria";
    $body = "nome: ".$nome."\r\n".
            "E-mail: ".$email."\r\n".
            "Contato: ".$contato."\r\n".
            "Serviço: ".$servico."\r\n".
            "Número de parcelas: ".$parcelas."\r\n".
            "Valor das parcelas: ".$valorParcelas."\r\n".
            "Mensagem: ".$message;

    $header = "From: rodrigobernal19@gmail.com"."\r\n".
              "Reply-To:".$email."\r\n".
              "X=Mailer:PHP/".phpversion();
    mail($to, $subject, $body, $header);
    header("Location: index.html?mailsend");
}


?>