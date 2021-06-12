<?php
include 'common.php';
if (!isset($_SESSION['email'])) {
    header('location: index1.php');
}
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
       <title>Settings</title>
       <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <style>
          .footer{
            position:absolute;
          }
          </style>
   </head>

    <body>
        <?php include 'header.php'; ?>
<br><br><br><br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h3><b>Change Password</b></h3>
                    <form action="settings-script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
                        </div>
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div id=footer>
      <?php include 'footer.php'; ?>
      </div>
    </body>
</html>