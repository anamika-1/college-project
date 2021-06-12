<link href="style.css" rel="stylesheet">
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
           <h3 style="color:#2ddfd0"><b> LOGIN</b></h3>
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 style="color:white;" class="color"> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="login-submit.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control"  name="email" placeholder="Enter your Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
            <?php if(isset($_GET["error"])){ echo $_GET['error'];} ?><br>
              <button type="submit" class="btn btn-default btn-success">Login</button>
          </form>
        </div>
        <div class="modal-footer">
         <p ><a href="#">Forgot Password?</a></p>
          <p>Not Registered <a href="./signup.php">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div> 



 