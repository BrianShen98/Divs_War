
<script>
	$(function(){
	$("#click").click(function(){
		$("#fade").css("display","block");
		$("#light").css("display","block");
	});
	

});
</script>
<div id="first">
<?php if(!empty($username1 && $username2))
      {
	   echo "<p style='color:#7A46D9'>Hello! " . $username1 . " & " . $username2 . "</p>";
	   
      }

?>

</div>
<div id="second" class="pretty_font">
<?php 
if(!empty($username1 && $username2))
{
	echo"Let's Fight!<br><a href='pickcolor.php'><img src='/img/fight4.png' width= '200' height='200'/></a></div>";
}
?>

</div>
<div id="third">
    <?php 
	if(empty($_SESSION["id"]))
	{
		echo "<a style='cursor:pointer' id='click' class='linkfont'>Log in</a>";
	}
	else
	{
		echo "<a href='logout.php' class='linkfont'>Log out</a>";
	}
    ?>
</div>
<div id="forth"></div>
<div id="fifth"></div>
<div id="sixth" class="pretty_font"><a href="rank.php">Rank</a></div>
<div id = "fade" class="black_overlay">
</div>
<div id="light" class="white_content">
    <div style="text-align:right">
        <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none'; document.getElementById   ('fade').style.display='none'" ><img src="/img/cross.png" width="30" height="30"/></a>
    </div>
    <div class="pretty_font" style="text-align:center">
	<h1 >Log In<h1>
    </div> 
   
    
    
    
    <div style="width:100%;font-weight:bold">
    <form action="login.php" method="post">
    <fieldset>
        
        <div class="form-group">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Player 1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input autofocus class="form-control" name="username1" placeholder="Username" type="text" />
        </div>
	
	
        <div class="form-group">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input class="form-control" name="password1" placeholder="Password" type="password"/>
        </div>
	 <div class="form-group">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Player 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input autofocus class="form-control" name="username2" placeholder="Username" type="text" />
        </div>
	 <div class="form-group">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input class="form-control" name="password2" placeholder="Password" type="password"/>
        </div>
        <div class="form-group" style="position:absolute;left:200px">
            <button type="submit" class="btn btn-info  btn-lg">Let's Start</button>
        </div>
    </fieldset>
    </form>
    </div>
    <div class="pretty_font" style="text-align:center;position:absolute;top:370px;left:140px">
    <h3>or <a href="register.php">register</a> for an account</h3>
    </div>
</div>
