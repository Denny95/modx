<?
$subject="Привет мир";
$message="Текст письма";
$to = "yogaden95@gmail.com";

If (mail ($to, $subject, $message))
{
Echo "Письмо удачно отправлено";
}
Else
{
Echo "Сбой при отправлении письма";
}
?>