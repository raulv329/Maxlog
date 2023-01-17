
<?php

// Recebendo os dados
$recebenome     = $_POST["nome"];
$recebefone     = $_POST["fone"];
$recebemail     = $_POST["email"];
$recebeassunto  = $_POST["assunto"];
$recebemsg      = $_POST["msg"];

// Definindo os cabeçalhos do e-mail
$headers  = "MIME-Version: 1.0\n";
$headers .= "header( 'content-type: text/html; charset=utf-8' )\n"; 
$headers .= "From: Formulario de contato\n"; 

// Destinatário do email
$para = "suporte@tomasicsi.it";

// Definindo o aspecto da mensagem
$mensagem   = "De:";
$mensagem  .= $recebenome;
$mensagem  .= "Contato:";
$mensagem  .= $recebefone.'- E-mail: '.$recebemail;
$mensagem  .= "Assunto";
$mensagem  .= "";
$mensagem  .= $recebemsg;
$mensagem  .= "";

// Enviando a mensagem para o destinatário
mail($para,'Contato pelo site - de: '.$recebenome,$mensagem,$headers);

// Resposta Automática, preparando o e-mail com a resposta.
$mensagem2  = "Olá \n \n  " . $recebenome . ".Agradecemos sua visita ao nosso site e a oportunidade de receber-mos seu contato.
\n Em breve responderemos sua questão através de correio eletrônico.\n \n    OBS.: Não é necessário responder esta mensagem! \n";
$mensagem2 .= "Atenciosamente:\n " .$empresa."";

// Enviando a resposta sutomática

$envia =  mail($recebemail,"Agradecemos sua visita ao nosso site",$mensagem2,$headers);

// Exibe um alert que a mensagem foi enviada com sucesso.
echo 
'<script>
    alert("Mesagem enviada com sucesso!");history.go(-1);
</script>';
?>