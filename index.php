<!doctype html>
<html lang="en">
  <head>
    <title>Barangay Officials Philippines Record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="public/css/login-style.css">

  </head>
  <body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
              <div  class="text w-100">
                <div><img src="/login-form-17/images/phbarangay-logo.png"></div>
                <h2>Welcome to login</h2>
                <p>Login as Admin to Create User</p>
              </div>
            </div>
            <div class="login-wrap p-4 p-lg-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Barangay Officials Desk</h3>
                </div>
              </div>
              <br>

                  <!----->  
 <!-- error -->
 <?php if (isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

              <form method="post" class="login" action="login_function.php">
                <div class="form-group mb-3">
                  <i class="fa fa-user icon"></i>
                  <label class="label" for="name">Username</label>
                  <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                </div>
                <div class="form-group mb-3">
                   <i class="fa fa-key icon"></i>
                  <label class="label" for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password" required> 
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">CONTINUE</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>

