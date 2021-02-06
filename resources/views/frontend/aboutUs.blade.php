@extends('frontend.master')

@section('aboutUs') active  @endsection

@section('content')
<section>
	<div class="gap black-layer opc8 overlap144">
		<div class="fixed-bg2" style="background-image: url({{ asset('frontend') }}/assets/images/pg-tp-bg.jpg);"></div>
		<div class="container">
			<div class="pg-tp-wrp">
				<h1 itemprop="headline">About Us</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" title="" itemprop="url">Home</a></li>
					<li class="breadcrumb-item active">About Us</li>
				</ol>
			</div><!-- Page Top Wrap -->
		</div>
	</div>
</section>

@include('frontend.inc.sidebar')

@endsection