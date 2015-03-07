<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="Sylvain Zyssman's Website" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>JingleWeb</title>

<!--[if lt IE 9]> HTML5Shiv
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="dist/css/built.min.css">
</head>
<body>
	<nav role='navigation'>
		<p class='site-name'><img src='img/SZ.png' alt='Sylvain ZYSSMAN'>Sylvain<strong>ZYSSMAN</strong><span class='red'>.fr</span></p>
		<ul class='menu'>
			<li><a href='#' class='cl-effect-1 active' title='back to top'>home</a></li>
			<li><a href='#about' class='cl-effect-1' title='Learn more about me'>about me</a></li>
			<li><a href='#works' class='cl-effect-1' title='View my works'>work</a></li>
			<li><a href='#contact' class='cl-effect-1' title='Contact me'>contact</a></li>
		</ul>
	</nav>
	<div id='home'>
		<div class='social'>
			<ul class='social-networks'>
				<li class='github'><a href='https://github.com/sylzys' target='blank_' title='View my Github profile'></a></li>
				<li class='twitter'><a href='http://twitter.com/sylzys' target='blank_' title='View my Twitter profile'></a></li>
				<li class='linkedin'><a href='http://fr.linkedin.com/in/sylvainzyssman/' title='View my Linkedin profile'></a></li>
			</ul>
		</div>
		<div class='content'>
			<h1>HELLO WORLD !<br/>I’M SYLVAIN, A FRENCH <strong>FULLSTACK WEB DEVELOPER</strong></h1>
			<p class='contact-me'><span class='pen'></span><a href='#contact' title='hire me'>hire me</a></p>
		</div>
		<a href='#about' title='Learn more about me'><p class='down' aria-label='Scroll down'></p></a>
	</div>
	<div id="about">
		<h2>about me</h2>
		<div class='content'>
			<div class='row'>
				<div class='talks'>
					<div><p class='category'>talks</p><p class='short-desc'>I like sharing what I learn and what I do. So I regularly give talks.</p></div>
					<p>
						I take part in local web events on a regular basis. I love talking there about everything related to my job, should that be technical or not.<br/>
						Giving talks allow me to go in-depth on web stuff, helping me being more effective.<br/>
						My talks slides and videos (if available) can be seen on <a href="http://blog.jingleweb.fr/presentations-et-conferences/" target="blank_" title="My blog"> my blog</a>.
					</p>
				</div>
			</div>
			<div class='row'>
				<div class='meetups'>
					<div><p class='category'>meetups</p><p class='short-desc'>I organise several meetups a year for French devs en Normandy.</p></div>
					<p>
						A good web community is one where people can meet, share, and improve all together. That's why I organize events in Normandy, such as <a href="http://caenjs.org" target="blank_" title="CaenJS Website">CaenJS</a>, <a href="http://accessiday.fr" target="blank_" title="Accessiday Website"> Accessiday</a>, or more informal ones such as "ApéroWeb", where people can meet over a drink.<br/>
						A big, <a href="http://calvacoders.com/en/webcampers/" target="blank_" title="WebCampers website"> 3-day event</a> will be organized by 2016 by our association, Calvacoders.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id='works'>
		<h2>my works</h2>
		<div id='filters'>
			<a href='#' class='button cl-effect-1 active' title='View all Works' data-filter="*">Show all</a>
			<a href='#' class='button cl-effect-1' title='View Front-end Works' data-filter=".front">Front</a>
			<a href='#' class='button cl-effect-1' title='View Back-end Works' data-filter=".back">Back</a>
			<a href='#' class='button cl-effect-1' title='View Mobile Works' data-filter=".mobile">Mobile</a>
			<a href='#' class='button cl-effect-1' title='View Work in Progress' data-filter=".wip">W.I.P</a>
		</div>
		<ul>
			<li class='work wip mobile back'>
				<figure class="effect-sarah">
					<img src="img/opcalia.png" alt="Opcalia"/>
					<figcaption></figcaption>
				</figure>
				<p class='description'><span class='title'>Opcalia</span>
					Opcalia, a training organization, needed an effective way to create and manage their trainings, with every media and profile linked to them.
					After a training is created on the Drupal back-end, they can download it and every medias attached on a tablet for the students. They can also grab content (photos, videos, notes...) with the tablet and send it to the back-end for archive purposes.
					Back-end and app are linked with a custom Web-Service.
				</p>
				<p class='tags'>
					<span>Cordova</span><span>Drupal</span>
				</p>
			</li>
			<li class='work front'>
				<a href="https://www.kiosktoinvest.com/" target="blank_" title="Kiosk To Invest website">
					<figure class="effect-sarah">
						<img src="img/KTI.jpg" alt="Kiosk To Invest"/>
						<figcaption></figcaption>
					</figure>
				</a>
				<p class='description'><span class='title'>Kiosk To Invest</span>
					A French public organisation needed a crowdfunding platform, dedicated to businesses. Users can present their project and have investors put money to help them launch, on a secure platform.<br/>
					I took over the existing Wordpress project, optimizing the performances and adding new functionnalities required by the customer.<br/>
					I also acted as a CTO on this specific project.
				</p>
				<p class='tags'>
					<span>Wordpress</span><span>CTO</span>
				</p>
			</li>
			<li class='work mobile'>
				<figure class="effect-sarah">
					<img src="img/AP.jpg" alt="Agent Provocateur"/>
					<figcaption></figcaption>
				</figure>
				<p class='description'><span class='title'>Agent Provocateur</span>
					Agent Provocateur is a UK Luxury Lingerie shop. Along with several physical shops, they also have a large website, showing up-to-date collections.<br/>
					To help the sellers be more efficient, A.P asked for an iOS app to present the current collections to them. They are able to browse through collections, models and products, to present to their customers.
					The application was linked to the main website through a click on a product.
				</p>
				<p class='tags'>
					<span>AngularJS</span><span>Cordova</span><span>Business</span>
				</p>
			</li>
			<li class='work wip'>
				<figure class="effect-sarah">
					<img src="img/inbliss.jpg" alt="InBliss Weddings"/>
					<figcaption></figcaption>
				</figure>
				<p class='description'><span class='title'>In Bliss Weddings</span>
					In Bliss connects brides and vendors. The website needed a redesign and a change of technology used. While another French company developped it with Symfony2, I integrated the templates on their codebase, using Symfony Twig template engine and MVC architecture.<br/>
					Besides pure HTML5 / CSS3 integration, I used JS to put animations / plugins in place, such as isotope (grid / filtering).
				</p>
				<p class='tags'>
					<span>Twig</span><span>Business</span>
				</p>
			</li>
			<li class='work back front'>
				<a href="http://region-basse-normandie.fr" target="blank_" title="Normandy Council website">
					<figure class="effect-sarah">
						<img src="img/CRBN.jpg" alt="Région Basse-Normandie"/>
						<figcaption></figcaption>
					</figure>
				</a>
				<p class='description'><span class='title'>Région Basse-Normandie</span>
					Normandy regional council needed a new website. We switched form Joomla to Drupal, I thus had to create a whole bunch of views, custom content-types, etc. to allow the new website to retrieve all existing functionnalities.<br/>
					I also work on a good part of the front-end integration, on both "desktop" and RWD templates.
				</p>
				<p class='tags'>
					<span>Drupal</span>
				</p>
			</li>
			<li class='work mobile'>
				<figure class="effect-sarah">
					<img src="img/tutor.jpg" alt="Tutor"/>
					<figcaption></figcaption>
				</figure>
				<p class='description'><span class='title'>Tutor mobile app</span>
					The ISP Tutor, providing fiber access everywhere in France, needed a quizz for its customers to play with during a convention.<br/>
					The player had to answer several questions relating on new technologies, and was presented with a famous historical figure, based on answers accuracy.
					A hidden counter helped the Tutor crew to keep track of the distribution of responses.
				</p>
				<p class='tags'>
					<span>AngularJS</span><span>Cordova</span><span>Game</span>
				</p>
			</li>
			<li class='work mobile'>
				<figure class="effect-sarah">
					<img src="img/SDE.jpg" alt="Salon de l'Etudiant"/>
					<figcaption></figcaption>
				</figure>
				<p class='description'><span class='title'>'Salon de l'étudiant' mobile app</span>
					Normandy Regional Council needed a quizz game for an exhibition. Based on renewable energies knowledge, the players had several questions, and were each time presented with a full explanation about a specific energy.
				</p>
				<p class='tags'>
					<span>AngularJS</span><span>Cordova</span>
				</p>
			</li>
		</ul>
	</div>
	<div id='contact'>
		<h2>contact me</h2>
		<p>I'm currently full and will be available from April '15.<br/><br/>
			Feel free to reach me at <a href='mailto:sylvain@zyssman.fr' title='Send me an email'>sylvain[AT]zyssman.fr</a><br/>I'll replay as soon as possible !</p>
			<!-- <div class='form'>
				<form action='index.php#contact' method='post' name='form' id='form'>
					<label for='name'>name :</label><input type='text' id='name' name='name' /><br/>
					<label for='email'>email :</label><input type='email' id='email' name='email'/><br/>
					<label for='msg'>message :</label><textarea id='msg' name='msg'></textarea>
					<div id="sample-captcha"></div>
					<button type='submit' name='submit'><p><span class='send'></span>submit</p></button>
				</form>
				<?php if (isset($_POST['submit'])){
					include('sendMail.php');
				}
				?>
			</div> -->
		</div>
	</div>
	<footer>
		<div class='footer-left'>
			Made with &lt;3. Fork me on <a href='https://github.com/sylzys/jingleweb' title='Fork my site on Github' target='blank_'>Github</a>
		</div>
		<div class='footer-right'>
			<ul class='social-networks'>
				<li class='github'><a href='https://github.com/sylzys' target='blank_' title='View my Github profile'></a></li>
				<li class='twitter'><a href='http://twitter.com/sylzys' target='blank_' title='View my Twitter profile'></a></li>
				<li class='linkedin'><a href='http://fr.linkedin.com/in/sylvainzyssman/' target='blank_' title='View my Linkedin profile'></a></li>
			</ul>
		</div>
	</footer>
	<script src="dist/js/built.min.js"></script>
	<noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>