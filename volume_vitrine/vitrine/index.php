<!DOCTYPE html> <!-- définir la page en tant que html -->
<html lang=fr>
    <head>
        <title>wt3 woodytoys</title>
        <meta charset=utf-8>
	
		<link rel=stylesheet href="http://fonts.googleapis.com/css?family=Crete+Round">
	    <style>
	     /* GENERAL */
*{
	margin:0;
	padding:0;
}

body{
	font-family: Arial, sans-serif;
	font-size: 15px;
}

h1, h2, h3, h4{
	color:#444;
}

h1{
	font-family: 'Crete Round', serif;
	font-size:45px;
}

h2{
	font-size: 55px;
}

h3{
	font-size: 30px;
}

h4{
	font-size: 24px;
}

p{
	line-height: 20px;
	color: #777;
}

ul{
	list-style: none;
}

a{
	text-decoration: none;
	color:#444;
}

.wrapper{
	width:940px;
	margin: 0 auto;
	padding: 0 10px;
}

.orange{
	color:#ff7a00;
}
.clear{
	clear: both;
}

small{
	font-size: 13px;
	font-style: italic;
}



/* HEADER */
header{
	height:100px;
}
header h1{
	float:left;
	margin-top:32px;
}
header nav{
	float:right;
	margin-top:50px;
}
header nav ul li{
	display:inline;
	float: left;
}
header nav ul li a{
	text-transform: uppercase;
	font-weight:bold;
	margin-right: 20px;
}

/* MAIN IMAGE */
#main-image{
	height:550px;
	width:100%;
	background: url('../IMG/jouets_bois.jpg') center no-repeat;
}
#main-image h2{
	font-weight:normal;
	text-transform: uppercase;
	text-align: center;
	padding:150px 0 40px 0;
	margin: 20px;
	color: white;
	text-shadow: 0 0 5px #000000;
}
.button-1{
	display:block;
	width:120px;
	height: 50px;
	background-color: #ff7a00;
	color:#fff;
	font-size: 20px;
	margin: 0 auto;
	line-height: 50px;
	text-align: center;
	border-radius: 3px;
}
.button-1:hover{
	background-color: #02b8dd;
}

/* STEPS */
#steps h4 {
	text-transform: uppercase;
	margin-bottom: 20px;
}
#steps p{
	margin-bottom:  20px;
}
#steps ul{
	margin:60px 0px;
	padding-left: 35%;
}
#steps ul li{
	width: 300px;
	vertical-align:center;
	padding-top: 140px;
	text-align: center;

}
#step-1{
	background: url('../IMG/steps-icon-1.png') no-repeat top center;
}
#step-2{
	background: url('../IMG/steps-icon-2.png') no-repeat top center;
}

/* CONTACT */

#contact{
	padding:45px 0;
	text-align: center;
	
}

#contact h3{
	width:400px;
	text-transform: uppercase;
	margin: 0 auto 20px auto;
	border-bottom: 1px solid #02b8dd;
	padding-bottom: 20px;
}

label{
	font-weight: bold;
	font-size:20px;
	margin-right: 10px;
	color:#777;
}

input[type="text"]{
	padding:10px;
	font-size: 20px;
	margin-right: 20px;
	border: 2px solid #ddd;
	border-radius: 3px;
}

.button-3{
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	padding:11px;
	background-color: #02b8dd;
	border-style: none;
	border-radius: 3px;
}

.button-3:hover{
	color: #fff;
	background-color: #444;
}

/* FOOTER */
footer{
	height:200px;
	background-color: #444;
}
footer h1{
	color:#fff;
	text-align: center;
	padding-top:50px;
}
.copyright{
	text-align: center;
	font-weight: bold;
	padding-top: 30px;
	color: #777;
}

wrapper_plan {
	vertical-align: center;
}
	    </style>
    </head>
    <body>
		<header>
			<div class="wrapper">
				<h1>WoodyToys<span class="orange">.</span></h1>
				<nav>
					<ul>
						<li><a href="#main-image">Accueil</a></li>
					<!--	<li><a href="#steps">Destination</a></li>-->
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</div>	
		</header>
		
		<section id="main-image">
			<div class="wrapper">
				<h2>Achetez vos<br><Strong>jouets en bois</Strong> de bonne qualité !</h2>
				<a href="#" class="button-1">Par ici</a>
			</div>	
		</section>
		
		<section id="steps">
			<div id=wrapper_plan class="wrapper">
				<ul>
					<li id="step-1">
					<h4>Planifier</h4>
				<p>
					<?php 
					ini_set('display_errors','on');
					/*phpinfo();*/
					require_once 'dbConnect.php'; ?>
				</p>
				<p>
					
				</p>
				</ul>
			</div>	
		</section>
		
		
		<section id="contact">
			<div class="wrapper">
				<h3>Contactez-nous</h3>
				<p>he201426@students.ephec.be</p>
			</div>	
		</section>
		
		<footer>
			<div class="wrapper">
				<h1>WoodyToys<span class="orange">.</span></h1>
				<div class="copyright">Copyright © 2016. Tous droits réservés.</div>
			</div>
		</footer>
		
    </body>
</html>
