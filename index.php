<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Formulaire PHP</title>
</head>
<body>

	<form method="post">
	  <div class="row">
	    <div class="col-ms-4 mb-4">
	      <label for="exampleFormControlInput1">Prénom</label>
	      <input type="text" class="form-control" placeholder="Prénom" name="prenom">
	    </div>
	    <div class="col-ms-4 mb-4">
	      <label for="exampleFormControlInput1">Nom</label>
	      <input type="text" class="form-control" placeholder="Nom" name="nom">
	    </div>
	  
	  	<div class="form-group col--ms-4 mb-4">
	      <label for="exampleFormControlInput1">Adresse Email</label>
	      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="votrenom@exemple.com"  name="email">

	    </div>
	    <div class="col-auto">
	        <button type="submit" class="btn btn-primary mb-3" name="valider">Valider</button>
	      </div>
	  </div>
	</form>
	
</body>
</html>

<?php
	if (isset($_POST['valider'])) {
		if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['email'])) {
			echo "Veiller remplir tous les champs";
		}
		else{
		    echo "Prénom: ",$_POST['prenom'], nl2br("\n\n\n");
		    echo " Nom: ",$_POST['nom'], nl2br("\n\n\n");
		    echo " Email: ",$_POST['email'], nl2br("\n\n\n");
		}
	}

?>