@extends('frontend.master')

@section('eventDetail') active  @endsection

@section('content')
<section>
	<div class="gap black-layer opc8 overlap144">
		<div class="fixed-bg2" style="background-image: url({{ asset('frontend') }}/assets/images/pg-tp-bg.jpg);"></div>
		<div class="container">
			<div class="pg-tp-wrp">
				<h1 itemprop="headline">Event Details</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" title="" itemprop="url">Home</a></li>
					<li class="breadcrumb-item active">Event Details</li>
				</ol>
			</div><!-- Page Top Wrap -->
		</div>
	</div>
</section>

<section>
            <div class="gap">
                <div class="container">
                    <div class="event-detail-wrp">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-lg-9">
                                <div class="event-detail">
                                    <div class="event-detail-img brd-rd5">
                                        <img src="{{ asset('frontend') }}/assets/images/resources/event-detail-img.jpg" alt="event-detail-img.jpg" itemprop="image">
                                        <ul class="countdown text-center">
                                            <li>
                                                <span class="days">85</span>
                                                <p class="days_ref">days</p>
                                            </li>
                                            <li>
                                                <span class="hours">12</span>
                                                <p class="hours_ref">hours</p>
                                            </li>
                                            <li>
                                                <span class="minutes">19</span>
                                                <p class="minutes_ref">minutes</p>
                                            </li>
                                            <li>
                                                <span class="seconds">54</span>
                                                <p class="seconds_ref">seconds</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="event-detail-inf-inr">
                                        <ul class="pst-mta">
                                            <li><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 98GR</li>
                                            <li><i class="far fa-clock theme-clr"></i>04:00 pm - 08:00 pm</li>
                                            <li><i class="far fa-calendar-alt theme-clr"></i>26 Nov, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="event-detail-desc">
                                        <p itemprop="description">Annual firefighters gala is set to start, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <blockquote ><p itemprop="description"><i class="flaticon-two-quotes tp-qt"></i> Saving lives and properties, consectetur adipiscing elit. Aenean et lacus risus. Ut accumsan neque purus, in suscipit nulla tincidunt eu. Aliquam non eros felis. Sed vestibulum sapien vehicula risus semper convallis. Mauris ligula dolor, convallis eget egestas et is neccessary.<i class="flaticon-two-quotes bt-qt"></i></p></blockquote>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="evntspkrs-wrp">
                                        <h3 itemprop="headline">Event Organizers</h3>
                                        <div class="tem-sec remove-ext5 text-center">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="tm-bx">
                                                        <div class="tm-thmb"><img src="{{ asset('frontend') }}/assets/images/resources/event-org-1.jpg" alt="tm-img1.jpg" itemprop="image"></div>
                                                        <div class="tm-inf">
                                                            <h5 itemprop="headline"><a href="#" title="" itemprop="url">Niel Joe</a></h5>
                                                            <span class="theme-clr">Ngo Founder</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="tm-bx">
                                                        <div class="tm-thmb"><img src="{{ asset('frontend') }}/assets/images/resources/event-org-2.jpg" alt="tm-img2.jpg" itemprop="image"></div>
                                                        <div class="tm-inf">
                                                            <h5 itemprop="headline"><a href="#" title="" itemprop="url">Alyese De</a></h5>
                                                            <span class="theme-clr">Secretary Dept</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <div class="tm-bx">
                                                        <div class="tm-thmb"><img src="{{ asset('frontend') }}/assets/images/resources/event-org-3.jpg" alt="tm-img3.jpg" itemprop="image"></div>
                                                        <div class="tm-inf">
                                                            <h5 itemprop="headline"><a href="#" title="" itemprop="url">Malissa Jo</a></h5>
                                                            <span class="theme-clr">Philanthropist</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Event Speackers -->
                                    <div class="cnt-frm cmt-frm">
                                        <h4 itemprop="headline">Book Your Event</h4>
                                        <form>
                                            <div class="row mrg10">
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <input  type="text" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <input  type="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <input  type="text" placeholder="People Joining">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea  placeholder="Your Message"></textarea>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <button type="submit" class="theme-btn theme-bg">Book Event</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="sidebar-wrp remove-ext7">
                                    <div class="wdgt-bx">
                                        <h5 itemprop="headline">Search</h5>
                                        <form class="srch-frm brd-rd5">
                                            <input type="text" placeholder="Search">
                                            <button type="submit" class="theme-clr"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="wdgt-bx">
                                        <h5 itemprop="headline">Text Widget</h5>
                                        <p itemprop="description">Quisque nec leo auctor, tincidunt ligula at, condimentum tellus. Duis ultricies orci sit amet pulvinar elementum. Praesent tempor consectetur interdum. Fusce facilisis felis ac vestibulum feugiat, help firefighters.</p>
                                    </div>
                                    <div class="wdgt-bx">
                                        <h5 itemprop="headline">Latest Posts</h5>
                                        <div class="ltst-wrp">
                                            <div class="ltst-nws-bx">
                                                <a  href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-nws-img2-1.jpg" alt="ltst-nws-img2-1.jpg" itemprop="image"></a>
                                                <div class="ltst-nws-inf">
                                                    <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Saving Others with own lives non proident</a></h6>
                                                    <span><a href="#" title="" itemprop="url"><i class="far fa-calendar-alt theme-clr"></i>Dec 05, 2020</a></span>
                                                </div>
                                            </div>
                                            <div class="ltst-nws-bx">
                                                <a  href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-nws-img2-2.jpg" alt="ltst-nws-img2-2.jpg" itemprop="image"></a>
                                                <div class="ltst-nws-inf">
                                                    <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">London Firebrigade Anuual Gallery</a></h6>
                                                    <span><a href="#" title="" itemprop="url"><i class="far fa-calendar-alt theme-clr"></i>Nov 09, 2020</a></span>
                                                </div>
                                            </div>
                                            <div class="ltst-nws-bx">
                                                <a  href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-nws-img2-3.jpg" alt="ltst-nws-img2-3.jpg" itemprop="image"></a>
                                                <div class="ltst-nws-inf">
                                                    <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Florida Fires Massive Desturctions</a></h6>
                                                    <span><a href="#" title="" itemprop="url"><i class="far fa-calendar-alt theme-clr"></i>Sep 29, 2020</a></span>
                                                </div>
                                            </div>
                                            <div class="ltst-nws-bx">
                                                <a  href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-nws-img2-4.jpg" alt="ltst-nws-img2-4.jpg" itemprop="image"></a>
                                                <div class="ltst-nws-inf">
                                                    <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Carrier Train On Fire In Nelsak</a></h6>
                                                    <span><a href="#" title="" itemprop="url"><i class="far fa-calendar-alt theme-clr"></i>August 10, 2020</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wdgt-bx">
                                        <h5 itemprop="headline">Categories</h5>
                                        <ul class="cat-lst">
                                            <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>House Accommodation</a>(10)</li>
                                            <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Health Events</a>(06)</li>
                                            <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Donation Event</a>(03)</li>
                                            <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Education</a>(07)</li>
                                            <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Food</a>(12)</li>
                                            <li><a href="#" title="" itemprop="url"><i class="fas fa-angle-double-right"></i>Health Care</a>(02)</li>
                                        </ul>
                                    </div>
                                    <div class="wdgt-bx">
                                        <h5 itemprop="headline">Latest Event</h5>
                                        <div class="ltst-evnt-wrp ltst-evnt-car owl-carousel">
                                            <div class="ltst-evnt brd-rd5">
                                                <a href="#" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-evnt-img1.jpg" alt="ltst-evnt-img1.jpg" itemprop="image"></a>
                                                <ul class="countdown text-center">
                                                    <li>
                                                        <span class="days">85</span>
                                                        <p class="days_ref">days</p>
                                                    </li>
                                                    <li>
                                                        <span class="hours">12</span>
                                                        <p class="hours_ref">hours</p>
                                                    </li>
                                                    <li>
                                                        <span class="minutes">19</span>
                                                        <p class="minutes_ref">minutes</p>
                                                    </li>
                                                    <li>
                                                        <span class="seconds">54</span>
                                                        <p class="seconds_ref">seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltst-evnt brd-rd5">
                                                <a href="#" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-evnt-img2.jpg" alt="ltst-evnt-img2.jpg" itemprop="image"></a>
                                                <ul class="countdown text-center">
                                                    <li>
                                                        <span class="days">85</span>
                                                        <p class="days_ref">days</p>
                                                    </li>
                                                    <li>
                                                        <span class="hours">12</span>
                                                        <p class="hours_ref">hours</p>
                                                    </li>
                                                    <li>
                                                        <span class="minutes">19</span>
                                                        <p class="minutes_ref">minutes</p>
                                                    </li>
                                                    <li>
                                                        <span class="seconds">54</span>
                                                        <p class="seconds_ref">seconds</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wdgt-bx">
                                        <h5 itemprop="headline">Follow us</h5>
                                        <div class="scl4">
                                            <a class="twitter" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a class="facebook" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a class="linkedin" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            <a class="google" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                        </div>
                                    </div>
                                </div><!-- Sidebar Wrap -->
                            </div>
                        </div>
                    </div><!-- Event Detail Wrap -->
                </div>
            </div>
        </section>



@endsection