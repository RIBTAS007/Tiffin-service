<?php
ob_start();
session_start();
function loggedin2()
{
	if(isset($_SESSION['id'])&&!empty($_SESSION['id']))
	return true;
	else
	return false;
}
?>