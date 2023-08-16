<?php
//importando biblioteca PHPMailer
require "./bibliotecas/PHPMailer/Exception.php";
require "./bibliotecas/PHPMailer/OAuthTokenProvider.php";
require "./bibliotecas/PHPMailer/OAuth.php";
require "./bibliotecas/PHPMailer/PHPMailer.php";
require "./bibliotecas/PHPMailer/POP3.php"; //-->especificações do protocolo de recebimento de email
require "./bibliotecas/PHPMailer/SMTP.php"; //-->especificações do protocolo de envio de email

//namespaces - importante para a configuração de envio de email
use PHPMailer\PHPMailer\PHPMailer; //extraindo recursos com o namespace
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

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

        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) { //empty verifica se variável está vazia
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
$mail = new PHPMailer(true); //produz instância de PHPMailer
//criando objeto com base na clasee
//testando
//codificacao da biblioteca phpmailer
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'testeanaalmeida@gmail.com'; //SMTP username
    $mail->Password = 'kjnpnzduarwdiyxq'; //SMTP password
    $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
    $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('testeanaalmeida@gmail.com', 'Ana Almeida Remetente'); //remetente do email (quem o envia)
    $mail->addAddress($mensagem->__get('para')); //destinatário do email (quem o recebe)
    //$mail->addReplyTo('info@example.com', 'Information');//contato padrão caso o destiatário deseje responder o remetente
    //$mail->addCC('cc@example.com');//adiciona destinatário de cópias
    //$mail->addBCC('bcc@example.com');//cópia oculta

    //Attachments - possibilidade de adicionar anexo ao email
    //$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = $mensagem->__get('assunto'); //assunto do email
    $mail->Body = $mensagem->__get('mensagem'); //conteúdo
    $mail->AltBody = 'É necessário  utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

    $mail->send();
    echo 'Email enviado com sucesso';
} catch (Exception $e) {
    echo "Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde.";
    echo 'Detalhes do erro: ' . $mail->ErrorInfo;
}
?>