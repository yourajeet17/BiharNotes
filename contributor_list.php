<?php
session_start();
?>

<html>
    <head>
        <title>BiharNotes : Photos of patna University and their colleges</title>  
          <?php include 'links/links.php'; ?>
          <link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">        
    </head>

  <body>
    
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
                      <li class="nav-item" style="cursor: pointer;">
                        <a class="nav-link" href="login.php"> login</a>
                      </li>     
                    </ul>
                  </div>  
                </div>
            </nav>       
    </header>
    <header>
      <div class="container-fluid">
        <div class="row p-3">
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
            <a class="qtextmenu" href="job-alert.html">Job Alert</a>
          </div>

          <div class="menu col-lg-2 col-md-2 col-4">
            <a class="qtextmenu" href="patnauniversity.html">Patna Uni.</a>
          </div>

          
          <div class="menu col-lg-2 col-md-2 col-4">
            <div class="dropdown">
              <div class="btn-group">
                <p class="dropdown-toggle ddmenu qtextmenu" data-toggle="dropdown">P.U Adm.</p>
                <div class="dropdown-menu bgddmenu">
                  <a href="admissionUG.html" class="dropdown-item">Undergraduate (UG)</a>
                  <a href="admissionPG.html" class="dropdown-item">Postgraduate (PG)</a>                
                  <a href="admissionDIPLOMA.html" class="dropdown-item">Certificate / Diploma course</a>                
                </div>
              </div>
            </div>
          </div>

          <div class="menu col-lg-2 col-md-2 col-4">
            <a class="qtextmenu" href="results.html">P.U Results</a>
          </div>      
          
          <div class="menu col-lg-2 col-md-2 col-4">
            <a class="qtextmenu" href="econtent.php">E-content</a>
          </div>

        </div>
      </div> 
    </header>

    <!-- *********************** header part end ********************** -->
    <div class="container">        
        <div class="row">
          <div class="col-12"> 
            <h5 class="header12 text-center mb-3"> Our Contributor ...</h5>
          </div>          
        </div>
    </div> 

    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-10 offset-lg-1 offset-md-1 offset-1 text-center">
          <?php
            include 'dbcon.php';
            $selectquery = "select * from contributor";
            $query = mysqli_query($con,$selectquery);

            while ($result = mysqli_fetch_array($query))
            {
              ?>
                  <table class="table table-hover text-center">
                    <tbody>
                      <tr>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php echo $result['designation']; ?></td>
                          <td><?php echo $result['qualification']; ?></td>
                          <td>
                            <a href="<?php echo $result['pic']; ?>" data-fancybox="images">
                              <img style="height: 100px;width: 100px;border-radius: 25px;margin: 10px;" src="<?php echo $result['pic']; ?>" alt="images/logo.png" />
                            </a>
                          </td>
                      </tr> 
                    </tbody> 
                  </table>
              <?php
            }
          ?>          
        </div>        
      </div>      
    </div> 
    

    
    <!-- *********************** Footer starts ********************** -->

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

      <!-- ************************ Fancybox coding JS starts ************************** -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="jquery.fancybox.min.js"></script>    

      <script>
          $('.count').counterUp({
              delay:10,
              time:900
          })
      </script>
      <!-- ************************ Fancybox coding JS starts ************************** -->
      <script>
        $('[data-fancybox="images"]').fancybox({
          afterLoad : function(instance, current) {
            var pixelRatio = window.devicePixelRatio || 1;

            if ( pixelRatio > 1.5 ) {
              current.width  = current.width  / pixelRatio;
              current.height = current.height / pixelRatio;
            }
          }
        });        
      </script>

        

<!-- ************** Disable right click starts**************** -->
      <!-- <script>
          $(document).bind("contextmenu",function(e) {
          e.preventDefault();
          });
      </script>

      <script>
          $(document).keydown(function(e){
          if(e.which === 123){
            return false;
          }
          });
      </script> -->

<!-- ************** Disable right click Ends**************** -->
 
</body>

</html>
