<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>icoder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Author" content="icoder.herokuapp.com">
	<link rel="stylesheet" href="css/all.css">
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
					<li><strong>Phone:</strong> +38 (098) 396-82-28</li>
					<li><strong>Email:</strong> sergey.turundayev@gmail.com</li>
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
		</div>
	</div>
	<div class="contacts" id="contacts">
		<h2>Contacts</h2>
		<form action="php/form.php" method="POST">
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