<?php
include "../../db_connection.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Officials Philippines Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- <link rel="stylesheet" href="../../public/css/style.css" /> -->
    <link rel="stylesheet" href="../../public/css/user-style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>  -->
</head>

<body>

    <div class="d-flex" id="wrapper">
        <?php include "../../sidebar.php"; ?>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-3 fw-bold m-0">Users</h2>
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

            <section class="user-section">

                <div class="user-content">
                    <div class="top-user-section">
                        <a href="add_user.php">
                            <button class="add-users-btn"> Add Users </button>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="users" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <?php

                            $sql =  mysqli_query($connect, "select * from users");
                            while ($row = mysqli_fetch_array($sql)) {

                            ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['user_name'] ?></td>
                                    <td><?php echo $row['role'] ?></td>
                                    <td> <a href="users_details.php?id=<?php echo $row['id'] ?>"><button class="view-user-btn">View</button></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </table>
                    </div>
                </div>

            </section>
</body>
<script>
    $(document).ready(function() {
        $('#users').dataTable({
            "bPaginate": false,
            "responsive": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>