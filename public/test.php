<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery-1.11.1.min.js"></script>
     <script src="/js/bootstrap.min.js"></script>
<script>

$(document).ready(function() {
	
	$(document).keydown(function(e) {
		
			var id =e.keyCode;
			switch(id){
				case 39: $("#1").animate({'left':"+=100"},1000);
				console.log("hello");
				break;
			}
		
	
	});
})

</script>
</head>
<body>
<div id="1" style="position:relative; height:100px;width:100px;background-color:red">
</div>
</body>

</html>

