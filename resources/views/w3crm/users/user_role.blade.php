@extends('layouts.default')
@section('content')
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Roles Listing</a></li>
					</ol>
             </div>
			<div class="container-fluid">
				<div class="row">
					<div class="d-flex align-items-center justify-content-between">
						<h4 class="heading mb-3">Account Setting</h4>
						<a class="btn btn-primary btn-sm mb-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add a role</a>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header py-3">
										<h4 class="heading mb-0">Personal</h4>
									</div>
									<div class="card-body px-0 py-2">
										<ul class="personal-info">
											<li><a href="javascript:void(0);"><i class="fa-solid fa-user text-primary me-2"></i> Profile</a></li>
											<li><a href="javascript:void(0);"><i class="fa-solid fa-lock text-primary me-2"></i> Password</a></li>
											<li><a href="javascript:void(0);"><i class="fa-solid fa-calendar-days text-primary me-2"></i> Date</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header py-3">
										<h4 class="heading mb-0">Company</h4>
									</div>
									<div class="card-body px-0 py-2">
										<ul class="personal-info">
											<li><a href="javascript:void(0);"><i class="fa-solid fa-building text-primary me-2"></i> Commpany Details</a></li>
											<li><a href="javascript:void(0);"><i class="fa-solid fa-user-plus text-primary me-2"></i> Team Members</a></li>
											<li><a href="javascript:void(0);"><i class="far fa-clock text-primary me-2"></i> Format setting</a></li>
											<li><a href="javascript:void(0);"><i class="fa-solid fa-briefcase text-primary me-2"></i> Job boards</a></li>
											<li><a href="javascript:void(0);"><i class="far fa-user text-primary me-2"></i> Positions</a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-times-circle text-danger me-2"></i>Rejections resions</a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-envelope text-primary me-2"></i>Automated message</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="row">
							<div class= "col-xl-12">
								<h4 class="heading mb-0"><i class="fa-solid fa-user-plus text-primary me-2 mb-3"></i> Job Management</h4>
								<div class="card h-auto">
									<div class="card-body p-0">
										<div class="table-responsive active-projects">
											<table id="projects-tbl" class="table">
												<thead>
													<tr>
														<th>Name</th>
														<th>Date Added</th>
														<th>Last active</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Abdullah Risher</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>22 March 2023</td>
														<td>Monday</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Bongani Femi</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Hakim Joy</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/profile/friends/f1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Lolonyo Chinyelu</p>
																	<span>demo11@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Malik Oba</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															18 january 2023
														</td>
														<td>
															Monday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Darius Addo</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 May 2023
														</td>
														<td>
															Monday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Zuri Hasani</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/profile/friends/f1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Amare mama </p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															23 May 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class= "col-xl-12">
								<h4 class="heading"><i class="fas fa-times-circle text-danger me-2"></i> Rejections resions</h4>
								<div class="card h-auto">
									<div class="card-body p-0">
										<div class="table-responsive active-projects">
											<table id="projects-tbl1" class="table">
												<thead>
													<tr>
														<th>Name</th>
														<th>Date Added</th>
														<th>Last active</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Abdullah Risher</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															22 March 2023
														</td>
														<td>
															Monday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Bongani Femi</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															<p class="mb-0 font-w500">Tuesday </p>
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Hakim Joy</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/profile/friends/f1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Lolonyo Chinyelu</p>
																	<span>demo11@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Malik Oba</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															18 january 2023
														</td>
														<td>
															<p class="mb-0 font-w500">Monday </p>
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Darius Addo</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 May 2023
														</td>
														<td>
															Monday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Zuri Hasani</p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															28 February 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{asset('/images/profile/friends/f1.jpg')}}" class="avatar avatar-md rounded-circle" alt="">
																<div class="ms-2">
																	<p class="mb-0 text-start text-black font-w500">Amare mama </p>
																	<span>demo@gmail.com</span>
																</div>
															</div>
														</td>
														<td>
															23 May 2023
														</td>
														<td>
															Tuesday
														</td>
														<td>
															<div class="action-button">
																<button type="button" class="btn btn-primary btn-icon-xxs"><i class="fas fa-pencil-alt"></i></button>
																<button type="button" class="btn btn-danger btn-icon-xxs"><i class="fas fa-trash-alt"></i></button>

															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
@endsection
@push('modals')
<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-header">
    <h5 class="modal-title" id="#gridSystemModal">Add a Role</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <div class="container-fluid">
        <div class="col-xl-12 mb-3">
            <label for="exampleFormControlInput1" class="form-label font-w500">Role Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Role Name">
        </div>
          <h4 class="heading">User Access levels</h4>
          <div class="table-responsive">
             <table id="role" class="table role-tble">
                <thead>
                    <tr>
                        <th>Entity</th>
                        <th class="text-end">Add</th>
                        <th class="text-end">Edit</th>
                        <th class="text-end">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>User Management	</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                <label class="form-check-label" for="customCheckBox4">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required="">
                                <label class="form-check-label" for="customCheckBox5">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox6" required="">
                                <label class="form-check-label" for="customCheckBox6">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Release</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input"  id="customCheckBox7" required="">
                                <label class="form-check-label" for="customCheckBox7">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                <label class="form-check-label" for="customCheckBox8">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" id="customCheckBox9" required="">
                                <label class="form-check-label" for="customCheckBox9">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Content Management</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input"  id="customCheckBox10" required="">
                                <label class="form-check-label" for="customCheckBox10">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox11" required="">
                                <label class="form-check-label" for="customCheckBox11">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" id="customCheckBox12" required="">
                                <label class="form-check-label" for="customCheckBox12">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Libabry Management</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" id="customCheckBox131" required="">
                                <label class="form-check-label" for="customCheckBox131">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox132" required="">
                                <label class="form-check-label" for="customCheckBox132">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox13" required="">
                                <label class="form-check-label" for="customCheckBox13">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Permissions for work items</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox14" required="">
                                <label class="form-check-label" for="customCheckBox14">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input"  id="customCheckBox15" required="">
                                <label class="form-check-label" for="customCheckBox15">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" id="customCheckBox16" required="">
                                <label class="form-check-label" for="customCheckBox16">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>User Management	</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox17" required="">
                                <label class="form-check-label" for="customCheckBox17">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox18" required="">
                                <label class="form-check-label" for="customCheckBox18">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox19" required="">
                                <label class="form-check-label" for="customCheckBox19">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Release</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox20" required="">
                                <label class="form-check-label" for="customCheckBox20">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox21" required="">
                                <label class="form-check-label" for="customCheckBox21">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox22" required="">
                                <label class="form-check-label" for="customCheckBox22">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Content Management</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox23" required="">
                                <label class="form-check-label" for="customCheckBox23">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox24" required="">
                                <label class="form-check-label" for="customCheckBox24">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox25" required="">
                                <label class="form-check-label" for="customCheckBox25">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Libabry Management</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox26" required="">
                                <label class="form-check-label" for="customCheckBox26">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox27" required="">
                                <label class="form-check-label" for="customCheckBox27">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox28" required="">
                                <label class="form-check-label" for="customCheckBox28">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Permissions for work items</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox29" required="">
                                <label class="form-check-label" for="customCheckBox29">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox30" required="">
                                <label class="form-check-label" for="customCheckBox30">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" id="customCheckBox31" required="">
                                <label class="form-check-label" for="customCheckBox31">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>User Management	</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox32" required="">
                                <label class="form-check-label" for="customCheckBox32">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox33" required="">
                                <label class="form-check-label" for="customCheckBox33">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" id="customCheckBox34" required="">
                                <label class="form-check-label" for="customCheckBox34">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Release</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox35" required="">
                                <label class="form-check-label" for="customCheckBox35">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox36" required="">
                                <label class="form-check-label" for="customCheckBox36">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox37" required="">
                                <label class="form-check-label" for="customCheckBox37">Delete</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Content Management</td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-primary">
                                <input type="checkbox" class="form-check-input" id="customCheckBox38" required="">
                                <label class="form-check-label" for="customCheckBox38">Add</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-warning">
                                <input type="checkbox" class="form-check-input"  id="customCheckBox39" required="">
                                <label class="form-check-label" for="customCheckBox39">Edit</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check custom-checkbox checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox40" required="">
                                <label class="form-check-label" for="customCheckBox40">Delete</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
             </table>
          </div>
            <div>
                <a href="javascript:void(0)" class="btn btn-light btn-sm" >Discard</a>
                <a href="javascript:void(0)" class="btn btn-primary btn-sm" >Submit</a>
            </div>
        </div>
    </div>
  </div>


@endpush
