<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Regional Director Dashboard | BOIS</title>
    <link rel="icon" type="image/x-icon" href="../../public/img/a.ico"  />
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

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                    

                    

                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                        </div>
                    </div> -->
                    <h3 class="fs-4 mb-1 text-center py-1 dark-text fs-4 fw-bold text-uppercase border-bottom">Population of Barangay Officials by region</h3>
                    <div class="col-md-12">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">



                            <canvas id="dash_Chart"></canvas>

                        </div>
                    </div>

                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-2 text-center py-2 dark-text fs-4 fw-bold text-uppercase border-bottom">Population of Barangay Officials According to their position</h3>
                    <div class="col-md-12">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <canvas id="canvas"></canvas>

                        </div>
                    </div>
                </div>

               


                
            </div>

        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->



</body>
</div>

</html>
<?php include "../congressman/charts/chart_queries.php" ?>
<?php include "../../db_connection.php"; ?>
<?php include "../congressman/charts/region_charts.php"; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>