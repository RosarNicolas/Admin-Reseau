

<!DOCTYPE html>
<!--1TM1 Rosar Nicolas-->
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>Site vitrine</title>
		<style>
			html{
				color: white;
				text-align: center;
				background: url(http://csszengarden.com/001/blossoms.jpg);
				background-repeat: no-repeat;
				background-size: 75%;
				background-position: right;
			}
			img{
				width: 100%;
			}
			body{
				color: #555753;
				font: 75% georgia, sans-serif;
			}
			h1, h2, h3{
				text-decoration: underline;
			}
			p{
				padding: 0 5px;
			}
			p a{
				border: 1px solid black;
				margin: 5px;
				background-color: lightgrey;
				border-radius: 1em;		
			}
			footer{
				position: fixed;
				bottom: 0;
				width:100%;
				color: white;
				background-color: blue;
				border-top : 5px solid black;
			}
			a {
				text-decoration: none;
			}
			
			footer{
				vertical-align: center;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<header>
		</header>
		<main>
			<h1>Ce site est un site vitrine !</h1>
			<hr>
			<p>Bienvenue sur notre page de test.</p>
			<h3>Liens vers nos autres sites web :</h3>
			<p> 
				<a href=http://54.37.65.113:82/intranet.html.php alt="Site intranet">INTRANET</a>
			</p>
			<p>
				<a href=http://54.37.65.113:83/b2B.html.php alt="Site intranet">Lien vers le B2B</a>
			</p>
			<p>
				<? echo $test1="PHP marche"; ?><br>
				<? echo $test2="CA NE MARCHE PAS CA N'A PAS DE JAMBES"; ?>
			</p>
			<p>
				<!--<?
				$dbh = new PDO('mysql:host=54.37.65.115;dbname=docker_project', 'root', 'Lp2407yn');
				$req = 'SELECT * FROM users;';
				$rep = $dbh->query($req, PDO::FETCH_ASSOC);
				echo '<pre>'.$rep.'</pre>';
				$dbh = null; ?>-->
			</p>
		</main>
		<footer>
      <p>Groupe Numero 3</p>
      <p>
      Persyn Loic<br>
      Rosar Nicolas<br>
      Vankeerberghen Jordan
      </p>
		</footer>
	</body>
</html>
