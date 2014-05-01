<?php
    if(isset($chocolat))
        $this->titre = $this->nettoyer($chocolat['nom']);
    else
        $this->titre = 'Chocolat introuvable';
?>

<?php include_once('Vue/_Commun/barreNavigation.php'); ?>


<!-- Fil d'Ariane -->
<ul class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a href="accueil">Accueil</a> <span class="divider"></span></li>
    <?php if(isset($chocolat)) : ?>
        <li><span class="glyphicon glyphicon-leaf"></span> <a href="navigation/index/<?= $this->nettoyer($currentCategorie['id']) ?>"><?= $this->nettoyer($currentCategorie['titre']) ?></a> <span class="divider"></span></li>
        <li class="active"><span class="glyphicon glyphicon-heart-empty"></span> <?= $this->nettoyer($chocolat['nom']) ?></li>
    <?php else : ?>
        <li class="active"><span class="glyphicon glyphicon-leaf"></span> Chocolat introuvable</li>
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
        <div class="row">
            <?php if(isset($chocolat)) : ?>
                <div>
                    <h2>
                        <strong><?= $this->nettoyer($chocolat['nom']) ?></strong>
                    </h2>
                    <br>
                    <br>
                </div>

                <div class="col-sm-3">
                    <img class="thumbnail" alt="" src="Contenu/Images/Chocolats/<?= $this->nettoyer($chocolat['image_src']) ?>.jpg">
                </div>

                <div class="col-sm-9">
                    <br>

                    <div>
                        <address>
                            <strong>Date d'ajout:</strong> <span><?= date('d/m/Y', strtotime($this->nettoyer($chocolat['date']))) ?></span><br>
                            <strong>Fabriquant:</strong> <span><?= $this->nettoyer($chocolatier['nom']) ?></span><br>
                        </address>
                    </div>

                    <div>
                        <h2>
                            <strong>Prix: <?= number_format($this->nettoyer($chocolat['prix']), 2) ?>&euro;</strong>
                        </h2>
                    </div>	

                    <br>

                    <div>
                        <button class="btn btn-primary" type="submit">Ajouter au panier</button>
                    </div>
                </div>
            <?php else : ?>
                <div class="alert alert-warning">
                    Sélectionnez un chocolat pour voir les informations associées.
                </div>
            <?php endif; ?>
        </div>
          
      </div>
    </div>
</div>

<?php include_once('Vue/_Commun/bandeauBas.php'); ?>