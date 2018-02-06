<?php
	require("../includes/functions.php");	
	$rows = query("SELECT * FROM log");
	$ranks=[];
	foreach($rows as $row)
	{
		$name = query("SELECT username FROM users WHERE id =?",$row["id"]);		
		$ranks[] = [
			"name" => $name[0]["username"],
			"red" => $row["red"],
			"blue"=> $row["blue"]

		];
	}
	render("rank_display.php",["title"=>"Rank","ranks"=>$ranks]);
?>
