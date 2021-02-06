@extends('frontend.master')

@section('home') active  @endsection

@section('content')
<section>
	<div class="gap no-gap">
		<div class="featured-area-wrap text-center">
			<div class="featured-car owl-carousel">
				<div class="featured-item" style="background-image: url({{ asset('frontend') }}/assets/images/resources/slide1.jpg);">
					<div class="featured-cap">
						<span>Rescue and firefighters are great</span>
						<h2>Saved <span class ="theme-clr"> 5900</span>+ Lives Protecting <span class ="theme-clr">Properties</span></h2>
						<p>Fire Fighters Team Saved 6000+ Lives & ninty two hundred acres of forest from fire.</p>
						<div class="btns-grp">
							<a class="theme-btn brd-rd30" href="#" title="">Read More</a>
							<a class="wht-btn brd-rd30" href="#" title="">Call Now</a>
						</div>
					</div>
				</div>
				<div class="featured-item" style="background-image: url({{ asset('frontend') }}/assets/images/resources/slide2.jpg);">
					<div class="featured-cap">
						<span>Rescue and firefighters are great</span>
						<h2>Saved <span class ="theme-clr"> 5900</span>+ Lives Protecting <span class ="theme-clr">Properties</span></h2>
						<p>Fire Fighters Team Saved 6000+ Lives & ninty two hundred acres of forest from fire.</p>
						<div class="btns-grp">
							<a class="theme-btn brd-rd30" href="#" title="">Read More</a>
							<a class="wht-btn brd-rd30" href="#" title="">Call Now</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Featured Area Wrap -->
	</div>
</section>

@include('frontend.inc.sidebar')

@endsection