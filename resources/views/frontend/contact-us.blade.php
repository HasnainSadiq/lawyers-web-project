<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PakLawyer.PK</title>
    <link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/images/fav-icon.png')}}">
    <link rel="stylesheet"    href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet"    href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet"    href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet"    href="{{asset('assets/css/responsive.css')}}" />
</head>

<body>
    <!-- ===============================*****Start Header*****=============================== -->
    <header>
        <div class="_main_nav">
            <div class="container">
                <div class="row">
                    <div class="nav">
                        <div class="logo-01">
                            <h3>PakLawyer.PK</h3>
                        </div>
                        <div class="menu-toggle"></div>
                        <div class="my-nav">
                            <div class="menu">
                                <ul>
                                  <li class="logo"><a href="/">PakLawyer.PK</a></li>
                                  <li><a href="/">Home</a></li>
                                  <li><a href="about-us">About Us</a></li>
                                <li><a href="services">Services</a></li>
                                <li><a href="contact-us">Contact Us</a></li>
                                  <li class="link-01"><a href="/appointment/index">Set Appointment</a></li>
                                 
                              </ul>
                              </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ===============================*****End Header*****=============================== -->

    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">
                        <h2>Contact Us</h2>
                        <p>Home<i class="fas fa-angle-right"></i><span>Contact Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                    
                        <h3>Lawyer</h3>
                        <p>Pak-Lawyer Associates provides legal services in Criminal, Tax Filling and Family Laws of Pakistan. We are a top-rated law firm in Mansehra. we have experience, dedicated and honest lawyers having exptise in Criminal, Tax filling and Family Laws of Pakistan.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                        <li><i class="far fa-angle-right"></i>home</li>
                            <li><i class="far fa-angle-right"></i>About Us</li>
                            <li><i class="far fa-angle-right"></i>Services</li>
                            <li class="last"><i class="far fa-angle-right"></i>Contact Us</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Our Legal</h3>
                        <ol>
                        <li><i class="far fa-angle-right"></i>criminal Law</li>
                            <li><i class="far fa-angle-right"></i>Family Law</li>
                            <li><i class="far fa-angle-right"></i>Tax filling Law</li>
                            
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Contact Us</h3>
                        <form class="my-form">
                            <div class="form-group">
                               <input class="form-control" type="emal" name="email" placeholder="Email"> 
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="contact-us">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
</script>

 <script>
      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });
    </script>
</html>