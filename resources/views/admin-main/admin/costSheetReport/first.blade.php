@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">COSTSHEET Report : Job No :</a></li>
        </ol>
        <a href="{{ url('/admin/SalesInvoice') }}" class="text-primary">Go -></a>
    </div>
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Activity Type:</label>
                            <div class="col-sm-6">
                                <div class="d-flex gap-3">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="lcl">
                                        <label class="form-check-label" for="lcl">
                                            AIR IMPORTS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="fcl20">
                                        <label class="form-check-label" for="fcl20">
                                            AIR EXPORTS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="fcl20">
                                        <label class="form-check-label" for="fcl20">
                                            SEA IMPORTS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="fcl20">
                                        <label class="form-check-label" for="fcl20">
                                            SEA EXPORTS
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Job No:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2" placeholder="Select">
                                                    <option value="vessel1">AI/BSCPL/2275/2025-26</option>
                                                    <option value="vessel2">AI/BSCPL/2276/2025-26</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary btn-sm">GO TO IMPORT BL</button>
                        </div>
                    </div>
                    <div class="col-xl-6 active-p">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects shorting">
            
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">CostSheet Report</h4>
                                    </div>
                                    <table id="projects-tblss" class="table ItemsCheckboxSec">
                                        <thead>
                                            <tr>
                                                <th>No Record Found in Sale</th>
                                                <th></th>
                                                <th></th>
                                                <th>No Record Found in Purchase</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>TOTAL RECEIVABLES:</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>TOTAL PAYABLES:</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>NET PROFIT/(-)LOSS:</td>
                                                <td>0.000</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>(%)PROFIT/(-)LOSS:</td>
                                                <td>NaN%</td>
                                                <td></td>
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
