<?php

if ( !empty($_POST) && trim($_POST['name']) != '' && trim($_POST['phone']) != '' && trim($_POST['email']) != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !='') {
	
	$message = "Вам пришло новое сообщение с сайта: <br><br>\n" . 
				"<strong>Имя отправителя:</strong>" . strip_tags($_POST['name']) . "<br>\n" . 
				"<strong>Телефон отправителя:</strong>" . strip_tags($_POST['phone']) . "<br>\n" . 
				"<strong>Email отправителя:</strong>" . strip_tags($_POST['email']) . "<br>\n" . 
				"<strong>Сообщение отправителя:</strong>" . strip_tags($_POST['message']); 

	$subjekt = "=?utf-8?b?".base64_encode("Сообщение с сайта!")."?=";
	
	$email_from = "yogaolga.com";
	$name_from = "Новый ученик Йоги";
	
	$headers = "MIME-Version: 1.0" . PHP_EOL . 
				"Content-Type: text/html; charset=utf-8" . PHP_EOL . 
				"From: " . "=?utf-8?b?".base64_encode($name_from)."?=" . "<" . $email_from . ">" . PHP_EOL . 
				"Reply-To: ". $email_from .  PHP_EOL;

	$sendResult = mail( 'olga84h@gmail.com', $subjekt, $message, $headers );
	
	if($sendResult){
		header('location: thankyou.html');	
	} else{
		$failure = "<div class=\"error\">Your letter has not been send. Please try again later.</div>";
	}
}

function checkValue($item, $message) {
	if ( isset($item) && trim($item) == '' ) {
		echo "<div class='error'>$message</div>";
	}
}

function printPostValue($item) {
	if ( isset($item) && strlen(trim($item)) > 0 ) {
		echo $item;
	}
}

function checkemail($email) {
	if ( isset($email) && trim($email) == '' ) {
		echo "<div class='error'>Sorry, you can't send empty Email.</div>";
	} else if ( isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		echo "<div class='error'>Please enter a valid Email address.</div>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="yandex-verification" content="9b24bbcead9cd59b" />
	<title>Yoga with Olga Smith</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800&display=swap&subset=cyrillic" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/animate.css"> -->
	<link rel="stylesheet" href="css/mainYOGA.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<nav class="nav">
				<img src="img/logo.png" alt="Yoga" class="logo">
				<ul class="menu">
					<li>
						<a href="#yoga">
							Yoga Magic
						</a>
					</li>
					<li>
						<a href="#classes">
							Classes 
						</a>
					</li>
					<li>
						<a href="#online">
							YOGA Online
						</a>
					</li>
					<li>
						<a href="#touch">
							Contact
						</a>
					</li>
					<li>
						<a href="#say">
							Testimonials 
						</a>
					</li>
				</ul>
				<div class="contact">
					<ul class="contact">
						<li>
							<p class="phone">
							+44 7879 7879 20
							</p>
						</li>
						<li>
							<a href="https://www.instagram.com/yogawitholgasmith/" target="_blank">
					 		<img src="img/ig.png" alt="ig" class="ig">
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="wrapper">
				<div class="offer">
					<h1 class="title">
					Yoga with Olga Smith
					</h1>
					<p class="intro">
					Yoga for Every Day Life <br> <br>
					Yoga teacher based in London, teaching world wide
					</p>
					<a href="#touch" class="btn" id="btn">start now</a>
				</div>	
				<img src="img/olga.png" alt="YOGA" class="YOGA">
			</div>
		</div>
	</header>
	
	<section id="yoga" class="yoga">
		<div class="container">
			<h2>
				Yoga Magic
			</h2>
				<p class="text">
					"When I was only 26 yrs. and I couldn't get to my second-floor apartment without losing my breath and even though I considered myself a healthy person, I remember taking painkillers twice a week for body ache. But today I thank YOGA for giving me a flexible-adaptable body".
				</p>
				<h3>
					Year 2010.<br>
					I'm Sick, Impatient and Frustrated
				</h3>
				<p class="text">	
					Now, I thank the one who introduced me to yoga. I never started my yoga journey then because I wanted to be a flexible, good looking yoga teacher in sexy leggings. <span class="not">Not at all!</span>
				</p>
				<p class="text">
					I was looking for myself, how to retain my health and gain back my peace of mind. So, I started to practice diligently on my own.
				</p>
				<p class="text">
					I had a desire to gain yoga knowledge, even though I was unprepared but subsequently managed not only to survive, but enhance my yoga practice. I gave up my past life and I started a new proficiency without whining. Changed my diet, then put a full stop to all toxic food. It was yoga and positive thinking that helped me to find the road to my right destiny ... that I'm heading on today.
				</p>
			<div id="box" class="box">
				<h3 class="">
					Year 2014. <br> 
					GRADUATED AS A YOGA TEACHER
				</h3>
				<p class="text">
					Even though I fell in love with India long back, but now I had a reason to live there and learn more about yoga. India gave me ‘Love of my life’ and a New Profession’. I graduated from 'The Yoga Institute' Santa Cruz, Mumbai, and thereafter did my Vipassana Meditation course at Sarnath, Varannasi.
				</p>
				<h3 class="">
					Year 2016. <br> 
					Relax life
				</h3>
				<p class="text">	
					While I teach others, I am swotting myself to accrue more knowledge on Yoga, this gives me happiness as I can put my knowledge to some good use. All it takes is one's own will to change oneself and it should be a challenge taken in order to stay happy forever. You can live as if you've been living in paradise, only if you are healthy and that may be possible with 'Yoga for everyday life', step by step program. I did it ... So will you.
				</p>
				<h3 class="">
					Year 2017. <br> 
					Becoming a mum
				</h3>
				<p class="text">
					The techniques that were taught in Yoga Institute, helped me to be confident. I had my childbed in my own home, where I delivered my son, right into his father's hands with a big smile on my face, without much pain. The smooth process during delivery of my little boy, changed my life for good and I thank Yoga for that.
				</p>
				<h3>	
					Year 2020. <br> 
					Living as a Happy Yoga Family
				</h3>
				<p class="text">
					What about living one day at a time? It's possible and it's all about loving your family, serving them with love and compassion every single day of your life. As easy to say, it is also possible to do, by being a proper yoga student and not just by exercising for flexibility. Good health leads to a peaceful mind and a peaceful mind brings happiness. You own your inhaler in order to save your life. So, Yoga is all about Breathing, Observing and Living as a Happy Yoga Family.
				</p>
				<p class="text">
					Since I know the way, I may be able to guide you, to make your journey heading to the right destination.
				</p>
			</div>
			<div class="button">
				<button id="link" class="btn">
					more details
				</button>
			</div>	
		</div>
	</section>

	<section id="classes" class="classes">
		<div class="container">
			<h2>
				YOGA in Ewell, London
			</h2>
			<nav class="nav nav2">
				<img src="img/yogaGr.png" alt="gr" class="gr">
				<div>	
					<p class="text">
						We are practicing yoga every Tuesday at 7 pm, in St Mary's church hall, Ewell village, London, KT17 2AY (parking is available on a side of the road). It's opposite the big St Mary's Ewell Parish Church or just soon after the famous Spring Tavern Pub.
					</p>
					<p class="text">
						We run our classes on a membership basis, so if you are interested, you may join just for <span class="session">£60 for 6 session</span> to be used within 9 weeks’ time. However, if one has to skip the class for some other busy schedule, they may do so with prior 24hrs notice and continue/ join the class next week, as long the course/ session is finished within 9 weeks.
					</p>
					<p class="text">
						Also, you can be a drop in student, which will cost you <span class="session">£13 a session</span>.
					</p>
				</div>
			</nav>
			<div id="box2" class="box2">
				<p class="text">
					Each class is 75 minutes long, with a 15 minutes relaxation session. Although we usually practice very gentle yoga, I'm always happy to adjust the way you can take it, to give it a start.
				</p>
				<p class="text">
					Please bring your own yoga mat and a blanket for relaxation. (If you don't have one yet, please let me know in advance) I also recommend carrying some drinking water along with you, also if you have any yoga props, please bring them along.
				</p>
				<p class="text">
					Please feel free to discuss any queries on above terms.
				</p>
				<p class="text">
					Looking forward to seeing you on a yoga mat!
				</p>
			</div>
			<div class="button">
				<button id="link2" class="btn">
					more details
				</button>
			</div>	
		</div>
	</section>

	<section id="online" class="online">
		<div class="container">
			<h2>
				YOGA Online
			</h2>
			<nav class="nav nav2">
				<div class="blok">
					<p class="text">
						First of all, a massive high five to you for taking the time in doing research on how to do yoga online.
					</p>
					<p class="text">
						Yes, YOGA is amazing and has an abundance of amazing benefits. Those simple twists and stretches done on the yoga mat can really energize your life with goodness. Yoga can be done anywhere; all you need is your mind and body to succeed in your practice.
					</p>
					<p class="text">
						Click the link below, to check my on-line yoga classes to start Today!
					</p>
				</div>
				<img src="img/online.png" alt="online" class="online">
			</nav>
			<div class="button">
				<a href="https://www.instagram.com/yogawitholgasmith/" target="_blank">
					<button class="btn">				
						<div class="us">
							join us!
							<img src="img/ig2.png" alt="ig2" class="ig2">
						</div>
					</button>
				</a>
			</div>
		</div>
	</section>

	<section id="say" class="say">
		<div class="container">
			<h2>Student views</h2>
			<div class="flex-wrapper">
				<div class="slider-wrapper">
					<div class="slide active">
						<img class="img" src="img/img_1.png" alt="">
					</div>
					<div class="slide">
						 <img class="img" src="img/img_2.png" alt="">
					</div>
					<div class="slide">
						<img class="img" src="img/img_3.png" alt="">
					</div>
					<div class="slide">
						<img class="img" src="img/img_4.png" alt="">
					</div>
					<div class="slide">
					<img class="img" src="img/img_5.png" alt="">
					</div>
					<div class="slide">
					<img class="img" src="img/img_6.png" alt="">
					</div>
					<div id="btn-prev"></div>
					<div id="btn-next"></div>
				</div>
			</div>
			<div class="dots-wrapper">
				<span class="dot active"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		</div>
	</section>

	<section id="touch" class="touch">
		<div class="container">
			<h2>
				Get in touch 
			</h2>
			<nav class="nav nav2">
				<div class="blok">
					<p class="text-touch">
						+44 7879 7879 20
					</p>
					<p class="text-touch">
						olga84h@gmail.com
					</p>
					<a href="https://www.instagram.com/yogawitholgasmith/" target="_blank">
						<img src="img/ig.png" alt="ig-touch" class="ig-touch">
					</a>
				</div>
				<div>
					<form method="POST" action="#" class="form">
						<?php
							if( isset($failure)) {
								echo $failure;
							}
						?>
						<?php
							checkValue ($_POST['name'], 'Please enter your name.');
						?>
						<input value="<?php printPostValue ($_POST['name']); ?>" type="text" name="name" placeholder="name">
						
						<?php 
							checkValue ($_POST['phone'], 'Enter your phone number');
						?>
						<input value="<?php printPostValue ($_POST['phone']); ?>" type="tel" name="phone" placeholder="telephone">
						
						<?php
							checkemail ($_POST['email']);
						?>
						<input value="<?php printPostValue ($_POST['email']); ?>" type="text" name="email" placeholder="email">
						
						
						<textarea class="message" name="message" placeholder="message" id="#" cols="30" rows="10"><?php printPostValue ($_POST['message']); ?></textarea>
						<button class="button btn">			
							connect
						</button>
					</form>
				</div>
			</nav>
		</div>
	</section>

	<footer id="footer" class="footer">
		<div class="container">
				<ul class="menu-footer">
					<li>
						<a href="#yoga">
							Yoga Magic
						</a>
					</li>
					<li>
						<a href="#classes">
							Classes 
						</a>
					</li>
					<li>
						<a href="#online">
							YOGA Online
						</a>
					</li>
					<li>
						<a href="#touch">
							Contact
						</a>
					</li>
					<li>
						<a href="#say">
							Testimonials 
						</a>
					</li>
				</ul>
			<nav class="nav footer">
				<img src="img/LogoF.png" alt="Yoga" class="logo">
				<p class="phone footer">
					+44 7879 7879 20
				</p>
			</nav>
			<div class="icon">
				<a href="https://www.instagram.com/yogawitholgasmith/" target="_blank">
					<img src="img/ig2.png" alt="ig2" class="ig2">
				</a>
				<p class="footer-text">	
				olga84h@gmail.com	
				</p>
				<p class="credits">
					All rights reserved@2020
				</p>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/mainYOGA.js"></script>
</body>
</html>

