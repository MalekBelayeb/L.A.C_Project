





<?php include_once 'c:/wamp64/www/AvenirCulturel/Core/LoginCore.php';



  if (isset($_SESSION['id'])) 
  {
      if ($_SESSION['id'] != 'admin')
        header('location:http://localhost/AvenirCulturel/Views/index.php');
  }else header('location:http://localhost/AvenirCulturel/Views/index.php');
  


 ?>







<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Marketing</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti4">
            <li>
              <a href="evenement.php">gerer evenement</a>
            </li>
           
             <li>
              <a href="CouponTable.php">gerer coupon</a>
            </li>
            
          </ul>
        </li>
        



        <?php 
 
include_once "/core/notifcore.php";
$TopicC=new Notifcore();
 $liste= $TopicC->check();






if ($liste>0){ ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
           <img src="point.png" width="10" height="10">
            <i class="fa fa-fw fa-file"></i>
           <span class="nav-link-text">Reclamation</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="reclamation1">Reclamation</a>
            </li>
            <li>
              <a href="chart.php">Statistique Des Reclamations</a>
            </li>
          </ul>
            
        </li>
        <?php } else {?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Reclamation</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="reclamation1">Reclamation</a>
            </li>
            <li>
              <a href="chart.php">Statistique Des Reclamations</a>
            </li>
          </ul>
           
        </li>
        <?php } ?>


    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Livres</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.php">Ajouter livres</a>
            </li>
            <li>
              <a href="cards.php">Modifier livres</a>
            </li>
              <li>
                  <a href="cards.php">Supprimer livres</a>
              </li>
              <li>
                  <a href="cards.php">Afficher livres</a>
              </li>
          </ul>
        </li>


 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="livraison">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapselivraison" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">livraison</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapselivraison">
            <li>
              <a href="livraison1.php">livraison</a>
            </li>
             <li>
              <a href="admin_livreur.php">livreur</a>
            </li>
            <li>
              <a href="prix.php">prix livraison</a>
            </li>


           
          </ul>
        </li>

 


<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#livres" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Gestion livres</span>
          </a>
          <ul class="sidenav-second-level collapse" id="livres">
            <li>
              <a href="crud_index_livre.php">crud livres</a>
            </li>
            <li>
              <a href="crud_index_categorie.php">crud Categorie</a>
            </li>
            
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Statistique</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="stat1.php">statistique 1</a>
                </li>
    
              </ul>
            </li>
           
           
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#auteur" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Gestion auteur</span>
          </a>
          <ul class="sidenav-second-level collapse" id="auteur">
            <li>
              <a href="crud_index_auteur.php">crud auteur</a>
            </li>
           
          </ul>
        </li>


        





      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>



        
      </ul>


      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" href="http://localhost/livechat/php/app.php?admin#">
            <i class="fa fa-fw fa-envelope"></i>
            
            
          </a>
         

          </li>

        <li class="nav-item dropdown">
         <?php   
            include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';
                   
                  $book = New bookcore();
                  $donnes = $book->afficher_book_quantite();

                    if ($donnes->rowCount() >0 ){



          ?>
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>


          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            
              <?php                   
                    foreach ($donnes as $row) {
                      
                    
                ?>

            <a class="dropdown-item" href="modifier_quantite.php?id=<?php echo $row['ID']; ?> ">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>quantite est 0 de livre  : <?php  echo $row['ID']." || ".$row['NOM'];  ?> </strong>
              </span>
            </a>

           


            <?php  }?>
            </div>


            <?php  } ?>


            </li>
            
            
          
          
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>





  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Area Chart Example-->
    
     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>hello</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="http://localhost/AvenirCulturel/Core/DeconnexionCore.php">Logout</a>
          </div>
        </div>
      </div>
    </div>



  
   
      