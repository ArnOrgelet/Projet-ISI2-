<?php $this->titre = "Accueil"; ?>







<!-- Menu de gauche -->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
  <div class="list-group">
    <?php foreach ($categories as $categorie): ?>
        <a href="#" title="<?= $categorie['titre'] ?>" class="list-group-item"> <!-- active -->
            <span><?= $categorie['titre'] ?></span>
            <span class="badge"><?= $categorie['nb'] ?></span>
        </a>
    <?php endforeach; ?>
  </div>
</div>

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