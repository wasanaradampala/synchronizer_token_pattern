<?php

session_start();
//setting a cookie
$session_ID = session_id(); //storing session id
setcookie('user_cookie',$session_ID,time()+60*60*24*365,'/',"localhost");

//create csrf token
$_SESSION['csrf'] = base64_encode(openssl_random_pseudo_bytes(32));

//storing CSRF token and session identifier inside a file.
$file = fopen("tokenStore.txt", "w") or die("Unable to open file!");
$txt = $_SESSION['csrf'].",";
fwrite($file, $txt);
$txt1 = $session_ID."\n";

fwrite($file, $txt1);
fclose($file);
echo $_SESSION['csrf'];
?>