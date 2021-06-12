<?php 
include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=divice-width, initial-scale=1">
    </head>

   <body style="padding-top: 50px;">
    <?php include ("header.php"); ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1  style="color:#04093b" class="title"><b>LIVE SUPPORT</b></h1>
		  <h3 style="color:#c9a380">24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          <div>
             <p style="color:#0e1c25">Get 24/4 Live Chat option. Just share your problem with us and we will provide instant solution of you problem.
             We have team of expert who are ready 24x7 to solve your problem. Just fill the form and get your answer soon.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="18.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2 style="color:#460b03">CONTACT US</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-success" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2  style="color:#c9a380" class="title">Contact Information</h2>
	               <address>
				    <p>Malad,Mumbai</p>
				    <p> Maharashtra</p>
				    <p>India</p>
				    <p>Phone:4444 9999 000</p>
				    <p>Fax: 555 77 00 33</p>
				    <p>Email: info@mobilestore.com</p>
	               </address>
	               
	            <div><h3  style="color:#c9a380" class="title">Follow Us On</h3>
                   <a href="http://www.facebook.com" target="_blank">Facebook</a><br>
                   <a href="http://www.twitter.com" target="_blank">Twitter</a>
               </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
    </body>
</html>