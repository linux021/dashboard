<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine or request Chrome Frame -->
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Use title if it's in the page YAML frontmatter -->
		<title>Welcome to School of Engineering</title>

		<meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
		<meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

		<link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


		<link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


	</head>

	<body class="index" onload="startTime();">
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
					fjs.parentNode.insertBefore(js, fjs);
				}
				(document, 'script', 'facebook-jssdk'));
				imgArray = new Array("images/1.png","images/2.png","images/3.png");
				imgCount = 0;
				function startTime() {
					if(imgCount == imgArray.length) {
						imgCount = 
				}
				document.getElementById("img1").src = imgArray[imgCount];
				imgCount++;
				setTimeout("startTime()", 5000);
			}
		</script>
		<div class="contain-to-grid">
			<nav class="top-bar" data-topbar>
				<ul class="title-area">
					<li class="name">
						<h1><a href="/dashboard/index.html">George Mason University</a></h1>
					</li>
					<li class="toggle-topbar menu-icon">
						<a href="#">
							<span>Menu</span>
						</a>
					</li>
				</ul>

				<section class="top-bar-section">
				<!-- Right Nav Section -->
				<ul class="right">
					<li class=""><a href="/applications.html">Alumni</a></li>
					<li class=""><a href="/dashboard/faq.html">Get Involed</a></li>
					<li class=""><a href="/dashboard/howto.html">Alumni Career Resources</a></li>
					<li class=""><a href="/dashboard/pics.php">Event Pictures</a></li>
					<li class=""><a target="_blank" href="/dashboard/phpinfo.php">Department News</a></li>
					<!-- <li class=""><a href="/phpmyadmin/">Admin</a></li> -->
					<li class=""><a href="logindex.html">Administrator Login</a></li>
					<li class=""><a href="signindex.html">Sign up</a></li>
					</ul>
				</section>
			</nav>
		</div>

		<div id="wrapper">
			<div class="hero">
				<div class="row">
					<div class="large-12 columns">
						<h1><img src="/dashboard/images/gmu.png" />Volgenau School of Engineering  <span>ALUMNI HOMEPAGE</span></h1>
						<!--<h1><img id="img1" />Volengue <span>School of Engineering</span></h1>-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<iframe src="https://calendar.google.com/calendar/embed?mode=WEEK&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=volgeanu.alumni%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="500" height="300" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<h2>Engineering Alumni - WE LOVE OUR ALUMS! </h2>
			</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<p>
						Volgenau engineers are a diverse community of more than 53,000 innovative, influential professionals. They shape the future of technology, business, medicine, the environment and many other endeavors. Engineers change the world for the better.
					</p>
					<p>
						Alumni Relations offers a broad range of services including career resources, educational opportunities, intellectual programs and events.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<h3>STRENGTH IN NUMBERS</h3>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<p>
						Engineering alums account for fully a quarter of all GMU alumni. An incredibly large number of you – nearly 37 percent – stayed right here in Washington Metro Area. More numbers below:
						<ul>
							<li> <b>20,546<b>:  Engineering alumni
							<li> <b>10,763<b>: Engineering alumni in the Washington Metropolitan Area.
							<li> <b>6,198<b>: Engineering alumni outside the United States
							<li> <b>200<b>: Estimated number of engineering alumni who have founded companies
						</ul>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<h3>STAY CONNECTED</h3>
					<span><b>Alumni eNews<b> </span>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<p>
						Subscribe to the monthly alumni e-mail for updates on the faculty research, school news, alumni events and professional development. To subscribe, simply update your email address with the <a href="https://translate.apachefriends.org/">GMU Alumni Association</a>
						Non-engineering Volgenau alumni can subscribe by sending an email to <a href="https://translate.apachefriends.org/">engineering-volgeau@gmu.edu.<a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<h3>GMU Engineering on LinkedIn </h3>
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
					<li class="facebook"><a href="https://www.linkedin.com/company/george-mason-university">LinkedIn</a></li>
				</div>
			</div>

		</div>

		<footer>
			<div class="row">
				<div class="large-12 columns">
					<div class="row">
						<div class="large-8 columns">
							<ul class="social">
								<li class="twitter"><a href="https://twitter.com/apachefriends">Follow us on Twitter</a></li>
								<li class="facebook"><a href="https://www.facebook.com/we.are.xampp">Like us on Facebook</a></li>
								<li class="google"><a href="https://plus.google.com/+xampp/posts">Add us to your G+ Circles</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- JS Libraries -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
	</body>
</html>
