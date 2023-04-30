<?php
session_start();
?>

<html>
    <head>
        <title>BiharNotes : keeps you updated</title>  
        <?php include 'links/links.php'; ?>
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


    <!-- ************************** Main Slider starts  ************************* -->
    <section class="main-slider">
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner container-fluid">
          <div class="carousel-item active">
            <div class="main-box">
              <a href="#"><img class="slider-image" src="images/slider6.png" alt="Slider first"></a>
            </div>     
          </div>
          <div class="carousel-item">
            <div class="main-box">
              <a href="#"><img class="slider-image" src="images/slider7.jpeg" alt="Slider second"></a>
            </div>     
          </div>      

          <div class="carousel-item">
            <div class="main-box">
              <a href="#"><img class="slider-image" src="images/slider8.jpeg" alt="Slider third"></a>
            </div>     
          </div>      

          <div class="carousel-item">
            <div class="main-box">
              <a href="#"><img class="slider-image" src="images/slider9.jpeg" alt="Slider fourth"></a>
            </div>     
          </div>

          <div class="carousel-item">
            <div class="main-box">
              <a href="#"><img class="slider-image" src="images/slider5.jpeg" alt="Slider fifth"></a>
            </div>     
          </div>

        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>  
    <!-- ************************** Main slider ends ************************* -->


    <!-- ************************ Our cards starts ********************** -->

    <section class="carddd" id="card-div">
      <div class="container-fluid headings text-center mt-3">
          <h5 class="qtexth2 text-center font-weight-bold text-white">
              Quick links
          </h5>
      </div>

      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-12">
                <div class="card text-center">
                    <div class="card-header">Bihar Info</div>
                    <div class="card-body">
                        <p><a href="our_bihar.php">Our Bihar</a></p>
                        <p><a href="#">Bihar Ranking</a></p>
                        <p><a href="bihar_history.php">History of Bihar</a></p>                    
                    </div>
                    <div class="card-footer">
                        <a href="#">show more</a>
                    </div>                    
                </div>                 
            </div>
            <div class="col-lg-3 col-12">
                <div class="card text-center">
                    <div class="card-header">Student <br> Corner</div>
                    <div class="card-body">
                      <p><a href="feedback.php">Feedback</a></p>
                      <p><a href="#">Chat Box</a></p>                      
                    </div>
                    <div class="card-footer">
                        <a href="#">show more</a>
                    </div>                    
                </div>                 
            </div>
            <div class="col-lg-3 col-12">
                <div class="card text-center">
                    <div class="card-header">Media & <br> News</div>
                    <div class="card-body">
                      <p><a href="https://www.patnauniversity.ac.in/07_01_2019_pressrelease.php">Press release</a></p>
                      <p><a href="gallery.php">Photo Gallery</a></p>
                      <p><a href="https://www.patnauniversity.ac.in/07_01_2019_puinnews.php">News about Patna University</a></p>
                    </div>
                    <div class="card-footer">
                        <a href="#">show more</a>
                    </div>                    
                </div>                 
            </div>

            <div class="col-lg-3 col-12">
                <div class="card text-center">
                    <div class="card-header">Our <br> Contributor</div>
                    <div class="card-body" style="height: 150px;">
                        <p><a href="contributor_list.php">Our contributer list</a></p>
                        <p><a href="contributor.php">join us as Contributor</a></p>
                    </div>
                    <div class="card-footer">
                        <a href="#">show more</a>
                    </div>                    
                </div>                 
            </div>
          </div>
      </div>
    </section>
    <!-- *********************** Our carde ends **************************** -->


    <!-- ********************* Three parts header ends ****************** -->

    <!-- *********************** Footer starts ********************** -->

    <footer class="footersection" id="footerdiv">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6 col-12 kuchv">
                  <div>
                      <h3> About BiharNotes</h3>
                      <p style="color: black;"> You can know detail information about university and their colleges in Bihar <br>Curently we are working for Patna university Further we will add another university of Bihar</p>
                      <p style="font-size: 1.2rem;"><a class="hitCounter hit_format" href="https://visitorshitcounter.com/" target="_blank" title="Hit counter" data-name="709c03d1a144bd065f10fb77b1407b31|6|page|100|#fda533|#030303|small|s-hit">Hit Counter</a>&nbsp;Total Visitor</p>
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
      <script>document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v="+Date.now()+"'><\/script>");</script>

      <script>
          $('.count').counterUp({
              delay:10,
              time:900
          })
        </script>

<!-- ************** Disable right click starts**************** -->
      <script>
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
</script>

<!-- ************** Disable right click Ends**************** -->

 
</body>

</html>
