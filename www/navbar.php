<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		
      </button>
      <a class="navbar-brand active" href="index.php">Accueil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	    <?php
	    if(isset($_SESSION['Login']))
	    {
	    ?>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clients<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="CreerClient.php">Créer un Client</a></li>
            <li><a href="ListerClients.php">Lister les clients</a></li>
            <li><a href="modifierclient.php">Modifier un client</a></li>
            <li class="divider"></li>
            <li><a href="suppression.php">Supprimer un client</a></li>
            <li class="divider"></li>
            <li><a href="index.php">Revenir à l'accueil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Documents<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="typedoc.php">Type document</a></li>
            <li><a href="creertypedoc.php">	Créer type document</a></li>
            <li><a href="modiftypedoc.php">Modifier type document</a></li>
			<li><a href="suptypedoc.php">Supprimer type document</a></li>
            <li><a href="index.php">Revenir à l'accueil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Type Document<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="listertypedoc.php">Lister type document</a></li>
            <li><a href="listefichier.php">Créer type document	</a></li>
            <li><a href="modifiercivilite.php">Modifier type document</a></li>
			 <li><a href="supprimercivilite.php">Supprimer type document</a></li>
            <li><a href="index.php">Revenir à l'accueil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Créer Facture<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="listerclient.php">Clients</a></li>
            <li><a href="listefichier.php">	</a></li>
            <li><a href="typedoc.php">Nom du document</a></li>
            <li><a href="index.php">Revenir à l'accueil</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Civilites<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="creercivilite.php">Creer civilite</a></li>
            <li><a href="modifiercivilite.php">	Modifier civilite</a></li>
            <li><a href="typedoc.php">Supprimer civilite</a></li>
            <li><a href="index.php">Revenir à l'accueil</a></li>
          </ul>
        </li>
		<?php 
		}
		?>
        <li><a href="#">Contact <span class="sr-only">(current)</span></a></li> 
      </ul>
	  
	  <?php
	  if(isset($_SESSION['Login']))
	  {
	  ?>
	  <div class="navbar-form navbar-right">
		<a href="Deconnexion.php" class="btn btn-danger btn-sm">Déconnexion</a>
	  </div>
	  
	  <?php
	  }
	  else
	  {

	  ?>

		<form action="Connexion.php" method="POST" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" name="login" class="form-control input-sm" placeholder="ex : mhonvault">
        </div>
		<div class="form-group">
          <input type="password" name="password" class="form-control input-sm" placeholder="ex ******">
        </div>
        <input type="submit" class="btn btn-primary btn-sm" value="Connexion"></input>
		<a href="Inscription.php" class="btn btn-success btn-sm">Inscription</a>
      </form>
	  <form class="form-horizontal">

      </form>
	  
	 

	  
	  

	  <?php
	  }
     ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>