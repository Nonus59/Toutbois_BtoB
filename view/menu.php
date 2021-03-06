
<div class="container">
  <?php require '../class/recup-url.php' ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Navbar content -->
    <span class="navbar-brand mb-0 h1">Toutbois</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="col-md-9">
        <ul class="navbar-nav">
          <li class="nav-item
          <?php
            if($url == '/Toutbois_BtoB/public/index.php') { echo 'active';}
          ?>
          ">
            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item
            <?php
              if($url == '/Toutbois_BtoB/public/catalogue.php') { echo 'active';}
            ?>
          ">
            <a class="nav-link" href="catalogue.php">Commander</a>
          </li>
          <li class="nav-item
          <?php
            if($url == '/Toutbois_BtoB/public/archives.php') { echo 'active';}
          ?>
          ">
            <a class="nav-link" href="archives.php">Commandes en cours</a>
          </li>
          <li class="nav-item
          <?php
            if($url == '/Toutbois_BtoB/public/panier.php') { echo 'active';}
          ?>
          ">
            <a class="nav-link" href="panier.php">Panier <span class="badge badge-primary badge-pill"><span id="count"><?= $panier->count(); ?></span></span></a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="navbar-nav float-droit-menu">

          <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] == 'Connect'): ?>

            <li class="nav-item active">
              <a class="nav-link" href="logout.php"><?= $_SESSION['enseigne']; ?> Déconnexion</a>
            </li>
          <?php else: ?>

          <li class="nav-item active">
            <a class="nav-link" href="connexion-client.php">Connexion</a>
          </li>
        <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
