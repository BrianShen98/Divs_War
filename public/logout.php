<?php

    // configuration
    require("../includes/config.php"); 
    
    query("UPDATE users SET red = 0 WHERE online =1");
    query("UPDATE users SET blue = 0 WHERE online =1");
    query("UPDATE users SET online=0 WHERE online=1");
    // log out current user, if any
    logout();

    // redirect user
    redirect("/");

?>
