<?php
//importando biblioteca PHPMailer
require "../../app_send_mail/bibliotecas/PHPMailer/Exception.php";
require "../../app_send_mail/bibliotecas/PHPMailer/OAuthTokenProvider.php";
require "../../app_send_mail/bibliotecas/PHPMailer/OAuth.php";
require "../../app_send_mail/bibliotecas/PHPMailer/PHPMailer.php";
require "../../app_send_mail/bibliotecas/PHPMailer/POP3.php"; //-->especificações do protocolo de recebimento de email
require "../../app_send_mail/bibliotecas/PHPMailer/SMTP.php"; //-->especificações do protocolo de envio de email

require "../../app_send_mail/processa_envio.php";
?>