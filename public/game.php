<?php
    require("../includes/config.php");
    $rows = query("SELECT * FROM users WHERE online =1");
    $row1 = $rows[0];
    $row2 = $rows[1];

    render1("firstgame.php",["user1"=>$row1,"user2"=>$row2]);
    
    
?>
