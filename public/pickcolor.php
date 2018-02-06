<?php
 require("../includes/config.php"); 
    $rows = query("SELECT username FROM users WHERE online=1");
    $row1=$rows[0];
    $row2=$rows[1];        
    query("UPDATE users SET blue=0 WHERE blue =1");
    query("UPDATE users SET red= 0 WHERE red =1");
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
	
	// else render form
        render("pickcolor_form.php",["title"=>"Pick a Side","username1"=>$row1["username"],"username2"=>$row2["username"]]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
	$rows = query("SELECT username FROM users WHERE online=1");
	$row1=$rows[0];
	$row2=$rows[1];                
	// validate submission
        if ($_POST["color1"] == $_POST["color2"])
        {
            apologize("You need to pick different sides.");
        }
        else
	{

	   if($_POST["color1"] == "blue")
	    {
		query("UPDATE users SET blue =1 WHERE username = ?",$row1["username"]);
		query("UPDATE users SET red = 1 WHERE username = ?",$row2["username"]);
	    }
	    else
	    {
		query("UPDATE users SET red =1 WHERE username = ?",$row1["username"]);
		query("UPDATE users SET blue = 1 WHERE username = ?",$row2["username"]);
	    }
	    redirect("game.php");
	    
	    
	}


    }





?>
