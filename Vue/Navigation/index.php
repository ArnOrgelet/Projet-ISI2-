<?php
    if(isset($currentCategorie['titre']))
        $this->titre = $this->nettoyer($currentCategorie['titre']);
    else
        $this->titre = 'Categories de chocolat';
?>



<!-- Fil d'Ariane -->
<ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a href="accueil">Accueil</a> <span class="divider"></span></li>
    <?php if(isset($currentCategorie['titre'])) : ?>
        <li class="active"><span class="glyphicon glyphicon-leaf"></span> <?= $this->nettoyer($currentCategorie['titre']) ?></li>
    <?php else : ?>
        <li class="active"><span class="glyphicon glyphicon-leaf"></span> Categories</li>
    <?php endif; ?>
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
          
        <?php if(isset($currentCategorie['titre'])) : ?>
          <?php if($chocolats->rowCount() > 0) : ?>
            <br>
            <?php $index = 0; ?>
            <?php foreach ($chocolats as $index => $chocolat): ?>
              <?= ($index % 4 == 0 ? '<div class="row">' : '' ) ?>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail">
                    <img src="Contenu/Images/Chocolats/<?= $this->nettoyer($chocolat['image_src']) ?>.jpg"
                         title="<?= $this->nettoyer($chocolat['nom']) ?>"
                         alt="<?= $this->nettoyer($chocolat['nom']) ?>">
                  </a>
                </div>
              <?= ($index % 4 == 3 ? '</div>' : '' ) ?>
            <?php endforeach; ?>
            <?= ($index % 4 != 3 ? '</div>' : '' ) ?>
          <?php else : ?>
            <h3>
                Aucun chocolat ne correspond à la categorie <?= $this->nettoyer($currentCategorie['titre']) ?>
            </h3>
          <?php endif; ?>
        <?php else : ?>
          <div class="alert alert-warning">
            Sélectionnez une catégorie pour afficher les chocolats associés.
          </div>
        <?php endif; ?>
      </div>
    </div>
</div>
