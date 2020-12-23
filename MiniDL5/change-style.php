<?php

if(isset($_POST['style']))
{
	echo $_POST['style'];
		setcookie("dl-style", $_POST['style'], time()+60*60*24*30, "/");
       
        header("Location: ".$_POST['page'].".php"); exit();
    }
?>