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