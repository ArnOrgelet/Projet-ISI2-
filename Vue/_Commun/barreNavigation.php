
<!-- Bandeau -->
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Afficher navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Titre sur le bandeau -->
      <a class="navbar-brand" href="Accueil">Le Jardin Du Chocolat</a>
    </div>
     
    <?php if(!isset($bandeauPerso) || $bandeauPerso == true) : ?>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 
                        <?php if(isset($client)) : ?>
                            Bienvenu <?= $client['prenom'] ?>
                        <?php else : ?>
                            Non connecté
                        <?php endif; ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(isset($client)) : /* Connecté */ ?>
                            <li><a href="">Mes informations</a></li>
                            <li class="divider"></li>
                            <li><a href="Connexion/Deconnecter">Déconnexion</a></li>
                        <?php else : /* Non connecté */ ?>
                            <li><a href="Connexion">Connexion/Inscription</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    <?php endif; ?>
  </div>
</div>

<!-- Partie inférieure au bandeau -->
<div class="container">