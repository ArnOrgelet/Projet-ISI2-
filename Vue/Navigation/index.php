<?php $this->titre = $currentCategorie['titre']; ?>



<!-- Fil d'Ariane -->
<ul class="breadcrumb">
    <li><a href="accueil"><span class="glyphicon glyphicon-home"> Accueil</span></a> <span class="divider"></span></li>
    <li class="active"><span class="glyphicon glyphicon-leaf"> <?= $currentCategorie['titre'] ?></span></li>
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
        <br>
        
        <?php foreach ($chocolats as $chocolat): ?>
          <div class="row">
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="Contenu/Images/main_pic.jpg" alt="Bonjour">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="Contenu/Images/main_pic.jpg" alt="Bonjour">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="Contenu/Images/main_pic.jpg" alt="Bonjour">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="Contenu/Images/main_pic.jpg" alt="Bonjour">
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>