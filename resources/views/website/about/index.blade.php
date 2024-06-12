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
												<p class="about-description"></p>
												<div class="about-description d-flex align-items-center flex-column display-from-texteditor"
													year="{{ $history->year }}"
													description="{{ $history->description }}">
													<?= nl2br($history->description) ?>
												</div>
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
				<div class="col-md-12" data-aos="fade-up" id="our-mission">
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
				<div class="col-md-12" data-aos="fade-up" id="our-quality-policy">
					<h3 class="mt-20 pb-10 subtitle">OUR QUALITY POLICY</h3>
					<div class="text-justify display-from-texteditor">
						<?= nl2br($company_information->quality_policy) ?>
					</div>
				</div>
				<div class="col-md-12" id="scope-and-services">
					<div class="container cat-area">
						<h3 class="mt-20 pb-10 subtitle" data-aos="fade-down-right">SCOPE AND SERVICES</h3>

						@if (!empty($company_services))
							<div class="row gap-10">
								
								@foreach ( $company_services as $service )
									<div class="col-lg-4 mt-10">
										<div class="single-cat d-flex flex-column service-item service-border" data-aos="fade-up">
											<img src="{{ asset('uploads/img/scope-and-services/'.$service->image) }}" alt="{{ $service->title }}" 
												class="service-img" loading="lazy" style="height: 250px !important; width: auto; margin: 0 20px;">
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

<script>

	document.addEventListener('DOMContentLoaded', function() {
		$('div.about-description').each(function() {
			let year = $(this).attr('year');
			let originalDescription = $(this).attr('description');
			let description = $(this).text()?.trim();
			if (description.length > 60) {
				description = description.substring(0, 60) + '...';
				let display = description + `<a href="javascript:void(0)" 
					year="${year}"
					description="${originalDescription}" 
					class="btn btn-link pl-1 btnAboutSeeMore">See More</a>`;
				$(this).html(display);
			}
		})
	})

	$(document).on('click', '.btnAboutSeeMore', function() {
		let year = $(this).attr('year');
		let description = $(this).attr('description');
		description = `
		<div class="display-from-texteditor">
			${description}	
		</div>`;

		$.confirm({
			title: year,
			content: description,
			columnClass: 'col-md-6 col-md-offset-3',
			type: 'orange',
			backgroundDismiss: true,
			buttons: {
				close: {
					btnClass: 'btn-default',
				}
			}
		});
	})

</script>

@endsection