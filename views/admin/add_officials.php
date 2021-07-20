<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <h2 class="fs-3 fw-bold m-0">Add Barangay Officials</h2>
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
        

            <a href="officials_directory.php">
                <button class="back-btn">Back</button>
            </a>
                   
            <form action="add_officials_function.php" method="post" enctype="multipart/form-data">
                <div class="infos">


                    <div class="add-info">
                        <h5>First Name *:</h5>
                        <input type="text" name="first_name">
                    </div>

                    <div class="add-info">
                        <h5>Middle Name *:</h5>
                        <input type="text" name="middle_name">
                    </div>

                    <div class="add-info">
                        <h5>Last Name *:</h5>
                        <input type="text"  name="last_name">
                    </div>

                    <div class="add-info">
                        <h5>Suffix *:</h5>
                        <input type="text" name="suffix">
                    </div>

                    <div class="add-info">
                        <h5>Position *:</h5>
                        <input type="text" name="position">
                    </div>

                    

                    <div class="add-info">
                        <h5>Region *:</h5>
                        <select name="region" id="region">
                            <option value="" selected disabled hidden>--</option>
                            <option value="Region 1">Region 1</option>
                            <option value="Region 2">Region 2</option>
                            <option value="Region 3">Region 3</option>
                            <option value="Region 4">Region 4</option>
                        </select>
                    </div>

                    <div class="add-info">
                        <h5>Province *:</h5>
                        <select name="province" id="province">
                            <option value="" selected disabled hidden>--</option>
                            <option value="Region 1">Region 1</option>
                            <option value="Region 2">Region 2</option>
                            <option value="Region 3">Region 3</option>
                            <option value="Region 4">Region 4</option>
                        </select>
                    </div>


                    <div class="add-info">
                        <h5>City/Municipality *:</h5>
                        <select name="city" id="city">
                            <option value="" selected disabled hidden>--</option>
                            <option value="Region 1">Region 1</option>
                            <option value="Region 2">Region 2</option>
                            <option value="Region 3">Region 3</option>
                            <option value="Region 4">Region 4</option>
                        </select>
                    </div>

                    <div class="add-info">
                        <h5>Barangay *:</h5>
                        <select name="barangay" id="barangay">
                            <option value="" selected disabled hidden>--</option>
                            <option value="Region 1">Region 1</option>
                            <option value="Region 2">Region 2</option>
                            <option value="Region 3">Region 3</option>
                            <option value="Region 4">Region 4</option>
                        </select>
                    </div>

                    <div class="add-info">
                        <h5>Email Address *:</h5>
                        <input type="text" name="email">
                    </div>

                    <div class="add-info">
                        <h5>Barangay Hall Phone Number *:</h5>
                        <input type="text" name="barangay_hall_tel_no">
                    </div>


                    <button class="save-btn" name="add_official_btn">Save</button>
                </div>

            </form>





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
