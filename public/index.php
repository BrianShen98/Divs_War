<?php
    require("../includes/config.php");
    if(!empty($_SESSION["id"]))
    {
	$rows = query("SELECT * FROM users WHERE online= 1");
	$row1 = $rows[0];
	$row2=$rows[1];
	render("mainpage.php",["title" => "Game!","username1"=>$row1["username"],"username2" =>$row2["username"]]);
    }
    else{ 
	query("UPDATE users SET online = 0 WHERE online = 1");  
	query("UPDATE users SET blue =0 WHERE blue=1");
	query("UPDATE users SET red =0 WHERE red =1"); 	
	render("mainpage.php",["title" => "Game!","username1"=>"","username2"=>""]);
    }





?>
