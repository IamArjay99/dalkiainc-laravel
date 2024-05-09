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
					<h1 class="mb-10 text-white">PROJECTS</h1>
					<div class="title-divider"></div>
				</div>
			</div>
        </div>
	</section>

    <section class="project-area section-gap" id="project">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="container-fluid" style="
						background-color: #fff;
						padding: 20px;
						border-radius: 5px">
						<h3 class="subtitle border-bottom mb-20 pb-10">Filters</h3>

						@if (!empty($project_category))
							@foreach ($project_category as $pcat)
								<div class="row align-items-center justify-content-between">
									<div class="col-10">
										<p>{{ $pcat->name }} <span class="text-muted" style="font-size: 0.9rem;">({{ $pcat->project_count ?? 0 }})</span></p>
									</div>
									<div class="col-2">
										<input class="project-checkbox" type="checkbox" value="{{ $pcat->id }}" name="project-category">
									</div>
								</div>
							@endforeach

							<div class="text-center">
								<button class="primary-btn mt-20" onclick="getProjectBasedOnCategory()">Apply</button>
							</div>
						@else
							<h5>No Project Category</h5>
						@endif
					</div>
				</div>
				<div class="col-lg-9">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
						  	<a class="nav-link nav-project active" href="#ongoing-projects" role="tab" data-toggle="tab" aria-selected="true">Ongoing Projects</a>
						</li>
						<li class="nav-item">
						  	<a class="nav-link nav-project" href="#completed-projects" role="tab" data-toggle="tab">Completed Projects</a>
						</li>
					</ul>
					  
					<!-- TAB PANES -->
					<div class="tab-content border projects">
						<div role="tabpanel" class="tab-pane active" id="ongoing-projects">

							@if (!empty($projects['ongoing_projects']))
								<div class="row" data-aos="zoom-in-up">

									@foreach ( $projects['ongoing_projects'] as $project )
										<div class="col-lg-4">
											<div class="single-service">
												<div class="thumb">
													<img src="{{ asset('uploads/img/projects/'.$project->image) }}" 
													alt="{{ $project->name }}"
													class="img-fluid"
													loading="lazy"
													style="height: 180px !important;">
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
								</div>
							@else
								<h5>No Projects</h5>
							@endif
							

							<div class="pagination-wrap mt-20 mb-20">
								<nav aria-label="...">
									<ul class="pagination justify-content-end">
										<li class="page-item disabled">
											<span class="page-link">Previous</span>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active">
											<span class="page-link">
											2
											<span class="sr-only">(current)</span>
											</span>
										</li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								  </nav>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="completed-projects">
							@if (!empty($projects['completed_projects']))
								<div class="row" data-aos="zoom-in-up">

									@foreach ( $projects['completed_projects'] as $project )
										<div class="col-lg-4">
											<div class="single-service">
												<div class="thumb">
													<img src="{{ asset('uploads/img/projects/'.$project->image) }}" alt="{{ $project->name }}">
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
								</div>
							@else
								<h5>No Projects</h5>
							@endif
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<script>

	function getProjectBasedOnCategory() {
		let projectCategories = $('.project-checkbox:checked').map(function() {
			return $(this).val();
		}).get();

		$.ajax({
			method: 'GET',
			url: "{{ route('website.projects.filter') }}",
			data: {
				projectCategories: projectCategories
			},
			success: function(data) {
				console.log(data);
			}
		})
	}
	
</script>

@endsection