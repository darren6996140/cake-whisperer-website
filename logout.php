<?php
session_start();

//destroying the session
if(session_destroy())
{
	header("Location: index.php");
	//redirect to main page
}

?>