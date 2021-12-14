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
                                  <li><a href="/about-us">About Us</a></li>
                                  <li><a href="/services">Services</a></li>
                                  <li><a href="/contact-us">Contact Us</a></li>
                                  <li class="link-01"><a href="/appointment/index">Set Appointment</a></li>
                                 
                              </ul>
                              </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
</header>

<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider-content">
                <h2>BIGGEST AND STRONGEST FIRM WITH LEGAL SOLUTION</h2>
                    <p>Pak-Lawyer Associates provides legal services in Criminal, Tax Filling and Family Laws of Pakistan. We are a top-rated law firm in Mansehra. we have experience, dedicated and honest lawyers having exptise in Criminal, Tax Filling and Family Laws of Pakistan.</p>
                    <div class="btn-01">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}"
                        >Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="se-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headding-01">
                    <h2>Our Legal Practices Areas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="far fa-landmark"></i>
                    </div>
                    <h3>Criminal Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Family Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Family Law sector to provide the top service.</p>
                
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Tax Filling Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Family Law sector to provide the top service.</p>
                
                </div>
            </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head-01">
                        <h2>Meet our team</h2>
                        <p>Meet out best Team they can help to handle all kind of case according to their experties</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($lawyer as $l)                                   
                    <div class="col-lg-3 col-md-4 col-sm-6 col-sm-6">
                        <div class="team-main-box">
                            <img src="{{asset('uploads/lawyer/'. $l->image)}}" width="350" height="300">
                            <div class="team-content-box">
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                </ul>
                                <h3>{{$l->name}}</h3>
                                <b>{{$l->experties}}</b>
                            </div>
                        </div>
                    </div>
                @endforeach
             


            
            </div>
        </div>
    </section>

    {{-- <section class="se-03">
        <div class="container">
            <div class="row">
               <div class="col-12">
                    <div class="head-01">
                        <h2>Latest News</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt</p>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                      <div class="_bv_xs_we"></div>
                      <div class="_xs_we_er">
                        <div class="_he_w">
                          <h3>COMPLEX COMMERCIAL LITIGATION</h3>
                          <ol>
                            <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                          </ol>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>     
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                      <div class="_bv_xs_we" style="background:url(assets/images/blog/img-01.jpg"></div>
                      <div class="_xs_we_er">
                        <div class="_he_w">
                          <h3>COMPLEX COMMERCIAL LITIGATION</h3>
                          <ol>
                            <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                          </ol>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>     
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url(assets/images/blog/img-03.jpg"></div>
                      <div class="_xs_we_er">
                        <div class="_he_w">
                          <h3>COMPLEX COMMERCIAL LITIGATION</h3>
                          <ol>
                            <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                          </ol>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>     
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url(assets/images/blog/img-04.jpg"></div>
                      <div class="_xs_we_er">
                        <div class="_he_w">
                          <h3>COMPLEX COMMERCIAL LITIGATION</h3>
                          <ol>
                            <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                          </ol>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>     
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url(assets/images/blog/img-05.jpg"></div>
                      <div class="_xs_we_er">
                        <div class="_he_w">
                          <h3>COMPLEX COMMERCIAL LITIGATION</h3>
                          <ol>
                            <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                          </ol>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>     
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_lk_bg_sd_we">
                        <div class="_bv_xs_we" style="background:url(assets/images/blog/img-06.jpg"></div>
                      <div class="_xs_we_er">
                        <div class="_he_w">
                          <h3>COMPLEX COMMERCIAL LITIGATION</h3>
                          <ol>
                            <li><span>by</span> admin<span class="_mn_cd_xs">june 30, 2020</span></li>
                          </ol>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                      </div>     
                    </article>
                </div>
            </div>
        </div>
    </section> --}}

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                    <h3>Lawyer</h3>
                        <p>
A lawyer is a person who practices the law, as a lawyer, lawyer at law, barrister, barrister at law, bar at law, canonist, canon lawyer, civil law notary, consultant, counsel, lawyer, legal executive, or The civil servant prepares, interprets and applies the law, but not as a paralegal or charter.
.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>home</li>
                            <li><i class="far fa-angle-right"></i>About Us</li>
                            <li><i class="far fa-angle-right"></i>Services</li>
                            <li><i class="far fa-angle-right"></i>Blog</li>
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
                                <a href="#">Submit</a>
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