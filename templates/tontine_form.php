<?php
    if(isset($_SESSION['id_u'])){
      //echo "session setted";
    }
    else header("Location: " . "logout.php");
    //echo "non session";

?>
<ul class="nav" >
    <li >
        <a href="index.php">
            <i class="material-icons">dashboard</i>
            <p>TABLEAU DE BORD</p>
        </a>
    </li>
    <li>
        <a href="assistance_sco.php">
            <i class="material-icons">person</i>
            <p>Assistance Scolaire</p>
        </a>
    </li>
    <li>
        <a href="assistance_ped.php">
            <i class="material-icons">person</i>
            <p>Assistance pedagogique</p>
        </a>
    </li>
    <li>
        <a href="clients.php">
            <i class="material-icons">person</i>
            <p>Identification</p>
        </a>
    </li>
    <li class="active">
        <a href="tontine.php">
            <i class="material-icons">content_paste</i>
            <p>Tontine</p>
        </a>
    </li>
    <li>
        <a href="">
            <i class="material-icons">library_books</i>
            <p>Rapport</p>
        </a>
    </li>
    <li>
        <a href="logout.php" class="red">
            <i class="material-icons">info_outline</i>
            <p>Deconnexion</p>
        </a>
    </li>
</ul>
</div>
</div>
<div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-uppercase" href="#">
          <?php if (isset($title)): ?>
              <?= htmlspecialchars($title) ?>
          <?php else: ?>
            ZAWADI SOCIAL ASSISTANCE
          <?php endif ?></a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">dashboard</i>
                    <p class="hidden-lg hidden-md">Dashboard</p>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">person</i>
                    <span class="notification suc"></span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"> <?php if(isset($_SESSION['login'])){
                            echo "ONLINE ".$_SESSION['login'];
                          }?></a>
                    </li>
                    <li class="red">
                        <a href="logout.php">Se deconnecter</a>
                    </li>

                </ul>
            </li>

        </ul>
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group  is-empty">
                <input type="text" class="form-control" placeholder="Search">
                <span class="material-input"></span>
            </div>
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
            </button>
        </form>
    </div>
</div>
</nav>
<div class="content">
<div class="container-fluid">
    <div class="row">

          <div class="col-lg-12 col-md-12">
              <div class="card card-nav-tabs">
                  <div class="card-header" data-background-color="purple">
                    EN CONSTRUCTION
                  </div>
                  <div class="cons">
                    <form method="POST">
                      <button> okkkkk </button>
                    </form>
                  </div>
                </div>
              </div>



    </div>


</div>
</div>
</div>
</div>
</body>
