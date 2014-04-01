<!DOCTYPE html>

<html lang="en">
	<head>
                <base href="<?= $racineWeb ?>">
                
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Vendeur de chocolat depuis 1930">
		<meta name="author" content="Castex & Orgelet">
                
		<link rel="shortcut icon" href="Contenu/Images/icon.ico">
		
		<title>Le Jardin Du Chocolat - <?= $titre ?></title>
		
		<!-- Bootstrap CSS -->
		<link href="Librairies/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- OffCanvas CSS -->
		<link href="Librairies/css/offcanvas.css" rel="stylesheet">
		
		<!-- CSS personnel -->
		<link href="Contenu/style.css" rel="stylesheet">
	</head>
	<body>
		
            <!-- Bandeau -->
            <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <!-- Titre sur le bandeau -->
	          <a class="navbar-brand" href="<?= $racineWeb ?>">Le Jardin Du Chocolat</a>
	        </div>
	      </div>
	    </div>
	
            <!-- Partie inférieure au bandeau -->
	    <div class="container">
	    
              <?= $contenu ?>
	
              <!-- Séparateur -->
	      <hr>
	
              <!-- Pied de page -->
	      <footer>
	        <p>&copy; Castex-Orgelet 2014</p>
	      </footer>
	
	    </div>
    
		<!-- JQuery -->
        <script src="Librairies/js/jquery.min.js"></script>
		<!-- BootStrap -->
	<script src="Librairies/js/bootstrap.min.js"></script>
		<!-- OffCanvas -->
	<script src="Librairies/js/offcanvas.js"></script>
    </body>
</html>
