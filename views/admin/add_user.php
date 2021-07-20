<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barangay Officials Philippines Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../public/css/style.css" />
</head>

<body>

    <div class="d-flex" id="wrapper">
        <?php include "../../sidebar.php"; ?>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 fw-bold m-0"></h2>
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
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


            <a href="users_list.php">
                <button class="back-btn">Back</button>
            </a>

            <form action="add_user_function.php" method="post" enctype="multipart/form-data">
                <div class="infos">


                    <div class="add-info">
                        <h5>Full Name:</h5>
                        <input type="text" name="name">
                    </div>
                    <div class="add-info">


                        <h5>Position:</h5>
                        <select name="role">

                            <option value="" selected disabled hidden>--</option>
                            <option value="chairman">Chairman</option>
                            <option value="mayor">Mayor</option>
                            <option value="congressman">Congressman</option>
                            <option value="governor">Governor</option>
                        </select>
                    </div>



                    <div class="add-info">
                        <h5>user:</h5>
                        <input type="text" name="user_name">
                    </div>


                    <div class="add-info">
                        <h5>Password: </h5>
                        <input type="text" name="password">
                    </div>

                    <button class="save-btn" name="add_user_btn">Save</button>
                </div>

            </form>
        </div>

        <!-- /#page-content-wrapper -->

    </div>





</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>