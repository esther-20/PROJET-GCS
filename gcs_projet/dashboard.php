<?php
require_once "assets/php/auth0.php";
include "assets/php/config.php";
include 'assets/php/functions.php';
session_start();
include "assets/php/init_utilisateur.php";
include "assets/php/query.php";
?>
<!DOCTYPE html>
<html lang="fr">
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
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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

 <!--  <li>
      <a href="projet_produit.php">
          <i class="zmdi zmdi-assignment-o"></i> <span>Projets_Produits</span>
          </a>
    </li> 
     <li>
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
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

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
     <!--  <i class="fa fa-envelope-open-o"></i></a> -->
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
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <!--<div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <p class="mb-0 text-white small-font"><a href=liste_�quipements_livres.php>Liste de tous les �quipements </a></p>
                </div>
            </div>-->
             <!-- <div class="col-12 col-lg-6 col-xl-6 border-light">
                <div class="card-body">
                  <p class="mb-0 text-black small-font"><a href=liste_equipements_livres.php>Liste des equipements livres</a></p>
                </div>
            </div>
            
            <div class="col-12 col-lg-6 col-xl-6 border-light">
                <div class="card-body">
                  <p class="mb-0 text-black small-font"><a href=liste_equipements_non_livres.php>Liste des equipements non livres</a></p>
                </div>
            </div> -->
        </div>
    </div>
 </div>  


 <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="dashboard.php">
                <div class="card-body">
                  <h5 class="text-white mb-0">Tous Projets  <span class="float-right"><!-- <i class="fa fa-shopping-cart"></i> --></span></h5><!-- <h2><?php //echo $count_encours ; ?></h2> -->
                    <div class="progress my-3" style="height:5px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
                </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
               <a href="termine.php">
                <div class="card-body">
                  <h5 class="text-white mb-0">Projets en cours<span class="float-right"><!-- <i class="fa fa-usd"></i> --></span></h5><!-- <h2><?php //echo $count_termine ; ?></h2> -->
                  <div class="progress my-3" style="height:5px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
                </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
               <a href="total.php">
                <div class="card-body">
                  <h5 class="text-white mb-0">Projets termines <span class="float-right"><!-- <i class="fa fa-eye"></i> --></span></h5><!-- <h2><?php //echo $count_total ; ?></h2> -->
                    <div class="progress my-3" style="height:5px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
                </a>
            </div>
        </div>
    </div>
 </div> 

  <div class="row">
   <div class="col-12 col-lg-12">
     <div class="card">
      <!--  <div class="card-header">liste projets
      <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
     </div> -->
         <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                      <th width="40%">Projet</th>
                      <th width="40%">statut</th>
                     <!--  <th width="25%">Quantite commandee</th>
                      <th width="25%">Quantite livree</th> -->
                      <th width="20%">Actions</th>
                   </tr>
                   </thead>
                   <tbody>
                    <?php
                                 while ($row_appartenir=$statement_appartenir->fetch())
                                            {
                                                $id_projet=$row_maint['id_projet'];
                                                $query_projet="SELECT * FROM projet WHERE id_projet=:id_projet ";
                                                $statement_projet=$pdo->prepare($query_projet);
                                                $statement_projet->execute(array(':id_projet'=>$id_projet));
                                                $row_projet=$statement_projet->fetch();
                                           /* while ($row_projet=$statement_projet->fetch())
                                            {
                                                $id_projet=$row_projet['id_projet'];
                                                $query_projet="SELECT * FROM projet WHERE id_projet=:id_projet ";
                                                $statement_projet=$pdo->prepare($query_projet);
                                                $statement_projet->execute(array(':id_projet'=>$id_projet));
                                                $row_projet=$statement_projet->fetch();
*/
                                                /*$id_produit=$row_produit['id_produit'];
                                                $query_produit="SELECT * FROM produit WHERE id_produit=:id_produit ";
                                                $statement_produit=$pdo->prepare($query_produit);
                                                $statement_produit->execute(array(':id_produit'=>$id_produit));
                                                $row_produit=$statement_produit->fetch();*/
                                                

                                                echo "<tr>";
                                                 echo "<td><p class='c_name'>".$row_appartenir['nom_projet']."//".$row_projet['nom_projet']."</p></td>";
                                                /*echo "<td><p class='c_name'>".$row_projet['nom_projet'];*/
                                                /*echo "<td><span class='email'>".$row_utilisateur['email_utilisateur']."</span></td>";*/
                                                echo "<td><i class=''></i>".$row_appartenir['statut']."</td>";
                                                /*echo "<td><i class=''></i>".$row_produit['libelle_produit']."</td>";
                                                echo "<td><i class=''></i>".$row_quantite_commandee['quantite_produit']."</td>";
                                                echo "<td><i class=''></i>".$row_quantite_livree['quantite_produit']."</td>";*/


                                                echo "<td><a class='btn btn-info'>Modifier</a> <a class='btn btn-danger' href='delete/delete_utilisateur.php?id_appartenir=$row_appartenir[id_appartenir]\" onClick=\"return confirm('Voulez-vous vraiment supprimer cet appartenir ?')\'>Supprimer</a></td>";
                                                //echo"<td>  </td>";
                                                echo "</tr>";
                                                //echo "<td><a class='btn btn-info'><a class='btn btn-info'></i></button><a href=\"delete\delete_utilisateur.php?id_utilisateur=$row_utilisateur[id_utilisateur]\" onClick=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')\"><a class='btn btn-info'><a class='btn btn-info'></i></button></td>";
                                                //echo "</tr>";


                       

                                            }

                                    ?>


                    <tr>
                       <?php
                                            while ($row_maint=$statement_maint->fetch())
                                            {
                                                $id_client=$row_maint['id_client'];
                                                $query_client="SELECT * FROM client WHERE id_client=:id_client ";
                                                $statement_client=$pdo->prepare($query_client);
                                                $statement_client->execute(array(':id_client'=>$id_client));
                                                $row_client=$statement_client->fetch();

                                                //REQUETE LOCALISATION
                                                $commune_id=$row_client['commune_id'];
                                                $ville_id=$row_client['ville_id'];
                                                $pays_id=$row_client['pays_id'];
                                                //COMMUNE
                                                $query_commune="SELECT * FROM commune WHERE commune_id=:commune_id ";
                                                $statement_commune=$pdo->prepare($query_commune);
                                                $statement_commune->execute(array(':commune_id'=>$commune_id));
                                                $row_commune=$statement_commune->fetch();
                                                //VILLE
                                                $query_ville="SELECT * FROM ville WHERE ville_id=:ville_id ";
                                                $statement_ville=$pdo->prepare($query_ville);
                                                $statement_ville->execute(array(':ville_id'=>$ville_id));
                                                $row_ville=$statement_ville->fetch();
                                                //PAYS
                                                $query_pays="SELECT * FROM pays WHERE pays_id=:pays_id ";
                                                $statement_pays=$pdo->prepare($query_pays);
                                                $statement_pays->execute(array(':pays_id'=>$pays_id));
                                                $row_pays=$statement_pays->fetch();

                                                echo "<tr>";
                                                echo "<td><p class='c_name'>".$row_maint['lib_contrat']."//".$row_client['lib_client']."</p></td>";
                                                echo "<td><span class='phone'><i class='zmdi zmdi-pin'></i>".$row_pays['pays_nom_fr'].",".$row_ville['ville_nom_fr'].",".$row_commune['commune_nom_fr']."</span></td>";
                                                echo "<td><address><i class=''></i>".$row_maint['date_debut']."</address></td>";
                                                echo "<td><address><i class=''></i>".$row_maint['date_fin'] ."</address></td>";
                                                $today=strtotime(date('d-m-Y'));
                                                if ($row_maint['statut_contrat'] >= $today ) 
                                                {
                                                    echo "<td><span class='badge badge-success'>En cours</span></td>";
                                                }
                                                else
                                                {
                                                    echo "<td><span class='badge badge-danger'>Expir�</span></td>";
                                                }                                               
                                                echo "</tr>";

                                             }
                                    ?>
                    <!-- <td>Iphone 5</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>
           
           <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                 </tbody>-->
                 </table> 
               </div>
     </div>
   </div>
  </div>
  <!--End Row-->  
	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <!--<div class="card">
		 <div class="card-header">Site Traffic
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void();">Action</a>
				<a class="dropdown-item" href="javascript:void();">Another action</a>
				<a class="dropdown-item" href="javascript:void();">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Separated link</a>
			   </div>
			  </div>
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">45.87M</h5>
			   <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">15:48</h5>
			   <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">245.65</h5>
			   <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
		     </div>
		   </div>
		 </div>-->
		</div>
	 </div>

     <!--<div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Weekly sales
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                   <td>$5856</td>
                   <td>+55%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                   <td>$2602</td>
                   <td>+25%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                   <td>$1802</td>
                   <td>+15%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                   <td>$1105</td>
                   <td>+5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>-->
	<!--</div> --> 
    
	<!--
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Order Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>
				   
				   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div>--><!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div>
    <!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright � 2020 GCS Project
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
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
   </div>
  <!--end color switcher-->
   
  <!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
