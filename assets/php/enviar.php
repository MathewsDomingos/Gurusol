<?php
        $hr = date(" H ");

        if($hr >= 12 && $hr<18) {

            $resp = "Boa tarde";}

            else if ($hr >= 0 && $hr <12 ){

            $resp = "Bom dia";}

            else {

            $resp = "Boa noite";
        }
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

require("class.phpmailer.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$bodyContent = "
<table style='background-color: #FFFFFF;' width='744' border='0' align='center' cellpadding='0' cellspacing='0'>
        <tbody>
            <tr>
                <td height='20' align='center' valign='middle'>
                
                </td>
            </tr>
            <tr>
                <td align='center' valign='top'>
                    <table width='694' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tbody>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='20' align='center' valign='middle'>
                
                </td>
            </tr>
            <tr>
                <td>
                    <table width='694' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tbody>
                            <tr>
                                <td height='4' align='center' valign='middle'>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='20' align='center' valign='middle'>
                
                </td>
            </tr>
            <tr>
                <td align='center' valign='top'>
                    <table width='694' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tbody>
                            <tr>
                                <td style='font-family: Trebuchet MS,Verdana,Arial; text-align: justify; color: #5D5E5E; font-size: 16px;'>
                                Ol?? <strong>$resp</strong>,<br><br>

                                H?? uma nova mensagem que veio atrav??s do formul??rio de contato do site

								<p><strong>Nome:</strong> $nome</p>
								<p><strong>Email:</strong> $email</p>
								<p><strong>Telefone:</strong> $telefone</p> 
                                <p><strong>Assunto:</strong> $assunto</p> 
								<p><strong>Mensagem:</strong> $mensagem</p>

                                    <table border='0' cellpadding='0' cellspacing='0' style='width:100%;padding:20px;color:#253543;background-color:#e6e7e8'>  
                                        <tbody>    
                                            <tr>      
                                                <th style='text-align:center;font-family:Ubuntu,sans-serif;font-weight:bold;font-size:20px' colspan='2'>       
                                                    <p style='margin:5px 0 15px'>Formul??rio de contato</p>      
                                                </th>    
                                            </tr>    
                                        </tbody>
                                    </table>
                                    <table>
                                        <tr>
                                            
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='20' align='center' valign='middle'>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <table width='694' border='0' align='center' cellpadding='0' cellspacing='0'>
                        <tbody>
                            <tr>
                                <td height='4' align='center' valign='middle'>
                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td height='20' align='center' valign='middle'>
                    
                </td>
            </tr>
	    </tbody>
	</table>";
 

// Inicia a classe PHPMailer

$mail = new PHPMailer();

 

// Define os dados do servidor e tipo de conex??o

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem ser?? SMTP

$mail->Host = "mail.ita.locaweb.com.br"; // Endere??o do servidor SMTP (caso queira utilizar a autentica????o, utilize o host smtp.seudom??nio.com.br)

$mail->SMTPAuth = true; // Usar autentica????o SMTP (obrigat??rio para smtp.seudom??nio.com.br)

$mail->Username = 'contatos@gurusol.com.br'; // Usu??rio do servidor SMTP (endere??o de email)

$mail->Password = 'senha-do-email'; // Senha do servidor SMTP (senha do email usado)

$mail ->CharSet = "UTF-8";

 

// Define o remetente

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->From = "contatos@gurusol.com.br"; // Seu e-mail

$mail->Sender = "contatos@gurusol.com.br"; // Seu e-mail

$mail->FromName = "Gurusol"; // Seu nome

$mail->ClearReplyTos();
$mail->addReplyTo($email, $name);

 

// Define os destinat??rio(s)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->AddAddress('contatos@gurusol.com.br', 'Gurusol');

//$mail->AddAddress('plinio.cruz@triointerativa.com.br');

//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia

//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C??pia Oculta

 

// Define os dados t??cnicos da Mensagem

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsHTML(true); // Define que o e-mail ser?? enviado como HTML

//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

 

// Define a mensagem (Texto e Assunto)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->Subject  = "Nova Cota????o."; // Assunto da mensagem


/*
$mail->Body = 'Este ?? o corpo da mensagem de teste, em HTML! 

 <IMG src="http://seudom??nio.com.br/imagem.jpg" alt=":)"   class="wp-smiley"> ';

$mail->AltBody = 'Este ?? o corpo da mensagem de teste, em Texto Plano! \r\n 

<IMG src="http://seudom??nio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';
*/
 
$mail->Body = $bodyContent;
$mail->AltBody =$bodyContent;


// Define os anexos (opcional)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//$mail->AddAttachment("/home/kaique2/public_html/teste.tar", "teste.tar");  // Insere um anexo

 

// Envia o e-mail

$enviado = $mail->Send();

 

// Limpa os destinat??rios e os anexos

$mail->ClearAllRecipients();

$mail->ClearAttachments();

 

// // Exibe uma mensagem de resultado

// if ($enviado) {

// echo "E-mail enviado com sucesso!";

// } else {

// echo "N??o foi poss??vel enviar o e-mail.

 

// ";

// echo "Informa????es do erro: 

// " . $mail->ErrorInfo;

// }

