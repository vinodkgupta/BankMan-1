<?php
if(!mysql_connect('localhost','samya','password') || !mysql_select_db('BankMan'))
{	$error='Cant connect'; 
	die($error);
}
?>
