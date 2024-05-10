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
						  	<a class="nav-link nav-project active" href="#ongoing-projects" id="nav-ongoing-projects" role="tab" data-toggle="tab" aria-selected="true">Ongoing Projects</a>
						</li>
						<li class="nav-item">
						  	<a class="nav-link nav-project" href="#completed-projects" id="nav-completed-projects" role="tab" data-toggle="tab">Completed Projects</a>
						</li>
					</ul>
					  
					<!-- TAB PANES -->
					<div class="tab-content border projects">
						<div role="tabpanel" class="tab-pane active" id="ongoing-projects">

							@if (!empty($projects['ongoing_projects']['data']))
								<div class="row" data-aos="zoom-in-up">

									@foreach ( $projects['ongoing_projects']['data'] as $project )
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
								<h5 class="text-center text-muted py-5">No ongoing projects found.</h5>
							@endif
							
							@if (!empty($projects['ongoing_projects']['pages']))
								<div class="pagination-wrap mt-20 mb-20">
									<nav aria-label="">
										<ul class="pagination justify-content-center">

											@foreach ( $projects['ongoing_projects']['pages'] as $index => $page)
												<li class="page-item ongoing-page-item {{ $index == 0 ? 'active' : '' }}" 
													id="ongoing-projects-{{ $page['label'] }}">
													<a class="page-link" href="javascript:void(0)"
														onclick="getProjectBasedOnPagination('ONGOING', '{{ $page['label'] }}', '{{ $page['offset'] }}', '{{ $page['limit'] }}')">
														{{ $page['label'] }}
													</a>
												</li>	
											@endforeach

										</ul>
									</nav>
								</div>
							@endif

						</div>

						<div role="tabpanel" class="tab-pane fade" id="completed-projects">
							@if (!empty($projects['completed_projects']['data']))
								<div class="row" data-aos="zoom-in-up">

									@foreach ( $projects['completed_projects']['data'] as $project )
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
								<h5>No completed projects found.</h5>
							@endif

							@if (!empty($projects['completed_projects']['pages']))
								<div class="pagination-wrap mt-20 mb-20">
									<nav aria-label="">
										<ul class="pagination justify-content-center">

											@foreach ( $projects['completed_projects']['pages'] as $index => $page)
												<li class="page-item ongoing-page-item {{ $index == 0 ? 'active' : '' }}" 
													id="ongoing-projects-{{ $page['label'] }}">
													<a class="page-link" href="javascript:void(0)"
														onclick="getProjectBasedOnPagination('COMPLETED', '{{ $page['label'] }}', '{{ $page['offset'] }}', '{{ $page['limit'] }}')">
														{{ $page['label'] }}
													</a>
												</li>	
											@endforeach
											
										</ul>
									</nav>
								</div>
							@endif
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<script>

	function getProjectBasedOnPagination(status, page, offset, limit) {
		let projectCategories = $('.project-checkbox:checked').map(function() {
			return $(this).val();
		}).get();

		let tabContent = status === 'ONGOING' ? '#ongoing-projects' : '#completed-projects';

		let preloader = `
		<div class="cssload-fond" style="padding: 150px 0;">
			<div class="cssload-container-general">
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
			</div>
		</div>`;

		$(tabContent).html(preloader);

		setTimeout(() => {
			$.ajax({
				method: 'GET',
				url: "{{ route('website.projects.filter') }}",
				dataType: 'json',
				async: false,
				data: {
					projectCategories: projectCategories,
					current_page: page,
					offset,
					limit,
					status
				},
				beforeSend: function() {
					$(tabContent).html(preloader);
				},
				success: function(data) {
					let html = getDisplayProjects(data, status);

					$(tabContent).html(html);
				},
				error: function(data) {
					$(tabContent).html(`<h5 class="text-center text-muted py-5">There was an error processing your request. Please try again later.</h5>`);
				}
			})
		}, 500);
	}

	function getDisplayPages(data, currentPage, status) {
		let outputHTML = '';

		if (data && data.length) {
			let bodyHTML = '';
			data.map((item, index) => {
				bodyHTML += `
				<li class="page-item ${currentPage == item['label'] ? 'active' : '' }" 
					id="ongoing-projects-${item['label']}">
					<a class="page-link" href="javascript:void(0)"
						onclick="getProjectBasedOnPagination('${status}', '${item['label']}', '${item['offset']}', '${item['limit']}')">
						${item['label']}
					</a>
				</li>`;
			});

			outputHTML = `
			<div class="pagination-wrap mt-20 mb-20">
				<nav aria-label="">
					<ul class="pagination justify-content-center">
						${bodyHTML}
					</ul>
				</nav>
			</div>`;
		}

		return outputHTML;
	}

	function getDisplayProjects(data, status) {
		let outputHTML = '';
		if (data && Object.keys(data).length) {

			let toFetch = status == 'ONGOING' ? 'ongoing_projects' : 'completed_projects';
			let pagesData = data?.[toFetch]?.pages || [];
			let projectData = data?.[toFetch]?.data || [];
			let currentPage = data?.[toFetch]?.current_page || 1; 

			let pagesHTML = getDisplayPages(pagesData, currentPage, status);

			let projects = projectData.filter(project => project.status == status);

			if (projects && projects.length) {
				let bodyHTML = '';
				projects.map(project => {
					bodyHTML += `
					<div class="col-lg-4">
						<div class="single-service">
							<div class="thumb">
								<img src="uploads/img/projects/${project.image}" alt="${project.name}"
									class="img-fluid"
									loading="lazy"
									style="height: 180px !important;">
							</div>
							<h4 class="text-uppercase">${project.name}</h4>
							<div class="project-details">
								<div>
									<b>No. of floors: </b>
									<span>
										${project.floor}
									</span>
								</div>
								<div>
									<b>Scope of Work: </b>
									<span>
										${project.scope_of_work}
									</span>
								</div>
							</div>
						</div>
					</div>`;
				})
	
				outputHTML = `
				<div class="row" data-aos="zoom-in-up">
					${bodyHTML}
				</div>
				
				${pagesHTML}`;
			}
			else {
				outputHTML = '<h5 class="text-center text-muted py-5">No projects found.</h5>';
			}
		}
		else {
			outputHTML = '<h5 class="text-center text-muted py-5">No projects found.</h5>';
		}

		return outputHTML;
	}

	function getProjectBasedOnCategory() {
		let projectCategories = $('.project-checkbox:checked').map(function() {
			return $(this).val();
		}).get();

		let preloader = `
		<div class="cssload-fond">
			<div class="cssload-container-general">
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
				<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
			</div>
		</div>`;

		$('#ongoing-projects, #completed-projects').html(preloader);

		setTimeout(() => {
			$.ajax({
				method: 'GET',
				url: "{{ route('website.projects.filter') }}",
				dataType: 'json',
				async: false,
				data: {
					projectCategories: projectCategories
				},
				beforeSend: function() {
					$('#ongoing-projects, #completed-projects').html(preloader);
				},
				success: function(data) {
					let ongoingHTML = getDisplayProjects(data, 'ONGOING');
					let completedHTML = getDisplayProjects(data, 'COMPLETED');

					$('#ongoing-projects').html(ongoingHTML);
					$('#completed-projects').html(completedHTML);
				},
				error: function(data) {
					$('#ongoing-projects, #completed-projects').html(`<h5 class="text-center text-muted py-5">There was an error processing your request. Please try again later.</h5>`);
				}
			})
		}, 500);
	}
	
</script>

@endsection