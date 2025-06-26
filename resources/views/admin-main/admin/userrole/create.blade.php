@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Add New Role</a></li>
        </ol>
        <a class="text-primary fs-13" href="{{ url('admin/UserRole') }}">+ Back Role</a>
    </div>
    <div class="container-fluid p-2">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create">
                            <div class="row form-material">
                                <div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
                                    <label class="form-label">Role Name:</label>
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" id="mdate">
                                </div>

                                <h4 class="heading">Rights:</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                    <label class="form-check-label" for="reverseCheck1">Select All</label>
                                </div>
                                <div class="table-responsive">
                                    <table id="role" class="table role-tble">
                                        <thead>
                                            <tr>
                                                <th>Module</th>
                                                <th>Sub-Module</th>
                                                <th>Sub-Sub-Module</th>
                                                <th class="text-end">Add</th>
                                                <th class="text-end">Edit</th>
                                                <th class="text-end">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><h4>MASTER</h4></td>
                                            </tr>
                                            <tr>
                                                <td>Masters</td>
                                                <td>Manage Vessel</td>
                                                <td>Manage Import Party</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox4"
                                                            required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label" for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Port</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox4"
                                                            required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label" for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Voyage</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox4"
                                                            required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Package</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Shipping Line</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Charges</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Container</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Container Size</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage BL Type</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Manage Import Party</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Manage Export Party</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h4>MEMBERS</h4></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Manage Exports</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Export Delivery Order</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Export BL</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Booking</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Sea Import</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Air Import</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Rate Updation(BL Wise)</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Status Update</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input"                                                             id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>File Download</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Accounts</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Sales Invoice</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Purchase Invoice</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Receipt</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" checked=""
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Purchase Payment</td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox4" required="">
                                                        <label class="form-check-label" for="customCheckBox4">Add</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-warning">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox5" required="">
                                                        <label class="form-check-label" for="customCheckBox5">Edit</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check custom-checkbox checkbox-danger">
                                                        <input type="checkbox" class="form-check-input" 
                                                            id="customCheckBox6" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox6">Delete</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
                                    <label class="form-label">Status:</label>
                                    <span class="text-danger">*</span>
                                    <select class="default-select  form-control wide"></select>
                                </div>
                                <div class="d-grid d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="button">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#smartwizard').smartWizard();
        });
    </script>
@endpush
