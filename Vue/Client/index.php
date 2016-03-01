<?php $this->titre = "Informations client"; ?>
 
<?php include_once('Vue/_Commun/barreNavigation.php'); ?>

<?php include_once('Vue/_Commun/succesMessagePanel.php'); ?>
<?php include_once('Vue/_Commun/erreurMessagePanel.php'); ?>


<h2 class="text-center">Identifications client</h2>
<div class="well">
    <form class="form-horizontal" role="form" action="client/modifier" method="post">
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-5">
                <p class="form-control-static">Tous les champs sont obligatoires.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Nom</label>
            <div class="col-sm-6 col-md-4">
                <input name="nom" type="text" value="<?= $this->nettoyer($client['nom']) ?>" class="form-control" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Prénom</label>
            <div class="col-sm-6 col-md-4">
                <input name="prenom" type="text" value="<?= $this->nettoyer($client['prenom']) ?>" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Adresse</label>
            <div class="col-sm-6 col-md-4">
                <input name="adresse" type="text" value="<?= $this->nettoyer($client['adresse']) ?>" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Code postal</label>
            <div class="col-sm-3 col-md-2">
                <input name="codePostal" type="text" value="<?= $this->nettoyer($client['codePostal']) ?>" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Ville</label>
            <div class="col-sm-6 col-md-4">
                <input name="ville" type="text" value="<?= $this->nettoyer($client['ville']) ?>" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Courriel</label>
            <div class="col-sm-6 col-md-4">
                <input name="courriel" type="email" value="<?= $this->nettoyer($client['courriel']) ?>" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Ancien mot de passe</label>
            <div class="col-sm-6 col-md-4">
                <input name="mdpold" type="password" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Confirmer/Nouveau mot de passe</label>
            <div class="col-sm-6 col-md-4">
                <input name="mdpnew" type="password" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-5">
                <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>
            </div>
        </div>
    </form>
</div>


<?php include_once('Vue/_Commun/bandeauBas.php'); ?>