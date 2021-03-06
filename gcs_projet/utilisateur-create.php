 <?php
 include "assets/php/config.php";
 include 'assets/php/functions.php';
session_start();
include "assets/php/query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
   <title>GCS PROJETS</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/favicon.png" class="favicon" alt="favicon">
        <h5 class="logo-text">GCS PROJETS</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">NAVIGATION</li>
     <li>
        <a href="dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>HOME</span>
        </a>
      </li>

      

      <li>
        <a href="projet.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Projet</span>
        </a>
      </li>

     
      <li>
        <a href="categorie_produit.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Categorie produit</span>
          <!--<small class="badge float-right badge-light">New</small>-->
        </a>
      </li>

    <li>
      <a href="produit.php">
          <i class="zmdi zmdi-assignment-check"></i> <span>Produit</span>
          </a>
    </li>
    <li>
        <a href="utilisateur.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>Utilisateurs</span>
        </a>
      </li>

     <!-- <li>
      <a href="projet_produit.php">
          <i class="zmdi zmdi-assignment-o"></i> <span>Projets_Produits</span>
          </a>
    </li> -->

      <!--<li>
        <a href="profile.html">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Remarque</span>
        </a>
      </li>

      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>-->

    </ul>
   
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
      <!-- <i class="fa fa-envelope-open-o"></i></a> -->
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $_SESSION['nom_utilisateur'] ?> </h6>
            <p class="user-subtitle"><?php echo  $_SESSION['email_utilisateur'] ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"> <a href="assets/php/logout.php"><i class="icon-power mr-2"></i> Deconnexion</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!-- ajout -->
<div class="clearfix"></div>
  
    <div class="content-wrapper">
      <div class="container-fluid">
          <!--<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">×</font>
              </font>
            </button>

            <div class="alert-message">
              <span>
                <font style="vertical-align: inherit;">
                 <font style="vertical-align: inherit;">Connexion Reussie! <br></font>
                </font>
              </span>
            </div>
          </div>-->

<!--Start User-Create Content-->
<div class="row m-3">

  <div class="col-lg-8">
        <div class="card">
        <div class="card-header">Utilisateur → Nouveau
                <!--
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">×</font>
                            </font>
                        </button>
                        <div class="alert-message">
                            <span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"><br></font>
                                </font>
                            </span>
                        </div>
                    </div>
                     <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">×</font>
                            </font>
                        </button>
                        <div class="alert-message">
                            <span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"><<br></font>
                                </font>
                            </span>
                        </div>
                    </div>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">×</font>
                            </font>
                        </button>
                    <div class="alert-message">
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"><br></font>
                            </font>
                        </span>
            </div>
        </div>-->
        <div class="card-body">
            <form method="POST" action="assets/php/add_utilisateur.php">
                    <!-- name = name  -->
               <div class="form-group" >
                    <label for="input-1">Nom</label>
                    <input type="text" name="nom_utilisateur" class="form-control" required id="input-1" placeholder="Entrez le nom">
                </div>

                    <!-- name = firstname -->
                <div class="form-group">
                    <label for="input-2">Prénoms</label>
                    <input type="text" name="prenom_utilisateur" class="form-control" required id="input-2" placeholder="Entrez le prénom">
                </div>

                    <!-- name = email -->
                <div class="form-group">
                    <label for="input-3">Email</label>
                    <input type="text" name="email_utilisateur" class="form-control" required id="input-3" placeholder="Entrez l'adresse email">
                </div>

                    <!-- name = tel -->
                <div class="form-group">
                    <label for="input-4">Telephone</label>
                    <input type="text" name="tel_utilisateur" class="form-control" required id="input-4" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="Entrez le numéro de téléphone">
                </div>

              <!--
                    <input type="number" name="tel" min="0" maxlength="8" required minlength="8" class="form-control" id="input-4" placeholder="Entrez le numéro de téléphone">
                </div>
                -->

                    <!-- name = password -->
                    <div class="form-group">
                        <label for="input-4">Mot de passe</label>
                        <input type="password" minlength="8"  name="motpass_utilisateur" required class="form-control" id="input-4" placeholder="Entrez le mot de passe">
                    </div>
                  
                    <div class="form-group">
                        <label for="input-4">Confirmer mot de passe</label>
                        <input type="password" minlength="8"  name="password" required class="form-control" id="input-4" placeholder="Confirmez le mot de passe">
                    </div>


                   <!-- name = id_utilisateur  -->

<div class="form-group form-float">
  <label for="utilisateur"> type utilisateur</label>
<select class="form-control" required="" name="id_typutilisateur">
                                               <?php
                                                  while($row_typutilisateur=$statement_typutilisateur->fetch())
                                                    {
                                                        echo "<option value=".$row_typutilisateur['id_typutilisateur'].">". $row_typutilisateur['lib_typutilisateur']." </option>";
                                                    }
                                                ?>
                                    </select>
                                </div>
               <!--<div class="form-group">
		                <label for="utilisateur"> type utilisateur</label>
                     <select class="form-control" name="id_utilisateur" required="required">
                       <option value="utilisateur">Utilisateur</option>
                       <option value=<?php //echo $rowselect['id_utilisateur'] ; ?> >Administrateur</option>
                     </select>
               </div>-->
              
                                
 
                    <!-- name = valider  -->
                <div class="form-group">
                    <button type="submit" name="addutilisateur" class="btn btn-info px-5 btn-block">Inscrire</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

 <?php

                                            while ($row_utilisateur=$statement_utilisateur->fetch())
                                            {
                                                $id_typutilisateur=$row_typutilisateur['id_typutilisateur'];
                                                $query_typutilisateur="SELECT * FROM type_utilisateur WHERE id_typutilisateur=:id_typutilisateur ";
                                                $statement_typutilisateur=$pdo->prepare($query_typutilisateur);
                                                $statement_typutilisateur->execute(array(':id_typutilisateur'=>$id_typutilisateur));
                                                $row_typutilisateur=$statement_typutilisateur->fetch();

                                                echo "<tr>";
                                                //echo "<td><p class='c_name'>".$row_utilisateur['nom_utilisateur'];
                                                //echo "<td>".$row_prenom_utilisateur['pnom_utilisateur'];
                                                //echo "<td><span class='email'>".$row_utilisateur['email_utilisateur']."</span></td>";
                                                //echo "<td><i class=''></i>".$row_typutilisateur['lib_typutilisateur']."</td>";
                                                //echo "<td><address><i class=''></i>".$row_dep['lib_dep'] ."</address></td>";
                                                //echo "<td><button class='btn btn-primary btn-sm'><a href=\"delete\delete_utilisateur.php?id_utilisateur=$row_utilisateur[id_utilisateur]\" return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')\">";
                                                //echo "</tr>";



                                            }
                                    ?>
 
<!-- fin ajout -->
<!--End topbar header-->
<!--
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Basic Table</h5>
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bordered Table</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
-->
      <!--End Row-->

<!--
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Striped Table</h5>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hover Table</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
-->
      <!--End Row-->
<!--
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Small Table</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Responsive Table</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                      <td>Cell</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
-->
      <!--End Row-->
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
  <!--  <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div> -->
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
