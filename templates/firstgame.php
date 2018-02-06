<!DOCTYPE html>
<html>
<head>
     <link href="/css/bootstrap.min.css" rel="stylesheet"/>
     <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
     <link href="/css/styles.css" rel="stylesheet"/>    

     <title>Game</title>
     <script src="/js/jquery-1.11.1.min.js"></script>
     <script src="/js/bootstrap.min.js"></script>
     <script src="/js/scripts.js"></script>
</head>
<body>
<div id="blockone">
    <div id="blockup"></div>
    <div id="blockdown"></div>
    <div id="blockleft"></div>
    <div id="blockright"></div>
    <div id="lethal" class ="attack" style="top:100px;left:100px"></div>
    
  
    
    <div></div>
</div >

<div id= "blockmiddle">	

	<div id ="board" class="pretty_font"><br>&nbsp; Trap(B): <span id = "trap"> 6 </span><br><br>&nbsp; Cross(N): <span id="cross"> 4</span></div>
	<div id="time" class ="pretty_font">Time: <span id="seconds"> 30</span></div>
	<div id="back" style="position:absolute;top:100px;left:630px;font-size:30px;z-index:4000;display:none"><a href="index.php" >Back</a></div>
	<div id="1" class = "smallblock"> </div>
	<div id="2" class="smallblock" style="left:100px"></div>
	<div id="3" class="smallblock" style="left:200px"></div>
	<div id="4" class="smallblock" style="left:300px"></div>
	<div id="5" class="smallblock" style="left:400px"></div>
	<div id="6" class="smallblock" style="left:500px"></div>
	<div id="7" class="smallblock" style="left:600px"></div>
	<div id="8" class="smallblock" style="left:700px"></div>
	<div id="9" class="smallblock" style="left:800px"></div>
	<div id="10" class="smallblock" style="left:900px"></div>
	<div id="11" class="smallblock" style="left:1000px"></div>
	<div id="12" class="smallblock" style="left:1100px"></div>
	<div id="13" class="smallblock" style="left:1200px"></div>
	<div id="14" class = "smallblock" style="top:100px"></div>
	<div id="15" class="smallblock" style="top:100px;left:100px"></div>
	<div id="16" class="smallblock" style="top:100px;left:200px"></div>
	<div id="17" class="smallblock" style="top:100px;left:300px"></div>
	<div id="18" class="smallblock" style="top:100px;left:400px"></div>
	<div id="19" class="smallblock" style="top:100px;left:500px"></div>
	<div id="20" class="smallblock" style="top:100px;left:600px"></div>
	<div id="21" class="smallblock" style="top:100px;left:700px"></div>
	<div id="22" class="smallblock" style="top:100px;left:800px"></div>
	<div id="23" class="smallblock" style="top:100px;left:900px"></div>
	<div id="24" class="smallblock" style="top:100px;left:1000px"></div>
	<div id="25" class="smallblock" style="top:100px;left:1100px"></div>
	<div id="26" class="smallblock" style="top:100px;left:1200px"></div>
	<div id="27" class = "smallblock" style="top:200px"></div>
	<div id="28" class = "smallblock" style="top:200px;left:100px"></div>
	<div id="29" class = "smallblock" style="top:200px;left:200px"></div>
	<div id="30" class = "smallblock" style="top:200px;left:300px"></div>
	<div id="31" class = "smallblock" style="top:200px;left:400px"></div>
	<div id="32" class = "smallblock" style="top:200px;left:500px"></div>
	<div id="33" class = "smallblock" style="top:200px;left:600px"></div>
	<div id="34" class = "smallblock" style="top:200px;left:700px"></div>
	<div id="35" class = "smallblock" style="top:200px;left:800px"></div>
	<div id="36" class = "smallblock" style="top:200px;left:900px"></div>
	<div id="37" class = "smallblock" style="top:200px;left:1000px"></div>
	<div id="38" class = "smallblock" style="top:200px;left:1100px"></div>
	<div id="39" class = "smallblock" style="top:200px;left:1200px"></div>
	<div id="40" class = "smallblock" style="top:300px"></div>
	<div id="41" class = "smallblock" style="top:300px;left:100px"></div>
	<div id="42" class = "smallblock" style="top:300px;left:200px"></div>
	<div id="43" class = "smallblock" style="top:300px;left:300px"></div>
	<div id="44" class = "smallblock" style="top:300px;left:400px"></div>
	<div id="45" class = "smallblock" style="top:300px;left:500px"></div>
	<div id="46" class = "smallblock" style="top:300px;left:600px"></div>
	<div id="47" class = "smallblock" style="top:300px;left:700px"></div>
	<div id="48" class = "smallblock" style="top:300px;left:800px"></div>
	<div id="49" class = "smallblock" style="top:300px;left:900px"></div>
	<div id="50" class = "smallblock" style="top:300px;left:1000px"></div>
	<div id="51" class = "smallblock" style="top:300px;left:1100px"></div>
	<div id="52" class = "smallblock" style="top:300px;left:1200px"></div>
	<div id="53" class = "smallblock" style="top:400px"></div>
	<div id="54" class = "smallblock" style="top:400px;left:100px"></div>
	<div id="55" class = "smallblock" style="top:400px;left:200px"></div>
	<div id="56" class = "smallblock" style="top:400px;left:300px"></div>
	<div id="57" class = "smallblock" style="top:400px;left:400px"></div>
	<div id="58" class = "smallblock" style="top:400px;left:500px"></div>
	<div id="59" class = "smallblock" style="top:400px;left:600px"></div>
	<div id="60" class = "smallblock" style="top:400px;left:700px"></div>
	<div id="61" class = "smallblock" style="top:400px;left:800px"></div>
	<div id="62" class = "smallblock" style="top:400px;left:900px"></div>
	<div id="63" class = "smallblock" style="top:400px;left:1000px"></div>
	<div id="64" class = "smallblock" style="top:400px;left:1100px"></div>
	<div id="65" class = "smallblock" style="top:400px;left:1200px"></div>
	<div id="font1" class="pretty_font"><?= $user1["username"] ?><img src="/img/versus3.png" width="150" height="150"/><?= $user2["username"]?></div>
</div>
	<div id="lose1"class="lose"style="top:200px;left:300px"><img src="/img/lose.png" width="300" height ="100"/></div>
	<div id="lose2"class="lose" style="top:200px;left:720px"><img src="/img/lose.png" width="300" height="100"/></div>
	<div id="blue" class = "win" style="color:blue">
		<?php if($user2["blue"] == 1):?>
			
				<?= $user2["username"] . "&nbsp&nbsp&nbsp&nbsp&nbsp" . "wins!";?>
				
			
		<?php else :?>
			
				<?= $user1["username"] . "&nbsp&nbsp&nbsp&nbsp&nbsp" . "wins!"; ?>
			
		<?php endif; ?>
		

		
	</div>
	<div id="red" class = "win" style="color:#ffbb01">
		<?php if($user2["red"] == 1): ?>
			
				<?= $user2["username"] . "&nbsp&nbsp&nbsp&nbsp&nbsp" . "wins!";?>
					
		<?php else: ?>
			
				<?= $user1["username"] . "&nbsp&nbsp&nbsp&nbsp&nbsp" . "wins!";?>
				

		<?php endif; ?>
	</div>
<div id= "blocktwo">
	<div class="defense" id ="a" style ="top:-200px;left:-200px"></div>
	<div class="defense" id="b" style ="top:200px;left:200px"></div>
	<div class="defense" id="c" style ="left:-200px;top:200px"></div>
	<div class="defense" id="d" style ="left:200px;top:-200px"></div>
	<div class="defense" id="e" style ="left:200px"></div>
	<div class="defense" id="f" style ="left:-200px"></div>
	
</div>
	<div id="66" class = "smalldownblock" style="top:500px"></div>
	<div id="67" class = "smalldownblock" style="top:500px;left:100px"></div>
	<div id="68" class = "smalldownblock" style="top:500px;left:200px"></div>
	<div id="69" class = "smalldownblock" style="top:500px;left:300px"></div>
	<div id="70" class = "smalldownblock" style="top:500px;left:400px"></div>
	<div id="71" class = "smalldownblock" style="top:500px;left:500px"></div>
	<div id="72" class = "smalldownblock" style="top:500px;left:600px"></div>
	<div id="73" class = "smalldownblock" style="top:500px;left:700px"></div>
	<div id="74" class = "smalldownblock" style="top:500px;left:800px"></div>
	<div id="75" class = "smalldownblock" style="top:500px;left:900px"></div>
	<div id="76" class = "smalldownblock" style="top:500px;left:1000px"></div>
	<div id="77" class = "smalldownblock" style="top:500px;left:1100px"></div>
	<div id="78" class = "smalldownblock" style="top:500px;left:1200px"></div>
	<div id="79" class = "smalldownblock" style="top:600px"></div>
	<div id="80" class = "smalldownblock" style="top:600px;left:100px"></div>
	<div id="81" class = "smalldownblock" style="top:600px;left:200px"></div>
	<div id="82" class = "smalldownblock" style="top:600px;left:300px"></div>
	<div id="83" class = "smalldownblock" style="top:600px;left:400px"></div>
	<div id="84" class = "smalldownblock" style="top:600px;left:500px"></div>
	<div id="85" class = "smalldownblock" style="top:600px;left:600px"></div>
	<div id="86" class = "smalldownblock" style="top:600px;left:700px"></div>
	<div id="87" class = "smalldownblock" style="top:600px;left:800px"></div>
	<div id="88" class = "smalldownblock" style="top:600px;left:900px"></div>
	<div id="89" class = "smalldownblock" style="top:600px;left:1000px"></div>
	<div id="90" class = "smalldownblock" style="top:600px;left:1100px"></div>
	<div id="91" class = "smalldownblock" style="top:600px;left:1200px"></div>
	<div id="font" class="pretty_font">Safe House</div>
	<div id="board1" class="pretty_font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block(1): <span id="block"> 1000</span><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;StormGuard(2):<span id="stormguard"> 1000</span><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ghost(3/4): <span id="ghost"> 1000</span></div>
</body>

</html>

