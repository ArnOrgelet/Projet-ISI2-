<?php $this->titre = "Accueil"; ?>


<?php include_once('Vue/_Commun/barreNavigation.php'); ?>


<!-- Fil d'Ariane -->
<ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> Accueil <span class="divider"></span></li>
</ul>

<div class="row row-offcanvas row-offcanvas-left">

    <?php include_once('Vue/_Commun/menuNavigation.php'); ?>

    <!-- Partie principale de la page : le contenu -->
    <div class="col-xs-12 col-sm-9">
      <!-- Bouton du toggle menu au format xs -->
      <p class="pull-left visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Menu</button>
      </p>

      <!-- Partie textuelle de bienvenu -->
      <div class="jumbotron main-frame">
        <img class="img-responsive img-circle main-frame" src="Contenu/Images/main_pic.jpg" />

        <h1>
            Bienvenue au Jardin du Chocolat!
        </h1>

        <p>
            Le Jardin du Chocolat vous propose de délicieux chocolats noir,
            au lait ou blanc, ainsi que différentes gourmandises :
            truffes, marrons glacés, calissons...
        </p>
      </div>
    </div>
</div>

<?php include_once('Vue/_Commun/bandeauBas.php'); ?>
