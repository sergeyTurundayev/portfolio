<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>icoder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Author" content="icoder.herokuapp.com">
	<link rel="stylesheet" href="css/all.css">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<div id="wrapper">
		<div class="top" id="top">
			<h1>icoder</h1>
			<div class="container">
				<div class="terminal">&gt;_</div>
				<h2>Hi, my name is Sergey</h2>
				<p>I'm glad to see you at my personal page</p>
			</div>
		</div><!-- top -->
		<div class="about" id="about">
			<h2>About Me</h2>
			<div class="container">
				<div class="col-50">
					<h3>Info</h3>
					<ul>
						<li><strong>Fullname:</strong> Sergey Turundayev</li>
						<li><strong>Phone:</strong> <a href="tel:+380983968228">+380983968228</a></li>
						<li><strong>Email:</strong> <a href="mailto:sergey.turundayev@gmail.com">sergey.turundayev@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-50">
					<h3>Skills</h3>
					<ul>
						<li><strong>CSS2.1:</strong> good</li>
						<li><strong>HTML4:</strong> good</li>
						<li><strong>HTML5</strong> and <strong>CSS3:</strong> cross-browser elements</li>
						<li><strong>Javascript</strong> and <strong>jQuery:</strong> basics and the use of ready-made scripts</li>
						<li><strong>PHP</strong> and <strong>MySQL:</strong> basics</li>
						<li><strong>Photoshop:</strong> cutting layouts</li>
						<li>Clean code by <strong>W3c</strong> recommendation</li>
						<li>Creating themes for <strong>Wordpress</strong> and <strong>Woocommerce</strong></li>
					</ul>
				</div>
			</div>
		</div><!-- about -->
		<div class="portfolio" id="portfolio">
			<h2>Portfolio</h2>
			<div class="container">
				<a target="_blank" href="http://rentstore.tk/"><img src="works/rentstore.png" alt="Сайт-визитка веб-студии"></a>
				<a target="_blank" href="http://investitor.dp.ua/"><img src="works/work1.png" alt="Сайт компании по продаже и производству запчастей для пожвижных составов"></a>
				<a target="_blank" href="http://hypnocasa.com.ua/"><img src="works/hypnocasa.png" alt="Интернет-магазин парфюмерии"></a>
				<a target="_blank" href="http://кисеяоптом.рф"><img src="works/kiseya.jpg" alt="Интернет-магазин веревочных штор"></a>
				<a target="_blank" href="http://longray.com.ua/"><img src="works/longray.jpg" alt="Оборудование для дезинфекции"></a>
				<a target="_blank" href="https://sbm-dental.com.ua/"><img src="works/smb-dental.png" alt="Стоматологическое оборудование"></a>
				<a target="_blank" href="https://exprol.com.ua/"><img src="works/exprol.png" alt="Производство солнцезащитных систем"></a>
				<a target="_blank" href="http://53fr.ru"><img src="works/work5.png" alt="Футеровочные решения"></a>
				<a target="_blank" href="http://unityproduction.in.ua/"><img src="works/work6.png" alt="Unity Production"></a>
			</div>
		</div>
		<div class="contacts" id="contacts">
			<h2>Contacts</h2>
			<form action="index.php" method="post" id="contact_form">
				<span>
					<input type="text" name='name' id="name" placeholder="Your name">
				</span>
				<span>
					<input type="text" name='email' id="email" placeholder="Your email">
				</span>
				<span>
					<input type="text" name='subject' id="subject" placeholder="Subject">
				</span>
				<textarea name="message" name='message' id="message" placeholder="Your message"></textarea>
				<div id='mail_success' class='success'>Message sent</div>
				<div id='mail_fail' class='error'>Message not sent</div>
				<input type="submit" class='btn-submit' value="Send Message">
			</form>
			<p class="answer center"></p>
		</div><!-- contacts -->
		<a href='#top' class="back">back to top ^</a>
		<ul class="main-nav">
			<li><a href="#about">About me</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#contacts">Contacts</a></li>
		</ul>
		<div class="mobile-button"><span class="m-button"></span></div>
	</div><!-- wrapper -->
	<script src="js/jquery.min.js"></script>
	<script src='js/scrollTo.js'></script>
	<script src="js/main.js"></script>
</body>
</html>