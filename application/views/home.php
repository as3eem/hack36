<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
     
		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
						<h1>CodeChamps</h1>
							<h3 id='random_quote'>Story</h3>
							<!-- <p class="major">A (modular, highly tweakable) responsive one-page template designed by <a href="https://html5up.net">HTML5 UP</a> and released for free under the <a href="https://html5up.net/license">Creative Commons</a>.</p> -->
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Register</a></li>
							</ul>
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Get Started</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/banner.jpg" alt="" />
						</div>
					</section>

				

		 Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script>
             function randomQuote() {
        $.ajax({
            url: "https://api.forismatic.com/api/1.0/?",
            dataType: "jsonp",
            data: "method=getQuote&format=jsonp&lang=en&jsonp=?",
            success: function( response ) {
                $("#random_quote").html("<p id='random_quote' class='lead text-center'>" +
                    response.quoteText + "<br/>&dash; " + response.quoteAuthor + " &dash;</p>");
                $("#tweet").attr("href", "https://twitter.com/home/?status=" + response.quoteText +
                    ' (' + response.quoteAuthor + ')');
            }
        });
    }

    $(function() {
        randomQuote();
    });

    $("button").click(function(){
        randomQuote();
    });
            </script>
	</body>
</html>