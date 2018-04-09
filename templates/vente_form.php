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
        <a href="clients.php">
            <i class="material-icons">person</i>
            <p>Gestion clients</p>
        </a>
    </li>
    <li class="active">
        <a href="vente.php">
            <i class="material-icons">content_paste</i>
            <p>Vente</p>
        </a>
    </li>
    <li>
        <a href="">
            <i class="material-icons">library_books</i>
            <p>Rapport</p>
        </a>
    </li>
    <li>
        <a class="red" href="logout.php">
            <i class="material-icons">bubble_chart</i>
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
        <a class="navbar-brand" href="#"> GESTION DES VENTES </a>
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
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title"></span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">
                                        <i class="material-icons">shop</i> Vendre
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#settings" data-toggle="tab">
                                        <i class="material-icons">liste</i> Historique vente
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#messages" data-toggle="tab">
                                        <i class="material-icons">list</i> Meilleurs ventes
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">

                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Selectionner article</label>
                                                    <select type="text" class="form-control" id="art">
                                                      <option></option>
                                                      <option value="2">Pantalons</option>
                                                      <option value="1">Chemises</option>

                                                    </select>
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label">Prix unitaire</label>
                                              <input id="pu" value=" " type="text" class="form-control" >
                                          <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                          </div>

                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                                <div class="form-group label-floating is-empty">
                                                  <label class="control-label" >Mombre</label>
                                                  <input type="number" id="nbr" class="form-control">
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label">Prix total</label>
                                              <input type="text" id="tot" class="form-control" disabled>
                                          <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                          </div>


                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Selectionner un client</label>
                                                    <select type="text" id="cl" class="form-control">
                                                        <option></option>

                                                      <?php foreach ($table as $row)
                                                        {
                                                          $code =  $row["num_transaction"];
                                                          echo ("  <option value='$code'>".$row["nom_client"]."</option>");

                                                          }
                                                      ?>
                                                    </select>
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label">Code client</label>
                                              <input type="text" id="code" class="form-control" disabled>
                                          <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                          </div>


                          <a href="#pablo" id="vente" class="btn btn-primary btn-round" style="margin:  auto;display:  table;">
                            VENDRE<div class="ripple-container"></div></a>
                            <br/>
                            <span  id="affreslt_aut"></span>


<!-- <table></table> -->
                        </div>
                        <div class="tab-pane" id="messages">
                          <table class="table table-hover">
                              <thead class="text-warning">
                                  <th>ID</th>
                                  <th>Nom complet</th>
                                  <th>Email</th>
                                  <th>Code</th>
                                    <th>Etat</th>

                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Dakota Rice</td>
                                      <td>$36,738</td>
                                      <td>Niger</td>
                                      <td>Niger</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Minerva Hooper</td>
                                      <td>$23,789</td>
                                      <td>Curaçao</td>
                                      <td>Niger</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Sage Rodriguez</td>
                                      <td>$56,142</td>
                                      <td>Netherlands</td>
                                      <td>Niger</td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Philip Chaney</td>
                                      <td>$38,735</td>
                                      <td>Korea, South</td>
                                      <td>Niger</td>
                                  </tr>
                              </tbody>
                          </table>
                        </div>
                        <div class="tab-pane" id="settings">
                          <table class="table table-hover">
                              <thead class="text-warning">
                                  <th>ID</th>
                                  <th>Date</th>
                                  <th>Clients</th>
                                  <th>Code clients</th>
                                  <th>Chemises</th>
                                  <th>Pantalons</th>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Dakota Rice</td>
                                      <td>$36,738</td>
                                      <td>Niger</td>
                                      <td>$36,738</td>
                                      <td>Niger</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Minerva Hooper</td>
                                      <td>$23,789</td>
                                      <td>Curaçao</td>
                                      <td>$36,738</td>
                                      <td>Niger</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Sage Rodriguez</td>
                                      <td>$56,142</td>
                                      <td>Netherlands</td>
                                      <td>$36,738</td>
                                      <td>Niger</td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Philip Chaney</td>
                                      <td>$38,735</td>
                                      <td>Korea, South</td>
                                      <td>$36,738</td>
                                      <td>Niger</td>
                                  </tr>
                              </tbody>
                          </table>
                        </div>

                        <div class="tab-pane" id="modification">


                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-6">

                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Selectionner clients</label>

                                                    <select type="text" class="form-control">
                                                      <option></option>
                                                      <option>123</option>
                                                      <option>456</option>
                                                      <option>789</option>
                                                      <option>111</option>

                                                    </select>
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3"></div>
                          </div>
                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-6">

                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Nom clients</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3"></div>
                          </div>
                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Address mail</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3"></div>

                          </div>
                          <a href="#pablo" class="btn btn-primary btn-round" style="margin:  auto;display:  table;">
                            MODIFIER<div class="ripple-container"></div></a>



<!-- <table></table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="orange">
                    <h4 class="title">Employees Stats</h4>
                    <p class="category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Country</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dakota Rice</td>
                                <td>$36,738</td>
                                <td>Niger</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Minerva Hooper</td>
                                <td>$23,789</td>
                                <td>Curaçao</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sage Rodriguez</td>
                                <td>$56,142</td>
                                <td>Netherlands</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Philip Chaney</td>
                                <td>$38,735</td>
                                <td>Korea, South</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </div>
</div>
</div>

</div>
</div>
</body>
