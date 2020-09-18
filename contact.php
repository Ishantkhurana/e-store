<?php
require 'session-common.php';
?>
<!DOCTYPE html>
<html>
    <head>
              <link rel=stylesheet type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type=text/javascript src="bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script type=text/javascript src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Contact Us</title>
    </head>
    <body>
            <?php
        if(!isset($_SESSION['email'])){ ?>
        <div class="alig">
         <div class="container-fluid">
            <div class="row">
                     <nav class="navbar navbar-default navbar-fixed navbar-top">
                           <div class="container-fluid"> 
                    <div class="navbar-header">
                         <a href="index.php" class="navbar-brand hed"><strong>E- Store</streong></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav navbar-right nav1">
                            <li><a href="signup.php"><span class=" glyphicon glyphicon-user"></span> Sign Up</a>
                            <li><button type="button" class="btn ln" data-toggle="modal" data-target="#Modal"><span class="glyphicon glyphicon-log-in"></span><strong> Login</strong>
</button>
<div class="modal fade" id="Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title inli" id="Modal">Login</h3> 
        <button type="button" class="close inli" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
          <div class="form-group">
              <div class="col-md-9 col-sm-3">
          <form action="login_submit.php" method="post">
              <div>Don't have an account?<a href="signup.php">Register</a><br></div><br>
              <input type="email" placeholder="Email" required="true" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
              <br>   <input type="password" placeholder="Password" required="true" name="password" class="form-control" pattern=".{6}" >
              <br><button class="btn btn-primary" value="Login">Login</button>
              <br><br>   <a href="forgot-pwd.php" > Forgot Password? </a>
          </form>
              </div>
          </div>
      </div><br><br>

      <br><br><br><br><br><br><br><br>

    </div>
  </div>
</div>
                        <li><a href="about.php"><span class="glyphicon glyphicon-calendar"></span> About Us</a></li>
                           <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        </ul>
                    </div>
                  </nav>
                 </div>
            </div><?php 
        }  else{ ?>   <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="index.php" class="navbar-brand hed"><strong>E- Store</streong></a>
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="collapse navbar-collapse" id="mynavbar">
                           <ul class="nav navbar-nav navbar-right nav1">
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>  
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
                                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>                           
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
        </div> <?php } ?> <br><br><br>
             <div class="container">
                 <div class="row">
                     <div class="support">                         
                         <h3>LIVE SUPPORT</h3>
                         <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>                      
                         <p>It is along established fact that a reader will be distracted by the readable content of a page when looking its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available,but the majority hae suffered alliteration in some form,by injected humour,or randomised words which don't look even slightly believable.If you are going to use passage of Lorem Ipsum,you need to be sure there isn't anythingembrassing hidden in the middle of text.</p>
                     
                         <img src="images/care.png" class="img-responsive">
                     </div>
                 </div>
             </div>
             <div class="container">
                 <div class="row">
                     <h2>Contact Us</h2>
                     <form action="support.php" method="post">
                         <div class="form-group">
                             <div class="col-sm-8">
                         <label for="name">Name</label>
                         <input type="text" name='name' class="form-control"><br>
                             <label for="email">Email</label>
                             <input type="email" name='email' class="form-control"><br>
                             <label for="message">Message</label><br>
                             <textarea name="message" rows="10" cols='96'></textarea><br>
                             <button class="btn btn-primary" value="Submit">Submit</button><br><br>
                             </div>
                            
                             <div class="col-sm-4 info">
                                 <h2>Company Information:</h2>
                                 <h4>500 Lomen Ipsum Dolor Sit 22-56-2-9 Sit Amet,Lorem,USA</h4>
                                 <h4>Phone:(00) 222 666 4444</h4>
                                 <h4>Fax:(000) 000 00 00 0</h4>
                                 <h4>Email: info@mycompany.com</h4>
                                 <h4>Follow on: Facebook,Twitter</h4>
                             </div>
                         </div>
                     </form>
                 </div> 
             </div>
             <?php
        if(!isset($_SESSION['email'])){ ?>
              <footer>
                <div class="container-fluid">
                    <div class="row">
                <div class="foot">
                    <div class="visible-sm visible-xs">
                       <div class="row">
                        <div class="col-xs-4">  <h3> Information</h3></div>
                        <div class="col-xs-4">    <h3> My Account</h3> </div>                        
                        <div class="col-xs-4">  <h3> Contact Us</h3></div>
                    </div>
                <div class="row">
                    <div class="col-xs-4">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-xs-4">   <h4><button classs="btn" id="log" data-toggle="modal" data-target="#Modal" >Login</button></h4></div>                       
                        <div class="col-xs-4">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-xs-4">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='signup.php'>Signup</h4></a></div>     
                    </div>  
                    </div>
                     <div class="visible-md visible-lg">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">  <h3> Information</h3></div>
                        <div class="col-md-4 col-sm-6">    <h3> My Account</h3> </div>                        
                        <div class="col-md-4 col-sm-6">  <h3> Contact Us</h3></div>
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><button classs="btn" id="log" data-toggle="modal" data-target="#Modal" >Login</button></h4></div>                       
                        <div class="col-md-4 col-sm-6">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-md-4 col-sm-6">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='signup.php'>Signup</h4></a></div>     
                    </div>
                     </div>
                </div>
                </div>
                </div>
            </footer>
        <?php } else { ?>
            <footer>
                <div class="container-fluid">
                    <div class="row">
                <div class="foot">
                    <div class="visible-sm visible-xs">
                         <div class="row">
                        <div class="col-xs-4">  <h3> Information</h3></div>
                        <div class="col-xs-4">    <h3> My Account</h3> </div>                        
                        <div class="col-xs-4">  <h3> Contact Us</h3></div>  
                    </div>
                <div class="row">
                    <div class="col-xs-4">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-xs-4">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-xs-4">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-xs-4">   <h4><a href='settings.php'>Settings</h4></a></div>  
                    </div>
                    </div>
                    <div class="visible-md visible-lg">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">  <h3> Information</h3></div>
                        <div class="col-md-4 col-sm-6">    <h3> My Account</h3> </div>                        
                        <div class="col-md-4 col-sm-6">  <h3> Contact Us</h3></div>                
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-md-4 col-sm-6">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-md-4 col-sm-6">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='settings.php'>Settings</h4></a></div>     
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </footer>
        <?php } ?>
    </body>
         </html>