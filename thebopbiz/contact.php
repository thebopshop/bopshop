<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>BOP! DESIGN AND DEVELOPMENT | CONTACT</title>
		<meta name="description" content="BOP! is a micro-studio of web designers and developers based in Reading, Berkshire. We have no philosophy, we just build websites and provide eCommerce services to your specifications and requirements at an affordable price.">
		 
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
		
		<!--SLIDESHOW-->
		 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/slider.css" />
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />-->
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
		<!--/SLIDESHOW-->
		
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->	
		
		<link rel="stylesheet" href="css/lof-slider.css" media="all"  />
				
		<!-- JS -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="js/jquery.easing.js"></script>
		<script src="js/lof-slider.js"></script>
		
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
		<script src="js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="css/carousel.css" />
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow' rel='stylesheet' type='text/css'>


		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="css/lessframework.css"/>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="js/jquery.flexslider.js"></script>
		
		

	</head>
	
	
	<body class="home">
	
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<h1><a href="index.php"><img  src="img/logo.png" alt="Simpler">DESIGN AND DEVELOPMENT</a></h1>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li><a href="index.php">HOME</a></li>
					<!--<li><a href="#">ABOUT</a></li>-->
					<li><a href="the-portfolio.php">PORTFOLIO</a></li>
					<li class="current-menu-item"><a href="contact.php">CONTACT</a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->
				
				
				





			</div>
		</header>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
				
			<!-- page content-->
        	<div id="page-content" class="cf">        	
	        		
	        	
	        	
				
				
				<!-- Map -->
				<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" ></script>
				<script type="text/javascript">
					function initialize() {
						var latlng = new google.maps.LatLng(51.443024,-0.989742);
						var myOptions = {
						  zoom: 12,
						  center: latlng,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
						  
					};
					var map = new google.maps.Map(document.getElementById("map_canvas"),
					    myOptions);
						var addressArray = new Array("Lesford Road, Reading");
var geocoder = new google.maps.Geocoder();
//comment this back out for no marker
for (var i = 0; i < addressArray.length; i++) {
geocoder.geocode( { 'address': addressArray[i]}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
var marker = new google.maps.Marker({
map: map,
position: results[0].geometry.location
});
} else {
alert("Geocode was not successful for the following reason: " + status);
}
});
}
					}
				</script>
				
				<div id="map-holder">
				
				<div id="map-content">
						<h3>BOP! DESIGN AND DEVELOPMENT</h3><br/>
						<p>36 Lesford Road<br/>
						Reading<br/>
						RG1 6DX<br/>
						<br/>
						Tel. 01189548068<br/>
						<a href="mailto:info@thebop.biz">info@thebop.biz</a></p>
	        	
						
					</div>
				
					<div id="map_canvas"></div>
					
				</div>
				
				<!-- ENDS Map -->
				
				
				<!--<h3>CONTACT US</h3>
				<br/>
				<!-- form -->
				<!--<script type="text/javascript" src="js/form-validation.js"></script>
				<form id="contactForm" action="#" method="post">
					<fieldset>
														
						<p>
							<label for="name" >Name</label>
							<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
						</p>
						
						<p>
							<label for="email" >Email</label>
							<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
						</p>
						
						<p>
							<label for="web">Website</label>
							<input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
						</p>
						
						<p>
							<label for="comments">Message</label>
							<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
						</p>
						
						<!-- send mail configuration -->
						<!--<input type="hidden" value="bop-contact" name="subject" id="subject" />
						<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
						<!-- ENDS send mail configuration -->
						
						<!--<p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
					</fieldset>
					
				</form>
				<p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
				<!-- ENDS form -->				
				
    		</div>
    		<!-- ENDS page content-->
			
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
		
		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<!--<ul  class="widget-cols cf">
					<li class="first-col">
						
						<div class="widget-block">
							<h4>RECENT POSTS</h4>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Continually fashion mission-critical experiences and.</a><span> February 6, 2013</span>
								</div>
							</div>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Continually fashion mission-critical experiences and.</a><span> February 6, 2013</span>
								</div>
							</div>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Continually fashion mission-critical experiences and.</a><span> February 6, 2013</span>
								</div>
							</div>
						</div>
					</li>
					
					<li class="second-col">
						
						<div class="widget-block">
							<h4>ABOUT</h4>
							<p>Objectively brand interdependent web-readiness before market-driven quality vectors. Enthusiastically impact.</p> 
							<p>Objectively brand interdependent web-readiness before market-driven quality vectors. Enthusiastically impact.</p>
						</div>
						
					</li>
					
					<li class="third-col">
						
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>TWITTER </h4>
		         			</div>
		         		</div>
		         		
					</li>
					
					<li class="fourth-col">
						
						<div class="widget-block">
							<h4>CATEGORIES</h4>
							<ul>
								<li class="cat-item"><a href="#" >Wordpress</a></li>
								<li class="cat-item"><a href="#" >Drupal</a></li>
								<li class="cat-item"><a href="#" >Magento</a></li>
								<li class="cat-item"><a href="#" >OpenCart</a></li>
								
							</ul>
						</div>
		         		
					</li>	
				</ul>-->
				<!-- ENDS widgets -->	
				
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left">&copy; <a href="http://thebop.biz" >bop design and development</a></div>
						<ul id="social-bar" class="cf sb">
							<li><a href="http://facebook.com/BopDesignDevelopmentCompany"  title="Become a fan" class="facebook">Facebbok</a></li>
							<li><a href="http://twitter.com/kingofthebop" title="Follow our tweets" class="twitter"></a></li>
							<li><a href="http://plus.google.com" title="Enter our circles" class="plus"></a></li>
						</ul>
				</div>	
				<!-- ENDS bottom -->
			
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		
		<!-- Start google map -->
		<script>initialize();</script>
		
		<!--GOOGLE ANALYTICS-->
		
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38450263-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
	</body>
	
	
	
</html>