@extends('website.layouts.app')

@section('content')

<main>
    <section class="banner-area relative" id="banner">
		<div class="owl-carousel">
			<div class="item">
				<img src="{{ asset('assets/website/img/carousel/c-1.jpg') }}" alt="Image 1">
			</div>
			<div class="item">
				<img src="{{ asset('assets/website/img/carousel/c-2.jpg') }}" alt="Image 2">
			</div>
		</div>
	</section>

	<section class="home-area section-gap" id="home" data-aos="fade-down">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 class="mb-30 subtitle">OUR COMPANY</h3>
					<div class="text-justify display-from-texteditor">
						<?= nl2br($company_information->company_overview) ?>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-center justify-content-center">
					<img src="{{ asset('assets/website/img/about/our-company.png') }}" alt="Our Company" class="img-fluid">
				</div>
			</div>
		</div>
	</section>

	<section class="about-area section-gap" id="about">
		<div class="container">
			<div class="row justify-content-center" data-aos="fade-up">
				<div class="col-md-8 pb-30 header-text text-center">
					<h2 class="mb-10">ABOUT US</h2>
					<div class="title-divider"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" data-aos="fade-down">
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
				<div class="col-md-12" data-aos="fade-up">
					<h3 class="mt-20 pb-10 subtitle">OUR MISSION</h3>
					<blockquote class="generic-blockquote">
						{{ $company_information->mission }}
					</blockquote>
				</div>
				<div class="col-md-12" data-aos="fade-up">
					<h3 class="mt-20 pb-10 subtitle">OUR VISION</h3>
					<blockquote class="generic-blockquote">
						{{ $company_information->vision }}
					</blockquote>
				</div>
				<div class="col-md-12" data-aos="fade-up">
					<h3 class="mt-20 pb-10 subtitle">OUR QUALITY POLICY</h3>
					<div class="text-justify display-from-texteditor">
						<?= nl2br($company_information->quality_policy) ?>
					</p>
				</div>
				<div class="col-md-12">
					<div class="container cat-area">
						<h3 class="mt-20 pb-10 subtitle" data-aos="fade-down-right">SCOPE AND SERVICES</h3>
						
						@if (!empty($company_services))
							<div class="row gap-10">
								
								@foreach ( $company_services as $service )
									<div class="col-lg-4 mt-10">
										<div class="single-cat d-flex flex-column service-item service-border" data-aos="fade-up">
											<img src="{{ asset('uploads/img/scope-and-services/'.$service->image) }}" alt="{{ $service->title }}" 
												class="service-img" loading="lazy" style="height: 180px !important; width: auto;">
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

	<section class="project-area section-gap" id="project">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text text-center" data-aos="fade-up">
					<h2 class="mb-10">PROJECTS</h2>
					<div class="title-divider"></div>
				</div>
			</div>

			@if (!empty($projects['showcase_projects']))

				<div class="row" data-aos="fade-up">

					@foreach ( $projects['showcase_projects'] as $project )
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="{{ asset('uploads/img/projects/'.$project->image) }}" alt="{{ $project->name }}"
										class="img-fluid"
										loading="lazy"
										style="height: 230px !important;">
								</div>
								<h4 class="text-uppercase">{{ $project->name }}</h4>
								<div class="project-details">
									<div>
										<b>No. of floors: </b>
										<span>
											{{ $project->floor }}
										</span>
									</div>
									<div>
										<b>Scope of Work: </b>
										<span>
											{{ $project->scope_of_work }}
										</span>
									</div>
								</div>
							</div>
						</div>
					@endforeach

					<div class="col-lg-12 text-center">
						<a href="{{ route('website.projects') }}" class="genric-btn danger-border circle mt-30">Explore More Projects</a>
					</div>
						
				</div>
			@else
				<h5>No Projects</h5>
			@endif

		</div>
	</section>

	<section class="award-area section-gap" id="award" style="padding-bottom: 10px;">
		<div class="container">
			<div class="row justify-content-center" data-aos="fade-right">
				<div class="col-md-8 pb-30 header-text text-center">
					<h2 class="mb-10">CERTIFICATIONS AND AWARDS</h2>
					<div class="title-divider"></div>
				</div>
			</div>

			@if (!empty($certifications_and_awards))
				
				@foreach ( $certifications_and_awards as $key => $award )
					@if ($key % 2 == 0)
						<div class="section-award" data-aos="fade-up">
							<div class="row award-left">
								<div class="col-md-3">
									<img src="{{ asset('assets/website/img/awards/'.$award->image) }}" alt="{{ $award->title }}" class="img-fluid">
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
									<img src="{{ asset('assets/website/img/awards/'.$award->image) }}" alt="{{ $award->title }}" class="img-fluid">
								</div>
							</div>
						</div>
					@endif
				@endforeach

			@else
				<h5>No Certifications and Awards</h5>
			@endif
	</section>

	<section class="career-opportunity-area career-area section-gap relative d-sm-none">
		<div class="overlay overlay-bg"></div>
	</section>
	<section class="career-opportunity-area section-gap" id="career-opportunity2">
		<div class="container">
			<div class="row justify-content-center align-items-center" data-aos="fade-down">
				<div class="col-lg-8 col-md-12 home-about-left">
					<h3 class="mb-20 subtitle">
						Grow with us!
					</h3>
					<p class="pb-20">
						We at Dalkia Inc. are searching for people that are excited to grow and use their abilities to influence the future. Apply by emailing your resume to info@dalkiainc.com if you are already qualified, experienced, and competent and would want to be considered for any of the positions listed below. We would love to speak with someone who is driven to achieve.
					</p>
					<a class="primary-btn mb-20" href="{{ route('website.careers') }}">Apply Now</a>
				</div>
				<div class="col-lg-4 col-md-12">
					<img src="{{ asset('assets/website/img/careers/apply-now.jpg') }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</section>

	<section class="contact-area section-gap">
		<div class="container">
			<div class="row justify-content-center" data-aos="fade-up">
				<div class="col-md-8 pb-30 header-text text-center">
					<h2 class="mb-10">CONTACTS</h2>
					<div class="title-divider"></div>
				</div>
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30892.6687473482!2d121.101266!3d14.565789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7c79cee6faf%3A0xbb570ff13e16c98b!2sDalkia%20Incorporated!5e0!3m2!1sen!2sus!4v1713778962162!5m2!1sen!2sus" 
				width="100%" height="450" style="border:0;"
				allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
				data-aos="flip-left"></iframe>

			<div class="row mt-30" data-aos="fade-up">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<h3 class="subtitle mt-20 mb-20">WRITE US A MESSAGE</h3>
					<form action="{{ route('website.contacts.inquire') }}" method="POST" id="formInquire"
						validated="false">
						@csrf

						@if ($errors->any())
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<ul class="mb-0 ml-2" style="list-style: inherit;">
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
								<button type="button" data-dismiss="alert" aria-label="Close"
									style="position: absolute;
										top: 0;
										right: 0;
										margin: 4px;
										border: 1px dotted gray;
										border-radius: 5px;
										cursor: pointer;">x</button>
							</div>
						@endif

						<div class="input-group-icon mt-10">
							<div class="icon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" name="full_name" placeholder="Full Name" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Full Name'" required="" class="single-input"
								value="{{ old('full_name') }}">
						</div>
						<div class="input-group-icon mt-10">
							<div class="icon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<input type="email" name="email_address" placeholder="Email Address" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Email Address'" required="" class="single-input"
								value="{{ old('email_address') }}">
						</div>
						<div class="input-group-icon mt-10">
							<div class="icon">
								<i class="fa fa-thumb-tack" aria-hidden="true"></i>
							</div>
							<input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Subject'" required="" class="single-input"
								value="{{ old('subject') }}">
						</div>
						<div class="mt-10">
							<textarea class="single-textarea" name="message" placeholder="Message" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Message'" required="" rows="3">{{ old('message') }}</textarea>
						</div>
						<button class="genric-btn primary circle mt-30" id="btnSubmit" style="float: right;">
							Send Message
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

@if (Session::has('status') || $errors->any())
	<script>
		const element = document.getElementById("formInquire");
		element.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
		$(`[name="full_name"]`).focus();
	</script>
@endif

<script>
	$('#formInquire').on('submit', function(e) {
		let isValidated = $(this).attr('validated') == "true";

		if (!isValidated) {
			e.preventDefault();
			
			let content = `
			<div class="d-flex justify-content-center align-items-center flex-column text-center">
				<img src="/assets/admin/img/modal/new.svg" class="py-3" height="300" width="200">
				<b class="mt-4 text-dark">Are you sure you want to submit?</b>
			</div>`;

			let confirmation = $.confirm({
				title: false,
				escapeKey: 'no',
				content,
				buttons: {
					no: {
						btnClass: 'btn-default',
					},
					yes: {
						btnClass: 'btn-blue',
						keys: ['enter'],
						action: function() {
							$('#formInquire').attr('validated', 'true').submit();

							confirmation.buttons.yes.setText(`<span class="spinner-border spinner-border-sm"></span> Please wait...`);
							confirmation.buttons.yes.disable();
							confirmation.buttons.no.hide();

							return false;
						}
					},
				}
			});
		}
	});
</script>

@endsection