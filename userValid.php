<?php
function validateTokens($csrftoken,$sessionIdentifier) {
    $file = fopen("tokenStore.txt", "r") or die("Unable to open file!");
		list($token,$sid) = explode(",",chop(fgets($file)),2); 
		fclose($file);
		if($token == $csrftoken){
			if($sessionIdentifier == $sid ){
		  return true;
			}
		}
		else{
			return false;
		}
}

$getcsrfToken = $_POST["csrf"];

if(isset($_POST['addname'])){

	if(validateTokens($getcsrfToken,$_COOKIE['user_cookie'])){
		echo "<h2>Welcome  ".$_POST['addname']."</h2>" ;
	}
	else{
	echo "<h2> Error in user ".$_COOKIE['user_cookie']."</h2>";
	}
}

?>
