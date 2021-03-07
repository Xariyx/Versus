<html>
	<head>
	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		

		
		
		
		<script>
	$(document).ready(function(){
			
			
		$("#redClick").click(function(){
				
				
			$.ajax({
				url: "checkIfEnd.php",
			}).done(function(end){
				if(end == 1){
					$.ajax({url: "reset.php"});
				}
				else{
					
					$.ajax({
						url: "getRedValue.php",
					}).done(function( msg ) {
						var clicks = <?php echo file_get_contents("clicksToEnd.txt") ?>;
						var string = "calc(" + msg + " / " + clicks + " * 100%)";
						$("#red").css({"height" : string});
					});
			  
			  
					$.ajax({
						url: "getBlueValue.php",
					}).done(function( msg ) {
						var clicks = <?php echo file_get_contents("clicksToEnd.txt") ?>;
						var string = "calc(" + msg + " / " + clicks + " * 100%)";
					$("#blue").css({"height" : string});
					});
			  
			  
					$.ajax({
						url: "incrementRed.php",
					});
			      
					
					
					
					
				}
			});
		});
	
	
		$("#blueClick").click(function(){
				
				
			$.ajax({
				url: "checkIfEnd.php",
			}).done(function(end){
				if(end == 1){
					$.ajax({url: "reset.php"});
				}
				else{
					
					$.ajax({
						url: "getBlueValue.php",
					}).done(function( msg ) {
						var clicks = <?php echo file_get_contents("clicksToEnd.txt") ?>;
						var string = "calc(" + msg + " / " + clicks + " * 100%)";
						$("#blue").css({"height" : string});
					});
			  
			  
					$.ajax({
						url: "getRedValue.php",
					}).done(function( msg ) {
						var clicks = <?php echo file_get_contents("clicksToEnd.txt") ?>;
						var string = "calc(" + msg + " / " + clicks + " * 100%)";
					$("#red").css({"height" : string});
					});
			  
			  
					$.ajax({
						url: "incrementBlue.php",
					});
			      
				}
			});
		});

	});
		
		

			
		
		
		</script>
		
		<style>
		
		
		body{
			margin: 0;
			overflow:hidden;
			height: 100vh;
			width: 100vw;
		}
		
		.wrapper{
			float: left;
			height:100%;
			width: 50%;
			
		}
		
		.click{
			width: 100%;
			height: 100%;
		}
		
		#redClick{
			position: relative; 
			background-color: rgba(255,0,0,0.6);
			transition:0.5s;
		}
		
		
		#redClick:hover{
			background-color: rgba(255,0,0,0.7);
			transition:0.5s;
		}
		
		
		#blueClick{
			position: relative; 
			background-color: rgba(0,0,255,0.6);
			transition:0.5s;
		}
		
		#blueClick:hover{
			background-color: rgba(0,0,255,0.7);
			transition:0.5s;
		}
		
		
		#blue{
			                position: absolute; 
                bottom: 0px; 

			width: 100%;
			height: calc(<?php echo file_get_contents("blue.txt")?>/<?php echo file_get_contents("clicksToEnd.txt")?> * 100%);
			background-color: blue;

		}
		
		#red{
			                position: absolute; 
                bottom: 0px; 
			width:100%;
			height: calc(<?php echo file_get_contents("red.txt")?>/<?php echo file_get_contents("clicksToEnd.txt")?> * 100%);
			background-color: red;
		}
		
		
		</style>


	</head>
	
	<body>

		<div class="wrapper">	
		
			<div class="click" id="redClick">
				
				<div id="red">
				
				
				
				
				</div>
			</div>
		</div>
		
		
		
		
		<div class="wrapper">	
		
			<div class="click" id="blueClick">
				
				<div id="blue">
				
				
				
				
				</div>
			</div>
		</div>
		
	



	</body>

</html>