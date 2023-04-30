<!DOCTYPE html>
<html>
    <head>
        <title>BiharNotes : keeps you updated</title>
        <meta charset="utf-8">
        <link rel = "icon" type = "image/png" href = "images/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/headfoot.css">
        <link rel="stylesheet" type="text/css" href="css/defualt.css">       
        <link rel="stylesheet" type="text/css" href="css/notification.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    </head>

  <body>
    <?php

      include 'dbcon.php';

      if(isset($_POST['submit']))
      { 
        $username = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $qualification = $_POST['qualification'];
        $designation = $_POST['designation'];
        $file = $_FILES['pic'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        $file_ext = explode('.', $filename);
        $file_ext_check = strtolower(end($file_ext));

        $valid_img_ext = array('png','jpg','jpeg','gif');

        if($fileerror == 0)
        {
          if(in_array($file_ext_check, $valid_img_ext))
          {
            $destfile = 'contributor/'.$filename;
            //echo "$destfile";
            move_uploaded_file($filepath, $destfile);
            $insertquery = "insert into contributor(name, email, mobile, qualification, designation, pic) values('$username', '$email', '$mobile', '$qualification', '$designation', '$destfile')";

            $query = mysqli_query($con,$insertquery);

            if($query)
            {
              ?>
                <script type="text/javascript">
                  alert("Congratulation You have successfully registered !!");
                  window.location = "login.php";
                </script>
              <?php
            }
            else
            {
              ?>
                <script type="text/javascript">
                  alert("Oops : try again -_- !");
                  window.location = "contributor.php";
                </script>
              <?php
            }

          }
          else
          {
             ?>
               <script type="text/javascript">
                 alert("Select only Image file !");
                 window.location = "contributor.php";
               </script>
             <?php
          }
        }
      }

  ?>
    


 <!--******************************* Header part starts **********************************-->
  
  <header>    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <img src="images/logo.png">              
          <a class="navbar-brand" href="index.php">BiharNotes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="icon"><i class="fa fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>                        
              <li class="nav-item">
                  <a class="nav-link" href="login.php">login</a>
              </li>      
            </ul>
          </div>  
        </div>
    </nav>       
  </header>
  <header>
      <div class="container-fluid">
          <div class="row p-3 text-center">
              <div class="menu col-lg-2 col-md-2 col-4">
                <ul> 
                  <li class="dropdown" style="list-style: none;">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                      University
                    </a>
                    <div class="dropdown-menu mega-menu bgddmenu" aria-labelledby="navbarDropdown">
                      <div class="row" >
                          
                        <div class="col-lg-4 col-md-4 col-10 offset-1 offset-lg-0 offset-md-0 styled">
                            <a target="_blank" href="http://akubihar.ac.in">Aryabhatta Knowledge University</a>
                            <a target="_blank" href="https://bnmu.ac.in">Bhupendra Narayan Mandal University</a>
                            <a target="_blank" href="https://www.bausabour.ac.in">Bihar Agricultural University</a>
                            <a target="_blank" href="https://www.mungeruniversity.ac.in">Munger university</a>
                            <a target="_blank" href="https://www.brabu.net">B. R. Ambedkar Bihar University</a>   
                            <a target="_blank" href="https://www.cusb.ac.in">Central University of South Bihar</a>                     
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-10 offset-1 offset-1 offset-lg-0 offset-md-0 collge styled">
                          <a target="_blank" href="https://www.cnlu.ac.in">Chanakya National Law University</a>
                          <a target="_blank" href="https://jpv.bih.nic.in">Jai Prakash University</a>
                          <a target="_blank" href="https://www.ksdsu.edu.in">Kameshwar Singh Darbhanga Sanskrit University</a>
                          <a target="_blank" href="https://www.lnmuuniversity.in">Lalit Narayan Mithila university</a>
                          <a target="_blank" href="https://www.mmhapu.bih.nic.in">Maulana Mazharul Haque Arabic and Persian University</a> 
                          <a target="_blank" href="https://www.nalandaopenuniversity.com">Nalanda Open University</a>                       
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-10 offset-1 offset-1 offset-lg-0 offset-md-0 collge styled">
                            <a target="_blank" href="https://www.magadhuniversity.ac.in">Magadh University</a>
                            <a target="_blank" href="https://www.patnauniversity.ac.in">Patna University</a>
                            <a target="_blank" href="https://www.rpcau.ac.in">Dr. Rajendra Prasad Central Agriculture University</a>
                            <a target="_blank" href="https://tmbuniv.ac.in">Tilka Manjhi Bhagalpur University</a>
                            <a target="_blank" href="https://vksu.ac.in">Veer Kunwar Singh University</a>                    
                        </div>
                      </div>              
                    </div>
                  </li>
                </ul>          
              </div>

              <div class="menu col-lg-2 col-md-2 col-4">
                <a href="#">Patna <br>University</a>
              </div>


              <div class="menu col-lg-2 col-md-2 col-4">
                <div class="dropdown">
                  <div class="btn-group">
                    <p class="dropdown-toggle ddmenu" data-toggle="dropdown">P.U Admission</p>
                    <div class="dropdown-menu bgddmenu">
                      <a href="admissionUG.html" class="dropdown-item">Undergraduate (UG)</a>
                      <a href="admissionPG.html" class="dropdown-item">Postgraduate (PG)</a>        
                      <a href="admissionDIPLOMA.html" class="dropdown-item">Certificate / Diploma course</a>                
                    </div>
                  </div>
                </div>
              </div>

              <div class="menu col-lg-2 col-md-2 col-4">
                <a href="results.html">P.U Results</a>
              </div>



              <div class="menu col-lg-2 col-md-2 col-4">          
                <a href="job-alert.html">Job Alert</a>
              </div>

              <div class="menu col-lg-2 col-md-2 col-4">
                <a href="#">E-content</a>
              </div>

          </div>
      </div> 
  </header>  
<!-- *********************** header part end ********************** -->

<!-- *********************** Contributor part starts ********************** -->

<div class="container">
  <div class="row">    
    <div class="col-lg-6 col-md-6 col-10 offset-lg-3 offset-md-3 offset-1">
      <h5 class="header12 text-center mb-3"> Contributor Registration form </h5>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
          </div> 

          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Id" required>
          </div> 

          <div class="form-group">
            <input type="number" name="mobile" class="form-control" placeholder="Mobile No" required>
          </div>           

          <div class="form-group">
            <input type="text" name="qualification" class="form-control" placeholder="Your Qualification" required>
          </div> 

          <div class="form-group">
            <input type="text" name="designation" class="form-control" placeholder="Your Designation">
          </div> 

          <div class="form-group">
             <label class="input_file_css"><input style="border:none;color: #2874f0;" class="form-control" type="file" name="pic" required/></label> 
          </div>

          <div class="text-center">
              <p>Go to e-content page <a href="econtent.php">Click here </a></p>
          </div>

          <div class="header21 text-center mt-4">
              <button style="margin-right: 100px;" type="submit" name="submit">Submit</button>
              <button type="submit" name="reset">Reset</button>
          </div>  
        </form>      

    </div>
  </div>
</div>




<!-- *********************** Contributor part Ends ********************** -->

<!-- *********************** Footer starts **********************  -->

<footer class="footersection" id="footerdiv">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 col-12 kuchv">
              <div>
                  <h3> About BiharNotes</h3>
                  <p style="color: black;"> You can know detail information about university and their colleges in Bihar <br>Curently we are working for Patna university Further we will add another university of Bihar</p>
                  
              </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 kuchv">
            <div>
              <h3>interact with Us</h3>
              <p style="color: black;">
                <i class="fa fa-globe pad"></i>&nbsp&nbsp&nbspbiharnotes.com <br>
                <i class="fa fa-envelope-o pad"></i>&nbsp&nbsp&nbspadmin@biharnotes.com <br>
                <i class="fa fa-instagram pad"></i>&nbsp&nbsp&nbsp@biharnotes <br>
                <i class="fa fa-facebook-square pad"></i>&nbsp&nbsp&nbsp@biharnotes <br>
                <i class="fa fa-phone pad"></i>&nbsp&nbsp&nbsp+918271234251<br>
                

              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 col-12 kuchv">
              <div>
                  <h3> Newsletter</h3>
                  <p style="color: black;"> You can know detail information about our websites <br>just subscribe here</p>
                  <div class="container newslettermain">
                      <div class="row">
                          <div class="col-lg-12 col-12">                
                              <div class="input-group mb-3">
                                  <input type="text" class="form-control news-input" placeholder="Your Email">
                                  <div class="input-group-append">
                                  <span class="input-group-text">Subscribe</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="mt-5 text-center">        
        
        <a class="qtext" style="text-decoration: none;" href="copyright.html"> © biharnotes 2020 </a>
      </div>
  </div>
</footer>

<!-- *********************** Footer Ends ********************** -->

   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"  integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   

   <script>
       $('.count').counterUp({
           delay:10,
           time:900
       })
    </script>    
  </body>
</html>