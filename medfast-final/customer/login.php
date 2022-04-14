<!DOCTYPE html>
<html lang="en">

<head>
    <title>MedFast Pharmacy - Login</title>
    <link rel="stylesheet" href="../styles/login-all-css.css">
</head>

<body class="bg-gradient-primary login">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" style="max-width: 50% !important;">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12 main-column">
                <img src="../images/medfast-logo.png" alt="" class="aligncenter login-logo" width="400">
                
                <div class="p-5 login-form">

                  <form class="user" action="login-process.php" method="post">

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                 
                    <button style="background-color:#05583a;" type:submit class="btn btn-primary btn-user btn-block">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
