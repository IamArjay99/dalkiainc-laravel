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
					<h1 class="mb-10 text-white">ABOUT US</h1>
					<div class="title-divider"></div>
				</div>
			</div>
        </div>
	</section>

    <section class="about-area section-gap" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-aos="fade-down" id="our-history">
					<h3 class="mt-20 subtitle">OUR HISTORY / TIMELINE</h3>

					@if (!empty($company_history))
						<div class="container timeline mt-30 mb-30">
							<div class="timeline__wrap">
								<div class="timeline__items">

									@foreach ( $company_history as $history )
										<div class="timeline__item">
											<div class="timeline__content">
												<h3 class="text-center mb-10 highlight">{{ $history->year }}</h3>
												<p>
													{{ $history->description }}
												</p>
											</div>
										</div>	
									@endforeach

								</div>
							</div>
						</div>
					@else
						<h5>No History</h5>
					@endif
				</div>
				<div class="col-md-12" data-aos="fade-right" id="our-mission">
					<h3 class="mt-20 pb-10 subtitle">OUR MISSION</h3>
					<blockquote class="generic-blockquote">
						{{ $company_information->mission }}
					</blockquote>
				</div>
				<div class="col-md-12" data-aos="fade-left">
					<h3 class="mt-20 pb-10 subtitle">OUR VISION</h3>
					<blockquote class="generic-blockquote">
						{{ $company_information->vision }}
					</blockquote>
				</div>
				<div class="col-md-12" data-aos="fade-up">
					<h3 class="mt-20 pb-10 subtitle">OUR QUALITY POLICY</h3>
					<p class="text-justify">
						{!! nl2br(e($company_information->quality_policy)) !!}

						{{-- <b>​Dalkia Incorporated</b> shall pursue sustainable growth by continuously developing products and providing reliable services of quality, safe, top of the line, and superior range of curtain walls, windows & metal cladding.​
						<br><br>
						Our endeavors shall focus on:​
						<ol class="ordered-list">
							<li>Developing and sustaining constructive relationship with our clients thru effective customer care all throughout the engagement</li>
							<li>Continuously enhancing the competency of our employees through trainings to meet current and future industry demands</li>
							<li>Providing quality products by adapting a systematic procurement procedure and partnering with reliable suppliers of quality materials</li>
							<li>Maintaining our status as a leader in our field of expertise by using “Top of the Line” equipments and software in our design, engineering and fabrication and by acquiring certification and recognition from international organizations on operational excellence and green building initiatives</li>
							<li>Ensuring the improvement of our quality management system by communication our quality policy to all levels of our organization by measuring our products and services against industry standards, and</li>
							<li>Meeting customer, regulatory, statutory and the ISO 9001:2015 standard requirements</li>
						</ol> --}}
					</p>
				</div>
				<div class="col-md-12" id="scope-and-services">
					<div class="container cat-area">
						<h3 class="mt-20 pb-10 subtitle" data-aos="fade-down-right">SCOPE AND SERVICES</h3>
						
						@if (!empty($company_services))
							<div class="row mt-20">
								
								@foreach ( $company_services as $service )
									<div class="col-lg-4 mt-10">
										<div class="single-cat d-flex flex-column service-item service-border" data-aos="flip-left">
											<img src="{{ asset('assets/website/img/services/'.$service->image) }}" alt="{{ $service->title }}" class="service-img">
											<h4 class="mb-20 service-title">{{ $service->title }}</h4>
											<p class="text-justify">
												{{ $service->description }}
											</p>
										</div>
									</div>
								@endforeach

								</div>
							@else
								<h5>No Services</h5>
							@endif

					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection