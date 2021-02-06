@extends('frontend.master')

@section('aboutUs') active  @endsection

@section('content')
<section>
	<div class="gap black-layer opc8 overlap144">
		<div class="fixed-bg2" style="background-image: url({{ asset('frontend') }}/assets/images/pg-tp-bg.jpg);"></div>
		<div class="container">
			<div class="pg-tp-wrp">
				<h1 itemprop="headline">Blog Details</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" title="" itemprop="url">Home</a></li>
					<li class="breadcrumb-item active">Blog Details</li>
				</ol>
			</div><!-- Page Top Wrap -->
		</div>
	</div>
</section>

<section>
    <div class="gap">
        <div class="container">
            <div class="blog-detail-wrp">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-lg-9">
                        <div class="blog-detail">
                            <div class="event-detail-img brd-rd5">
                                <img src="{{ asset('frontend') }}/assets/images/resources/blog-detail-img.jpg" alt="blog-detail-img.jpg" itemprop="image">
                            </div>
                            <div class="blog-detail-inf">
                                <ul class="pst-mta">
                                    <li><i class="far fa-calendar-alt theme-clr"></i>Aug 14, 2020</li>
                                    <li><i class="fas fa-user theme-clr"></i>Malissa Mac</li>
                                    <li><i class="fas fa-comment theme-clr"></i>02 Comments</li>
                                </ul>
                            </div>
                            <div class="blog-detail-desc">
                                <p itemprop="description">House on fire, near main boulevard quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et lacus risus. Ut accumsan neque purus.</p>
                                <p itemprop="description"><img class="alignleft" src="{{ asset('frontend') }}/assets/images/resources/blog-detail-img2.jpg" alt="blog-detail-img2.jpg" itemprop="image"> Our fire tender trying best, consectetur adipiscing elit. Aenean et lacus risus. Ut accumsan neque purus, in suscipit nulla tincidunt eu. Aliquam non eros felis. Sed vestibulum sapien vehicula risus semper convallis. Mauris ligula dolor, convallis eget egestas et, ornare sit amet leo, Saving lives is neccessary.<br> Sed vestibulum sapien vehicula risus semper convallis. Mauris ligula dolor, convallis eget egestas et, ornare sit amet leo.</p>
                                <blockquote ><p itemprop="description"><i class="flaticon-two-quotes tp-qt"></i>  Consectetur adipiscing elit. Aenean et lacus risus. Ut accumsan neque purus, in suscipit nulla tincidunt eu. Aliquam non eros felis. Sed vestibulum sapien vehicula risus semper convallis.<i class="flaticon-two-quotes bt-qt"></i></p></blockquote>
                                <p itemprop="description">Here are some details from our drills, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p itemprop="description"><img class="aligncenter" src="{{ asset('frontend') }}/assets/images/resources/blog-detail-img3.jpg" alt="blog-detail-img3.jpg" itemprop="image"> Rescue missions in cold, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="pst-shr-tgs">
                                    <div class="scl4 float-left">
                                        <span>Share This on:</span>
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    </div>
                                    <div class="tag-clouds float-right">
                                        <span>Tags:</span>
                                        <a href="#" title="" itemprop="url">Ambulance</a>
                                        <a href="#" title="" itemprop="url">Safety</a>
                                        <a href="#" title="" itemprop="url">Supperation</a>
                                        <a href="#" title="" itemprop="url">Operation Force</a>
                                    </div>
                                </div>
                                <div class="rltd-wrp">
                                    <h4 itemprop="headline">Related Post</h4>
                                    <div class="remove-ext5">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <div class="blg-bx">
                                                    <div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-1.jpg" alt="blg-img1-1.jpg" itemprop="image"></a></div>
                                                    <div class="blg-inf">
                                                        <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">House Fire Road Closed</a></h6>
                                                        <ul class="pst-mta">
                                                            <li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Oct 14, 2020</a></li>
                                                            <li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
                                                        </ul>
                                                        <p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                                        <a href="blog-detail.html" title="" itemprop="url">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <div class="blg-bx">
                                                    <div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-2.jpg" alt="blg-img1-2.jpg" itemprop="image"></a></div>
                                                    <div class="blg-inf">
                                                        <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Shoe Factory Caught Fire</a></h6>
                                                        <ul class="pst-mta">
                                                            <li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Nov 25, 2020</a></li>
                                                            <li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
                                                        </ul>
                                                        <p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                                        <a href="blog-detail.html" title="" itemprop="url">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <div class="blg-bx">
                                                    <div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-3.jpg" alt="blg-img1-3.jpg" itemprop="image"></a></div>
                                                    <div class="blg-inf">
                                                        <h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Emotional Sight On Work</a></h6>
                                                        <ul class="pst-mta">
                                                            <li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Dec 20, 2020</a></li>
                                                            <li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
                                                        </ul>
                                                        <p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                                                        <a href="blog-detail.html" title="" itemprop="url">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Related Wrap -->
                                <div class="cmts-wrp">
                                    <h4 itemprop="headline">Comments</h4>
                                    <ul class="cmt-thrd">
                                        <li>
                                            <div class="cmt-bx">
                                                <img  src="{{ asset('frontend') }}/assets/images/resources/cmt-img1.jpg" alt="cmt-img1.jpg" itemprop="image">
                                                <div class="cmt-inf">
                                                    <h6 itemprop="headline">Mike Stepliton</h6>
                                                    <span class="theme-clr">Aug 14, 2020</span>
                                                    <a class="comment-reply-link" href="#" title="" itemprop="url">Reply</a>
                                                    <p itemprop="description">Similique sunt in culpa qui officia.vero eos et accusamus et iusto odio dignissimos ducimuss qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li>
                                                    <div class="cmt-bx">
                                                        <img  src="{{ asset('frontend') }}/assets/images/resources/cmt-img2.jpg" alt="cmt-img2.jpg" itemprop="image">
                                                        <div class="cmt-inf">
                                                            <h6 itemprop="headline">Maria Stepliton</h6>
                                                            <span class="theme-clr">Aug 24, 2020</span>
                                                            <a class="comment-reply-link" href="#" title="" itemprop="url">Reply</a>
                                                            <p itemprop="description">Similique sunt in culpa qui officia.vero eos et accusamus et iusto odio dignissismos ducimuss qui blanditiis praesentium voluptatum.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="cmt-bx">
                                                <img  src="{{ asset('frontend') }}/assets/images/resources/cmt-img3.jpg" alt="cmt-img3.jpg" itemprop="image">
                                                <div class="cmt-inf">
                                                    <h6 itemprop="headline">Mike Stepliton</h6>
                                                    <span class="theme-clr">Sept 08, 2020</span>
                                                    <a class="comment-reply-link" href="#" title="" itemprop="url">Reply</a>
                                                    <p itemprop="description">Similique sunt in culpa qui officia.vero eos et accusamus et iusto odio dignissimos ducimuss qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul><!-- Comment Thread -->
                                </div><!-- Comments Wrap -->
                                <div class="cnt-frm cmt-frm">
                                    <h4 itemprop="headline">Leave Your Comments</h4>
                                    <form>
                                        <div class="row mrg10">
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <input  type="text" placeholder="Name">
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-lg-4">
                                                <input  type="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-lg-4">
                                                <input  type="text" placeholder="Subject">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea  placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button type="submit" class="theme-btn theme-bg">Leave Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                <h5 itemprop="headline">Latest Work</h5>
                                <div class="wrk-gal">
                                    <div class="row mrg4">
                                        <div class="col-md-4 col-sm-4 col-lg-4"><a  href="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img1.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img1.jpg" alt="ltst-wrk-gal-img1.jpg" itemprop="image"></a></div>
                                        <div class="col-md-4 col-sm-4 col-lg-4"><a  href="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img2.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img2.jpg" alt="ltst-wrk-gal-img2.jpg" itemprop="image"></a></div>
                                        <div class="col-md-4 col-sm-4 col-lg-4"><a  href="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img3.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img3.jpg" alt="ltst-wrk-gal-img3.jpg" itemprop="image"></a></div>
                                        <div class="col-md-4 col-sm-4 col-lg-4"><a  href="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img4.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img4.jpg" alt="ltst-wrk-gal-img4.jpg" itemprop="image"></a></div>
                                        <div class="col-md-4 col-sm-4 col-lg-4"><a  href="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img5.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img5.jpg" alt="ltst-wrk-gal-img5.jpg" itemprop="image"></a></div>
                                        <div class="col-md-4 col-sm-4 col-lg-4"><a  href="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img6.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/ltst-wrk-gal-img6.jpg" alt="ltst-wrk-gal-img6.jpg" itemprop="image"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wdgt-bx">
                                <h5 itemprop="headline">Newsletter</h5>
                                <form class="nws-ltr">
                                    <input class="brd-rd5" type="emial" placeholder="Enter email">
                                    <button class="theme-btn brd-rd5" type="submit">Subscribe Now</button>
                                </form>
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
            </div><!-- Blog Detail Wrap -->
        </div>
    </div>
</section>


@endsection