<!DOCTYPE HTML>
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="<?=base_url()?>home/assets/css/main.css" />

    </head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">

                            <h1>top_Quote</h1>
							<i><h3 style="padding-left: 30px;" id ='random_quote'></h3></i>
                            <hr>
							<!-- <p class="major">A (modular, highly tweakable) responsive one-page template designed by <a href="https://github.com/as3eem">HTML5 UP</a> and released for free under the <a href="https://github.com/kpiyushit">Creative Commons</a>.</p> -->
							<ul class="actions vertical">
                                <li><form action="<?=base_url('index.php/welcome/newBusiness')?>"><input type="submit" value="Register" class="button big wide smooth-scroll-middle"></form></li>
                                <br>
								<li><form action="<?=base_url('index.php/welcome/currentLocation')?>" method="post">
                                        <input type="submit" value="Enjoy Service" class="button big wide smooth-scroll-middle">
                                    </form>
                                </li>
							</ul>
						</div>
						<div class="image">
							<img src="<?=base_url()?>home/images/banner.jpg" alt="" />
						</div>
					</section>

				

		 <!-- Scripts --> 
			<script src="<?=base_url()?>home/assets/js/jquery.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/skel.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/util.js"></script>
<!--			 <script src="--><?//=base_url()?><!--home/assets/js/main.js"></script>-->

			<script type="text/javascript">
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
