    <div style="width:100%;font-weight:bold;top:200px;">
    <form action="pickcolor.php" method="post">
    <fieldset>
        
        <div class="form-group" style="position:absolute;left:495px;top:200px">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $username1?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <select autofocus class="form-control" name="color1" />
	    	<option value="red">red</option>
		<option value="blue">blue</option>
	    </select>
        </div>
        <div class="form-group" style="position:absolute;left:500px;top:250px">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $username2?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <select autofocus class="form-control" name="color2"  />
		<option value="red">red</option>
		<option value="blue">blue</option>
	    </select>
        </div>
	
        <div class="form-group" style="position:absolute;left:580px;top:350px">
            <button type="submit" class="btn btn-info  btn-lg">Let's Start</button>
        </div>
    </fieldset>
    </form>
    </div>
