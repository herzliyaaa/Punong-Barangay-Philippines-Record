<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Punong Barangay Philippines Record</title>
    <link rel="icon" type="image/x-icon"href="../../public/img/a.ico"  />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../public/css/style.css" />
    <script src="../../public/js/package/dist/chart.js"></script>
    <script src="../../public/js/package/dist/chart.min.js"></script>

    <style type="text/css">
        tbody {
            background: white;
            color: darkslateblue;
        }
    </style>


</head>

<body>


    <div class="d-flex" id="wrapper">
        <?php include "../../sidebar.php"; ?>



        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 fw-bold m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="john nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="doe fas fa-user me-2"></i><?php echo $_SESSION['role']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                                <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

           
<?php 
            
            $pop = mysqli_query($connect, "Select COUNT(id) as pop_cnt from records");
            $population = mysqli_fetch_array($pop); 

            $pbquery = mysqli_query($connect, "Select COUNT(id) as pb_cnt from records where position ='Punong Barangay'");
            $pb = mysqli_fetch_array($pbquery);

            $sbmquery = mysqli_query($connect, "Select COUNT(id) as sbm_cnt from records where position ='Sangguniang Barangay Member'");
            $sbm = mysqli_fetch_array($sbmquery);

            $skquery = mysqli_query($connect, "Select COUNT(id) as sk_cnt from records where position ='SK Chairperson'");
            $sk = mysqli_fetch_array($skquery);
            ?>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                    <div class="col-md-3">


                        <div class="p-3 bg-white shadow-sm d-flex justify-content-start align-items-center rounded">
                      
                            <i class="fas fa-users fs-4 me-1"></i>
                            <h2 class="text-center py-3"> Total Population of Barangay Officials in Philippines:  <?php echo $population['pop_cnt']; ?> </span></h2>
                 



                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="p-1 bg-white shadow-sm d-flex justify-content-center align-items-center rounded">
                            <div class="pb-head">
                            
                                <h2 class="text-center py-3"> Punong Barangay: <?php echo $pb['pb_cnt']; ?></h2>
                            </div>
                           
                        </div>

                        <div class="bg-white shadow-sm d-flex justify-content-center align-items-center ">
                           
                        <div class="sbm-head">
                      
                        <h2 class="text-center py-3"> Sangguniang Barangay Member: <?php echo $sbm['sbm_cnt']; ?></h2>
                        </div>
                        </div>


                        <div class=" bg-white shadow-sm d-flex justify-content-center align-items-center text-center ">
                        
                        <div class="sk-head">
                      
                        <h2 class=" mb-4 text-center py-3"> SK Chairperson: <?php echo $sk['sk_cnt']; ?> </h2>
                        </div>
                        </div>

                    </div>

                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                        </div>
                    </div> -->

                    <div class="col-md-5">
                    
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                       

                            <canvas id="dash_Chart"></canvas>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3 text-center py-3 dark-text fs-4 fw-bold text-uppercase border-bottom">Population of Barangay Officials According to their position</h3>
                    <div class="col-md-12">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <canvas id="canvas"></canvas>

                        </div>
                    </div>
                </div>

               


                <div class="col">
                    <!-- <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">Region</th>
                                <th scope="col">Province</th>
                                <th scope="col">City</th>
                                <th scope="col">Barangay</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->



</body>
</div>

</html>
<?php include "../admin/charts/chart_queries.php" ?>
<?php include "../../db_connection.php"; ?>
<?php include "../admin/charts/admin_charts.php"; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>