<?php

session_start();

if(!isset($_SESSION["un"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}





?>





<!DOCTYPE html>
<html>
<head>
	<title>Product</title>

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
        <li class="item2"><a href="product.php">Android</a></li>
        <li class="item2"><a href="iphone.php">Iphone</a></li>
        <li class="item2"><a href="windows.php">Windows</a></li>
        <li class="item2"><a href="cart.php">My Cart</a></li>
        <li class="item2"><a href="sony.php">Sony<sup><span style="color:white; padding-left:10px;padding-bottom:20px;">SALE</span></sup></a></li>
        <li class="space"><a href="profile.php?user=<?php echo("$username"); ?>"><i class="fa fa-user ispace"></i><?php echo("  $username"); ?></a></li>

        <li class="space"><a href="logout.php"><i class="fa fa-power-off ispace"></i>Logout</a></li>
       </ul>
     
       </nav>

     <div class="hbar">
     	<div class="glyphicon glyphicon-home" style="margin-left:80px"> >  <span style="font-family:Verdana">Smart Phone</span></div> 
     

     </div>

    <div class="pbar">
     <div class="row">
       
       <div class="col-sm-1 ">

            
             <div class="picbar"> <img src="images/ms.jpg"  class="img-responsive"></div>
             <div class="picbar"> <img src="images/ms.jpg"  class="img-responsive"></div>
             <div class="picbar"> <img src="images/ms.jpg"  class="img-responsive"></div>
             <div class="picbar"> <img src="images/ms.jpg"  class="img-responsive"></div>

       </div>
       
        
        <div class="col-sm-5">

            
              <div class="bbar"><div class="pcbar"><img src="images/ms.jpg" height="470px" class="img-responsive"></div></div>
            

       </div>
  
     
       <div class="col-sm-6">

        
         	<div class="dbar">
         	 <div class="cbar">Model</div> 
         	<div class="btnc"><b>Microsoft Lumia</b></div><br><br>
         	<div style="font-size:20px;">Microsoft</div><br>
         

         	<div style="font-size:20px;">$220.00</div><br><br>

         	
         	<form action="cart.php" name="f1" method="POST">
 
         	<!--<a href="#"><div class="gbar"><div class="r"></div></div></a>
         	<a href="#"><div class="gbar"><div class="b"></div></div></a>
         	<a href="#"><div class="gbar"><div class="p"></div></div></a><br><br>-->
          <label for="ta">Name</label>
          <input type="text" name="name" class="form-control" value="Microsoft Lumia" readonly><br><br>
         	<p>External Memory</p>
         	<select name="siz" class="sw" value="select" required>
         	<option value="16 GB">16 GB</option>	
         	<option value="32 GB">32 GB</option>	
         	<option value="64 GB">64 GB</option>	


         	</select><br><br>
          <label for="ta">Price</label>
          <input type="text" name="price" class="form-control" value="$220.00" readonly><br><br>

         	<p>Color</p>
         	
         	<label class="radio-inline"><input type="radio" name="chk" value="Red">Red  
         	</label>

         	<label class="radio-inline"><input type="radio" name="chk" value="Blue">Blue  
         	</label>

         	<label class="radio-inline"><input type="radio" name="chk" value="Pink">Pink
         	</label><br>
         	<button type="submit" class="btnsubmit"><span class="glyphicon glyphicon-shopping-cart gly"></span>ADD TO CART</button>
         	</form><br><br>
         	<div class="glya"><a href="#"><span class="glyphicon glyphicon-heart gly "></span>Add To Whistlist</a></div><br><br>

         	<img src="images/pay.jpg" class="img-responsive"><br>

         	<a class="tw" href="#"><i class="fa fa-twitter"></i></a>
         	<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
         	<a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
         	<a class="gp" href="#"><i class="fa fa-pinterest"></i></a>




         	</div>



        
       	
       </div>
       


       </div><br><br>

        <div class="row">

          <div class="col-sm-12">
          	

          	<ul class="nav nav-tabs nav-stacked">
          	  <li class="active"><a data-toggle="tab" href="#minfo">More Info</a></li>
          	   <li><a data-toggle="tab" href="#ds">Features</a></li>
          	    <li><a data-toggle="tab" href="#down">Download</a></li>
          	      <li><a data-toggle="tab" href="#vf">Video</a></li>
          	  </ul>


          	  <div class="tab-content">
          	   <div id="minfo" class="tab-pane fade in active">
          	  	<br><p>Microsoft Lumia</p>

          	  </div>

          	  <div id="ds" class="tab-pane fade">
          	  <br> <p>Display. 9.70-inch.</p>
    <p>Processor. 1.3GHz.</p>
    <p>Front Camera. 1.2-megapixel.</p>
    <p>Resolution. 1536x2048 pixels.</p>
    <p>RAM. 1GB.</p>
    <p>OS. Windows 8.</p>
    <p>Storage. 16GB.</p>
    <p>Rear Camera. 5-megapixel.</p>
          	  	

          	  </div>

          	  <div id="down" class="tab-pane fade">
          	  	
                  <a class="dla" href="#"><div class="dl"><span  class="glyphicon glyphicon-download-alt"></span><span style="margin-left:10px; text-decoration:none;" >Download</span></div></a>
           	 
          	  </div>

          	  <div id="ps" class="tab-pane fade">
          	  	
          	  	<br><p>AFTER SAVING YOUR CUSTOMIZED PRODUCT, REMEMBER TO ADD IT TO YOUR CART. 
ALLOWED FILE FORMATS ARE: GIF, JPG, PNG

PICTURES</p>
   <form action="action.php" naem="f2">
   <input type="file" name="image">
   </form>
          	  </div>

          	  <div id="vf" class="tab-pane fade">
          	  	

                <iframe width="560" height="315" src="https://www.youtube.com/embed/W_cBXA99Cwg" frameborder="0" allowfullscreen></iframe>
          	  	
          	  </div>


          	  </div>



        </div>


        
        	





        </div>




        <div class="row">
          <div class="col-sm-3">
          	<div class="re">
               <br><br><b>Reviews</b>
          	  <div class="gr">
          	   <b>Microsoft Lumia</b><br>
          	   <p>Microsoft</p><br>
          	  

          	  	
          	  </div>
          		
          	</div>
          
          </div>

          <div class="col-sm-9">
          	 
          	 <div class="re">
               
          	  <div class="grr">
          	   
              <p><b>More Info</b><br><br>

<span style="font-size:10px">Microsoft Lumia</span></p>
          	  	
          	  </div>
          		
          	</div>






          </div>

         </div>


         <div class="row">
          <div class="col-sm-12">
            <div class="brd">
            	
            </div>
           </div>
           </div>


           <div class="row">
          <span style="margin-left:10px"> <b>ACCESSORIES</b></span><br>
           	 <div class="col-sm-2">
           	 	
           	 	<div class="acbar"><img src="images/ms.jpg" class="img-responsive"></div>
           	 		
           	 	
                
                <p align="center">Lumia</p><br>
               <p align="center">$200.00</p>
               <a href="#"><div class="cart"><span class="glyphicon glyphicon-shopping-cart"></span></div></a>
           	 </div>
                
                <div class="col-sm-2">
           	 	       <div class="acbar"><img src="images/ms.jpg" class="img-responsive"></div>
           	 		
           	  <p align="center">Lumia 8</p><br>
               <p align="center">$300.00</p>

               <a href="#"><div class="cart"><span class="glyphicon glyphicon-shopping-cart"></span></div></a>

           	 </div>


           	  <div class="col-sm-2">
           	 	
           	 	<div class="acbar"><img src="images/ms.jpg" class="img-responsive"></div>
           	 		
           	 	
               <p align="center">Lumia 5</p><br>
               <p align="center">$450.00</p>

               <a href="#"><div class="cart"><span class="glyphicon glyphicon-shopping-cart"></span></div></a>
           	 </div>


           	  <div class="col-sm-2">
           	 	
           	 	<div class="acbar"><img src="images/7s.jpg" class="img-responsive"></div>
           	 		
           	   <p align="center">Lumia</p><br>
               <p align="center">$400.00</p>

               <a href="#"><div class="cart"><span class="glyphicon glyphicon-shopping-cart"></span></div></a>

           	 </div>


           	  <div class="col-sm-2">
           	 	
           	 	<div class="acbar"><img src="images/ms.jpg" class="img-responsive"></div>
           	 		
           	 	
              <p align="center">Lumia</p><br>
               <p align="center">$470.00</p>
               <a href="#"><div class="cart"><span class="glyphicon glyphicon-shopping-cart"></span></div></a>
           	 </div>

           	  <div class="col-sm-2">
           	 	
           	 	<div class="acbar"><img src="images/5s.jpg" class="img-responsive"></div>
           	 		
           	 	
                 <p align="center">Lumia</p><br>
               <p align="center">$520.00</p>

               <a href="#"><div class="cart"><span class="glyphicon glyphicon-shopping-cart"></span></div></a>

           	 </div>



           </div>


           <div class="row">
             <div class="col-sm-12">
             	<div class="brd">
             		
             	</div>
             </div>
           	
           </div><br>

              <div class="row">
          <span style="margin-left:10px"> <b>19 More Products</b></span><br>
             <div class="col-sm-2">
              
              <div class="acbar"><img src="images/a1.jpg" class="img-responsive"></div>
                
              
                
                <p align="center">Smart Phone</p><br>
               <p align="center">$72.00</p>
              
             </div>
                
                <div class="col-sm-2">
                     <div class="acbar"><img src="images/a2.jpg" class="img-responsive"></div>
                
              <p align="center">Smart Phone</p><br>
               <p align="center">$72.00</p>

              

             </div>


              <div class="col-sm-2">
              
              <div class="acbar"><img src="images/a3.jpg" class="img-responsive"></div>
                
              
               <p align="center">Smart Phone</p><br>
               <p align="center">$72.00</p>

               
             </div>


              <div class="col-sm-2">
              
              <div class="acbar"><img src="images/a4.jpg" class="img-responsive"></div>
                
               <p align="center">Smart Phone</p><br>
               <p align="center">$72.00</p>

               

             </div>


              <div class="col-sm-2">
              
              <div class="acbar"><img src="images/a5.jpg" class="img-responsive"></div>
                
              
              <p align="center">Smart Phone</p><br>
               <p align="center">$72.00</p>
               
             </div>

              <div class="col-sm-2">
              
              <div class="acbar"><img src="images/a6.jpg" class="img-responsive"></div>
                
              
                 <p align="center">Smart Phone</p><br>
               <p align="center">$72.00</p>

               

             </div>



           </div>


            



           <div class="row">
             <div class="col-sm-12">
             	<div class="brd">
             		
             	</div>
             </div>
           	
           </div><br>





       </div>





   <div class="styler">
    	
    	<div class="stylercon">
          
           <img src="images/logo.png" class="img-responsive"><br>
           <span style="font-size:30px; text-align: center; color:white;">Mshop</span><br><br>
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
                <p style="font-size:15px;">  </p>
                
                <p style="font-size:16px;">15 / 10 / 2014</p>
                </div>
         </div>

            <div class="col-sm-4 im">
         	<img src="images/f2.jpg" class="img-responsive">
         	<div class="caption2">
              <b>Our phenomenal layouts and visionary UI design guarantee an exceptional mobile shopping experience.</b><br><br>
                <p style="font-size:15px;"> </p>
                
                <p style="font-size:16px;">15 / 10 / 2014</p>
                </div>
         </div>

            <div class="col-sm-4 im ">
         	<img src="images/f3.jpg" class="img-responsive">
         	<div class="caption2">
              <b>Our phenomenal layouts and visionary UI design guarantee an exceptional mobile shopping experience.</b><br><br>
                <p style="font-size:15px;"> </p>
               
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