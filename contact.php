<html>
	<head>
		<title>CONTACT ME</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="css/styles.css" type="text/css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@200&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<style>
			* { box-sizing: border-box; }
			input[type=text], input[type=tel], textarea { font-size: 18px; outline: 1px solid black;}	
			button { background: #090; color: #fff; }
			button:hover { background: #333; }
			form { display: flex; flex-wrap: wrap; }
			.fieldWrap { padding: 10px; flex-direction: column; flex: 0 50%; }
						
		@media screen and (max-width: 639px) {
			/* label {display: none;  } */
			input[type=text], input[type=tel] { font-size: 28px; width: 100%; padding: 10px; outline: none; border: none;  border-bottom: 1px solid black; margin-bottom: 20px; }
			button { width: 100%; padding: 15px; border-radius: 5px; font-size: 48px;}
			.fieldWrap { flex-direction: column; flex: 0 100%; padding: 0 10px; }
		}
		</style>
	</head>
	<!--<script>
		$('document').ready(function(){
			$('#directions').hide();
		});
		
		function getLocation() {
        if (navigator.geolocation) {
            console.log("asking for location");
            navigator.geolocation.getCurrentPosition(showMap, showError);
        } else { 
            document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
        }
		$('#guide').hide();
    }
    
    
    
    function showMap(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        var zoom = 12;
        
        if (window.innerWidth > 639) {
            zoom = 3;
        } else {
            zoom = 18;
        }
        
        const myCenter = { lat: lat, lng: lon };
        
        var mapProperties = {
            center:myCenter,
            zoom:zoom,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProperties);
        
        var marker = new google.maps.Marker({position: myCenter});
        marker.setMap(map);    
        
        google.maps.event.addDomListener(window, "resize", function() {
            if (window.innerWidth > 639) {
                map.setZoom(12);
            } else {
                map.setZoom(18);
            }         
        });
		$('#directions').show();
    }
	
	function getDirections() {
		var location = navigator.geolocation.getCurrentPosition(showLocation, showError);
		
		function showLocation(location) {
			var lat = location.coords.latitude;
			var lon = location.coords.longitude;
			var dir_url = "https://www.google.ca/maps/dir/"+lat+","+lon+"//Rogers+Centre,+Blue+Jays+Way,+Toronto,+ON/@42.9166291,-83.4430055,7z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x882b34d7b66a4a51:0xe210b2f6fe0b1405!2m2!1d-79.3891437!2d43.6417798";
		
			document.getElementById("getshow").innerHTML = "<a href='"+dir_url+"'>DIRECTIONS TO ROGERS CENTRE</a>";
		}
	}  

    
    
    
    function showError(error) {
    	var myDiv = document.getElementById("location");
        switch(error.code) {
            case error.PERMISSION_DENIED:
                myDiv.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                myDiv.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                myDiv.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                myDiv.innerHTML = "An unknown error occurred."
                break;
        }
    }
	
	
	</script>-->
	<body>
		<div class="container-fluid" id="main">
			<div id="nav"><?php include("includes/header.php");?></div>
			<div id="fanform">
				<form action="form-action.php" method="post" name="myform" id="myForm">
					<p>ENTER YOUR CONTACT DEETS BELOW:</br></p>
                    <div id="form-deets">
                        <div class="fieldWrap">
<!--                            <label for="fname">First Name:</label><br>-->
                            <input type="text" name="fname" id="fname" value="" size="30" placeholder="First Name">
                        </div>
                        <div class="fieldWrap">
<!--                            <label for="lname">Last Name:</label><br>-->
                            <input type="text" name="lname" id="lname" value="" size="30" placeholder="Last Name">
                        </div>
                        <div class="fieldWrap">
<!--                            <label for="email">Email Address:</label><br>-->
                            <input type="text" name="email" id="email" value="" size="30" placeholder="name@domain.com">
                        </div>
                        <div class="fieldWrap">
<!--                            <label for="phone">Phone Number:</label><br>-->
                            <input type="text" name="phone" id="phone" value="" size="15" placeholder="888-888-8888">
                        </div>
                    </div>
					<button type="submit" value="Send email">SUBMIT</button>
                    <p id="ts">
                        TALK SOON!
                    </p>
				</form>
			</div>
            <?php include("includes/footer.php");?>
		</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#contact").removeClass('notCurrentPage');
            });
        </script>
	</body>
</html>