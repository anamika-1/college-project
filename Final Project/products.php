<?php
include 'common.php';
 ?>
<!DOCTYPE html>
<html>
<head>
        <title>Products</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
    <style>
       #holder{
        margin-left:75px;
          
           width:1200px;
       }
    </style>
</head>
<body style="padding-top: 50px;">
    <?php
        include 'header.php';
        include 'check-if added.php';
        include 'modal.php';
        ?>
    <br>
    <br>
    
    <div class="container">

<div class="jumbotron">
<div class="row text-center">
<h1 style="color:#0b4352e8"> <b>Welcome to Mobile Store!</b></h1>
<p style="color:#050529e8"><b> Get all Mobile related accessories here only</b></p>  
</div>
</div>
</div>

<div clss="container" id="holder">
<div class="panel panel-primary">
<div class=container>
<div class="row text-center">
<div class="panel-header-primary"><h3><b>MOBILE</b></h3></div>
<div class="panel-body">
  <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="1.jpg" class="img-responsive" alt="cameras">
          <div class="caption"></div>
          <h3><b>OPPO A9 2020</b></h3>
          <p><b>Price:Rs.13990.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(1)){
    
    echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
 
  <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="2.jpg" class="img-responsive" alt="cameras">
           <div class="caption"></div>
           <h3><b>OPPO A1</b></h3>
           <p><b>Price:Rs.12490.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(2)){
     echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="3.jpg" class="img-responsive" alt="cameras">
    <div class="caption"></div>
    <h3><b>VIVO Y12</b></h3>
    <p><b>Price:Rs.10990.00</b></p>
    <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(3)){
echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>

</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
   <img src="4.jpg" class="img-responsive" alt="cameras">
        <div class="caption"></div>
        <h3><b>VIVO Z1X</b></h3>
        <p><b>Price:Rs.18990.00</b></p>
        <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(4)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

</div>
</div>
</div>




<div class=container>
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="5.jpg" class="img-responsive" alt="watches">
  <div class="caption"></div>
  <h3><b>Redmi Note 8</b></h3>
  <p><b>Price:Rs.16989.00</b></p>
  <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{
if(check_if_added_to_cart(5)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="6.jpg" class="img-responsive" alt="watchess">
   <div class="caption"></div>
   <h3><b>Realme 5 Pro</b></h3>
   <p><b>Price:Rs.16999.00</b></p>
   <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(6)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="7.jpg" class="img-responsive" alt="watches">
<div class="caption"></div>
<h3><b> Galaxy A21</b></h3>
<p><b>Price:Rs.16499.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(7)){
echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>

</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="8.jpg" class="img-responsive" alt="watches">
<div class="caption"></div>
<h3><b>Galaxy A50</b></h3>
<p><b>Price:Rs.15499.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(8)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

</div>
</div>



<div class=container>
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="22.jpg" class="img-responsive" alt="watches">
  <div class="caption"></div><br><br><br>
  <h3><b>Apple iPhone 11</b></h3>
  <p><b>Price:Rs.68300.00</b></p>
  <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{
if(check_if_added_to_cart(17)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-blo=]\
ck btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="23.jpg" class="img-responsive" alt="watchess">
   <div class="caption"></div>
   <h3><b>Apple iPhone 7</b></h3>
   <p><b>Price:Rs.29499.00</b></p>
   <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(18)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="24.jpg" class="img-responsive" alt="watches">
<div class="caption"></div>
<h3><b>Samsung Galaxy S9</b></h3>
<p><b>Price:Rs.24999.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(19)){
echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>

</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="25.jpg" class="img-responsive" alt="watches">
<div class="caption"></div>
<h3><b>One Plus 7T</b></h3>
<p><b>Price:Rs.37229.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(20)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container" id="holder">
<div class="panel panel-primary">
<div class=container>
<div class="row text-center">
<div class="panel-header"><h3><b>BACK COVER</b></h3></div>
<div class="panel-body">

  <div class="col-md-3 col-sm-6">
  <div class="thumbnail">
  <img src="9.jpg" class="img-responsive" alt="shirts"><br>
    <div class="caption"></div>
    <h3><b>KWINE Case Cover</b></h3>
    <p><b>Price:Rs.259.00</b></p>
    <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{
if(check_if_added_to_cart(9)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
  <img src="10.jpg" class="img-responsive" alt="shirts">
     <div class="caption"></div><br><br><br><br>
     <h3><b>Aspire Back Cover</b></h3>
     <p><b>Price:Rs.227.00</b></p>
     <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{
if(check_if_added_to_cart(10)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
 </div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="11.jpg" class="img-responsive" alt="shirts">
<div class="caption"></div><br><br><br><br>
<h3><b>VAKIBO Back Cover</b></h3>
<p><b>Price:Rs.220.00</b></p>

<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{
if(check_if_added_to_cart(11)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="12.jpg" class="img-responsive" alt="shirts">
  <div class="caption"></div><br><br><br><br><br><br><br><br><br>
  <h3><b>Mobile Mart Cover</b></h3>
  <p><b>Price:Rs.259.00</b></p>
  <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(12)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart.php?id=12" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

</div>
</div>
</div>

<div class=container>
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="26.jpg" class="img-responsive" alt="watches">
  <div class="caption"></div><br><br><br>
  <h3><b>Spign Back Cover</b></h3>
  <p><b>Price:Rs.1499.00</b></p>
  <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{
if(check_if_added_to_cart(21)){
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="27.jpg" class="img-responsive" alt="watchess">
   <div class="caption"></div><br><br><br><br><br><br><br>
   <h3><b>KARWAN Back Cover</b></h3>
   <p><b>Price:Rs.329.00</b></p>
   <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(22)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="28.jpg" class="img-responsive" alt="watches">
<div class="caption"></div>
<h3><b>COVERNEW Back Cover</b></h3>
<p><b>Price:Rs.459.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(23)){
echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="35.jpeg" class="img-responsive" alt="watches">
<div class="caption"></div><br><br><br><br><br>
<h3><b>Kapa Back Cover</b></h3>
<p><b>Price:Rs.590.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(24)){
 echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div clss="container" id="holder">
<div class="panel panel-primary">
<div class="row text-center">
<div class="panel-header-primary"><h3><b>HEADPHONES</b></h3></div>
<div class="panel-body">
<div class=container>

  <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="13.jpg" class="img-responsive" alt="cameras">
          <div class="caption"></div><br><br><br><br>
          <h3><b>Infinity JPL Headset</b></h3>
          <p><b>Price:Rs.1599.00<b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(13)){
    echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
   </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <img src="14.jpg" class="img-responsive" alt="cameras">
           <div class="caption"></div>
           <h3><b>SONY ZX 110A Wired Headset</b></h3>
           <p><b>Price:Rs.717.00</b></p>
<?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(14)){
    
    echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="15.jpg" class="img-responsive" alt="cameras">
    <div class="caption"></div><br><br>
    <h3><b>SONY 310 AP Wired Headset</b></h3>
    <p><b>Price:Rs.949.00</b></p>
    <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(15)){
    
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>

</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
   <img src="16.jpg" class="img-responsive" alt="cameras">
        <div class="caption"></div> <br><br><br><br><br><br><br><br><br>
        <h3><b>boAt Rockerz 501</b></h3>
        <p><b>Price:Rs.1898.00</b></p>
        <?php 
if(!isset($_SESSION['email'])) {
?>
         <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button "class="btn btn-primary btn-block">Buy Now</a></p>
<?php 
} else{

if(check_if_added_to_cart(16)){
   
    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
}else{
    ?>
    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary"> Add to cart</a>
    <?php
}
}
?>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
    <?php 
    include 'footer.php'; 
    ?>
</body>
</html>
    
   