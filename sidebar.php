<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ./index.php");
    exit();
}
include "db_connection.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Punong Barangay Philippines Record</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="list-group list-group-flush my-3">
            <a href="../../views/admin/dashboard.php" id="admin-dash"class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-chart-line me-2"></i>Dashboard</a>
            <a href="../../views/chairman/dashboard.php" id="brgy-dash"class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-chart-line me-2"></i>Dashboard</a>
            <a href="../../views/mayor/dashboard.php" id="city-dash"class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-chart-line me-2"></i>Dashboard</a>
            <a href="../../views/congressman/dashboard.php" id="province-dash"class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-chart-line me-2"></i>Dashboard</a>
            <a href="../../views/governor/dashboard.php" id="region-dash"class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-chart-line me-2"></i>Dashboard</a>
            <!-- <a href="../../views/admin/graphs.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-chart-line me-2"></i>Graphs</a> -->
            <a href="../../views/admin/officials_directory.php" class="list-group-item list-group-item-action bg-transparent second-text active" id="brgy-off"><i class="fas fa-users me-2"></i>Officials</a>
            <a href="../../views/chairman/officials_directory.php" class="list-group-item list-group-item-action bg-transparent second-text active" id="chairman-brgy-off"><i class="fas fa-users me-2"></i>Officials</a>
            <a href="../../views/congressman/officials_directory.php" class="list-group-item list-group-item-action bg-transparent second-text active" id="congressman-brgy-off"><i class="fas fa-users me-2"></i>Officials</a>
            <a href="../../views/mayor/officials_directory.php" class="list-group-item list-group-item-action bg-transparent second-text active" id="mayor-brgy-off"><i class="fas fa-users me-2"></i>Officials</a>
            <a href="../../views/governor/officials_directory.php" class="list-group-item list-group-item-action bg-transparent second-text active" id="gov-brgy-off"><i class="fas fa-users me-2"></i>Officials</a>
            <a href="../../views/admin/users_list.php" id="create-users" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-users me-2"></i>Users</a>
            <a href="../../logout.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->


</body>

</html>


<?php include "../../sidebar-filter.php"; ?>


<!-- chairman-brgy-off -->