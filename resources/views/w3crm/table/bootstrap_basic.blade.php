@extends('layouts.default')
@section('content')
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item "><a href="javascript:void(0)">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap Table</a></li>
					</ol>
                </div>
            <!-- container starts -->
            <div class="container-fluid">

                <!-- row -->
				<div class="element-area">
					<div class="demo-view">
						<div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
							<div class="row">
								<!-- Column starts -->
								<div class="col-xl-12">
									<div class="card dz-card" id="bootstrap-table1">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Recent Payments Queue</h4>
												<p class="m-0 subtitle">Recent Payments Queue. Add <code>table boootrstap</code> class in root</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<!--tab-content-->
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0">
													<div class="table-responsive">
														<table class="table table-responsive-md">
															<thead>
																<tr>
																	<th style="width:80px;"><strong>#</strong></th>
																	<th><strong>PATIENT</strong></th>
																	<th><strong>DR NAME</strong></th>
																	<th><strong>DATE</strong></th>
																	<th><strong>STATUS</strong></th>
																	<th><strong>PRICE</strong></th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><strong>01</strong></td>
																	<td>Mr. Bobby</td>
																	<td>Dr. Jackson</td>
																	<td>01 August 2020</td>
																	<td><span class="badge light badge-success">Successful</span></td>
																	<td>$21.56</td>
																	<td>
																		<div class="dropdown">
																			<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
																				<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																			</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">Edit</a>
																				<a class="dropdown-item" href="#">Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><strong>02</strong></td>
																	<td>Mr. Bobby</td>
																	<td>Dr. Jackson</td>
																	<td>01 August 2020</td>
																	<td><span class="badge light badge-danger">Canceled</span></td>
																	<td>$21.56</td>
																	<td>
																		<div class="dropdown">
																			<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
																				<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																			</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">Edit</a>
																				<a class="dropdown-item" href="#">Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><strong>03</strong></td>
																	<td>Mr. Bobby</td>
																	<td>Dr. Jackson</td>
																	<td>01 August 2020</td>
																	<td><span class="badge light badge-warning">Pending</span></td>
																	<td>$21.56</td>
																	<td>
																		<div class="dropdown">
																			<button type="button" class="btn btn-warning light sharp" data-bs-toggle="dropdown">
																				<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																			</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">Edit</a>
																				<a class="dropdown-item" href="#">Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!-- /Recent Payments Queue -->
											</div>
											<div class="tab-pane fade " id="html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
	&lt;div class="table-responsive"&gt;
		&lt;table class="table table-responsive-md"&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th style="width:80px;"&gt;&lt;strong&gt;#&lt;/strong&gt;&lt;/th&gt;
					&lt;th&gt;&lt;strong&gt;PATIENT&lt;/strong&gt;&lt;/th&gt;
					&lt;th&gt;&lt;strong&gt;DR NAME&lt;/strong&gt;&lt;/th&gt;
					&lt;th&gt;&lt;strong&gt;DATE&lt;/strong&gt;&lt;/th&gt;
					&lt;th&gt;&lt;strong&gt;STATUS&lt;/strong&gt;&lt;/th&gt;
					&lt;th&gt;&lt;strong&gt;PRICE&lt;/strong&gt;&lt;/th&gt;
					&lt;th&gt;&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;td&gt;&lt;strong&gt;01&lt;/strong&gt;&lt;/td&gt;
					&lt;td&gt;Mr. Bobby&lt;/td&gt;
					&lt;td&gt;Dr. Jackson&lt;/td&gt;
					&lt;td&gt;01 August 2020&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge light badge-success"&gt;Successful&lt;/span&gt;&lt;/td&gt;
					&lt;td&gt;$21.56&lt;/td&gt;
					&lt;td&gt;
						&lt;div class="dropdown"&gt;
							&lt;button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown"&gt;
								&lt;svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"&gt;&lt;g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;&lt;rect x="0" y="0" width="24" height="24"/&gt;&lt;circle fill="#000000" cx="5" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="19" cy="12" r="2"/&gt;&lt;/g&gt;&lt;/svg&gt;
							&lt;/button&gt;
							&lt;div class="dropdown-menu"&gt;
								&lt;a class="dropdown-item" href="#"&gt;Edit&lt;/a&gt;
								&lt;a class="dropdown-item" href="#"&gt;Delete&lt;/a&gt;
							&lt;/div&gt;
						&lt;/div&gt;
					&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;&lt;strong&gt;02&lt;/strong&gt;&lt;/td&gt;
					&lt;td&gt;Mr. Bobby&lt;/td&gt;
					&lt;td&gt;Dr. Jackson&lt;/td&gt;
					&lt;td&gt;01 August 2020&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge light badge-danger"&gt;Canceled&lt;/span&gt;&lt;/td&gt;
					&lt;td&gt;$21.56&lt;/td&gt;
					&lt;td&gt;
						&lt;div class="dropdown"&gt;
							&lt;button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown"&gt;
								&lt;svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"&gt;&lt;g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;&lt;rect x="0" y="0" width="24" height="24"/&gt;&lt;circle fill="#000000" cx="5" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="19" cy="12" r="2"/&gt;&lt;/g&gt;&lt;/svg&gt;
							&lt;/button&gt;
							&lt;div class="dropdown-menu"&gt;
								&lt;a class="dropdown-item" href="#"&gt;Edit&lt;/a&gt;
								&lt;a class="dropdown-item" href="#"&gt;Delete&lt;/a&gt;
							&lt;/div&gt;
						&lt;/div&gt;
					&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;td&gt;&lt;strong&gt;03&lt;/strong&gt;&lt;/td&gt;
					&lt;td&gt;Mr. Bobby&lt;/td&gt;
					&lt;td&gt;Dr. Jackson&lt;/td&gt;
					&lt;td&gt;01 August 2020&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge light badge-warning"&gt;Pending&lt;/span&gt;&lt;/td&gt;
					&lt;td&gt;$21.56&lt;/td&gt;
					&lt;td&gt;
						&lt;div class="dropdown"&gt;
							&lt;button type="button" class="btn btn-warning light sharp" data-bs-toggle="dropdown"&gt;
								&lt;svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"&gt;&lt;g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;&lt;rect x="0" y="0" width="24" height="24"/&gt;&lt;circle fill="#000000" cx="5" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="12" cy="12" r="2"/&gt;&lt;circle fill="#000000" cx="19" cy="12" r="2"/&gt;&lt;/g&gt;&lt;/svg&gt;
							&lt;/button&gt;
							&lt;div class="dropdown-menu"&gt;
								&lt;a class="dropdown-item" href="#"&gt;Edit&lt;/a&gt;
								&lt;a class="dropdown-item" href="#"&gt;Delete&lt;/a&gt;
							&lt;/div&gt;
						&lt;/div&gt;
					&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/div&gt;
</code></pre>
												</div>
<!-- /Default accordion -->
											</div>
										</div>
										<!--/tab-content-->
									</div>
								</div>
							</div>
						<!-- Column ends -->
						<!-- Column starts -->
						<div class="col-xl-12">
							<div class="card dz-card" id="bootstrap-table2">
								<div class="card-header flex-wrap d-flex justify-content-between  border-0">
									<div>
										<h4 class="card-title">Exam Toppers</h4>
										<p class="m-0 subtitle">Exam Toppers. Add class <code>exam</code> with the class <code> bootstrap-table</code></p>
									</div>
									<ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#bordered" type="button" role="tab" aria-selected="true">Preview</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#bordered-html" type="button" role="tab"  aria-selected="false">HTML</button>
										</li>
									</ul>
								</div>

									<!-- tab-content -->
								<div class="tab-content" id="myTabContent-1">
									<div class="tab-pane fade show active" id="bordered" role="tabpanel" aria-labelledby="home-tab-1">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-responsive-md">
													<thead>
														<tr>
															<th style="width:50px;">
																<div class="form-check custom-checkbox checkbox-success check-lg me-3">
																	<input type="checkbox" class="form-check-input" id="checkAll" required="">
																	<label class="form-check-label" for="checkAll"></label>
																</div>
															</th>
															<th><strong>ROLL NO.</strong></th>
															<th><strong>NAME</strong></th>
															<th><strong>Email</strong></th>
															<th><strong>Date</strong></th>
															<th><strong>Status</strong></th>
															<th><strong></strong></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="form-check custom-checkbox checkbox-success check-lg me-3">
																	<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
																	<label class="form-check-label" for="customCheckBox2"></label>
																</div>
															</td>
															<td><strong>542</strong></td>
															<td>
																<div class="d-flex align-items-center">
																	<img src="{{asset('images/avatar/1.jpg')}}" class="rounded-lg me-2" width="24" alt="">
																	<span class="w-space-no">Dr. Jackson</span>
																</div>
															</td>
															<td>example@example.com	</td>
															<td>01 August 2020</td>
															<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Successful</div></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
																	<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox checkbox-success check-lg me-3">
																	<input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
																	<label class="form-check-label" for="customCheckBox3"></label>
																</div>
															</td>
															<td><strong>542</strong></td>
															<td><div class="d-flex align-items-center"><img src="{{asset('images/avatar/2.jpg')}}" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div></td>
															<td>example@example.com	</td>
															<td>01 August 2020</td>
															<td><div class="d-flex align-items-center"><i class="fa fa-circle text-danger me-1"></i> Canceled</div></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
																	<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check custom-checkbox checkbox-success check-lg me-3">
																	<input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
																	<label class="form-check-label" for="customCheckBox4"></label>
																</div>
															</td>
															<td><strong>542</strong></td>
															<td><div class="d-flex align-items-center"><img src="{{asset('images/avatar/3.jpg')}}" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div></td>
															<td>example@example.com	</td>
															<td>01 August 2020</td>
															<td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div></td>
															<td>
																<div class="d-flex">
																	<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
																	<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade " id="bordered-html" role="tabpanel" aria-labelledby="home-tab-1">
										<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
	&lt;table class="table table-responsive-md"&gt;
		&lt;thead&gt;
			&lt;tr&gt;
				&lt;th style="width:50px;"&gt;
					&lt;div class="form-check custom-checkbox checkbox-success check-lg me-3"&gt;
						&lt;input type="checkbox" class="form-check-input" id="checkAll" required=""&gt;
						&lt;label class="form-check-label" for="checkAll"&gt;&lt;/label&gt;
					&lt;/div&gt;
				&lt;/th&gt;
				&lt;th&gt;&lt;strong&gt;ROLL NO.&lt;/strong&gt;&lt;/th&gt;
				&lt;th&gt;&lt;strong&gt;NAME&lt;/strong&gt;&lt;/th&gt;
				&lt;th&gt;&lt;strong&gt;Email&lt;/strong&gt;&lt;/th&gt;
				&lt;th&gt;&lt;strong&gt;Date&lt;/strong&gt;&lt;/th&gt;
				&lt;th&gt;&lt;strong&gt;Status&lt;/strong&gt;&lt;/th&gt;
				&lt;th&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;
		&lt;tbody&gt;
			&lt;tr&gt;
				&lt;td&gt;
					&lt;div class="form-check custom-checkbox checkbox-success check-lg me-3"&gt;
						&lt;input type="checkbox" class="form-check-input" id="customCheckBox2" required=""&gt;
						&lt;label class="form-check-label" for="customCheckBox2"&gt;&lt;/label&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;strong&gt;542&lt;/strong&gt;&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="d-flex align-items-center"&gt;
						&lt;img src="{{asset('images/avatar/1.jpg')}}" class="rounded-lg me-2" width="24" alt=""&gt;
						&lt;span class="w-space-no"&gt;Dr. Jackson&lt;/span&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;example@example.com	&lt;/td&gt;
				&lt;td&gt;01 August 2020&lt;/td&gt;
				&lt;td&gt;&lt;div class="d-flex align-items-center"&gt;&lt;i class="fa fa-circle text-success me-1"&gt;&lt;/i&gt; Successful&lt;/div&gt;&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="d-flex"&gt;
						&lt;a href="#" class="btn btn-primary shadow btn-xs sharp me-1"&gt;&lt;i class="fa fa-pencil"&gt;&lt;/i&gt;&lt;/a&gt;
						&lt;a href="#" class="btn btn-danger shadow btn-xs sharp"&gt;&lt;i class="fa fa-trash"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/div&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;
					&lt;div class="form-check custom-checkbox checkbox-success check-lg me-3"&gt;
						&lt;input type="checkbox" class="form-check-input" id="customCheckBox3" required=""&gt;
						&lt;label class="form-check-label" for="customCheckBox3"&gt;&lt;/label&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;strong&gt;542&lt;/strong&gt;&lt;/td&gt;
				&lt;td&gt;&lt;div class="d-flex align-items-center"&gt;&lt;img src="{{asset('images/avatar/2.jpg')}}" class="rounded-lg me-2" width="24" alt=""&gt; &lt;span class="w-space-no"&gt;Dr. Jackson&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;
				&lt;td&gt;example@example.com	&lt;/td&gt;
				&lt;td&gt;01 August 2020&lt;/td&gt;
				&lt;td&gt;&lt;div class="d-flex align-items-center"&gt;&lt;i class="fa fa-circle text-danger me-1"&gt;&lt;/i&gt; Canceled&lt;/div&gt;&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="d-flex"&gt;
						&lt;a href="#" class="btn btn-primary shadow btn-xs sharp me-1"&gt;&lt;i class="fa fa-pencil"&gt;&lt;/i&gt;&lt;/a&gt;
						&lt;a href="#" class="btn btn-danger shadow btn-xs sharp"&gt;&lt;i class="fa fa-trash"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/div&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;
					&lt;div class="form-check custom-checkbox checkbox-success check-lg me-3"&gt;
						&lt;input type="checkbox" class="form-check-input" id="customCheckBox4" required=""&gt;
						&lt;label class="form-check-label" for="customCheckBox4"&gt;&lt;/label&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;strong&gt;542&lt;/strong&gt;&lt;/td&gt;
				&lt;td&gt;&lt;div class="d-flex align-items-center"&gt;&lt;img src="{{asset('images/avatar/3.jpg')}}" class="rounded-lg me-2" width="24" alt=""&gt; &lt;span class="w-space-no"&gt;Dr. Jackson&lt;/span&gt;&lt;/div&gt;&lt;/td&gt;
				&lt;td&gt;example@example.com	&lt;/td&gt;
				&lt;td&gt;01 August 2020&lt;/td&gt;
				&lt;td&gt;&lt;div class="d-flex align-items-center"&gt;&lt;i class="fa fa-circle text-warning me-1"&gt;&lt;/i&gt; Pending&lt;/div&gt;&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="d-flex"&gt;
						&lt;a href="#" class="btn btn-primary shadow btn-xs sharp me-1"&gt;&lt;i class="fa fa-pencil"&gt;&lt;/i&gt;&lt;/a&gt;
						&lt;a href="#" class="btn btn-danger shadow btn-xs sharp"&gt;&lt;i class="fa fa-trash"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/div&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;

	</code></pre>
									</div>
									</div>
								</div>
								<!-- /tab-content -->

							</div>
						</div>
						<!-- Column ends -->
						<!-- Column starts -->
						<div class="col-xl-12">
							<div class="card dz-card" id="bootstrap-table3">
								<div class="card-header flex-wrap d-flex justify-content-between  border-0">
									<div>
									<h4 class="card-title">Basic</h4>
									<p class="m-0 subtitle">Add <code>basic</code> class with <code>bootsrtap-table</code></p>
									</div>
									<ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#withoutSpace" type="button" role="tab" aria-selected="true">Preview</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#withoutSpace-html" type="button" role="tab"  aria-selected="false">HTML</button>
										</li>
									</ul>
								</div>

									<!-- /tab-content -->
									<div class="tab-content" id="myTabContent-2">
										<div class="tab-pane fade show active" id="withoutSpace" role="tabpanel" aria-labelledby="home-tab-2">
											<div class="card-body pt-0">
												<div class="table-responsive">
													<table class="table table-responsive-sm">
														<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Status</th>
																<th>Date</th>
																<th>Price</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>1</th>
																<td>Kolor Tea Shirt For Man</td>
																<td><span class="badge badge-primary light">Sale</span>
																</td>
																<td>January 22</td>
																<td class="color-primary">$21.56</td>
															</tr>
															<tr>
																<th>2</th>
																<td>Kolor Tea Shirt For Women</td>
																<td><span class="badge badge-success">Tax</span>
																</td>
																<td>January 30</td>
																<td class="color-success">$55.32</td>
															</tr>
															<tr>
																<th>3</th>
																<td>Blue Backpack For Baby</td>
																<td><span class="badge badge-danger">Extended</span>
																</td>
																<td>January 25</td>
																<td class="text-danger">$14.85</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="withoutSpace-html" role="tabpanel" aria-labelledby="home-tab-2">
											<div class="card-body pt-0 p-0 code-area">
	<pre class="mb-0"><code class="language-html">
	&lt;div class="table-responsive"&gt;
	&lt;table class="table table-responsive-sm"&gt;
		&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;#&lt;/th&gt;
					&lt;th&gt;Name&lt;/th&gt;
					&lt;th&gt;Status&lt;/th&gt;
					&lt;th&gt;Date&lt;/th&gt;
					&lt;th&gt;Price&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;th&gt;1&lt;/th&gt;
					&lt;td&gt;Kolor Tea Shirt For Man&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge badge-primary light"&gt;Sale&lt;/span&gt;
					&lt;/td&gt;
					&lt;td&gt;January 22&lt;/td&gt;
					&lt;td class="color-primary"&gt;$21.56&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;2&lt;/th&gt;
					&lt;td&gt;Kolor Tea Shirt For Women&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge badge-success"&gt;Tax&lt;/span&gt;
					&lt;/td&gt;
					&lt;td&gt;January 30&lt;/td&gt;
					&lt;td class="color-success"&gt;$55.32&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;3&lt;/th&gt;
					&lt;td&gt;Blue Backpack For Baby&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge badge-danger"&gt;Extended&lt;/span&gt;
					&lt;/td&gt;
					&lt;td&gt;January 25&lt;/td&gt;
					&lt;td class="text-danger"&gt;$14.85&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/div&gt;

	</code></pre></div>
										</div>
									</div>
									<!-- /tab-content -->

							</div>
						</div>
                    <!-- Column ends -->
					<!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table4">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
									<h4 class="card-title">Table Striped</h4>
									<p class="m-0 subtitle">Add <code>table striped</code> class with <code>bootsrtap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#withoutBorder" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#withoutBorder-html" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
							</div>

                               	<!-- /tab-content -->
								<div class="tab-content" id="myTabContent-3">
									<div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab-3">
										<div class="card-body pt-0">

											<div class="table-responsive">
													<table class="table table-striped table-responsive-sm">
														<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Status</th>
																<th>Date</th>
																<th>Price</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>1</th>
																<td>Kolor Tea Shirt For Man</td>
																<td><span class="badge badge-primary">Sale</span>
																</td>
																<td>January 22</td>
																<td class="color-primary">$21.56</td>
															</tr>
															<tr>
																<th>2</th>
																<td>Kolor Tea Shirt For Women</td>
																<td><span class="badge badge-success light">Tax</span>
																</td>
																<td>January 30</td>
																<td class="color-success">$55.32</td>
															</tr>
															<tr>
																<th>3</th>
																<td>Blue Backpack For Baby</td>
																<td><span class="badge badge-danger">Extended</span>
																</td>
																<td>January 25</td>
																<td class="text-danger">$14.85</td>
															</tr>
														</tbody>
													</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade " id="withoutBorder-html" role="tabpanel" aria-labelledby="home-tab-3">
										<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
		&lt;table class="table table-striped table-responsive-sm"&gt;
			&lt;thead&gt;
				&lt;tr&gt;
					&lt;th&gt;#&lt;/th&gt;
					&lt;th&gt;Name&lt;/th&gt;
					&lt;th&gt;Status&lt;/th&gt;
					&lt;th&gt;Date&lt;/th&gt;
					&lt;th&gt;Price&lt;/th&gt;
				&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
					&lt;th&gt;1&lt;/th&gt;
					&lt;td&gt;Kolor Tea Shirt For Man&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge badge-primary"&gt;Sale&lt;/span&gt;
					&lt;/td&gt;
					&lt;td&gt;January 22&lt;/td&gt;
					&lt;td class="color-primary"&gt;$21.56&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;2&lt;/th&gt;
					&lt;td&gt;Kolor Tea Shirt For Women&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge badge-success light"&gt;Tax&lt;/span&gt;
					&lt;/td&gt;
					&lt;td&gt;January 30&lt;/td&gt;
					&lt;td class="color-success"&gt;$55.32&lt;/td&gt;
				&lt;/tr&gt;
				&lt;tr&gt;
					&lt;th&gt;3&lt;/th&gt;
					&lt;td&gt;Blue Backpack For Baby&lt;/td&gt;
					&lt;td&gt;&lt;span class="badge badge-danger"&gt;Extended&lt;/span&gt;
					&lt;/td&gt;
					&lt;td&gt;January 25&lt;/td&gt;
					&lt;td class="text-danger"&gt;$14.85&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
&lt;/div&gt;
</code></pre>
								</div>
									</div>
								</div>
							<!-- /tab-content -->

                        </div>
                    </div>
                    <!-- Column ends -->
					<!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table5">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Table Bordered</h4>
                                	<p class="m-0 subtitle">Add <code>table bordered</code> class with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#leftPosition" type="button" role="tab" aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#leftPosition-html" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
							</div>
                           	<!-- tab-content -->
							<div class="tab-content" id="myTabContent-4">
								<div class="tab-pane fade show active" id="leftPosition" role="tabpanel" aria-labelledby="home-tab-4">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table table-bordered table-responsive-sm">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Status</th>
														<th>Date</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>Kolor Tea Shirt For Man</td>
														<td><span class="badge badge-primary">Sale</span>
														</td>
														<td>January 22</td>
														<td class="color-primary">$21.56</td>
													</tr>
													<tr>
														<th>2</th>
														<td>Kolor Tea Shirt For Women</td>
														<td><span class="badge badge-success">Tax</span>
														</td>
														<td>January 30</td>
														<td class="color-success">$55.32</td>
													</tr>
													<tr>
														<th>3</th>
														<td>Blue Backpack For Baby</td>
														<td><span class="badge badge-danger">Extended</span>
														</td>
														<td>January 25</td>
														<td class="text-danger">$14.85</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="tab-pane fade " id="leftPosition-html" role="tabpanel" aria-labelledby="home-tab-4">
									<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
&lt;table class="table table-bordered table-responsive-sm"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;#&lt;/th&gt;
			&lt;th&gt;Name&lt;/th&gt;
			&lt;th&gt;Status&lt;/th&gt;
			&lt;th&gt;Date&lt;/th&gt;
			&lt;th&gt;Price&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th&gt;1&lt;/th&gt;
			&lt;td&gt;Kolor Tea Shirt For Man&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-primary"&gt;Sale&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 22&lt;/td&gt;
			&lt;td class="color-primary"&gt;$21.56&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;2&lt;/th&gt;
			&lt;td&gt;Kolor Tea Shirt For Women&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-success"&gt;Tax&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 30&lt;/td&gt;
			&lt;td class="color-success"&gt;$55.32&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;3&lt;/th&gt;
			&lt;td&gt;Blue Backpack For Baby&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-danger"&gt;Extended&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 25&lt;/td&gt;
			&lt;td class="text-danger"&gt;$14.85&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
									</code></pre>
								</div>
							</div>

						</div>
							<!-- /tab-content -->

                        </div>
                    </div>
					<div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table6">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Table Hover</h4>
                                	<p class="m-0 subtitle">Add <code>table hover</code> class with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-115" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-115" data-bs-toggle="tab" data-bs-target="#leftPosition1" type="button" role="tab" aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-115" data-bs-toggle="tab" data-bs-target="#leftPosition-html1" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
							</div>
                           	<!-- tab-content -->
							<div class="tab-content" id="myTabContent-115">
								<div class="tab-pane fade show active" id="leftPosition1" role="tabpanel" aria-labelledby="home-tab-115">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table table-hover table-responsive-sm">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Status</th>
														<th>Date</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>Kolor Tea Shirt For Man</td>
														<td><span class="badge badge-primary light">Sale</span>
														</td>
														<td>January 22</td>
														<td class="color-primary">$21.56</td>
													</tr>
													<tr>
														<th>2</th>
														<td>Kolor Tea Shirt For Women</td>
														<td><span class="badge badge-success">Tax</span>
														</td>
														<td>January 30</td>
														<td class="color-success">$55.32</td>
													</tr>
													<tr>
														<th>3</th>
														<td>Blue Backpack For Baby</td>
														<td><span class="badge badge-danger light">Extended</span>
														</td>
														<td>January 25</td>
														<td class="text-danger">$14.85</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="tab-pane fade " id="leftPosition-html1" role="tabpanel" aria-labelledby="home-tab-115">
									<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
&lt;table class="table table-hover table-responsive-sm"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;#&lt;/th&gt;
			&lt;th&gt;Name&lt;/th&gt;
			&lt;th&gt;Status&lt;/th&gt;
			&lt;th&gt;Date&lt;/th&gt;
			&lt;th&gt;Price&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th&gt;1&lt;/th&gt;
			&lt;td&gt;Kolor Tea Shirt For Man&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-primary light"&gt;Sale&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 22&lt;/td&gt;
			&lt;td class="color-primary"&gt;$21.56&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;2&lt;/th&gt;
			&lt;td&gt;Kolor Tea Shirt For Women&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-success"&gt;Tax&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 30&lt;/td&gt;
			&lt;td class="color-success"&gt;$55.32&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;3&lt;/th&gt;
			&lt;td&gt;Blue Backpack For Baby&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-danger light"&gt;Extended&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 25&lt;/td&gt;
			&lt;td class="text-danger"&gt;$14.85&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

									</code></pre>
								</div>
								</div>
							</div>
							<!-- /tab-content -->

                        </div>
                    </div>
                    <!-- Column ends -->
					<!-- Column starts -->

					<div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table7">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
									<h4 class="card-title">Hover Table</h4>
									<p class="m-0 subtitle">Add <code>hover table</code> class with <code>bootsrtap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-14" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-14" data-bs-toggle="tab" data-bs-target="#widthicon" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-14" data-bs-toggle="tab" data-bs-target="#widthicon-html" type="button" role="tab" aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
							<div class="tab-content" id="myTabContent-14">
								<div class="tab-pane fade show active" id="widthicon" role="tabpanel" aria-labelledby="home-tab-14">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table header-border table-hover verticle-middle">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Product</th>
														<th scope="col">Popularity</th>
														<th scope="col">Sales</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>Air Conditioner</td>
														<td>
															<div class="progress" style="background: rgba(127, 99, 244, .1)">
																<div class="progress-bar" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="badge badge-primary light">70%</span>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>Textiles</td>
														<td>
															<div class="progress" style="background: rgba(76, 175, 80, .1)">
																<div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success">70%</span>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>Milk Powder</td>
														<td>
															<div class="progress" style="background: rgba(70, 74, 83, .1)">
																<div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="badge badge-dark light">70%</span>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>Vehicles</td>
														<td>
															<div class="progress" style="background: rgba(255, 87, 34, .1)">
																<div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="badge badge-danger">70%</span>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>Boats</td>
														<td>
															<div class="progress" style="background: rgba(255, 193, 7, .1)">
																<div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="badge badge-warning">70%</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="widthicon-html" role="tabpanel" aria-labelledby="home-tab-5">
									<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
&lt;table class="table header-border table-hover verticle-middle"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th scope="col"&gt;#&lt;/th&gt;
			&lt;th scope="col"&gt;Product&lt;/th&gt;
			&lt;th scope="col"&gt;Popularity&lt;/th&gt;
			&lt;th scope="col"&gt;Sales&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th&gt;1&lt;/th&gt;
			&lt;td&gt;Air Conditioner&lt;/td&gt;
			&lt;td&gt;
				&lt;div class="progress" style="background: rgba(127, 99, 244, .1)"&gt;
					&lt;div class="progress-bar" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-primary light"&gt;70%&lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;2&lt;/th&gt;
			&lt;td&gt;Textiles&lt;/td&gt;
			&lt;td&gt;
				&lt;div class="progress" style="background: rgba(76, 175, 80, .1)"&gt;
					&lt;div class="progress-bar bg-success" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-success"&gt;70%&lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;3&lt;/th&gt;
			&lt;td&gt;Milk Powder&lt;/td&gt;
			&lt;td&gt;
				&lt;div class="progress" style="background: rgba(70, 74, 83, .1)"&gt;
					&lt;div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-dark light"&gt;70%&lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;4&lt;/th&gt;
			&lt;td&gt;Vehicles&lt;/td&gt;
			&lt;td&gt;
				&lt;div class="progress" style="background: rgba(255, 87, 34, .1)"&gt;
					&lt;div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-danger"&gt;70%&lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;5&lt;/th&gt;
			&lt;td&gt;Boats&lt;/td&gt;
			&lt;td&gt;
				&lt;div class="progress" style="background: rgba(255, 193, 7, .1)"&gt;
					&lt;div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-warning"&gt;70%&lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
</code></pre>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table8">
                            <div class="card-header flex-wrap d-flex justify-content-between">
								<div>
									<h4 class="card-title">Table Bordered</h4>
									<p class="m-0 subtitle">Add <code>table bordered</code> class with <code>bootsrtap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-5" data-bs-toggle="tab" data-bs-target="#widthicon-1" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#widthicon-html-1" type="button" role="tab" aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
							<div class="tab-content" id="myTabContent-5">
								<div class="tab-pane fade show active" id="widthicon-1" role="tabpanel" aria-labelledby="home-tab-5">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table table-bordered table-responsive-sm">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Status</th>
														<th>Date</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>Kolor Tea Shirt For Man</td>
														<td><span class="badge badge-primary">Sale</span>
														</td>
														<td>January 22</td>
														<td class="color-primary">$21.56</td>
													</tr>
													<tr>
														<th>2</th>
														<td>Kolor Tea Shirt For Women</td>
														<td><span class="badge badge-success">Tax</span>
														</td>
														<td>January 30</td>
														<td class="color-success">$55.32</td>
													</tr>
													<tr>
														<th>3</th>
														<td>Blue Backpack For Baby</td>
														<td><span class="badge badge-danger">Extended</span>
														</td>
														<td>January 25</td>
														<td class="text-danger">$14.85</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="widthicon-html-1" role="tabpanel" aria-labelledby="home-tab-5">
									<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
&lt;table class="table table-bordered table-responsive-sm"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;#&lt;/th&gt;
			&lt;th&gt;Name&lt;/th&gt;
			&lt;th&gt;Status&lt;/th&gt;
			&lt;th&gt;Date&lt;/th&gt;
			&lt;th&gt;Price&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th&gt;1&lt;/th&gt;
			&lt;td&gt;Kolor Tea Shirt For Man&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-primary"&gt;Sale&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 22&lt;/td&gt;
			&lt;td class="color-primary"&gt;$21.56&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;2&lt;/th&gt;
			&lt;td&gt;Kolor Tea Shirt For Women&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-success"&gt;Tax&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 30&lt;/td&gt;
			&lt;td class="color-success"&gt;$55.32&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;3&lt;/th&gt;
			&lt;td&gt;Blue Backpack For Baby&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-danger"&gt;Extended&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;January 25&lt;/td&gt;
			&lt;td class="text-danger"&gt;$14.85&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

</code></pre>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- Column ends -->
					<!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table9">
                            <div class="card-header flex-wrap d-flex justify-content-between">
								<div>
									<h4 class="card-title">Bordered Table</h4>
									<p class="m-0 subtitle">Add <code>bordered table</code> class with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-6" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-6" data-bs-toggle="tab" data-bs-target="#headerbackground" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-6" data-bs-toggle="tab" data-bs-target="#headerbackground-html" type="button" role="tab" aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
					<div class="tab-content" id="myTabContent-6">
						<div class="tab-pane fade show active" id="headerbackground" role="tabpanel" aria-labelledby="home-tab-6">
                            <div class="card-body pt-0">
								<div class="table-responsive">
									<table class="table table-bordered verticle-middle table-responsive-sm">
										<thead>
											<tr>
												<th scope="col">Task</th>
												<th scope="col">Progress</th>
												<th scope="col">Deadline</th>
												<th scope="col">Label</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Air Conditioner</td>
												<td>
													<div class="progress" style="background: rgba(127, 99, 244, .1)">
														<div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
														</div>
													</div>
												</td>
												<td>Apr 20,2018</td>
												<td><span class="badge badge-primary light">70%</span>
												</td>
												<td>
													<span>
														<a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Edit"><i
																class="fa fa-pencil color-muted"></i> </a>
														<a href="javascript:void(0);" data-bs-toggle="tooltip"
															data-placement="top" title="btn-close"><i
																class="fa-solid fa-xmark text-danger"></i></a>
													</span>
												</td>
											</tr>
											<tr>
												<td>Textiles</td>
												<td>
													<div class="progress" style="background: rgba(76, 175, 80, .1)">
														<div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
														</div>
													</div>
												</td>
												<td>May 27,2018</td>
												<td><span class="badge badge-success">70%</span>
												</td>
												<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Edit"><i
																class="fa fa-pencil color-muted"></i> </a><a
															href="javascript:void(0);" data-bs-toggle="tooltip"
															data-placement="top" title="btn-close"><i
																class="fa-solid fa-xmark text-danger"></i></a></span>
												</td>
											</tr>
											<tr>
												<td>Milk Powder</td>
												<td>
													<div class="progress" style="background: rgba(70, 74, 83, .1)">
														<div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
														</div>
													</div>
												</td>
												<td>May 18,2018</td>
												<td><span class="badge badge-dark light">70%</span>
												</td>
												<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Edit"><i
																class="fa fa-pencil color-muted"></i> </a><a
															href="javascript:void(0);" data-bs-toggle="tooltip"
															data-placement="top" title="btn-close"><i
																class="fa-solid fa-xmark text-danger"></i></a></span>
												</td>
											</tr>
											<tr>
												<td>Vehicles</td>
												<td>
													<div class="progress" style="background: rgba(255, 87, 34, .1)">
														<div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
														</div>
													</div>
												</td>
												<td>Mar 27,2018</td>
												<td><span class="badge badge-danger">70%</span>
												</td>
												<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Edit"><i
																class="fa fa-pencil color-muted"></i> </a><a
															href="javascript:void(0);" data-bs-toggle="tooltip"
															data-placement="top" title="btn-close"><i
																class="fa-solid fa-xmark text-danger"></i></a></span>
												</td>
											</tr>
											<tr>
												<td>Boats</td>
												<td>
													<div class="progress" style="background: rgba(255, 193, 7, .1)">
														<div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
														</div>
													</div>
												</td>
												<td>Jun 28,2018</td>
												<td><span class="badge badge-warning">70%</span>
												</td>
												<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Edit"><i
																class="fa fa-pencil color-muted"></i> </a><a
															href="javascript:void(0);" data-bs-toggle="tooltip"
															data-placement="top" title="btn-close"><i
																class="fa-solid fa-xmark text-danger"></i></a></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="headerbackground-html" role="tabpanel" aria-labelledby="home-tab-6">
                            <div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">

&lt;div class="table-responsive"&gt;
	&lt;table class="table table-bordered verticle-middle table-responsive-sm"&gt;
		&lt;thead&gt;
			&lt;tr&gt;
				&lt;th scope="col"&gt;Task&lt;/th&gt;
				&lt;th scope="col"&gt;Progress&lt;/th&gt;
				&lt;th scope="col"&gt;Deadline&lt;/th&gt;
				&lt;th scope="col"&gt;Label&lt;/th&gt;
				&lt;th scope="col"&gt;Action&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;
		&lt;tbody&gt;
			&lt;tr&gt;
				&lt;td&gt;Air Conditioner&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="progress" style="background: rgba(127, 99, 244, .1)"&gt;
						&lt;div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;Apr 20,2018&lt;/td&gt;
				&lt;td&gt;&lt;span class="badge badge-primary light"&gt;70%&lt;/span&gt;
				&lt;/td&gt;
				&lt;td&gt;
					&lt;span&gt;
						&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
							data-placement="top" title="Edit"&gt;&lt;i
								class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;
						&lt;a href="javascript:void(0);" data-bs-toggle="tooltip"
							data-placement="top" title="btn-close"&gt;&lt;i
								class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/span&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Textiles&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="progress" style="background: rgba(76, 175, 80, .1)"&gt;
						&lt;div class="progress-bar bg-success" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;May 27,2018&lt;/td&gt;
				&lt;td&gt;&lt;span class="badge badge-success"&gt;70%&lt;/span&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
							data-placement="top" title="Edit"&gt;&lt;i
								class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
							href="javascript:void(0);" data-bs-toggle="tooltip"
							data-placement="top" title="btn-close"&gt;&lt;i
								class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Milk Powder&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="progress" style="background: rgba(70, 74, 83, .1)"&gt;
						&lt;div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;May 18,2018&lt;/td&gt;
				&lt;td&gt;&lt;span class="badge badge-dark light"&gt;70%&lt;/span&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
							data-placement="top" title="Edit"&gt;&lt;i
								class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
							href="javascript:void(0);" data-bs-toggle="tooltip"
							data-placement="top" title="btn-close"&gt;&lt;i
								class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Vehicles&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="progress" style="background: rgba(255, 87, 34, .1)"&gt;
						&lt;div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;Mar 27,2018&lt;/td&gt;
				&lt;td&gt;&lt;span class="badge badge-danger"&gt;70%&lt;/span&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
							data-placement="top" title="Edit"&gt;&lt;i
								class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
							href="javascript:void(0);" data-bs-toggle="tooltip"
							data-placement="top" title="btn-close"&gt;&lt;i
								class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Boats&lt;/td&gt;
				&lt;td&gt;
					&lt;div class="progress" style="background: rgba(255, 193, 7, .1)"&gt;
						&lt;div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/td&gt;
				&lt;td&gt;Jun 28,2018&lt;/td&gt;
				&lt;td&gt;&lt;span class="badge badge-warning"&gt;70%&lt;/span&gt;
				&lt;/td&gt;
				&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
							data-placement="top" title="Edit"&gt;&lt;i
								class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
							href="javascript:void(0);" data-bs-toggle="tooltip"
							data-placement="top" title="btn-close"&gt;&lt;i
								class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
				&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;
</code></pre>
                            </div>
						</div>
					</div>
                        </div>
                    </div>
                    <!-- Column ends -->
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table10">
                            <div class="card-header flex-wrap d-flex justify-content-between">
								<div>
									<h4 class="card-title">Table Stripped</h4>
									<p class="m-0 subtitle">Add class <code>table stripeed</code> with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-7" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-7" data-bs-toggle="tab" data-bs-target="#solidbackground" type="button" role="tab" aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-7" data-bs-toggle="tab" data-bs-target="#solidbackground-html" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
							<div class="tab-content" id="myTabContent-7">
								<div class="tab-pane fade show active" id="solidbackground" role="tabpanel" aria-labelledby="home-tab-7">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table table-bordered table-striped verticle-middle table-responsive-sm">
												<thead>
													<tr>
														<th scope="col">Task</th>
														<th scope="col">Progress</th>
														<th scope="col">Deadline</th>
														<th scope="col">Label</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Air Conditioner</td>
														<td>
															<div class="progress" style="background: rgba(127, 99, 244, .1)">
																<div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td>Apr 20,2018</td>
														<td><span class="badge badge-primary">70%</span>
														</td>
														<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"><i
																		class="fa fa-pencil color-muted"></i> </a><a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"><i
																		class="fa-solid fa-xmark text-danger"></i></a></span>
														</td>
													</tr>
													<tr>
														<td>Textiles</td>
														<td>
															<div class="progress" style="background: rgba(76, 175, 80, .1)">
																<div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td>May 27,2018</td>
														<td><span class="badge badge-success">70%</span>
														</td>
														<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"><i
																		class="fa fa-pencil color-muted"></i> </a><a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"><i
																		class="fa-solid fa-xmark text-danger"></i></a></span>
														</td>
													</tr>
													<tr>
														<td>Milk Powder</td>
														<td>
															<div class="progress" style="background: rgba(70, 74, 83, .1)">
																<div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td>May 18,2018</td>
														<td><span class="badge badge-dark">70%</span>
														</td>
														<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"><i
																		class="fa fa-pencil color-muted"></i> </a><a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"><i
																		class="fa-solid fa-xmark text-danger"></i></a></span>
														</td>
													</tr>
													<tr>
														<td>Boats</td>
														<td>
															<div class="progress" style="background: rgba(255, 193, 7, .1)">
																<div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
																</div>
															</div>
														</td>
														<td>Jun 28,2018</td>
														<td><span class="badge badge-warning">70%</span>
														</td>
														<td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"><i
																		class="fa fa-pencil color-muted"></i> </a><a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"><i
																		class="fa-solid fa-xmark text-danger"></i></a></span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="solidbackground-html" role="tabpanel" aria-labelledby="home-tab-7">
									<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">

&lt;div class="table-responsive"&gt;
											&lt;table class="table table-bordered table-striped verticle-middle table-responsive-sm"&gt;
												&lt;thead&gt;
													&lt;tr&gt;
														&lt;th scope="col"&gt;Task&lt;/th&gt;
														&lt;th scope="col"&gt;Progress&lt;/th&gt;
														&lt;th scope="col"&gt;Deadline&lt;/th&gt;
														&lt;th scope="col"&gt;Label&lt;/th&gt;
														&lt;th scope="col"&gt;Action&lt;/th&gt;
													&lt;/tr&gt;
												&lt;/thead&gt;
												&lt;tbody&gt;
													&lt;tr&gt;
														&lt;td&gt;Air Conditioner&lt;/td&gt;
														&lt;td&gt;
															&lt;div class="progress" style="background: rgba(127, 99, 244, .1)"&gt;
																&lt;div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td&gt;Apr 20,2018&lt;/td&gt;
														&lt;td&gt;&lt;span class="badge badge-primary"&gt;70%&lt;/span&gt;
														&lt;/td&gt;
														&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"&gt;&lt;i
																		class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"&gt;&lt;i
																		class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
														&lt;/td&gt;
													&lt;/tr&gt;
													&lt;tr&gt;
														&lt;td&gt;Textiles&lt;/td&gt;
														&lt;td&gt;
															&lt;div class="progress" style="background: rgba(76, 175, 80, .1)"&gt;
																&lt;div class="progress-bar bg-success" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td&gt;May 27,2018&lt;/td&gt;
														&lt;td&gt;&lt;span class="badge badge-success"&gt;70%&lt;/span&gt;
														&lt;/td&gt;
														&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"&gt;&lt;i
																		class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"&gt;&lt;i
																		class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
														&lt;/td&gt;
													&lt;/tr&gt;
													&lt;tr&gt;
														&lt;td&gt;Milk Powder&lt;/td&gt;
														&lt;td&gt;
															&lt;div class="progress" style="background: rgba(70, 74, 83, .1)"&gt;
																&lt;div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td&gt;May 18,2018&lt;/td&gt;
														&lt;td&gt;&lt;span class="badge badge-dark"&gt;70%&lt;/span&gt;
														&lt;/td&gt;
														&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"&gt;&lt;i
																		class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"&gt;&lt;i
																		class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
														&lt;/td&gt;
													&lt;/tr&gt;
													&lt;tr&gt;
														&lt;td&gt;Boats&lt;/td&gt;
														&lt;td&gt;
															&lt;div class="progress" style="background: rgba(255, 193, 7, .1)"&gt;
																&lt;div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"&gt;&lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
																&lt;/div&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td&gt;Jun 28,2018&lt;/td&gt;
														&lt;td&gt;&lt;span class="badge badge-warning"&gt;70%&lt;/span&gt;
														&lt;/td&gt;
														&lt;td&gt;&lt;span&gt;&lt;a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
																	data-placement="top" title="Edit"&gt;&lt;i
																		class="fa fa-pencil color-muted"&gt;&lt;/i&gt; &lt;/a&gt;&lt;a
																	href="javascript:void(0);" data-bs-toggle="tooltip"
																	data-placement="top" title="btn-close"&gt;&lt;i
																		class="fa-solid fa-xmark text-danger"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
														&lt;/td&gt;
													&lt;/tr&gt;
												&lt;/tbody&gt;
											&lt;/table&gt;
										&lt;/div&gt;
</code></pre>

									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- Column ends -->
					<!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card"  id="bootstrap-table11">
                            <div class="card-header flex-wrap d-flex justify-content-between ">
								<div>
									<h4 class="card-title">Responsive Table</h4>
									<p class="m-0 subtitle">Add class <code>responsive table</code> with <code>bootstrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-8" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-8" data-bs-toggle="tab" data-bs-target="#activebackground" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-8" data-bs-toggle="tab" data-bs-target="#activebackground-html" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
							<div class="tab-content" id="myTabContent-8">
								<div class="tab-pane fade show active" id="activebackground" role="tabpanel" aria-labelledby="home-tab-8">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table header-border table-responsive-sm">
												<thead>
													<tr>
														<th>Invoice</th>
														<th>User</th>
														<th>Date</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Country</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="javascript:void();">Order #26589</a>
														</td>
														<td>Herman Beck</td>
														<td><span class="text-muted">Oct 16, 2017</span>
														</td>
														<td>$45.00</td>
														<td><span class="badge badge-success">Paid</span>
														</td>
														<td>EN</td>
													</tr>
													<tr>
														<td><a href="javascript:void();">Order #58746</a>
														</td>
														<td>Mary Adams</td>
														<td><span class="text-muted">Oct 12, 2017</span>
														</td>
														<td>$245.30</td>
														<td><span class="badge badge-info light">Shipped</span>
														</td>
														<td>CN</td>
													</tr>
													<tr>
														<td><a href="javascript:void();">Order #98458</a>
														</td>
														<td>Caleb Richards</td>
														<td><span class="text-muted">May 18, 2017</span>
														</td>
														<td>$38.00</td>
														<td><span class="badge badge-danger">Shipped</span>
														</td>
														<td>AU</td>
													</tr>
													<tr>
														<td><a href="javascript:void();">Order #32658</a>
														</td>
														<td>June Lane</td>
														<td><span class="text-muted">Apr 28, 2017</span>
														</td>
														<td>$77.99</td>
														<td><span class="badge badge-success">Paid</span>
														</td>
														<td>FR</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="activebackground-html" role="tabpanel" aria-labelledby="home-tab-8">
									<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
&lt;table class="table header-border table-responsive-sm"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Invoice&lt;/th&gt;
			&lt;th&gt;User&lt;/th&gt;
			&lt;th&gt;Date&lt;/th&gt;
			&lt;th&gt;Amount&lt;/th&gt;
			&lt;th&gt;Status&lt;/th&gt;
			&lt;th&gt;Country&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;&lt;a href="javascript:void();"&gt;Order #26589&lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;Herman Beck&lt;/td&gt;
			&lt;td&gt;&lt;span class="text-muted"&gt;Oct 16, 2017&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;$45.00&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-success"&gt;Paid&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;EN&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;&lt;a href="javascript:void();"&gt;Order #58746&lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;Mary Adams&lt;/td&gt;
			&lt;td&gt;&lt;span class="text-muted"&gt;Oct 12, 2017&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;$245.30&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-info light"&gt;Shipped&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;CN&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;&lt;a href="javascript:void();"&gt;Order #98458&lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;Caleb Richards&lt;/td&gt;
			&lt;td&gt;&lt;span class="text-muted"&gt;May 18, 2017&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;$38.00&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-danger"&gt;Shipped&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;AU&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;&lt;a href="javascript:void();"&gt;Order #32658&lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;June Lane&lt;/td&gt;
			&lt;td&gt;&lt;span class="text-muted"&gt;Apr 28, 2017&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;$77.99&lt;/td&gt;
			&lt;td&gt;&lt;span class="badge badge-success"&gt;Paid&lt;/span&gt;
			&lt;/td&gt;
			&lt;td&gt;FR&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
										</code></pre>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- Column ends -->
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card " id="bootstrap-table12">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Heading With Background</h4>
                                	<p class="m-0 subtitle">Add <code>heading with background</code> and <code>heading</code> class with <code>bootsrtap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-9" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-9" data-bs-toggle="tab" data-bs-target="#headerShadow" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-9" data-bs-toggle="tab" data-bs-target="#headerShadow-html" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
							</div>

							<div class="tab-content" id="myTabContent-9">
								<div class="tab-pane fade show active" id="headerShadow" role="tabpanel" aria-labelledby="home-tab-9">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table">
												<thead class="thead-info">
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th>2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th>3</th>
														<td>Larry</td>
														<td>the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="headerShadow-html" role="tabpanel" aria-labelledby="home-tab-9">
									<div class="card-body pt-0 code-area">
<pre class="mb-0"><code class="language-html">

&lt;div class="table-responsive"&gt;
&lt;table class="table"&gt;
	&lt;thead class="thead-info"&gt;
		&lt;tr&gt;
			&lt;th scope="col"&gt;#&lt;/th&gt;
			&lt;th scope="col"&gt;First&lt;/th&gt;
			&lt;th scope="col"&gt;Last&lt;/th&gt;
			&lt;th scope="col"&gt;Handle&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;th&gt;1&lt;/th&gt;
			&lt;td&gt;Mark&lt;/td&gt;
			&lt;td&gt;Otto&lt;/td&gt;
			&lt;td&gt;@mdo&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;2&lt;/th&gt;
			&lt;td&gt;Jacob&lt;/td&gt;
			&lt;td&gt;Thornton&lt;/td&gt;
			&lt;td&gt;@fat&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;3&lt;/th&gt;
			&lt;td&gt;Larry&lt;/td&gt;
			&lt;td&gt;the Bird&lt;/td&gt;
			&lt;td&gt;@twitter&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
</code></pre>
									</div>
								</div>
							</div>

                        </div>
                    </div>
                    <!-- Column ends -->
					<!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table13">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Primary Table</h4>
                                	<p class="m-0 subtitle">Add <code>primary table</code> class with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-10" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-10" data-bs-toggle="tab" data-bs-target="#roundedStylish" type="button" role="tab"  aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-10" data-bs-toggle="tab" data-bs-target="#roundedStylish-html" type="button" role="tab"  aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
						<div class="tab-content" id="myTabContent-10">
							<div class="tab-pane fade show active" id="roundedStylish" role="tabpanel" aria-labelledby="home-tab-10">
								<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table primary-table-bordered">
												<thead class="thead-primary">
													<tr>
														<th scope="col">#</th>
														<th scope="col">First</th>
														<th scope="col">Last</th>
														<th scope="col">Handle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>Mark</td>
														<td>Otto</td>
														<td>@mdo</td>
													</tr>
													<tr>
														<th>2</th>
														<td>Jacob</td>
														<td>Thornton</td>
														<td>@fat</td>
													</tr>
													<tr>
														<th>3</th>
														<td>Larry</td>
														<td>the Bird</td>
														<td>@twitter</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
							</div>
							<div class="tab-pane fade" id="roundedStylish-html" role="tabpanel" aria-labelledby="home-tab-10">
								<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
	&lt;table class="table primary-table-bordered"&gt;
		&lt;thead class="thead-primary"&gt;
			&lt;tr&gt;
				&lt;th scope="col"&gt;#&lt;/th&gt;
				&lt;th scope="col"&gt;First&lt;/th&gt;
				&lt;th scope="col"&gt;Last&lt;/th&gt;
				&lt;th scope="col"&gt;Handle&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;
		&lt;tbody&gt;
			&lt;tr&gt;
				&lt;th&gt;1&lt;/th&gt;
				&lt;td&gt;Mark&lt;/td&gt;
				&lt;td&gt;Otto&lt;/td&gt;
				&lt;td&gt;@mdo&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;2&lt;/th&gt;
				&lt;td&gt;Jacob&lt;/td&gt;
				&lt;td&gt;Thornton&lt;/td&gt;
				&lt;td&gt;@fat&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;3&lt;/th&gt;
				&lt;td&gt;Larry&lt;/td&gt;
				&lt;td&gt;the Bird&lt;/td&gt;
				&lt;td&gt;@twitter&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;</code></pre>

								</div>
							</div>
						</div>
                        </div>
                    </div>
                    <!-- Column ends -->
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table14">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Primary Table Hover</h4>
                                	<p class="m-0 subtitle">Add <code>primary table hover</code> class with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-11" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-11" data-bs-toggle="tab" data-bs-target="#gradient" type="button" role="tab" aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-11" data-bs-toggle="tab" data-bs-target="#gradient-html" type="button" role="tab" aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
						<div class="tab-content" id="myTabContent-11">
							<div class="tab-pane fade show active" id="gradient" role="tabpanel" aria-labelledby="home-tab-11">
								<div class="card-body pt-0">
									<div class="table-responsive">
										<table class="table primary-table-bg-hover">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">First</th>
													<th scope="col">Last</th>
													<th scope="col">Handle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th>1</th>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<th>2</th>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>
												<tr>
													<th>3</th>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
												</tr>
												<tr>
													<th>4</th>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
												</tr>
												<tr>
													<th>5</th>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
												</tr>
												<tr>
													<th>5</th>
													<td>Larry</td>
													<td>the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade " id="gradient-html" role="tabpanel" aria-labelledby="home-tab-11">
								<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
	&lt;div class="table-responsive"&gt;
	&lt;table class="table primary-table-bg-hover"&gt;
		&lt;thead&gt;
			&lt;tr&gt;
				&lt;th scope="col"&gt;#&lt;/th&gt;
				&lt;th scope="col"&gt;First&lt;/th&gt;
				&lt;th scope="col"&gt;Last&lt;/th&gt;
				&lt;th scope="col"&gt;Handle&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;
		&lt;tbody&gt;
			&lt;tr&gt;
				&lt;th&gt;1&lt;/th&gt;
				&lt;td&gt;Mark&lt;/td&gt;
				&lt;td&gt;Otto&lt;/td&gt;
				&lt;td&gt;@mdo&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;2&lt;/th&gt;
				&lt;td&gt;Jacob&lt;/td&gt;
				&lt;td&gt;Thornton&lt;/td&gt;
				&lt;td&gt;@fat&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;3&lt;/th&gt;
				&lt;td&gt;Larry&lt;/td&gt;
				&lt;td&gt;the Bird&lt;/td&gt;
				&lt;td&gt;@twitter&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;4&lt;/th&gt;
				&lt;td&gt;Larry&lt;/td&gt;
				&lt;td&gt;the Bird&lt;/td&gt;
				&lt;td&gt;@twitter&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;5&lt;/th&gt;
				&lt;td&gt;Larry&lt;/td&gt;
				&lt;td&gt;the Bird&lt;/td&gt;
				&lt;td&gt;@twitter&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;th&gt;5&lt;/th&gt;
				&lt;td&gt;Larry&lt;/td&gt;
				&lt;td&gt;the Bird&lt;/td&gt;
				&lt;td&gt;@twitter&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;
</code></pre>

								</div>
							</div>
						</div>
                        </div>
                    </div>
					<div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table15">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Contextual Table</h4>
                                	<p class="m-0 subtitle">Add <code>contextual table</code> class with <code>bootsrap-table</code></p>
								</div>
								<ul class="nav nav-tabs dzm-tabs" id="myTab-12" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active " id="home-tab-12" data-bs-toggle="tab" data-bs-target="#gradient1" type="button" role="tab" aria-selected="true">Preview</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link " id="profile-tab-12" data-bs-toggle="tab" data-bs-target="#gradient-html1" type="button" role="tab" aria-selected="false">HTML</button>
									</li>
								</ul>
                            </div>
						<div class="tab-content" id="myTabContent-12">
							<div class="tab-pane fade show active" id="gradient1" role="tabpanel" aria-labelledby="home-tab-12">
								<div class="card-body pt-0">
									<div class="table-responsive">
										<table class="table header-border" style="min-width: 500px;">
											<thead>
												<tr>
													<th>#</th>
													<th>Column heading</th>
													<th>Column heading</th>
													<th>Column heading</th>
												</tr>
											</thead>
											<tbody>
												<tr class="table-active">
													<td>1</td>
													<td>Column content</td>
													<td>Column content</td>
													<td>Column content</td>
												</tr>
												<tr class="table-primary">
													<td>1</td>
													<td>Column content</td>
													<td>Column content</td>
													<td>Column content</td>
												</tr>
												<tr class="table-success">
													<td>2</td>
													<td>Column content</td>
													<td>Column content</td>
													<td>Column content</td>
												</tr>
												<tr class="table-info">
													<td>3</td>
													<td>Column content</td>
													<td>Column content</td>
													<td>Column content</td>
												</tr>
												<tr class="table-warning">
													<td>4</td>
													<td>Column content</td>
													<td>Column content</td>
													<td>Column content</td>
												</tr>
												<tr class="table-danger">
													<td>5</td>
													<td>Column content</td>
													<td>Column content</td>
													<td>Column content</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade " id="gradient-html1" role="tabpanel" aria-labelledby="home-tab-12">
								<div class="card-body pt-0 p-0 code-area">
<pre class="mb-0"><code class="language-html">
&lt;div class="table-responsive"&gt;
	&lt;table class="table header-border" style="min-width: 500px;"&gt;
		&lt;thead&gt;
			&lt;tr&gt;
				&lt;th&gt;#&lt;/th&gt;
				&lt;th&gt;Column heading&lt;/th&gt;
				&lt;th&gt;Column heading&lt;/th&gt;
				&lt;th&gt;Column heading&lt;/th&gt;
			&lt;/tr&gt;
		&lt;/thead&gt;
		&lt;tbody&gt;
			&lt;tr class="table-active"&gt;
				&lt;td&gt;1&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr class="table-primary"&gt;
				&lt;td&gt;1&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr class="table-success"&gt;
				&lt;td&gt;2&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr class="table-info"&gt;
				&lt;td&gt;3&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr class="table-warning"&gt;
				&lt;td&gt;4&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr class="table-danger"&gt;
				&lt;td&gt;5&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
				&lt;td&gt;Column content&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/tbody&gt;
	&lt;/table&gt;
&lt;/div&gt;</code></pre>

								</div>
							</div>
						</div>
                        </div>
                    </div>
                    <!-- Column ends -->

				</div>
					</div>

						<div class="demo-right ">
							<div class="demo-right-inner" id="right-sidebar">
								<h4 class="title">Bootstrap Table</h4>
								<div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
									<ul class="navbar-nav nav" id="menu-bar">
										<li><a href="#bootstrap-table1" 	class="scroll ">Recent Payments Queue</a></li>
										<li><a href="#bootstrap-table2"		class="scroll ">Exam Toppers</a></li>
										<li><a href="#bootstrap-table3"		class="scroll ">Basic</a></li>
										<li><a href="#bootstrap-table4" 	class="scroll ">Table Striped</a></li>
										<li><a href="#bootstrap-table5" 	class="scroll ">Table Bordered</a></li>
										<li><a href="#bootstrap-table6" 	class="scroll ">Table Hover</a></li>
										<li><a href="#bootstrap-table7" 	class="scroll ">Hover Table</a></li>
										<li><a href="#bootstrap-table8" 	class="scroll ">Table Bordered</a></li>
										<li><a href="#bootstrap-table9" 	class="scroll ">Bordered Table</a></li>
										<li><a href="#bootstrap-table10" 	class="scroll ">Table Stripped</a></li>
										<li><a href="#bootstrap-table11" 	class="scroll ">Responsive Table</a></li>
										<li><a href="#bootstrap-table12" 	class="scroll ">Heading With Background</a></li>
										<li><a href="#bootstrap-table13" 	class="scroll ">Primary Table</a></li>
										<li><a href="#bootstrap-table14" 	class="scroll ">Primary Table Hover</a></li>
										<li><a href="#bootstrap-table15" 	class="scroll ">Contextual Table</a></li>


									</ul>
								</div>
							</div>
						</div>
					</div>
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


