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
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
	          <!-- Titre sur le bandeau -->
	          <a class="navbar-brand" href="<?= $racineWeb ?>">Le Jardin Du Chocolat</a>
                  
                  
	        </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Non connecté <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
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
