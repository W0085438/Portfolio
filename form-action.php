<!DOCTYPE html>
	<head>
		<title>Rush - Thank You</title>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<link href="css/styles.css" type="text/css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@200&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<body>
		<div id="container">
			<div id="nav"><?php include("includes/header.php");?></div>
			<div class="page-title"><h3>Thank You!</h3></div>
			<div id="spacer"></div>
				<div id="thanks">
					<div id="info">
						<?php
						 $firstname = @$_POST['fname'];
						 $lastname = @$_POST['lname'];
						 $phone = @$_POST['phone'];
						 $email = @$_POST['email'];
					

						 echo "Thank you!<br> 
								<br>We've received the following information from you:<br>
								<br>FIRST NAME: &nbsp; &nbsp; &nbsp; $firstname<br>
								LAST NAME: &nbsp; &nbsp; &nbsp; $lastname<br>
								PHONE: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $phone<br>
								EMAIL: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$email<br>
								<br>Remember to keep it Between the Wheels!<br>
								<br>"; 
						?>

						<script>
							
							if (typeof(Storage) !== "undefined") {
								
								localStorage.setItem("fname", "<?php echo @$_POST['fname']; ?>");
								localStorage.setItem("lname", "<?php echo @$_POST['lname']; ?>");
								localStorage.setItem("phone", "<?php echo @$_POST['phone']; ?>");
								localStorage.setItem("email", "<?php echo @$_POST['email']; ?>");		
							} else {
								
								alert("No Storage for you!");
							}
							
							function showMessage(){
								var firstname = localStorage.getItem("fname");
								
							}
							
						</script>
						<a href="index.php" id="back-home" onclick="showMessage()";>BACK HOME</a>
					</div>
				</div>	
				
			<?php include("includes/footer.php");?>
		</div>
	</body>
</html>