<?php
    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if(empty($_POST["username"]))
        {
            apologize("You must provide your username");
            
        }
        else if(empty($_POST["password"]))
        {
            apologize("You must provide your password");
        }
        if($_POST["password"] !== $_POST["confirmation"])
        {
            apologize("password not consistent");
        }
        $newuser = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
        if($newuser === false )
        {
            apologize("username already exists");
        }
        $id = query("SELECT * FROM users WHERE username =?",$_POST["username"]);
	$realid = $id[0]["id"];
	query("INSERT INTO log (id) VALUES(?)",$realid);
        redirect("index.php");
    }
?>
