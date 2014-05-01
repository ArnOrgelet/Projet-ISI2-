
<?php if (isset($msgErreur)) : ?>
    <!-- Message d'erreur -->
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Erreur !</strong> <?= $this->nettoyer($msgErreur) ?>
    </div>
<?php endif; ?>