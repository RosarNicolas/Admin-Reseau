<?php
	try {
		$dsn = 'mysql:host=172.17.0.3;dbname=admini;charset=utf8;port=3306';
		$pdo = new PDO($dsn, 'jordan','motdepasse');
		//echo "Connected to database<br>";
			
		//$pdo = null;
	}
	catch(PDOException $e) {echo $e->getMessage();}
	
	echo print_r($_POST);

	if(isset($_POST)){
		$req = $pdo->prepare("INSERT INTO user (nom, prenom, classe) VALUES (?, ?, ?)");
		echo "prepare fait<br>";
			$req->bindParam(1, $name);
			$req->bindParam(2, $prenom);
			$req->bindParam(3, $classe);
		
			$name = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$classe = $_POST['classe'];
		echo "mise dans variables";
			$req->execute();
		
	}

?>
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
				
		div{
			position: absolute;
			top: 120px;
			left: 20px;
			width:100%;
		}
			
		</style>
	</head>
	<body>
		<header>
			<h1>Bienvenue dans le b2b de WoodyToys</h1><br>
		</header>
		<br id=clear >
		<div>
			<br>
			<form method=POST action="#">
				<label for=nom >Nom : </label><br>
				<input type=text id=nom ><br>
				
				<label for=prenom >Prénom : </label><br>
				<input type=text id=prenom ><br>
				
				<label for=classe >Classe : </label><br>
				<input type=text id=classe ><br>
				<br>
				<input type=submit >
				
			</form>
		</div>
		<footer>
			<p><u>
			Groupe Numero 3 :
			</u></p>
			<p>
				<?php
				
					$sql = 'select *from user';
				
					foreach($pdo->query($sql, PDO::FETCH_ASSOC) as $row) {
						//echo "<pre>".print_r($row,true)."</pre>";
						echo $row['NOM'] . ' ' . $row['PRENOM'] . ' ' . $row['CLASSE'] . '<br>';
					}
					
				
				?>
			</p>
		</footer>
	</body>
</html>
