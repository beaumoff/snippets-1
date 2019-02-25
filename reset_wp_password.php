<?php


require('wp-config.php'); //call wordpress config file to get the database credentials

$username = DB_USER; //pulls username from wp-config
$password = DB_PASSWORD; //pulls password from wp-config
$server = DB_HOST; //pulls host address from wp-config
$dB = DB_NAME; //pulls database id from wp-config
$connect = mysql_connect($server, $username, $password);

if (!$connect) { //outputs error info should connection fail
	die('Could not connect: ' . mysql_error());
} else {
	mysql_select_db($dB, $connect);
}

$sql="update wp_users set user_pass=MD5('newpassword123') where user_login='admin'";

//if everything's ok, you password is resetted
if($results = mysql_query($sql) ) {
	echo "Your password succesfully resetted!";
}

echo "done";

?>
