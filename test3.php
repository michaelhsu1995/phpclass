<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	Email:<input type="email" name="to"><br/>
	Subject:<input type="text" name="title"><br/>
	Content:<textarea cols="40" rows="10" name="content"></textarea><br/>

	<input type="submit" name="Send">
</form>

<?php
if (isset($_POST["to"])) {
	$to=$_POST["to"];
	$title=$_POST["title"];
	$content=nl2br($_POST["content"]);
}

	include("PHPMailer-master/PHPMailerAutoload.php"); //匯入PHPMailer類別       

$mail= new PHPMailer(); //建立新物件        
$mail->IsSMTP(); //設定使用SMTP方式寄信        
$mail->SMTPAuth = true; //設定SMTP需要驗證        
$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線   
$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機        
$mail->Port = 465;  //Gamil的SMTP主機的SMTP埠位為465埠。        
$mail->CharSet = "utf8"; //設定郵件編碼        

$mail->Username = "qqwweerr1013@gmail.com"; //設定驗證帳號        
$mail->Password = "olympics2017"; //設定驗證密碼        

$mail->From = "qqwweerr1013@gmail.com"; //設定寄件者信箱        
$mail->FromName = "MichaelHsu"; //設定寄件者姓名        

$mail->Subject = $title; //設定郵件標題        
$mail->Body = $content; //設定郵件內容        
$mail->IsHTML(true); //設定郵件內容為HTML        
$mail->AddAddress($to,"To"); //設定收件者郵件及名稱        

if(!$mail->Send()) {        
echo "Mailer Error: " . $mail->ErrorInfo;        
} else {        
echo "Message sent!";        
}
?>

</body>
</html>