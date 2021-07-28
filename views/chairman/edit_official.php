<?php
include "../../db_connection.php"; ?>

<?php
$id = $_GET['id'];
$sql =  mysqli_query($connect, "SELECT * FROM `records` WHERE id = $id");
while ($row = mysqli_fetch_array($sql)) { ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Barangay Officials Philippines Record<</title>


    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    

    <!-- Main CSS-->
    <link href="../../public/css/add-official.css" rel="stylesheet" media="all">

</head>

<body>

<div class="d-flex" id="wrapper">
        <?php include "../../sidebar.php"; ?>
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center" >
                    <i class="fas fa-align-left fs-1 me-4" id="menu-toggle" style="margin-top: -2450%;"></i>
                </div>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">UPDATE OFFICIAL</h2>
                </div>

      
                <div class="card-body">
                    <form action="edit_official_function.php" method="post" enctype="multipart/form-data">
                         <div class="form-row">
                            <div class="name">ID:</div>
                            <div class="value">
                                <div class="input-group">
                                        <h4 class="input--style-5" type="hidden" name="id"> <?php echo $row['id']; ?></h4>
                                <input class="input--style-5" type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required>
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                     <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>">
                                            <label class="label--desc">Middle name</label>
                                        </div>
                                    </div>
                                    <div style="margin-top: 10%;" class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required>
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                      <div style="margin-top: 10%;" class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="suffix" value="<?php echo $row['suffix']; ?>">
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
                                    <input class="input--style-5" type="text" name="position" value="<?php echo $row['position']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Region</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="region" value="<?php echo $row['region']; ?>" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Province</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="province" value="<?php echo $row['province']; ?>" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" value="<?php echo $row['city']; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Barangay</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="barangay" value="<?php echo $row['barangay']; ?>" required>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Telephone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="barangay_hall_tel_no" value="<?php echo $row['barangay_hall_tel_no']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-row p-t-20">
                            <label class="label label--block">By clicking the Update button below, I hereby agree to and accept the following terms and conditions governing my
use of the website.</label>


                        </div>
                
                        
                     
                        <button class="btn btn--radius-2 btn--red"   name="edit_official_btn">UPDATE</button>   
                    </form>
              
                     <a href="official_details.php?id=<?php echo $row['id']?>"><button style="margin-left: 80%;" class="btn btn--radius-2 btn--red" type="submit">CANCEL</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

  

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
              
<?php
            }
                ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
<!-- end document-->