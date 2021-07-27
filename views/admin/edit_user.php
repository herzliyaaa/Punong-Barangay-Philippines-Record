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
    <link rel="stylesheet" href="../../public/css/user-style.css" />

</head>


<body>

    <div class="d-flex" id="wrapper">
        <?php include "../../sidebar.php"; ?> 
        <div id="page-content-wrapper">
            
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 fw-bold m-0">Edit User</h2>
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
        
                <section class="user-section">
            <a href="users_details.php?id=<?php echo $id?>">
                <button class="back-btn">Back</button>
            </a>
                   
            <form action="edit_user_function.php" method="post" enctype="multipart/form-data" class ="user-form"> 
                <div class="infos">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="add-input">
                        <h5>User Name *:</h5>
                        <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>">
                    </div>

                    <div class="add-input">
                        <h5>Name *:</h5>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>"  >
                    </div>

                    <div class="add-input">
                        <h5>Password *:</h5>
                        <input type="text"  name="password" value="<?php echo $row['password']; ?>">
                    </div>

                    <div class="add-input">
                        <h5>Role *:</h5>
                        <input type="text" name="role" value="<?php echo $row['role']; ?>">
                    </div>

                    <div class="save">
                    <button class="edit-btn" name="edit_user_btn">Save</button>
                    </div>
                </div>

            </form>
            
            <?php 
            } 
            ?>


                </div>
            </div>
            </section>

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

