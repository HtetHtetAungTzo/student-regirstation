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
    <link href="css/index.css" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid">
      <!-- start header bar -->
      <div class="row header">
        <div class="row head">
          <div class="container">
            <h1><i>Student Registration System</i></h1>
          </div>
        </div>
        <div class="row menu">
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
          <div class="col-md-12 listbox">
            <h4>Student List Table</h4>
            <table class=" table table-bordered" style="margin-top:15px;">
                  <thead>
                   <tr>
                       <th>Id</th>
                        <th>Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Action</th>
                      </tr>
                   </thead>
                <tbody>
                  <tr>
                    <td>1cst-4</td>
                    <td>Doe</td>
                   <td>john@example.com</td>
                   <td>097878677</td>
                   <td>
                      <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true">view</i>
                       </button>
                      <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i>
                       </button>
                       <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-trash-o" aria-hidden="true">delete                       </i>
                       </button>
                   </td>

                 </tr>
     
             </tbody>
  
                </table>
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
