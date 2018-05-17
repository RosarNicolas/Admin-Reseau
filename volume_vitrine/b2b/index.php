<!DOCTYPE html>
<!--1TM1 Rosar Nicolas-->
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>B2b</title>
		<style>

		body {
			margin : 0;
			padding : 0;
		}
		footer{
			//vertical-align: left;
			text-align:center;
		}
		h1, h2, h3{
			text-decoration:underline;
		}
		h1 {
			text-align : center;
		}
		
		header{
			position: fixed;
			top 0;
			width:100%;
			color: white;
			background-color: #444;
			border-bottom : 5px solid black;
			
		}	
			
		footer{
			position: fixed;
			bottom: 0;
			width:100%;
			color: white;
			background-color: #444;
			border-top : 5px solid black;
			
		}
		p a{
			border: 1px solid black;
			margin: 20px;
			background-color: lightgrey;
			border-radius: 1em;
			
		}
		a {
			text-decoration: none;
			padding: 5px;
		}
		</style>
	</head>
	<body>
		<header>
			<h1>Bienvenue dans le b2b de WoodyToys</h1><br>
		</header>
		
		<footer>
			<p><u>
			Groupe Numero 3 :
			</u></p>
			<p>
				<?php
				/*
					if($connect=mysqli_connect("localhost","admin","motdepasse","admini")){
						echo "Succès";	
					}
				else{
					echo "Fail";
				}
					*/
				
				
				$dbh = new PDO("mysql:host=172.17.0.3;dbname=admini", "nicolas","motdepasse");
				$re = $dbh->query('SELECT * FROM user;', PDO::FETCH_ASSOC);
				echo print_r($rq);
				
				
				
				
					/*$sql="select * from user;";
					$result=mysqli_query($connect,$sql);
					$row=mysqli_fetch_array($result,MYSQLI_NUM);
					echo print_r($row,1);*/
				/*
					echo print_r($connect,1);
					echo "SUccès ".mysqli_get_host_info($connect);
						mysqli_close($connect);
						*/
				?>
			</p>
		</footer>
	</body>
</html>
