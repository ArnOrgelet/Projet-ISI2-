
<!-- Menu de gauche -->
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
  <div class="list-group">
    <?php foreach ($categories as $categorie): ?>
        <a href="navigation/index/<?= $this->nettoyer($categorie['id']) ?>"
           title="<?= $this->nettoyer($categorie['titre']) ?>"
           class="list-group-item <?= ($categorie['id'] == $currentCategorie['id'] ? ' active ' : '') ?>">
            <span><?= $this->nettoyer($categorie['titre']) ?></span>
            <span class="badge"><?= $this->nettoyer($categorie['nb']) ?></span>
        </a>
    <?php endforeach; ?>
  </div>
</div>
