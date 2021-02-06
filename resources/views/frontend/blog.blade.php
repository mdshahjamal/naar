@extends('frontend.master')

@section('blog') active  @endsection

@section('content')
<section>
	<div class="gap black-layer opc8 overlap144">
		<div class="fixed-bg2" style="background-image: url({{ asset('frontend') }}/assets/images/pg-tp-bg.jpg);"></div>
		<div class="container">
			<div class="pg-tp-wrp">
				<h1 itemprop="headline">Our Blog</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" title="" itemprop="url">Home</a></li>
					<li class="breadcrumb-item active">Our Blog</li>
				</ol>
			</div><!-- Page Top Wrap -->
		</div>
	</div>
</section>

<section>
	<div class="gap">
		<div class="container">
			<div class="blg-sec remove-ext5">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-1.jpg" alt="blg-img1-1.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Safety Precautions Tips</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Oct 06, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Noda Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-2.jpg" alt="blg-img1-2.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Fire Prevention Guidelines</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Oct 14, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Niel Steel</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-3.jpg" alt="blg-img1-3.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Extinguisher Usage Tuts</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Oct 17, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Alex Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-4.jpg" alt="blg-img1-4.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Emergency & First Aid</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Nov 14, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-5.jpg" alt="blg-img1-5.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">House On Wildfire</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Nov 28, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-6.jpg" alt="blg-img1-6.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Fire Suppression Tips</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Dec 10, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-7.jpg" alt="blg-img1-7.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Emergency Toll Helpline</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Dec 14, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-lg-3">
						<div class="blg-bx">
							<div class="blg-thmb"><a href="blog-detail.html" title="" itemprop="url"><img src="{{ asset('frontend') }}/assets/images/resources/blg-img1-8.jpg" alt="blg-img1-8.jpg" itemprop="image"></a></div>
							<div class="blg-inf">
								<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Quick Response Unit</a></h6>
								<ul class="pst-mta">
									<li><i class="far fa-calendar-alt"></i><a href="#" title="" itemprop="url">Dec 25, 2020</a></li>
									<li><i class="fas fa-user"></i><a href="#" title="" itemprop="url">Nodi Blake</a></li>
								</ul>
								<p itemprop="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
								<a href="blog-detail.html" title="" itemprop="url">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Blog Sec -->
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