<?php
//die('Hello');
$sqlSelect = <<<'EOD'
SELECT *
	FROM Produit 
EOD;
if(isset($_POST['produit'])){
  $sqlValue = "'".$_POST['produit']['id_Product']."', '".$_POST['produit']['LIBELLE']."', '".$_POST['produit']['PRIX']."', '".$_POST['produit']['QSTOCK']."'";
  //echo $sqlValue;
  $sqlInsert= "INSERT INTO Produit (id_Product, LIBELLE, PRIX, QSTOCK) VALUES ($sqlValue)";
}
try {
  $dbname = 'admini';
  $sourceDeDonnees = 'mysql:host=172.17.0.3;dbname='.$dbname;
  $dbh = new PDO( $sourceDeDonnees, 'nicolas', 'motdepasse' ) ;
  //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_POST['produit'])){
    $dbh->exec($sqlInsert);
    //echo 'Réussi';
    unset($_POST['produit']);
  }
  $rsp = $dbh->query($sqlSelect, PDO::FETCH_ASSOC);
  $tableau = '<table id="tabs"><tr>';
  $tableau .= '<th>Référence</th>';
  $tableau .= '<th>Produit</th>';
  $tableau .= '<th>Prix</th>';
  $tableau .= '<th>Quantité disponible</th>';
  $tableau .= '</tr>';
  foreach($rsp as $row){
    $tableau .= '<tr>';
    foreach ($row as $item) {
      $tableau .= '<td>'. $item.'</td>';
    }
    $tableau .= '</tr>';
  }
  $tableau .= '</table>';
  $dbh = null;
}
catch (PDOException $e){
   die( "Erreur !: ".$e->getMessage()."<br/>");
}

?>
<!Doctype html>
<head>
<style>
  table {
    text-align: center;
    border: 1px solid black;
  }
  th,td {
    border: 1px solid black;
    padding : 5px;
  }
  form{
    width: 400px;
  }
  label, input {
    display: inline-block;
    margin: 2px;
  }
  table td:nth-child(2){
    text-transform: lowercase;
  }
</style>
</head>
<body>
  <?php echo $tableau?>
  <hr>
  <form action="" method="post">
    <fieldset>
      <legend>Ajout de marchandise : </legend>
      <br>
      <label for="ref">Référence : </label>
      <input type="text" id="ref" name="produit[id_Product]" required>
      <br>
      <label for="pro">Produit : </label>
      <input type="text" id="pro" name="produit[LIBELLE]" required>
      <br>
      <label for="Prix">Prix : </label>
      <input type="text" id="Prix" name="produit[PRIX]" required>
      <br>
      <label for="qtDispo">Quantité disponible : </label>
      <input type="text" id="qtDispo" name="produit[QSTOCK]" required>
      <br>
      <input type="submit" value="Ajouter le produit" required>
    </fieldset>
  </form>
</body>
</html>
