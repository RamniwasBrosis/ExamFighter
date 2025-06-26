@extends('admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">MANAGE Job Master</h5></li>
    </ol>
    <a class="text-primary fs-13" href="{{url('admin/JobMaster/create')}}">+ Add Job Master</a>
</div>
<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header py-3 d-sm-flex d-block">
                    <h4 class="card-title mb-2">Job Master Details</h4>
                </div>
                <div class="card-header d-block pb-2">
                    <form class="row align-items-end">
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <label class="form-label">Search</label>
                            <input type="text" class="form-control" id="searchFilter">
                        </div>
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <label class="form-label">Status</label>
                            <select id="statusFilter" class="form-control default-select">
                                <option value="">All</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <label class="form-label">Department</label>
                            <select id="departmentFilter" class="form-control default-select">
                                <option value="">All</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Web Designer">Web Designer</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <label class="form-label">Gender</label>
                            <select id="genderFilter" class="form-control default-select">
                                <option value="">All</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <label class="form-label">Location</label>
                            <select id="locationFilter" class="form-control default-select">
                                <option value="">All</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <button id="applyFilter" class="btn btn-primary" type="button">Apply</button>
                            <button id="resetFilter" class="btn btn-danger light ms-2" type="button">Reset</button>
                        </div>
                    </form>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive active-projects style-1">
                        <table id="empoloyees-tblwrapper" class="table">
                            <thead>
                                <tr>
                                    <th>Job No</th>
                                    <th>Job Date</th>
                                    <th>Ref ID</th>
                                    <th>Activity</th>
                                    <th>Party Name</th>
                                    <th>Remarks</th>
                                    <th>Term</th>
                                    <th>Single_Multi</th>
                                    <th>finyear</th>
                                    <th>Insurance</th>
                                    <th>Clearance</th>
                                    <th>Transportation</th>
                                    <th>Booking Date</th>
                                    <th>Cargo Ready Date</th>
                                    <th>Pickup Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2277</td>
                                    <td>05/05/2025</td>
                                    <td>NOM</td>
                                    <td>AIREXP.FWD</td>
                                    <td>M/S. KINGWORLDS OVERSEAS & INDUSTRIES LIMITED</td>
                                    <td>FORWARDING</td>
                                    <td>PP</td>
                                    <td>Single Hbl</td>
                                    <td>2025-26</td>
                                    <td>N</td>
                                    <td>Y</td>
                                    <td>N</td>
                                    <td>05/05/2025</td>
                                    <td>05/05/2025</td>
                                    <td>05/05/2025</td>
                                    <td>
                                        <a class="badge badge-info light border-0" href="{{url('admin/JobMaster/{id}/edit')}}">Edit</a>
                                        <a class="badge badge-danger light border-0" href="#">Delete</a>
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

@endsection

