<?php 

include "../../db_connection.php";
$id = $_GET['id'];
$sql =  mysqli_query($connect, "SELECT * FROM `records` WHERE id = $id");
while ($row = mysqli_fetch_array($sql)) {


?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Barangay Officials Philippines Record</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="../../public/css/style.css" />

        <style type="text/css">
            .add-input {
                padding: 4%;
            }

            h5 {
                color: #2a2a72;
            }
        </style>

    </head>


    <body>

        <div class="d-flex" id="wrapper">
            <?php include "../../sidebar.php"; ?>
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-3 fw-bold m-0">View Official Details</h2>
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

                <section>
                    <div class="back">
                    <a href="officials_directory.php">
                        <button class="back-btn">Back</button>
                    </a>
                    </div>
                    <form method="post"  enctype="multipart/form-data" action="edit_official.php?id=<?php echo $row['id'] ?> ">
                        <div class="officials-input">
                            <div class="left-input">
                                <div class="add-input">
                                    <h5>ID:</h5>
                                    <h3><?php echo $row['id']; ?></h3>

                                </div>

                                <div class="add-input">
                                    <h5>First Name:</h5>
                                    <h3><?php echo $row['first_name']; ?></h3>



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Barangay Officials Philippines Record<</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="\Punong-Barangay-Philippines-Record\public\css\add-official.css" rel="stylesheet" media="all">
    <style type="text/css">
        .wrapper--w790 {
    max-width: 90%;
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
                            
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">OFFICIAL DETAILS</h2>
                </div>
                <div class="card-body">
                    <form action="edit_official.php?id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
                         <div class="form-row">
                            <div class="name">ID:</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['id']; ?></h4>
                                </div>

                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                             <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['first_name']; ?></h4>
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                     <div class="col-2">
                                        <div class="input-group-desc">
                                            <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['middle_name']; ?></h4>
                                            <label class="label--desc">Middle name</label>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10%;" class="col-2">
                                        <div class="input-group-desc">
                                            <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['last_name']; ?></h4>
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                      <div style="margin-top: 10%;" class="col-2">
                                        <div class="input-group-desc">
                                             <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['suffix']; ?></h4>
                                            <label class="label--desc">Suffix</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class="form-row">
                            <div class="name">Position</div>
                            <div class="value">
                                <div class="input-group">
                                    <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['position']; ?></h4>


                                <div class="add-input">
                                    <h5>Middle Name:</h5>
                                    <h3><?php echo $row['middle_name']; ?></h3>
                                </div>

                                <div class="add-input">
                                    <h5>Last Name:</h5>
                                    <h3><?php echo $row['last_name']; ?></h3>
                                </div>

                                <div class="add-input">
                                    <h5>Suffix:</h5>
                                    <h3><?php echo $row['suffix']; ?></h3>
                                </div>

                                <div class="add-input">
                                    <h5>Position:</h5>
                                    <h3><?php echo $row['position']; ?></h3>



                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Region</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['region']; ?></h4>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Province</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['province']; ?></h4>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">City/Muni.</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['city']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Barangay</div>
                            <div class="value">
                                <div class="input-group">
                                    <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['barangay']; ?></h4>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5" type="email" name="middle_name"><?php echo $row['email']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Telephone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <h4 class="input--style-5" type="text" name="middle_name"><?php echo $row['barangay_hall_tel_no']; ?></h4>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <br>
                               
                               
                                   
                                        <button class="edit_official_btn">
                                            Edit
                                        </button>
                               

                                <?php include('modal.php'); ?>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="add_official_btn">EDIT</button>
                        </div>
                    </form><br>
                     <a href="officials_directory.php"><button style="margin-left: 80%;" class="btn btn--radius-2 btn--red" type="submit" name="add_official_btn">CANCEL</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
<!-- end document-->