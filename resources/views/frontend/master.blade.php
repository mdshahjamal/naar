<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Naar - Fire Brigade HTML5 Responsive Template</title>

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
	
	<link rel="shortcut icon" type="image/png" href="{{ asset('frontend') }}/assets/images/favicon.png"/>

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/colors/color.css" title="color" /><!-- Color -->
    <link rel="alternate stylesheet" href="{{ asset('frontend') }}/assets/css/colors/color2.css" title="color2" /> <!-- Color2 -->
    <link rel="alternate stylesheet" href="{{ asset('frontend') }}/assets/css/colors/color3.css" title="color3" /> <!-- Color3 -->
    <link rel="alternate stylesheet" href="{{ asset('frontend') }}/assets/css/colors/color4.css" title="color4" /> <!-- Color4 -->

</head>
<body itemscope>
    <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div><!-- Preloader -->
    <main>
        <header class="stick">
            <div class="tb-br">
                <div class="container">
                    <div class="scl1 float-left">
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <ul class="tp-lst float-right">
                        <li><i class="fas fa-envelope theme-clr"></i><a href="#" title="" itemprop="url">info@example.com</a></li>
                        <li><i class="flaticon-telephone theme-clr"></i>+(00) 123-345-678</li>
                    </ul>
                </div>
            </div><!-- Topbar -->
            <div class="lg-mnu-sec sticky">
                <div class="container">
                    <div class="logo"><a href="index.html" title="Logo" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/logo.png" alt="logo.png" itemprop="image"></a></div><!-- Logo -->
                    <nav>
                        <div>
                            <ul>
                                <li class = "menu-item-has-children"><a class="brd-rd3" href="{{ route('home') }}" title="" itemprop="url">Home <i class="fas fa-angle-down"></i></a>
									<ul>
                                        <li><a href="{{ route('home') }}" title="" itemprop="url">Home 1</a></li>
                                        <li><a href="{{ route('home') }}" title="" itemprop="url">Home 2</a></li>
                                    </ul>
								</li>
								<li class="@yield('aboutUs')"><a href="{{ route('aboutUs') }}" title="" itemprop="url">About Us</a></li>
								<li><a href="{{ route('campaign') }}" title="" itemprop="url">Campaigns</a></li>
                                <li class="menu-item-has-children"><a href="{{ route('events') }}" title="" itemprop="url">Events <i class="fas fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('events') }}" title="" itemprop="url">Our Events</a></li>
                                        <li><a href="{{ route('eventDetail') }}" title="" itemprop="url">Event Detail</a></li>
                                    </ul>
                                </li>
								<li class="menu-item-has-children"><a href="{{ route('blog') }}" title="" itemprop="url">Our Blog <i class="fas fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('blog') }}" title="" itemprop="url">Blog Grid</a></li>
                                        <li><a href="{{ route('blogDetail') }}" title="" itemprop="url">Blog Detail</a></li>
                                    </ul>
                                </li>
								<li class="menu-item-has-children"><a href="" title="" itemprop="url">Pages <i class="fas fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('service') }}" title="" itemprop="url">Offered Services</a></li>
                                        <li><a href="{{ route('operationalVideo') }}" title="" itemprop="url">Operation Videos</a></li>
										<li><a href="team.html" title="" itemprop="url">Fire Fighters</a></li>
										<li><a href="team-2.html" title="" itemprop="url">Fire Fighters 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html" title="" itemprop="url">Contact</a></li>
                            </ul>
                            <a class="srch-btn theme-bg brd-rd3" href="#" title="" itemprop="url"><i class="fas fa-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div><!-- Logo Menu Sec -->
        </header><!-- Header -->
        <div class="header-search">
            <span class="srch-cls-btn brd-rd5"><i class="fas fa-times"></i></span>
            <form>
                <input type="text" placeholder="Search Keywords Here...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div><!-- Header Search -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <ul class="rspn-scil">
                    <li><a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>                   
                </ul>
                <form class="rspn-srch">
                    <input type="text" placeholder="Enter Your Keyword" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo"><a href="index.html" title="Logo" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/logo2.png" alt="logo2.png" itemprop="image"></a></div>
                <div class="rspn-cnt">
                    <span><i class="fas fa-envelope theme-clr"></i><a href="#" title="" itemprop="url">info@example.com</a></span>
                    <span><i class="flaticon-telephone theme-clr"></i>+(00) 123-345-11</span>
                </div>
                <span class="rspn-mnu-btn brd-rd5"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>
                    <li class="@yield('home')" ><a href="index.html" title="" itemprop="url">Home</a></li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Blog</a>
                        <ul>
                            <li><a href="blog.html" title="" itemprop="url">Our Blog</a></li>
                            <li><a href="blog-detail.html" title="" itemprop="url">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Pages</a>
                        <ul>
                            <li><a href="campaign.html" title="" itemprop="url">Campaign</a></li>
                            <li><a href="service.html" title="" itemprop="url">Services</a></li>
                            <li><a href="team.html" title="" itemprop="url">Team</a></li>
                            <li><a href="operation-videos.html" title="" itemprop="url">Operation Videos</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="{{ route('events') }}" title="" itemprop="url">Events</a>
                        <ul>
                            <li><a href="{{ route('events') }}" title="" itemprop="url">Our Events</a></li>
                            <li><a href="event-detail.html" title="" itemprop="url">Event Detail</a></li>
                        </ul>
                    </li>
                    <li class="@yield('aboutUs')"><a href="{{ route('aboutUs') }}" title="" itemprop="url">About</a></li>
                    <li><a href="contact.html" title="" itemprop="url">Contact</a></li>
                </ul>
            </div>
        </div><!-- Responsive Header -->
        
        @yield('content')

        <!-- Slider Area -->
		

        <footer>
            <div class="gap drk-bg">
                <div class="container">
                    <div class="ftr-dta remove-ext5">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-lg-5">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                        <div class="wdgt-bx">
                                            <h5 itemprop="headline">Quick Links</h5>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>The company</a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Our team</a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Testimonials</a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Terms of Service</a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Privacy Policy</a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-lg-7">
                                        <div class="wdgt-bx">
                                            <h5 itemprop="headline">Latest News</h5>
                                            <div class="ltst-wrp">
                                                <div class="ltst-nws-bx">
                                                    <a  href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-nws-img1-1.jpg" alt="ltst-nws-img1-1.jpg" itemprop="image"></a>
                                                    <div class="ltst-nws-inf">
                                                        <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Fire Prevention & safety Tips</a></h6>
                                                        <span><a href="#" title="" itemprop="url">Sep 9, 2020</a></span>
                                                    </div>
                                                </div>
                                                <div class="ltst-nws-bx">
                                                    <a  href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-nws-img1-2.jpg" alt="ltst-nws-img1-2.jpg" itemprop="image"></a>
                                                    <div class="ltst-nws-inf">
                                                        <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Meet Team of London Fire Brigade</a></h6>
                                                        <span><a href="#" title="" itemprop="url">Sep 9, 2020</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-lg-7">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-lg-7">
                                        <div class="wdgt-bx">
                                            <h5 itemprop="headline">Latest Work</h5>
                                            <div class="wrk-glry-wrp">
                                                <ul class="wrk-gal-mn">
                                                    <li><img  src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-img1.jpg" alt="wrk-gal-img1.jpg" itemprop="image"></li>
                                                    <li><img  src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-img2.jpg" alt="wrk-gal-img2.jpg" itemprop="image"></li>
                                                    <li><img  src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-img3.jpg" alt="wrk-gal-img3.jpg" itemprop="image"></li>
                                                    <li><img  src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-img4.jpg" alt="wrk-gal-img4.jpg" itemprop="image"></li>
                                                    <li><img  src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-img5.jpg" alt="wrk-gal-img5.jpg" itemprop="image"></li>
                                                    <li><img  src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-img6.jpg" alt="wrk-gal-img6.jpg" itemprop="image"></li>
                                                </ul>
                                                <ul class="wrk-gal-nv">
                                                    <li><div class="wrk-gal-nv-itm"><img src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-nv-img1.jpg" alt="wrk-gal-nv-img1.jpg" itemprop="image"></div></li>
                                                    <li><div class="wrk-gal-nv-itm"><img src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-nv-img2.jpg" alt="wrk-gal-nv-img2.jpg" itemprop="image"></div></li>
                                                    <li><div class="wrk-gal-nv-itm"><img src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-nv-img3.jpg" alt="wrk-gal-nv-img3.jpg" itemprop="image"></div></li>
                                                    <li><div class="wrk-gal-nv-itm"><img src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-nv-img4.jpg" alt="wrk-gal-nv-img4.jpg" itemprop="image"></div></li>
                                                    <li><div class="wrk-gal-nv-itm"><img src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-nv-img5.jpg" alt="wrk-gal-nv-img5.jpg" itemprop="image"></div></li>
                                                    <li><div class="wrk-gal-nv-itm"><img src="{{ asset('frontend') }}/assets/images/resources/wrk-gal-nv-img6.jpg" alt="wrk-gal-nv-img6.jpg" itemprop="image"></div></li>
                                                </ul>
                                            </div><!-- Work Gallery Wrap -->
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                        <div class="wdgt-bx">
                                            <h5 itemprop="headline">About Us</h5>
                                            <p itemprop="description">Firebrigade Team all at once, conec tetur adipisicing elit, sed do eiusd tempor incididunt ut labore dolore magna aliqua tempor.</p>
                                            <div class="loc-mp" id="loc-mp"></div>
                                            <span><i class="fas fa-map-marker-alt theme-clr"></i>Find us on Map</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Data -->
                </div>
            </div>
        </footer><!-- Footer -->
        <div class="btm-br drk-bg">
            <div class="container">
                <div class="cpyrgt float-left"><p itemprop="description"><a href="#" title="" itemprop="url">NAAR</a> &copy; 2020 / ALL RIGHTS RESERVED</p></div>
                <div class="scl-sbcrb float-right">
                    <form class="scribe-frm">
                        <input type="email" placeholder="Enter your email here...">
                        <button type="submit"><i class="fas fa-envelope"></i></button>
                    </form>
                    <div class="scl3">
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- Bottom Bar -->
        <div class="sidepanel">
            <span><i class="fa fa-cog fa-spin"></i></span>
            <div class="color-picker">
                <h6 itemprop="headline">Choose Your Color</h6>
                <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
                <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
                <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
                <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
            </div><!-- Color Picker -->
        </div><!-- Side Panel -->
    </main><!-- Main Wrapper -->

    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/downCount.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/counterup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/styleswitcher.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcavdONRtu_0BfV63xiQX1LiJpX1ZJ2N0"></script>
    <script src="{{ asset('frontend') }}/assets/js/google-map-int.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom-scripts.js"></script>
</body>	
</html>