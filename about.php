<!doctype html>
<html lang="en">

	<head>
		<title>ABOUT ME</title>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@200&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="css/styles.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container-fluid" id="about-main">
			<div id="nav"><?php include("includes/header.php");?></div>
			<div class="shadow"><img class="aboutimageD" src="img/brain.png">

		    </div>
		<div class="row" id="resume-frame">
            <div class="col-4 align-self-start">
                <p id="resume-comment">Behold!.. The Resume!<br><br>
                Feel free to "puruse"... There's bound to be something in all of this that appeals to you.
                As you can see, I've been busy... When I'm not learning on the job, I do it whenever, wherever, and however
                I can.<br><br><!-- Trigger/Open The Modal -->
                    <button id="myBtn">VIEW RESUME</button></p>
            </div>
			<!--<div class="col-8" id="resume">
				<img src="img/AC_RES_2022_Page_1.jpg" class="pages">
                <img src="img/AC_RES_2022_Page_2.jpg" class="pages">
                <img src="img/AC_RES_2022_Page_3.jpg" class="pages">
            </div>-->


            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div id="resume">
                        <img src="img/AC_RES_2022_Page_1.jpg" class="pages">
                        <img src="img/AC_RES_2022_Page_2.jpg" class="pages">
                        <img src="img/AC_RES_2022_Page_3.jpg" class="pages">
                    </div>
                </div>

            </div>
		</div>

            <?php include("includes/footer.php");?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#about").removeClass('notCurrentPage');
                // Get the modal
                var modal = document.getElementById("myModal");

// Get the button that opens the modal
                var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                }

// When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

// When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            });
        </script>
	</body>
</html>