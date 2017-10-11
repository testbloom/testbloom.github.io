


<?php if (isset($_POST["dfotpr"]) && isset($_POST["antirobotpro"]) && $_POST["antirobotpro"] == "gdfg56FG423er") { 
$to = "wbs.eskiz@gmail.com"; 
$subject = "Письмо с вашего сайта"; 
$charset = "utf-8"; 
$un = strtoupper(uniqid(time()));
$head = "Mime-Version: 1.0\r\n"; 
$head .= "Content-Type:multipart/mixed;"; 
$head .= "boundary=\"----------".$un."\"\n\n"; 

$body = "------------".$un."\nContent-Type:text/html; charset=$charset\r\n";

$msg = 
"*ПIБ:: ".$_POST["elemnamea3"]."\n<br />".
"*Телефон:: ".$_POST["elemnamea0"]."\n<br />".
"*E-mail: ".$_POST["elemnamea2"]."\n<br />".
"*Мiсто:: ".$_POST["elemnamea1"]."\n<br />".
"";

$body .= "Content-Transfer-Encoding: 8bit\n\n".$msg."\n\n";

mail($to, $subject, $body, $head);
print "<script>alert('Сообщение успешно отправлено!'); window.location='".$_SERVER['REQUEST_URI']."';</script>";
}
?>
