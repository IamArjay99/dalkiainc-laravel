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
			<div class="row" style="gap: 15px 0;">
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
				<div class="col-lg-5 mt-xl-0 mt-md-2 mt-sm-2">
					<div class="card">
						<div class="card-body">
							<h3 class="mb-30 text-uppercase">APPLY NOW!</h3>
							<form action="{{ route('website.careers.apply', ['id' => $career->id]) }}" method="POST" id="formApply" enctype="multipart/form-data"
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
								<div class="mt-10">
									<input type="file" name="file" class="form-control" id="file" accept=".pdf, .doc, .docx" onchange="checkFile(this)" required>
									<small class="text-danger">File format: .pdf, .doc, .docx</small>
								</div>
								<div class="mt-10">
									{!! ReCaptcha::htmlScriptTagJsApi() !!}
									<div class="g-recaptcha" 
										data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" 
										data-callback="recaptchaCallback"
										data-size="normal" 
										data-theme="light" 
										id="recaptcha-element"></div>
								</div>
								<button class="genric-btn primary circle mt-30" id="btnSubmit" style="float: right;" disabled>
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

<script>
	function recaptchaCallback() {
		$('#btnSubmit').removeAttr('disabled');
	}

	function checkFile(input) {
		if (input.files && input.files[0]) {
			let file = input.files[0];
			let filename = file.name;
			let extension = filename.split('.').pop();
			let filesize = file.size / 1024 / 1024;

			if (['pdf', 'doc', 'docx'].indexOf(extension) == -1) {
				$.notify('File format is not supported', {
					'className': 'error',
					'autoHide': true,
					'autoHideDelay': 5000,
					'position': 'bottom right',
					'showAnimation': 'slideDown'
				});
				$('#file').val('');
			}
			else if (filesize > 5) {
				$.notify('File size is too large. Max file size is 5MB', {
					'className': 'error',
					'autoHide': true,
					'autoHideDelay': 5000,
					'position': 'bottom right',
					'showAnimation': 'slideDown'
				});
				$('#file').val('');
			}
		}
	}

	$('#formApply').on('submit', function(e) {
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
							$('#formApply').attr('validated', 'true').submit();

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