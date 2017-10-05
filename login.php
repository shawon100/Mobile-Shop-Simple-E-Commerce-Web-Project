<?php

session_start();

if(isset($_SESSION["un"]))
{
  header("Location:index.php");
}





?>





<!DOCTYPE html>
<html>
<head>
	<title>Mobile Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\js\bootstrap.min.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="row">
  <div class="col-sm-1">
    <div class="lr">
      <div class="logo">

      <img src="images/logo.png" class="img responsive" height="90px" width="110px">
        
      </div>
    </div>
    	
  </div>

  <div class="col-sm-10">
    
     <nav class="navbar navbar-inverse navbard navbar-fixed-top">
      
       <ul class="nav navbar-nav ">
        <li class="item"><a href="index.php">Home</a></li>
        <li class="item2"><a href="product.php">Product Page</a></li>
        <li class="item2"><a href="#">Product Listing</a></li>
        <li class="item2"><a href="#">Pages</a></li>
        <li class="item2"><a href="#">Mobiles<sup><span style="color:white; padding-left:10px;padding-bottom:20px;">SALE</span></sup></a></li>
        <li class="space"><a href="sign.php"><i class="fa fa-chevron-circle-up ispace"></i> Sign Up</a></li>
       </ul>
     
       </nav>

     
    

     

       <!--<div class="content2">

         <img src="images/sl1.jpg" class="img-responsive">
      
        -->
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item content2 active">
      <img src="images/sl1.jpg" alt="Chania">
    </div>

    <div class="item content2">
      <img src="images/sl2.jpg" alt="Chania">
    </div>

    <div class="item content2">
      <img src="images/sl3.jpg" alt="Flower">
    </div>

    <div class="item content2">
      <img src="images/sl1.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>










       
     
       <div class="content">
        <div class="row ">
         <div class="col-sm-4 im">
         	<img src="images/sl1.jpg" class="img-responsive">
         </div>

            <div class="col-sm-4 im">
         	<img src="images/sl1.jpg" class="img-responsive">
         </div>

            <div class="col-sm-4 im ">
         	<img src="images/sl1.jpg" class="img-responsive">
         </div>
       	
       </div>
       </div>
       <br>
       <br>

<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<center><span style="font-weight: bold;font-size: 30px;">Sign In</span></center><br><br>
<div class="form-group log">
<form action="process.php" name="f1" method="POST">

<label for="username">Username</label>
<input type="text" name="un" class="form-control" placeholder="Enter Username" required><br>
<label for="password">Password</label>
<input type="password" class="form-control"  name="ps" placeholder="Enter Password" required><br>

<center><button type="submit" class="btn btn-success">Sign In</button></center>
  

</form>
</div><br><br>
<?php

if(isset($_GET['value']))
{
   
   echo "<div style=\"margin-left:300px;\" class=\"alert alert-danger\">
  <strong>Sign in Failed!</strong>  Wrong Username And Password
   </div><br>";
    
}






?>
</div>
<div class="col-sm-2">
</div>
</div>
       	
       
	         

     <div class="">
	  <!-- Nav tabs -->
	  <div class="pill">
	  <ul class="nav nav-pills nav-center" role="tablist">
	    <li class="active space"><a href="#home"  data-toggle="pill">New Arrivals</a></li>
	    <li class="space"><a href="#profile"   data-toggle=pill>Populars</a></li>
	    <li  class="space"><a href="#messages" data-toggle="pill">Best Sellers</a></li>
	    <li  class="space"><a href="#settings"  data-toggle="pill">Specials</a></li>
	  </ul>
	  </div>

	  <div class="line">
	  	
	  </div>

	  <!-- Tab panes -->
	  <div class="tab-content pillcontent">
	    <div  class="tab-pane active" id="home">
	    	<div class="row">
               <div class="col-sm-4 ">
               <div class="imb">
                <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g4.jpg" class="img-responsive">
               
              </div>
              <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
	    	 </div>

	    	  <div class="col-sm-4 ">
	    	  <div class="imb">
               <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g4.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>

	    	  <div class="col-sm-4 ">
	    	   <div class="imb">
	    	   <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g4.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>
	    </div>
	    </div>


	    <div class="tab-pane fade" id="profile">

	      <div class="row">
               <div class="col-sm-4 ">
               <div class="imb">
                <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g5.jpg" class="img-responsive">
               
              </div>

               <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
	    	 </div>

	    	  <div class="col-sm-4 ">
	    	  <div class="imb">
               <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g5.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>

            
	    	 </div>

	    	  <div class="col-sm-4 ">
	    	   <div class="imb">
	    	   <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g5.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>
	    </div>

	    </div>

	    <div  class="tab-pane fade" id="messages">



	       <div class="row">
               <div class="col-sm-4 ">
               <div class="imb">
                <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g6.jpg" class="img-responsive">
               
              </div>
                
                 <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>

	    	 </div>

	    	  <div class="col-sm-4 ">
	    	  <div class="imb">
               <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g6.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>

	    	  <div class="col-sm-4 ">
	    	   <div class="imb">
	    	   <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g6.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>
	    </div>

	    </div>

	    <div class="tab-pane fade" id="settings">

          <div class="row">
               <div class="col-sm-4 ">
               <div class="imb">
                <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g6.jpg" class="img-responsive">
               
              </div>

               <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>

	    	 </div>

	    	  <div class="col-sm-4 ">
	    	  <div class="imb">
               <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g5.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>

	    	  <div class="col-sm-4 ">
	    	   <div class="imb">
	    	   <div class="new"><a href="#">
                 New</a>
                </div>
               <img src="images/g6.jpg" class="img-responsive">
               </div>

                <div class="caption">
              <p>Smart Phone</p>
                <b>$120.00 </b>
                </div>
            
	    	 </div>
	    </div>




	    </div>
	  </div>
    
    </div>


    <div class="parallax">
    	
    	<div class="pc">
        <b>DEAL OF THE DAY</b>
       </div>

       <a class="pc2" href="#"><div class="pc1">
         <b>Shop Now</b>
       </div></a>

    </div>


    <div class="styler">
    	
    	<div class="stylercon">
          
           <img src="images/logo.png" class="img-responsive"><br>
           <span style="font-size:30px; text-align: center; color:white;">STYLER</span><br><br>
         </div>

           <div class="stylermsg">
           <p style=" text-align:center;color:white">Our phenomenal layouts and visionary UI design guarantee an exceptional mobile shopping experience.</p>
           </div>

    <div class="footercontent">
     <div class="row ">
         <div class="col-sm-4 im">
         	<img src="images/f1.jpg" class="img-responsive">
         	<div class="caption2">
              <b>Our phenomenal layouts and visionary UI design guarantee an exceptional mobile shopping experience.</b><br><br>
                <p style="font-size:16px;">15 / 10 / 2014</p>
                </div>
         </div>

            <div class="col-sm-4 im">
         	<img src="images/f2.jpg" class="img-responsive">
         	<div class="caption2">
              <b>Our phenomenal layouts and visionary UI design guarantee an exceptional mobile shopping experience.</b><br><br>
                <p style="font-size:16px;">15 / 10 / 2014</p>
                </div>
         </div>

            <div class="col-sm-4 im ">
         	<img src="images/f3.jpg" class="img-responsive">
         	<div class="caption2">
              <b>Our phenomenal layouts and visionary UI design guarantee an exceptional mobile shopping experience.</b><br><br>
                <p style="font-size:16px;">15 / 10 / 2014</p>
                </div>
         </div>
       	
       </div>
       <div class="line2">
       	 
       </div>
       
       <div class="row">
          <div class="col-sm-3">
              <h3 style="color:white;">Information</h3>
              <div class="vm">
              <ul>
               <li><a href="#">Special</a></li>
               <li><a href="#">New Products</a></li>
               <li><a href="#">Top Sellers</a></li>
               <li><a href="#">Our Stores</a></li>
               <li><a href="#">Contact Us</a></li>
               <li><a href="#">Page Configuration</a></li>
               <li><a href="#">Sitemap</a></li>
             </ul>
             </div>


          	
          </div>

           <div class="col-sm-3">
              <h3 style="color:white;">My Account</h3>
              <div class="vm">
              <ul>
               <li><a href="#">My Orders</a></li>
               <li><a href="#">My Merchandise</a></li>
               <li><a href="#">Returns</a></li>
               <li><a href="#">My Credit Slips</a></li>
               <li><a href="#">My Addresses</a></li>
               <li><a href="#">My Personal Info</a></li>
              
             </ul>
             </div>


          	
          </div>



           <div class="col-sm-3">
              <h3 style="color:white;">Catagories</h3>
              <div class="vm">
              <ul>
               <li><a href="#">Iphone</a></li>
               <li><a href="#">Samsung</a></li>
               <li><a href="#">HTC</a></li>
               <li><a href="#">Symphony</a></li>
               <li><a href="#">Walton</a></li>
               <li><a href="#">Nexux</a></li>
               
             </ul>
             </div>


          	
          </div>



           <div class="col-sm-3">
              <h3 style="color:white;">Newsletter</h3>
             
              <form action="index.php" name="form" method="post">
           
              <div class="news">
              <input type="email" placeholder="Enter Email" size="6">
              </div>
              <div class="sub">
              <button type="submit" class="btn-d glyphicon glyphicon-envelope"></button>
              </div>
   
              </form>
              <div class="cl">
              <a class="social" href="#"><div class="fa fa-facebook">
      
              </div>
              </a>
              <a class="social" href="#"><div class="fa fa-twitter">
              </div></a>
              <a class="social" href="#"><div class="fa fa-google-plus">
              </div></a>
              </div>
             


          	
          </div>



       </div>

       </div>




    </div>

    <div class="footerlast">

    <div class="lastcontent">© 2016 By Mobile Shop</div>
    	
    </div>

    
    	


    </div>





  

  <div class="col-sm-1">

     <div class="logor">
  		<img src="images/logor.jpg" class="img-responsive" height="95px" />
    </div>
    <a href="#"><div class=" lrr glyphicon glyphicon-search">
      
    </div>
    </a>
    
     <a href="#"><div class=" l3 glyphicon glyphicon-lock">
      
    </div>
    </a>

     <a href="#"><div class=" l4 glyphicon glyphicon-cog">
      
    </div>
    </a>

    <div class=" l5 ">
      
    </div>



 
  </div>
	
</div>

</body>
</html>