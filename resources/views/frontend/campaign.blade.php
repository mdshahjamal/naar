@extends('frontend.master')

@section('campaign') active  @endsection

@section('content')
<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url({{ asset('frontend') }}/assets/images/pg-tp-bg.jpg);"></div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 itemprop="headline">Our Campaigns</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Our Campaigns</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>



<section>
    <div class="gap">
        <div class="container">
            <div class="camp-wrp remove-ext5">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img1.jpg" alt="camp-img1.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Rehabilitation Center</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w50 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$456.0</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img2.jpg" alt="camp-img2.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Hospital Medical Facility</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w50 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$900.0</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img3.jpg" alt="camp-img3.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Support after an Incident</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w50 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$1298</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img4.jpg" alt="camp-img4.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Rehabilitation Center</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w40 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$1565</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img5.jpg" alt="camp-img5.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Hospital Medical Facility</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w60 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$2300</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img6.jpg" alt="camp-img6.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Support after an Incident</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w65 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$456.0</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img7.jpg" alt="camp-img7.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Rehabilitation Center</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w90 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$879.0</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img8.jpg" alt="camp-img8.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Hospital Medical Facility</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w30 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$1678</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <a href="campaign-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/camp-img9.jpg" alt="camp-img9.jpg" itemprop="image"></a>
                                <div class="camp-inf">
                                    <h5 itemprop="headline"><a href="campaign-detail.html" title="" itemprop="url">Support after an Incident</a></h5>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Glasgow, DO4 89GR 8901 Marmora Road</span>
                                </div>
                            </div>
                            <div class="prg-wrp">
                                <div class="progress">
                                    <div class="progress-bar w80 theme-bg"></div>
                                </div>
                                <span class="rs-gl float-left">Goal: <i class="theme-clr">$4500</i></span>
                                <span class="rs-gl float-right">Raised: <i class="theme-clr">$2200</i></span>
                                <a class="theme-btn brd-rd5" href="campaign-detail.html" title="" itemprop="url">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Campaign Wrap -->
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