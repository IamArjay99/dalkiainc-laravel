@extends('website.layouts.app')

@section('content')

<main>
    <section class="banner-area about-carousel relative" id="banner">
		<div class="owl-carousel">
			<div class="item">
				<img src="{{ asset('assets/img/carousel/c-1.jpg') }}" alt="Image 1">
			</div>
			<div class="item">
				<img src="{{ asset('assets/img/carousel/c-2.jpg') }}" alt="Image 2">
			</div>
		</div>
        <div class="container page-title">
			<div class="row justify-content-center" data-aos="fade-up">
				<div class="col-md-12 pb-30 header-text text-center">
					<h1 class="mb-10 text-white">CERTIFICATIONS AND AWARDS</h1>
					<div class="title-divider"></div>
				</div>
			</div>
        </div>
	</section>

    <section class="award-area section-gap" id="award" style="padding-bottom: 10px;">
		<div class="container">
			@if (!empty($certifications_and_awards))
				
				@foreach ( $certifications_and_awards as $key => $award )
					@if ($key % 2 == 0)
						<div class="section-award" data-aos="fade-up">
							<div class="row award-left">
								<div class="col-md-3">
									<img src="{{ asset('assets/img/awards/'.$award->image) }}" alt="{{ $award->title }}" class="img-fluid">
								</div>
								<div class="col-md-9 mt-sm-20 award-description">
									<h3 class="mb-20 subtitle text-uppercase">{{ $award->title }}</h3>
									<p>
										{{ $award->description }}
									</p>
								</div>
							</div>
						</div>
					@else
						<div class="section-award" data-aos="fade-up">
							<div class="row award-right">
								<div class="col-md-9 mt-sm-20 award-description">
									<h3 class="mb-20 subtitle text-uppercase">{{ $award->title }}</h3>
									<p>
										{{ $award->description }}
									</p>
								</div>
								<div class="col-md-3">
									<img src="{{ asset('assets/img/awards/'.$award->image) }}" alt="{{ $award->title }}" class="img-fluid">
								</div>
							</div>
						</div>
					@endif
				@endforeach

			@else
				<h5>No Certifications and Awards</h5>
			@endif
		</div>
	</section>
</main>

@endsection