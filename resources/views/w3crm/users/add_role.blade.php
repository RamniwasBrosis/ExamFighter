@extends('layouts.default')
@section('content')
<div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Roles</a></li>
        </ol>
    </div>
<div class="container">
    <div class="row">
        <h4 class="heading mb-3">Account Setting</h4>
        <div class="col-xl-3">
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
                                <li><a href="javascript:void(0);"><i class="fa-solid fa-calendar-days text-primary me-2"></i></a> Date</li>
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
        <div class="col-xl-9">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4 class="heading mb-0">Team Members</h4>
                                <span>Invitite or manage your origanisation's members.</span>
                            </div>

                        </div>
                        <div class="card-body p-0">
                            <div class="all_user">
                                <h4 class="mb-0 d-flex align-items-center heading">All Users<span class="badge badge-primary badge-sm ms-3">5</span></h4>
                                <h4 class="mb-0 text-primary heading">Users role manager</h4>
                            </div>
                            <div class="all_user1">
                                <span class="mb-0 heading">Actions</span>
                                <div class="d-flex member">
                                    <h4 class="heading mb-0">Member</h4>
                                    <h4 class="heading mb-0">Manager</h4>
                                    <h4 class="heading mb-0 pe-0">Admin</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="heading mb-0 manage"><i class="fa-solid fa-user-plus text-primary me-2 mb-3 "></i> Job Management</h4>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Create new job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox1" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox00300" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Edit job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input"  id="customCheckBox4" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox0066" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Atchive jobs</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox7" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox60001" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox008" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Atchive jobs</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox9" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox10" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Change jobs status</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox12" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox13" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox141" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <h4 class="heading mb-0  manage"><i class="far fa-user text-primary me-2 mb-3 "></i>Candidate Management</h4>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Create new job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox001" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox00200" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox003" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Edit job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input"  id="customCheckBox00400" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox005" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox66" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Atchive jobs</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox0007" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6000" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox0008" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Atchive jobs</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox00091" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox100" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox00011" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Change jobs status</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox00012" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox00013" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox14" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Create new job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox01" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox0022" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox33" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Edit job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input"  id="customCheckBox44" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox55" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox666" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Atchive jobs</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox77" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox8" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Atchive jobs</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox0009" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox1010" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1111" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Change jobs status</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox1212" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox1313" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1414" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <h4 class="heading mb-0  manage"><i class="far fa-user text-primary me-2 mb-3 "></i>Commpany Management</h4>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Create new job and stage</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox0001" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox002" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox3" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Import applications</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input"  id="customCheckBox004" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox500" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox6666" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Read message</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox777" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox00006" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox0088" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Edit user details</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox99" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox101" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox111" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-check">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class=" mb-0">Change jobs status</h6>
                                        <div class="d-flex">
                                            <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                <input type="checkbox" class="form-check-input" checked="" id="customCheckBox00121" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                <input type="checkbox" class="form-check-input"  checked="" id="customCheckBox0013" required="">
                                            </div>
                                            <div class="form-check custom-checkbox mb-3 checkbox-success me-0">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox0014" required="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
