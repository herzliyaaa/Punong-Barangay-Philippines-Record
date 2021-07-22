<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Punong Barangay Philippines Record</title>
    <link rel="stylesheet" href="../../public/css/dashboard-style.css" />
    <link rel="stylesheet" href="../../public/css/sidebar-style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <script src="../../public/js/sidebar.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <main>

    <?php include "../../sidebar.php"; ?>
    
        <!-- insert html here -->
        <div class="dash-content">
            <div class="main-overview">
                <div class="overview-card">

                <h1>insert province dashboard</h1>

                </div>
            </div>
        </div>
    
         <div class = "container">
        <h1> Records</h1>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
        <tr>
                    <th scope="col">id</th>
                    <th scope="col">region</th>
                    <th scope="col">province</th>
                    <th scope="col">city</th>
                    <th scope="col">barangay</th>
                    <th scope="col">position</th>
                    <th scope="col">last_name</th>
                    <th scope="col">first_name</th>
                    <th scope="col">middle_name</th>
                    <th scope="col">suffix</th>
                    <th scope="col">email</th>
                    <th scope="col">barangay_hall_tel_no</th>
                    </tr>
                    <tfoot>
                    <tr>  
                    <th scope="col">id</th>
                    <th scope="col">region</th>
                    <th scope="col">province</th>
                    <th scope="col">city</th>
                    <th scope="col">barangay</th>
                    <th scope="col">position</th>
                    <th scope="col">last_name</th>
                    <th scope="col">first_name</th>
                    <th scope="col">middle_name</th>
                    <th scope="col">suffix</th>
                    <th scope="col">email</th>
                    <th scope="col">barangay_hall_tel_no</th>
                    </tr>
            </tfoot>
        </table>
</div>
<script>
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"fetch5.php",
                    type:"post"
                }
            });
        });
    </script>

        
    </main>
</body>

</html>