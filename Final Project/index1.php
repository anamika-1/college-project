<?php
  include 'common.php';

if (isset($_SESSION['email'])) {
    header('location:products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MobileStore</title>
       <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <!--css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <!--js bundle-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
          <!--js-->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            #banner-image{
	text-align:center;
	color:#0b1163;
	background-size:cover;
}
        #banner-content{
	position:relative;
	padding-top:70px;
	padding-bottom:6%;
	margin-top:12%;
	margin-left:250px;
	margin-right:250px;
	margin-bottom:12%;
	background-color:rgba(78, 82, 81, 0.7);
	max-width:660px;
}
</style>
</head>

    <body>
    <?php include 'header.php'; ?>    
             <!-- <div id="content">
              <div id="banner-image">
              <center>
              <img src= "bg.jpg"  style="max-width:100%;height:auto;">
              </div>
              </div>
</center>
<center>
                <div class="container">
                <div id="banner-content" >
                            <h1><b style="color:#060e50">Shop with Mobile Store</b></h1>
                            <h2><b style="color:#060e50"><p>Get Flat 30% off on All Brands</p></b></h2>
                            <h3><p><b> What are you waiting for. <br> Offer valid for only 5 days </b></p></h3>
                            <br>
                            <br>
                            <a href="products.php" class="btn btn-warning btn-lg active">Visit Now</a>
                        </div>
                    </center>
                </div>
            <br>-->

            
          
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              </ol>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" class="img-responsive" src="bg.jpg" intrinsicsize="400x400" height="300px" style="width:100%;height:auto;" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100"  class="img-responsive" src="bg.jpg" intrinsicsize="400x400" height="300px" style="width:100%;height:auto;" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100"  class="img-responsive" src="bg.jpg" intrinsicsize="400x400" height="300px" style="width:100%;height:auto;" alt="Third slide">
                 </div>
                 <div class="carousel-item">
                  <img class="d-block w-100"  class="img-responsive" src="bg.jpg" intrinsicsize="400x400" height="300px" style="width:100%;height:auto;" alt="Third slide">
                 </div>
                <div class="carousel-item">
                  <img class="d-block w-100" class="img-responsive" src="bg.jpg" intrinsicsize="400x400" height="300px" style="width:100%;height:auto;"  alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div> 


        <!--  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->



                <div class="container text-center">
                    <div class="panel panel-default">
                        <div class="panel-heading color">
                            <h3 style="color:#4f9b12e8"><b>SHOP SMARTPHONE OF VARIOUS BRANDS </b></h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="1.jpg" alt="OPPO A9 2020" >
                                        <div class="caption">
                                            <h3><b>OPPO A9 2020</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="3.jpg" alt="VIVO Z1X" >
                                        <div class="caption">
                                            <h3><b>VIVO Z1X</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="6.jpg" alt="Realme 5 Pro" >
                                        <div class="caption">
                                            <h3><b>Realme 5 Pro</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="8.jpg" alt="Samsumg Galaxy A50" >
                                        <div class="caption">
                                            <h3><b>Samsumg Galaxy</b> </h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>    
                </div>
     
               <div class="container text-center">
                 <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:#4f9b12e8"><b>GET ALL NECSSARY ACCESSORIES</b></h3>
                        </div>
                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="10.jpg" alt="Aspire Back Cover" >
                                        <div class="caption"><br><br>
                                            <h3><b>Aspire Back Cover</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="11.jpg" alt="VAKIBO Back Cover" >
                                        <div class="caption"><br><br>
                                            <h3><b>VAKIBO Cover</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="13.jpg" alt="Infinity JPL Headset" >
                                        <div class="caption"><br>
                                            <h3><b> JPL Headset</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php">
                               <div class="thumbnail">
                                    <img src="16.jpg" alt="boAt Rockerz 501" >
                                        <div class="caption"><br><br><br><br><br>
                                            <h3><b>boAt Rockerz 501</b></h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
<?php include 'footer.php';  ?>
      
</body>
</html>