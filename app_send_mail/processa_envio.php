<?php
//importando biblioteca PHPMailer
require "./bibliotecas/PHPMailer/Exception.php";
require "./bibliotecas/PHPMailer/OAuthTokenProvider.php";
require "./bibliotecas/PHPMailer/OAuth.php";
require "./bibliotecas/PHPMailer/PHPMailer.php";
require "./bibliotecas/PHPMailer/POP3.php"; //-->especificações do protocolo de recebimento de email
require "./bibliotecas/PHPMailer/SMTP.php"; //-->especificações do protocolo de envio de email

//namespaces - importante para a configuração de envio de email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//quando extraímos esses namespaces que reservam classes para a biblioteca PHPMailer (para não haver nenhum tipo de conflito em relação a nome de recursos dentro da aplicação)
//podemos utilizar esses recursos ao longo da lógica do código

//print_r($_POST);
class Mensagem
{
    private $para = null;
    private $assunto = null;
    private $mensagem = null;
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function mensagemValida()
    {

        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {//empty verifica se variável está vazia
        //verifica se pelo menos um campo estiver vazio
            return false; //mensagem não é válida
        }
        return true; //se não, mensagem é válida
    }
}
$mensagem = new Mensagem();
$mensagem->__set('para', $_POST['para']); //executa método set, seta valor que vem da superglobal post, índice definido pelo name dos campos do formulári o
$mensagem->__set('assunto', $_POST['assunto']); //atributo do objeto mensagem e valores que serão atribuídos para esses respectivos atributos
$mensagem->__set('mensagem', $_POST['mensagem']);

//print_r($mensagem)
if (!$mensagem->mensagemValida()) { //se mensagem não for válida (pelo menos um dos campos não estiverem preenchidos) -->entra no if
    echo 'Mensagem é válida';
    die(); //mata processamento do script no ponto em que a instrução é lida
}
//testando
//codificacao da biblioteca phpmailer
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.example.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'user@example.com'; //SMTP username
    $mail->Password = 'secret'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User'); //Add a recipient
    $mail->addAddress('ellen@example.com'); //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Não foi possível enviar este e-mail! Por favor tente novamente mais tarde";
    echo "Detalhes do erro: {$mail->ErrorInfo}";
}
?>