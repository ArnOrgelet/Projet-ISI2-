
<?php if (isset($msgSucces)) : ?>
    <!-- Message de réussite -->
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Confirmation !</strong> <?= $this->nettoyer($msgSucces) ?>
    </div>
<?php endif; ?>
