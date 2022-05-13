<nav>
	<div class="menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
	</div>
	<div class="container-fluid" id="navbar">
        <div class="row">
            <div class="col">
                <h1 id="name">ADAM CAMPEAU</h1>
            </div>

            <div class="col align-self-start">
                <div class="site-title">
                    <h1>A Professional Portfolio</h1>
                    <ul id="navlinks">
                        <li><a id="homelink" href="index.php">HOME  |</a></li>
                        <li><a id="aboutlink" href="about.php">ABOUT  ||</a></li>
                        <li><a id="workslink" href="works.php">WORKS  |||</a></li>
                        <li><a id="contactlink" href="contact.php">CONTACT  ||||</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-start page-title">
            <div class="col-2">
                <h3 class="notCurrentPage" id="home">HOME</h3>
            </div>
            <div class="col-2">
                <h3 class="notCurrentPage" id="about">ABOUT</h3>
            </div>
            <div class="col-2">
                <h3 class="notCurrentPage" id="works">WORKS</h3>
            </div>
            <div class="col-2">
                <h3 class="notCurrentPage" id="contact">CONTACT</h3>
            </div>
        </div>
    </div>
	<div id="mobile-menu">
		<ul>
			<li><a href="index.php">| - HOME</a></li>
			<li><a href="about.php">|| - ABOUT</a></li>
			<li><a href="works.php">||| - WORKS</a></li>
			<li><a href="contact.php">|||| - CONTACT</a></li>
		</ul>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>
       /* $("#homelink").on('mouseover', function() {
            //handle page titles
            $("#home").removeClass('notCurrentPage')

        });
        $("#homelink").on('mouseout', function() {
            //handle page titles
            $("#home").addClass('notCurrentPage')
        });

        $("#aboutlink").on('mouseover', function() {
            //handle page titles
            $("#about").removeClass('notCurrentPage')

        });
        $("#aboutlink").on('mouseout', function() {
            //handle page titles
            $("#about").addClass('notCurrentPage')
        });

        $("#workslink").on('mouseover', function() {
            //handle page titles
            $("#works").removeClass('notCurrentPage')

        });
        $("#workslink").on('mouseout', function() {
            //handle page titles
            $("#works").addClass('notCurrentPage')
        });

        $("#contactlink").on('mouseover', function() {
            //handle page titles
            $("#contact").removeClass('notCurrentPage')

        });
        $("#contactlink").on('mouseout', function() {
            //handle page titles
            $("#contact").addClass('notCurrentPage')
        });*/

        $(document).ready(function() {
            $(".menu").click(function() {
                $("#mobile-menu").slideToggle(500);
            });
            $(window).resize(function() {
                $("#mobile-menu").hide();
            });
        });
	</script>
</nav>