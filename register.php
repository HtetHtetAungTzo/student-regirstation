<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>Student Registration System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid">
      <!-- start header bar -->
      <div class="row header">
        <div class="col-md-12 head">
          <div class="container">
            <h1><i>Student Registration System</i></h1>
          </div>
        </div>
        <div class="col-md-12 menu">
          <div class="container">
            <nav class="navbar">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Page 1</a></li>
                  <li><a href="#">Page 2</a></li>
                  <li><a href="#">Page 3</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <!-- ============== /end header ========== -->

      <div class="row">
        <div class="container">
          <div class="col-md-offset-3 col-md-6 register-box">
            <h3 class="text-center">Register Form</h3>

            <div class="col-md-12">
              <form action="" method="POST" class="form form-horizontal">
              
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" name="address" class="form-control">
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="text" name="phone" class="form-control">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                  <label for="confirmpassword">Confirm Password:</label>
                  <input type="password" name="confirmpassword" class="form-control">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-registered"></i> Register</button>
                </div>

                <div class="form-group">
                  <p>Do you have already account? Login In <a href="register.php">here</a></p>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
