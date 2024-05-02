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
					<h1 class="mb-10 text-white">JOB DETAILS</h1>
					<div class="title-divider"></div>
				</div>
			</div>
        </div>
	</section>

    <section class="career-opportunity-area section-gap" id="career-opportunity">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<b class="text-uppercase">Job Title:</b>
								<h1 class="text-uppercase">{{ $career->job_title }}</h1>
							</div>
							<div class="card-text mt-30">
								<b class="text-uppercase">Job Description:</b>
								<p>
									{{ $career->job_description }}
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="card">
						<div class="card-body">
							<h3 class="mb-30 text-uppercase">APPLY NOW!</h3>
							<form action="#">
								<div class="input-group-icon mt-10">
									<div class="icon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" name="full_name" placeholder="Full Name" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Full Name'" required="" class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" name="email_address" placeholder="Email Address" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Email Address'" required="" class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon">
										<i class="fa fa-thumb-tack" aria-hidden="true"></i>
									</div>
									<input type="text" name="subject" placeholder="Subject" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Subject'" required="" class="single-input">
								</div>
								<div class="mt-10">
									<textarea class="single-textarea" name="message" placeholder="Message" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Message'" required="" rows="3"></textarea>
								</div>
								<div class="mt-10">
									<input type="file" name="file" class="form-control" id="file" accept=".pdf, .doc, .docx">
								</div>
								<button class="genric-btn primary circle mt-30" style="float: right;">
									SUBMIT
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection