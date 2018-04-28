
<?php

    include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';


    $book = new Bookcore();



    $product_nom = $book->get_livre_nom_nbr_visit();
    $product = $book->get_livre_nbr_visit();
    $productvente = $book->get_livre_vente_nbr_visit();

    $donnescat = $book->get_category();

    $nbrcat_book = $book->get_category_nbr();
    









?>


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
  <link rel="css/statistique.css" type="text/css" href="">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
 

<?php  require_once "header.php"; ?>




<div class="container">
     
         <div class="row">

                <div class="col-lg-5">
                    <!-- Example Pie Chart Card-->
                    <div class="card mb-5">
                      <div class="card-header">
                        <i class="fa fa-pie-chart"></i>Nbr de Livre par Rating </div>
                      <div class="card-body">
                                       <canvas id="pie-chartcanvas-1" width="100%" height="100"></canvas>

                      </div>
                    </div>
                </div>


                <div class="col-lg-5">
                    <!-- Example Pie Chart Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fa fa-pie-chart"></i>Nbr de livre Par Category </div>
                      <div class="card-body">
                                       <canvas id="pie-chartcanvas-2" width="100%" height="100"></canvas>

                      </div>
                    </div>
                </div>


            </div>

         <div class="col-lg-25">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> les livre les plus visite</div>
            <div class="card-body">
              <canvas id="bar-chartcanvas" width="100" height="50"></canvas>
            </div>
          </div>
        </div>





            



                 


    
                 
    </div> <!-- /container -->










  
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
<script src="js/jquery.min.js"></script>
    <script src="js/Chart.min.js"></script>
<script >

  $(function(){

    //get the pie chart canvas
    var ctx1 = $("#pie-chartcanvas-1");

    //pie chart data
    var data1 = { 
        labels: ["rating 1", "rating 2", "rating 3", "rating 4", "rating 5"],
        datasets: [
            {
                label: "Nbr Livre",
                data: [<?php echo $book->get_nbr_rating(1); ?>, <?php echo $book->get_nbr_rating(2); ?>, <?php echo $book->get_nbr_rating(3); ?>, <?php echo $book->get_nbr_rating(4); ?>, <?php echo $book->get_nbr_rating(5); ?>],
                backgroundColor: [
                    "#4D4D4D",
                    "#5DA5DA",
                    "#FAA43A",
                    "#60BD68",
                    "#F15854"
                ],
                borderColor: [
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF"
                ],
                borderWidth: [2, 2, 2, 2, 2]

            }
        ]
    };

    

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Pie Chart",
            fontSize: 5,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "top",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "pie",
        data: data1,
        options: {}
    });

   
});



  $(function(){

    //get the pie chart canvas
    var ctx1 = $("#pie-chartcanvas-2");

    //pie chart data
    var data1 = { 
        labels: [<?php echo '"'.implode('","', $donnescat).'"' ?>],
        datasets: [
            {
                label: "Nbr Livre",
                data: [<?php echo '"'.implode('","', $nbrcat_book).'"' ?>],
                backgroundColor: [
                    "#4D4D4D",
                    "#5DA5DA",
                    "#FAA43A",
                    "#60BD68",
                    "#F15854"
                ],
                borderColor: [
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF",
                    "#FFFFFF"
                ],
                borderWidth: [2, 2, 2, 2, 2]

            }
        ]
    };

    

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Pie Chart",
            fontSize: 5,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "top",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "pie",
        data: data1,
        options: {}
    });

   
});







  $(function(){

    //get the bar chart canvas
    var ctx = $("#bar-chartcanvas");

    //bar chart data
    var data = {
        labels: [<?php echo '"'.implode('","', $product_nom).'"' ?>],
        datasets: [
            {
                label: "Nbr de visit",
                data: [<?php echo '"'.implode('","', $product).'"' ?>],
                backgroundColor: [
                    "#D0DFE5",
                    "#D0DFE5",
                    "#D0DFE5",
                    "#D0DFE5",
                    "#D0DFE5"
                ],
                
                borderWidth: 1
            },

            {
                label: "Nbr de vente",
                data: [<?php echo '"'.implode('","', $productvente).'"' ?>],
                backgroundColor: [
                    "#0489C7",
                    "#0489C7",
                    "#0489C7",
                    "#0489C7",
                    "#0489C7"
                ],
                
                borderWidth: 1
            }
            
        ]
    };

    //options
    var options = {
        responsive: true,
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0
                }
            }]
        }
    };

    //create Chart class object
    var chart = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
    });
});




</script>


  </div>
</body>

</html>
