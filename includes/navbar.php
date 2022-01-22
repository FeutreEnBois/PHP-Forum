<header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">              
              
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="signup.php" class="nav-link">Home</a></li>
                  <li><a href="signup.php" class="nav-link">Signup</a></li>
                  <li><a href="login.php" class="nav-link">Login</a></li>
                  <li><a href="article.php" class="nav-link">Articles</a></li>
                  <li><a href="profil.php" class="nav-link">My profile</a></li>
                </ul>
              </nav>

            
          </div>
        </div>

</header>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes questions</a>
        </li>
        <?php 
          if(isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actions/users/logoutModels.php">Déconnexion</a>
            </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>