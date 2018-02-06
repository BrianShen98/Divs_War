<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        redirect("index.php");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username1"])|| empty($_POST["username2"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password1"]) || empty($_POST["password2"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ? OR username= ?", $_POST["username1"],$_POST["username2"]);

        // if we found user, check password
        if (count($rows) == 2)
        {
            // first (and only) row
            $row1 = $rows[0];
	    $row2 = $rows[1];
            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password1"], $row1["hash"]) == $row1["hash"] && crypt($_POST["password2"], $row2["hash"]) == $row2["hash"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row1["id"];
		query("UPDATE users SET online =1 WHERE id = ?",$row1["id"]);
		query("UPDATE users SET online =1 WHERE id = ?",$row2["id"]);
                // redirect to portfolio
                redirect("index.php");
            }
	    else
	    {
		
		apologize("One of the passwords is not valid!");
	    }
        }

        // else apologize
	else{
	print $rows[2]["username"];
        apologize("One of the users not exists!");
	}
    }

?>
