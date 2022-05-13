<!doctype html>
<html lang="en">

	<head>
		<title>HOME</title>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="css/styles.css" type="text/css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@200&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<body>
		<!--<script>
			if(typeof(Storage) !== "undefined") {
				let firstName = localStorage.getItem('fname');
			
			if(firstName != null) {
				 document.write("Welcome back, " + firstName +"!");
			}
			 else {
				alert("No Storage for you!");
			}
			}
		</script>-->
		
		<div class="container-fluid" id="main">
			<div id="nav"><?php include("includes/header.php");?></div>
            <!--<div class="row justify-content-center">
                <div class="col-6">

                </div>
            </div>-->

			<div class="row container-fluid justify-content-end" id="heroimg">
                <div class="col-6 align-self-center" id="intro">
                    <p>Hey!.. I’m Adam!<br><br>

                        Welcome to my site...<br><br>

                        What you’ll find here is my professional portfolio, in all it’s nerdy glory!
                        I’ve been working in the IT industry for more than 20 years,
                        so I thought it made sense to showcase not only a snapshot of some of the work that I’ve done,
                        but also to offer some insight into who I am, what I’m into, and what I can do.<br><br>

                        If you like what you see while you’re here, why not “drop me a line” on the Contact page... I’ve always got time for my fans;)
                    </p>
                </div>
                <div class="col-6" id="heroframe">

                    <img src="img/ZeroSuit3_.jpg" class="mainimageM">
                </div>
		    </div>
		<!--<div class="row">
			<div class="col-6" id="stardude">
				<img src="img/Starman.jpg" id="starman">
			</div>
			<div class="col-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
				nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
				reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p> 
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
				nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
				reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>

		</div>-->
            <?php include("includes/footer.php");?>
        </div>
	</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#home").removeClass('notCurrentPage');
        });
    </script>

</html>