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
					<h1 class="mb-10 text-white">CONTACTS</h1>
					<div class="title-divider"></div>
				</div>
			</div>
        </div>
	</section>

    <section class="contact-area section-gap">
		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30892.6687473482!2d121.101266!3d14.565789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7c79cee6faf%3A0xbb570ff13e16c98b!2sDalkia%20Incorporated!5e0!3m2!1sen!2sus!4v1713778962162!5m2!1sen!2sus" 
				width="100%" height="450" style="border:0;"
				allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
				data-aos="flip-left"></iframe>

			<div class="row mt-30" data-aos="fade-right">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<h3 class="subtitle mt-20 mb-20">WRITE US A MESSAGE</h3>
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
						<button class="genric-btn primary circle mt-30" style="float: right;">Send
							Message</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection