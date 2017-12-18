<?php
$method = $_SERVER['REQUEST_METHOD'];
$c = true;

if ( $method === 'POST' ) {
	foreach ( $_POST as $key => $value ) {
		if ($value != "") {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
  require 'PHPMailer-master/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.yandex.ru';
  $mail->SMTPAuth = true;
  $mail->Username = 'sender@0067.ru';
  $mail->Password = '8oH9Jl6Bkqjm';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->CharSet="CP1251" ; 
  $mail->From = 'sender@0067.ru';
  $mail->FromName = iconv("UTF-8", "CP1251", 'маркетинг-кухни.рф');
  
  
  $mail->addAddress('oksana-ermol@yandex.ru');
  //$mail->addAddress('79203090002@ya.ru');

  $mail->isHTML(true);
  $mail->Subject = iconv("UTF-8", "CP1251", 'Сообщение с сайта маркетинг-кухни.рф');
  $mail->Body = iconv("UTF-8", "CP1251", "<table style='width: 100%;'>$message</table>");
  
  for ($ct = 0; $ct < count($_FILES['file']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name'][$ct]));
        $filename = $_FILES['file']['name'][$ct];
        if (move_uploaded_file($_FILES['file']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
  if(!$mail->send()) {
      echo 'Ошибка при отправке';
      echo 'Текст ошибки: ' . $mail->ErrorInfo;
  } else {
  }

}
?>
