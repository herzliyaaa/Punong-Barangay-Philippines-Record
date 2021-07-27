<?php 
            include "../../db_connection.php";
            $id = $_GET['id'];
            $sql =  mysqli_query($connect,"SELECT * FROM `users` WHERE id = $id");
            while ($row = mysqli_fetch_array($sql))
            {
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
    <link rel="stylesheet" href="../../public/css/user-style.css" />
</head>


<body>

    <div class="d-flex" id="wrapper">
        <?php include "../../sidebar.php"; ?> 
        <div id="page-content-wrapper">
            
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 fw-bold m-0">View User Details</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="john nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="doe fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <li><a class="dropdown-item" href="../../logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        
        <section >
            <a href="users_list.php">
                <button class="back-btn">Back</button>
            </a>
                   
            <form action="./edit_official_function.php" method="post" enctype="multipart/form-data" class="user-view-form">
                <div class="user-view-input">

                <div class="view-input">
                        <h3>ID :</h3> <h6><?php echo $row['id']; ?></h6>
                        
                        
                    </div>

                    <div class="view-input">
                        <h3>User Name :</h3>
                        <h6><?php echo $row['user_name']; ?></h6>
                        
                    </div>

                    <div class="view-input">
                        <h3>Password :</h3>
                        <h6><?php echo $row['password']; ?></h6>
                        
                    </div>

                    <div class="view-input">
                        <h3>Name :</h3>
                        <h6><?php echo $row['name']; ?></h6>
                       
                    </div>

                    <div class="view-input">
                        <h3>Role :</h3>
                        <h6><?php echo $row['role']; ?></h6>
                      
                    </div>

                    <div class="view-input">
                        
                    <button class= "edit2-btn">
                    <a href="edit_user.php?id=<?php echo $row['id']?> ">Edit</a>
                    </button>
                    </div>
                </div>

            </form>
            </section>
            <?php 
            } 
            ?>



                </div>
            </div>

</body>
</div>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>

