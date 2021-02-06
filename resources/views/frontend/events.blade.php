@extends('frontend.master')

@section('events') active  @endsection

@section('content')
<section>
	<div class="gap black-layer opc8 overlap144">
		<div class="fixed-bg2" style="background-image: url({{ asset('frontend') }}/assets/images/pg-tp-bg.jpg);"></div>
		<div class="container">
			<div class="pg-tp-wrp">
				<h1 itemprop="headline">Events</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" title="" itemprop="url">Home</a></li>
					<li class="breadcrumb-item active">Events</li>
				</ol>
			</div><!-- Page Top Wrap -->
		</div>
	</div>
</section>


<section>
            <div class="gap">
                <div class="container">
                    <div class="evnt-sec remove-ext5">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="evnt-bx2">
                                    <div class="evnt-thmb">
                                        <a href="event-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/event-img1.jpg" alt="event-img1.jpg" itemprop="image"></a>
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
                                    <div class="evnt-inf">
                                        <h5 itemprop="headline"><a href="event-detail.html" title="" itemprop="url">Emergency Medical Tips</a></h5>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit, sed do eiusd tempor.</p>
                                        <div class="pst-mta-wrp">
                                            <span class="evnt-dat"><a  href="#" title="" itemprop="url">18<i>Oct</i></a></span>
                                            <ul class="pst-mta">
                                                <li><i class="fas fa-map-marker-alt theme-clr"></i> 2425 South pine Street USA</li>
                                                <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 10:00 pm</li>
                                            </ul>
                                        </div>
                                        <a class="theme-btn" href="event-detail.html" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="evnt-bx2">
                                    <div class="evnt-thmb">
                                        <a href="event-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/event-img2.jpg" alt="event-img2.jpg" itemprop="image"></a>
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
                                    <div class="evnt-inf">
                                        <h5 itemprop="headline"><a href="event-detail.html" title="" itemprop="url">First Aid  & CPR Guide</a></h5>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit, sed do eiusd tempor.</p>
                                        <div class="pst-mta-wrp">
                                            <span class="evnt-dat"><a  href="#" title="" itemprop="url">15<i>Oct</i></a></span>
                                            <ul class="pst-mta">
                                                <li><i class="fas fa-map-marker-alt theme-clr"></i> 2425 South pine Street USA</li>
                                                <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 10:00 pm</li>
                                            </ul>
                                        </div>
                                        <a class="theme-btn" href="event-detail.html" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="evnt-bx2">
                                    <div class="evnt-thmb">
                                        <a href="event-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/event-img3.jpg" alt="event-img3.jpg" itemprop="image"></a>
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
                                    <div class="evnt-inf">
                                        <h5 itemprop="headline"><a href="event-detail.html" title="" itemprop="url">Support After Accident</a></h5>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit, sed do eiusd tempor.</p>
                                        <div class="pst-mta-wrp">
                                            <span class="evnt-dat"><a  href="#" title="" itemprop="url">10<i>Nov</i></a></span>
                                            <ul class="pst-mta">
                                                <li><i class="fas fa-map-marker-alt theme-clr"></i> 2425 South pine Street USA</li>
                                                <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 10:00 pm</li>
                                            </ul>
                                        </div>
                                        <a class="theme-btn" href="event-detail.html" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="evnt-bx2">
                                    <div class="evnt-thmb">
                                        <a href="event-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/event-img4.jpg" alt="event-img4.jpg" itemprop="image"></a>
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
                                    <div class="evnt-inf">
                                        <h5 itemprop="headline"><a href="event-detail.html" title="" itemprop="url">Fire Prevention Seminar</a></h5>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit, sed do eiusd tempor.</p>
                                        <div class="pst-mta-wrp">
                                            <span class="evnt-dat"><a  href="#" title="" itemprop="url">20<i>Sep</i></a></span>
                                            <ul class="pst-mta">
                                                <li><i class="fas fa-map-marker-alt theme-clr"></i> 2425 South pine Street USA</li>
                                                <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 10:00 pm</li>
                                            </ul>
                                        </div>
                                        <a class="theme-btn" href="event-detail.html" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="evnt-bx2">
                                    <div class="evnt-thmb">
                                        <a href="event-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/event-img5.jpg" alt="event-img5.jpg" itemprop="image"></a>
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
                                    <div class="evnt-inf">
                                        <h5 itemprop="headline"><a href="event-detail.html" title="" itemprop="url">Annual Fire Fighters Gala</a></h5>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit, sed do eiusd tempor.</p>
                                        <div class="pst-mta-wrp">
                                            <span class="evnt-dat"><a  href="#" title="" itemprop="url">25<i>Dec</i></a></span>
                                            <ul class="pst-mta">
                                                <li><i class="fas fa-map-marker-alt theme-clr"></i> 2425 South pine Street USA</li>
                                                <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 10:00 pm</li>
                                            </ul>
                                        </div>
                                        <a class="theme-btn" href="event-detail.html" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="evnt-bx2">
                                    <div class="evnt-thmb">
                                        <a href="event-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/event-img6.jpg" alt="event-img6.jpg" itemprop="image"></a>
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
                                    <div class="evnt-inf">
                                        <h5 itemprop="headline"><a href="event-detail.html" title="" itemprop="url">Fire Extinguishers Usage</a></h5>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit, sed do eiusd tempor.</p>
                                        <div class="pst-mta-wrp">
                                            <span class="evnt-dat"><a  href="#" title="" itemprop="url">22<i>Feb</i></a></span>
                                            <ul class="pst-mta">
                                                <li><i class="fas fa-map-marker-alt theme-clr"></i> 2425 South pine Street USA</li>
                                                <li><i class="far fa-clock theme-clr"></i> 04:00 pm - 10:00 pm</li>
                                            </ul>
                                        </div>
                                        <a class="theme-btn" href="event-detail.html" title="" itemprop="url">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Events Sec -->
                    <div class="pgn-wrp text-center">
                        <ul class="pagination">
                            <li class="page-item prev"><a class="page-link" href="#" itemprop="url"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#" itemprop="url">1</a></li>
                            <li class="page-item active"><span>2</span></li>
                            <li class="page-item"><a class="page-link" href="#" itemprop="url">3</a></li>
							<li class="pg-lst">....</li>
                            <li class="page-item"><a class="page-link" href="#" itemprop="url">5</a></li>
                            <li class="page-item next"><a class="page-link" href="#" itemprop="url"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div><!-- Pagination Wrap -->
                </div>
            </div>
        </section>

@endsection