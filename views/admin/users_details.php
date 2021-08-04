
<?php 
            include "../../db_connection.php";
            $id = $_GET['id'];
            $sql =  mysqli_query($connect,"SELECT * FROM `users` WHERE id = $id");
            while ($row = mysqli_fetch_array($sql))
            {
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>User Details | BOIS</title>
    <link rel="icon" type="image/x-icon" href="../../public/img/a.ico"  />
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <!-- Main CSS-->
    <link href="../../public/css/add-official.css" rel="stylesheet" media="all">
   
    <style type="text/css">
       
             .wrapper--w790 {
                max-width: 40%;
            }

            .input--style-5 {
                background: white;
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
                            
                                <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
         
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">View User Details</h2>
                </div>
                <div class="card-body">
                    <form action=" edit_user.php?id=<?php echo $row['id']?>" method="post" enctype="multipart/form-data" class="user-view-form">
                         <div class="form-row">
                            <div class="name">ID:</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5" ><?php echo $row['id']; ?></h4>
                                </div>
                            </div>
                        </div>
                           <div class="form-row">
                            <div class="name">Username:</div>
                            <div class="value">
                                <div class="input-group">
                                    <h4 class="input--style-5"><?php echo $row['user_name']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password:</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5"><?php echo $row['password']; ?></h4>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Name:</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5"><?php echo $row['name']; ?></h4>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Office of the:</div>
                            <div class="value">
                                <div class="input-group">
                                     <h4 class="input--style-5"><?php echo $row['role']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <a href="edit_user.php?id=<?php echo $row['id']?>" style="color: white; ">
                         <button class="btn btn--radius-2 btn--red"  >EDIT
                         </button></a>
                           
                   
                       
                    </form>  <br>
                    <a href="users_list.php"><button class="btn btn--radius-2 btn--red" type="submit">BACK</button></a>
                   
                  
                    </div>

            </div>
        </div>
    </div>
</div>
  


</body>

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