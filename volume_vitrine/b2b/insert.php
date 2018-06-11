<?php
				$req = $pdo->prepare("INSERT INTO user (nom, prenom, classe) VALUES (?, ?, ?)");

					$req->bindParam(1, $name);
					$req->bindParam(2, $prenom);
					$req->bindParam(3, $classe);

					$name = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$classe = $_POST['classe'];

					$req->execute();
		
			?>
