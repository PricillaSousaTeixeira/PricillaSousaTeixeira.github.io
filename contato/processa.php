 <?php
        error_reporting(0);

		$nome = utf8_decode($_POST['nome']);
		$email = utf8_decode($_POST['email']);
		$mensagem =utf8_decode($_POST['mensagem']);
		
        require 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->isSMTP();
        // Configurações de servidor de email
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth ="true";
        $mail->Username = "cillatex1@gmail.com";
        $mail->Password ="Code301269@";

        //configuração da mensagem

        $mail->setFrom($mail->Username, "Use sua mente");
        $mail->addAddress("cillatex1@gmail.com");
        $mail->Subject = "Fale conosco";

        $conteudo_email = " Você recebeu uma mensagem de $nome ($email):
        <br><br>
        Mensagem: <br>
        $mensagem
        ";
        $email->IsHTML(true);
        $email->Body = $conteudo_email;

        if ($email->send()){
            echo "E-mail enviado com sucesso!";
        }else{
            echo "Falha ao enviar o e-mail: " . $mail->ErrorInfo;
        }
		
  

