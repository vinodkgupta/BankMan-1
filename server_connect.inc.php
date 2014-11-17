
<?php
                                                                                  // php code begins

if(!mysql_connect('localhost','root','') || !mysql_select_db('BankMan_heavy1'))  // connect to mysql server and also required database
{	$error='Cant connect';                                 
	die($error);                                                             // use die to abort and give error message 
                                                                                 
}
?>
