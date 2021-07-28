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
                max-width: 40%;
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
                    <h2 class="fs-3 fw-bold m-0">USER SECTION</h2>
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
                    <h2 class="title">Add User</h2>
                </div>
                <div class="card-body">
                    <form action="add_user_function.php" method="post" enctype="multipart/form-data" class="user-form">
                           <div class="form-row">
                            <div class="name">Username:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Name:</div>
                            <div class="value">
                                <div class="input-group">
                                     <input class="input--style-5" type="text" name="name" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Passowrd:</div>
                            <div class="value">
                                <div class="input-group">
                                     <input class="input--style-5" type="text" name="password" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Office of the:</div>
                            <div class="value">
                                <div class="input-group">
                                     <select class="input--style-5" name="role"  required>
                                            <option disabled="disabled" selected="selected"></option>
                                            <option>Admin</option>
                                            <option>Chairman</option>
                                            <option>Congressman</option>
                                            <option>Governor</option>
                                            <option>Mayor</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                
                         <button style="margin-left:-10%" class="btn btn--radius-2 btn--red" name="add_user_btn" >
                          ADD</button>
                           
                   
                       
                    </form>  <br>
                    <a href="users_list.php"><button style="margin-left:60%" class="btn btn--radius-2 btn--red" type="submit">BACK</button></a>
                   
                  
                    </div>

            </div>
        </div>
    </div>
</div>
  


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
<!-- end document-->