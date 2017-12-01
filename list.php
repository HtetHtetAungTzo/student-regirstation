<?php  
  session_start();
?>
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
      <?php require_once('partials/header.php'); ?>

      <div class="row">
        <div class="container">
          <div class="col-md-12 listbox" style="margin-top: 50px;">
            <h4>Student List Table</h4>
            <?php  
              if($_SESSION['success'])
              {
            ?>
            <div class="alert alert-success"><?php print $_SESSION['success']; $_SESSION['success']=''; ?></div>
            <?php
              }
            ?>
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
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-eye" aria-hidden="true">view</i>
                       </button>
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i>
                       </button>
                       <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-trash-o" aria-hidden="true">delete</i>
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
