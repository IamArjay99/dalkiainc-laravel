@extends('website.layouts.app')

@section('content')

<main>
    <section class="banner-area about-carousel relative" id="banner">
		<div class="owl-carousel">
			<div class="item">
				<img src="{{ asset('assets/website/img/carousel/c-1.jpg') }}" alt="Image 1">
			</div>
			<div class="item">
				<img src="{{ asset('assets/website/img/carousel/c-2.jpg') }}" alt="Image 2">
			</div>
		</div>
        <div class="container page-title">
			<div class="row justify-content-center" data-aos="fade-up">
				<div class="col-md-12 pb-30 header-text text-center">
					<h1 class="mb-10 text-white">CAREERS</h1>
					<div class="title-divider"></div>
				</div>
			</div>
        </div>
	</section>

    <section class="career-opportunity-area section-gap" id="career-opportunity">
		<div class="container">

			@if (!empty($careers))
				<div class="row">
					@foreach($careers as $career)
						<div class="col-lg-4">
							<div class="card card-career h-100">
								<div class="card-body d-flex flex-column justify-content-between h-100">
									<h4 class="card-title uppercase text-center mb-20">{{ $career->job_title }}</h4>
									<p class="text-muted">{{ $career->job_description }}</p>
									<div class="d-flex align-items-center justify-content-end mt-10">
										<a href="{{ route('website.careers.details', ['id' => $career->id]) }}" class="primary-btn">
											<i class="fa fa-arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				
			@else
				<h3>No Jobs</h3>
			@endif

		</div>
	</section>
</main>

@endsection