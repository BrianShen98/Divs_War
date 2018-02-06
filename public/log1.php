<?php
	require(__DIR__ . "/../includes/config.php");
	$rows= query("SELECT * FROM users WHERE red = 1");
	$row1 = $rows[0]["id"];
	$id = query("SELECT id FROM users WHERE online=1");
	$decide;	
	if($row1 == $id[0]["id"])
	{
		$decide=0;
	}
	else
	{
		$decide=1;
	}
	$judge = query("UPDATE log SET red = red+1 WHERE id = ?",$row1);
	header("Content-type: application/json");
        print(json_encode($decide, JSON_PRETTY_PRINT));
	

?>
