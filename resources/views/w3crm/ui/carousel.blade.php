@extends('layouts.default')
@section('content')
			<div class="page-titles">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
					<li class="breadcrumb-item active" aria-current="page">Carousel</li>
				  </ol>
				</nav>
			</div>
            <div class="container-fluid">
				<div class="col-xl-12">

				</div>
				<!--element-area-->
				<div class="element-area">
					<div class="demo-view">
						<div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
							<!-- row -->
							<div class="row">
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="slides-only">
										<div class="card-header flex-wrap border-0 pb-0">
											<h4 class="card-intro-title mb-0">Slides only</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#SlidesOnly" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#SlidesOnly-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="SlidesOnly" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0 p-4">
													<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
														<div class="carousel-indicators">
															<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
															<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
															<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
														</div>
														<div class="carousel-inner">
															<div class="carousel-item active">
																<img class="d-block w-100 rounded" src="{{asset('images/big/img1.jpg')}}" alt="First slide">
															</div>
															<div class="carousel-item">
																<img class="d-block w-100 rounded" src="{{asset('images/big/img2.jpg')}}" alt="Second slide">
															</div>
															<div class="carousel-item">
																<img class="d-block w-100 rounded" src="{{asset('images/big/img3.jpg')}}" alt="Third slide">
															</div>
														</div>
														<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
															<span class="carousel-control-prev-icon" aria-hidden="true"></span>
															<span class="visually-hidden">Previous</span>
														</button>
														<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
															<span class="carousel-control-next-icon" aria-hidden="true"></span>
															<span class="visually-hidden">Next</span>
														</button>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="SlidesOnly-html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"&gt;
	&lt;div class="carousel-indicators"&gt;
		&lt;button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"&gt;&lt;/button&gt;
		&lt;button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"&gt;&lt;/button&gt;
		&lt;button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"&gt;&lt;/button&gt;
	&lt;/div&gt;
	&lt;div class="carousel-inner"&gt;
		&lt;div class="carousel-item active"&gt;
			&lt;img class="d-block w-100" src="{{asset('images/big/img1.jpg')}}" alt="First slide"&gt;
		&lt;/div&gt;
		&lt;div class="carousel-item"&gt;
			&lt;img class="d-block w-100" src="{{asset('images/big/img2.jpg')}}" alt="Second slide"&gt;
		&lt;/div&gt;
		&lt;div class="carousel-item"&gt;
			&lt;img class="d-block w-100" src="{{asset('images/big/img3.jpg')}}" alt="Third slide"&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"&gt;
		&lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
		&lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
	&lt;/button&gt;
	&lt;button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"&gt;
		&lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
		&lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
	&lt;/button&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
                                <!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="with-captions">
										<div class="card-header flex-wrap border-0 pb-0">
											<h4 class="card-intro-title mb-0">With Captions</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#WithCaptions" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#WithCaptions-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent-1">
											<div class="tab-pane fade show active" id="WithCaptions" role="tabpanel" aria-labelledby="home-tab-1">
												<div class="card-body pt-0 p-4">
													<div class="bootstrap-carousel">
														<div class="carousel slide" data-bs-ride="carousel">
															<div class="carousel-inner">
																<div class="carousel-item active">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img2.jpg')}}" alt="First slide">
																	<div class="carousel-caption d-none d-md-block">
																		<h5>First slide label</h5>
																		<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
																	</div>
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img3.jpg')}}" alt="Second slide">
																	<div class="carousel-caption d-none d-md-block">
																		<h5>Second slide label</h5>
																		<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
																	</div>
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img4.jpg')}}" alt="Third slide">
																	<div class="carousel-caption d-none d-md-block">
																		<h5>Third slide label</h5>
																		<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="WithCaptions-html" role="tabpanel" aria-labelledby="home-tab-1">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-carousel"&gt;
	&lt;div class="carousel slide" data-bs-ride="carousel"&gt;
		&lt;div class="carousel-inner"&gt;
			&lt;div class="carousel-item active"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img2.jpg')}}" alt="First slide"&gt;
				&lt;div class="carousel-caption d-none d-md-block"&gt;
					&lt;h5&gt;First slide label&lt;/h5&gt;
					&lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="carousel-item"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img3.jpg')}}" alt="Second slide"&gt;
				&lt;div class="carousel-caption d-none d-md-block"&gt;
					&lt;h5&gt;Second slide label&lt;/h5&gt;
					&lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="carousel-item"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img4.jpg')}}" alt="Third slide"&gt;
				&lt;div class="carousel-caption d-none d-md-block"&gt;
					&lt;h5&gt;Third slide label&lt;/h5&gt;
					&lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
                                <!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="slides-only-1">
										<div class="card-header flex-wrap border-0 pb-0">
											<h4 class="card-intro-title mb-0">Slides Only-1</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#SlidesOnly2" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#SlidesOnly2-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent-2">
											<div class="tab-pane fade show active" id="SlidesOnly2" role="tabpanel" aria-labelledby="home-tab-2">
												<div class="card-body pt-0 p-4">
													<div class="bootstrap-carousel">
														<div class="carousel slide" data-bs-ride="carousel">
															<div class="carousel-inner">
																<div class="carousel-item active">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img3.jpg')}}" alt="First slide">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img4.jpg')}}" alt="Second slide">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img5.jpg')}}" alt="Third slide">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="SlidesOnly2-html" role="tabpanel" aria-labelledby="home-tab-2">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="bootstrap-carousel"&gt;
&lt;div class="carousel slide" data-bs-ride="carousel"&gt;
	&lt;div class="carousel-inner"&gt;
		&lt;div class="carousel-item active"&gt;
			&lt;img class="d-block w-100" src="{{asset('images/big/img3.jpg')}}" alt="First slide"&gt;
		&lt;/div&gt;
		&lt;div class="carousel-item"&gt;
			&lt;img class="d-block w-100" src="{{asset('images/big/img4.jpg')}}" alt="Second slide"&gt;
		&lt;/div&gt;
		&lt;div class="carousel-item"&gt;
			&lt;img class="d-block w-100" src="{{asset('images/big/img5.jpg')}}" alt="Third slide"&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
                                <!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="slides-indicators">
										<div class="card-header flex-wrap border-0 pb-0">
											<h4 class="card-intro-title mb-0">Slides With indicators</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#SlidesIndicators" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#SlidesIndicators-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent-3">
											<div class="tab-pane fade show active" id="SlidesIndicators" role="tabpanel" aria-labelledby="home-tab-3">
												<div class="card-body pt-0 p-4">
													<div class="bootstrap-carousel">
														<div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
															<div class="carousel-indicators">
																<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
																<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
																<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
															</div>
															<div class="carousel-inner">
																<div class="carousel-item active">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img4.jpg')}}" alt="First slide">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img5.jpg')}}" alt="Second slide">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100 rounded" src="{{asset('images/big/img6.jpg')}}" alt="Third slide">
																</div>
															</div>
															<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
																<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																<span class="visually-hidden">Previous</span>
															</button>
															<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
																<span class="carousel-control-next-icon" aria-hidden="true"></span>
																<span class="visually-hidden">Next</span>
															</button>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="SlidesIndicators-html" role="tabpanel" aria-labelledby="home-tab-3">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="bootstrap-carousel"&gt;
	&lt;div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel"&gt;
		&lt;div class="carousel-indicators"&gt;
			&lt;button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"&gt;&lt;/button&gt;
			&lt;button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"&gt;&lt;/button&gt;
			&lt;button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"&gt;&lt;/button&gt;
		&lt;/div&gt;
		&lt;div class="carousel-inner"&gt;
			&lt;div class="carousel-item active"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img4.jpg')}}" alt="First slide"&gt;
			&lt;/div&gt;
			&lt;div class="carousel-item"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img5.jpg')}}" alt="Second slide"&gt;
			&lt;/div&gt;
			&lt;div class="carousel-item"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img6.jpg')}}" alt="Third slide"&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev"&gt;
			&lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
			&lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
		&lt;/button&gt;
		&lt;button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next"&gt;
			&lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
			&lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
		&lt;/button&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
                                <!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="slides-captions">
										<div class="card-header flex-wrap border-0 pb-0">
											<h4 class="card-intro-title mb-0">Slides With captions</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#SlidesCaptions" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#SlidesCaptions-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent-4">
											<div class="tab-pane fade show active" id="SlidesCaptions" role="tabpanel" aria-labelledby="home-tab-4">
												<div class="card-body pt-0 p-4">
													<div class="bootstrap-carousel">
														<div data-bs-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
															<div class="carousel-indicators">
																<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
																<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
																<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
															</div>
															<div class="carousel-inner">
																<div class="carousel-item active">
																	<img class="d-block w-100" src="{{asset('images/big/img5.jpg')}}" alt="">
																	<div class="carousel-caption d-none d-md-block">
																		<h5>First slide label</h5>
																		<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
																	</div>
																</div>
																<div class="carousel-item">
																	<img alt="" class="d-block w-100" src="{{asset('images/big/img6.jpg')}}">
																	<div class="carousel-caption d-none d-md-block">
																		<h5>Second slide label</h5>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																	</div>
																</div>
																<div class="carousel-item">
																	<img alt="" class="d-block w-100" src="{{asset('images/big/img7.jpg')}}">
																	<div class="carousel-caption d-none d-md-block">
																		<h5>Third slide label</h5>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.
																		</p>
																	</div>
																</div>
															</div>
															<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
																<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																<span class="visually-hidden">Previous</span>
															</button>
															<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
																<span class="carousel-control-next-icon" aria-hidden="true"></span>
																<span class="visually-hidden">Next</span>
															</button>
														</div>
													</div>

												</div>
											</div>
											<div class="tab-pane fade" id="SlidesCaptions-html" role="tabpanel" aria-labelledby="home-tab-4">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="bootstrap-carousel"&gt;
	&lt;div data-bs-ride="carousel" class="carousel slide" id="carouselExampleCaptions"&gt;
		&lt;div class="carousel-indicators"&gt;
			&lt;button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"&gt;&lt;/button&gt;
			&lt;button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"&gt;&lt;/button&gt;
			&lt;button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"&gt;&lt;/button&gt;
		&lt;/div&gt;
		&lt;div class="carousel-inner"&gt;
			&lt;div class="carousel-item active"&gt;
				&lt;img class="d-block w-100" src="{{asset('images/big/img5.jpg')}}" alt=""&gt;
				&lt;div class="carousel-caption d-none d-md-block"&gt;
					&lt;h5&gt;First slide label&lt;/h5&gt;
					&lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="carousel-item"&gt;
				&lt;img alt="" class="d-block w-100" src="{{asset('images/big/img6.jpg')}}"&gt;
				&lt;div class="carousel-caption d-none d-md-block"&gt;
					&lt;h5&gt;Second slide label&lt;/h5&gt;
					&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			&lt;div class="carousel-item"&gt;
				&lt;img alt="" class="d-block w-100" src="{{asset('images/big/img7.jpg')}}"&gt;
				&lt;div class="carousel-caption d-none d-md-block"&gt;
					&lt;h5&gt;Third slide label&lt;/h5&gt;
					&lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.
					&lt;/p&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"&gt;
			&lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
			&lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
		&lt;/button&gt;
		&lt;button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"&gt;
			&lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
			&lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
		&lt;/button&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
							</div>
						</div>
					</div>
					<div class="demo-right ">
                        <div class="demo-right-inner dz-scroll " id="right-sidebar">
                            <h4 class="title">Carousel</h4>
							<div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
								<ul class="navbar-nav" id="menu-bar">
									<li><a href="#slides-only" class="scroll">Slides Only</a></li>
									<li><a href="#with-captions" class="scroll">With Captions</a></li>
									<li><a href="#slides-only-1" class="scroll">slides only-1</a></li>
									<li><a href="#slides-indicators" class="scroll">Slides With indicators</a></li>
									<li><a href="#slides-captions" class="scroll">Slides With captions</a></li>
								</ul>
							</div>
                        </div>
                    </div>
				</div>
				<!--/element-area-->
            </div>
        @endsection
        @push('scripts')
        <script>
            hljs.highlightAll();
            hljs.configure({ ignoreUnescapedHTML: true })


                document.addEventListener('DOMContentLoaded', (event) => {
                    document.querySelectorAll('pre code').forEach((el) => {
                        hljs.highlightElement(el);
                    });
                    });
            </script>
        @endpush

