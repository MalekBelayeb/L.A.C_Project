<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin &#8211; L.A.C</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php
require_once 'header.php';
require_once '../../Config.php';
?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Order Table</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Orders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Totale</th>
                  <th>Methode de payment</th>
                  <th>Etat</th>
                  <th>Valider</th>
                    <th>Products</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Totale</th>
                    <th>Methode de payment</th>
                    <th>Etat</th>
                    <th>Valider</th>
                    <th>Products</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
              $pdo=Connexion::getConnexion();
              $sql='SELECT * FROM `commande`';
              $stmt=$pdo->prepare($sql);
              $stmt->execute();
              $row=$stmt->fetchAll(PDO::FETCH_OBJ);
              foreach ($row as $item):
                  if($item->ETAT==1)
                  {
                      $etat='Payment effectué';
                  }
                  elseif($item->ETAT==0)
                  {
                      $etat='Payment non effectué';
                  }
                  elseif($item->ETAT==2)
                  {
                      $etat='Commande Annulée';
                  }
              ?>
                <tr>
                  <td><?=$item->ID?></td>
                  <td><?=$item->user?></td>
                  <td><?=$item->totale?></td>
                  <td><?=$item->MP?></td>
                    <td><?=$etat?></td>
                  <?php
                    if($item->ETAT==0)
                    {
                        echo '<td><a href="Valider.php?val='.$item->ID.'">Valider</a></td>';
                    }
                    else
                    {
                        echo '<td></td>';
                    }
                  ?>
                    <td><button type="button" id="<?=$item->ID?>" data-toggle="modal" data-target="#couponModal<?=$item->ID?>" class="btn btn-info btn-lg">Products</button></td>
                </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <?php foreach ($row as $item):?>
    <div id = "couponModal<?=$item->ID?>" class="modal fade" >
        <div class="modal-dialog" >
                <div class="modal-content" >
                    <form>
                    <div class="modal-header" >
                        <h4 align = "centre" class="modal-title" > Porducts</h4 >
                    </div >
                    <div class="modal-body" >
                        <?php
                        $pdo2=Connexion::getConnexion();
                        $sql2='SELECT * FROM lignecommande WHERE ID_COMMANDE=:idCommande ';
                        $stmt2=$pdo2->prepare($sql2);
                        $stmt2->bindValue(':idCommande',$item->ID);
                        $stmt2->execute();
                        $lignecommmande=$stmt2->fetchAll(PDO::FETCH_OBJ);
                        ?>
                        <table>
                        <thead>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>QUANTITE</th>
                        </thead>
                        <?php
                        foreach ($lignecommmande as $value) {
                            $sql2 = 'SELECT * FROM book WHERE ID=:id ';
                            $stmt2 = $pdo2->prepare($sql2);
                            $stmt2->bindValue(':id', $value->ID_PRODUIT);
                            $stmt2->execute();
                            $livre = $stmt2->fetch(PDO::FETCH_OBJ);
                            ?>

                                <tr>
                                    <td><img width="110"
                                             height="170"
                                             src="../Views/<?= $livre->IMAGE ?>"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                             alt=""/></td>
                                    <td><input class="form-control" type="text" value="<?= $livre->NOM ?>"></td>
                                    <td><input class="form-control" type="number" value="<?=$value->QUANTITE?>"></td>
                                </tr>
                                </table>

                                <?php
                        }?>
                    </div >
                        </form>
                </div >
        </div >
    </div >
   <?php endforeach;?>
    <!-- /.container-fluid-->
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>