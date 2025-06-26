@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Upload Download File</h5>
            </li>
        </ol>
    </div>
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="col-xl-6 col-sm-6 col-lg-4 m-3">
                        <input type="file" class="form-control" id="searchFilter">
                        <button type="button" class="btn btn-primary mt-3 btn-sm">UPLOAD FILE</button>
                    </div>
                    
                    <div class="card-header d-block pb-2">
                        <form class="row align-items-end">
                            <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                                <label class="form-label">Find File</label><span
                                class="text-danger">*</span>
                                <select id="locationFilter" class="form-control default-select">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                                <button id="applyFilter" class="btn btn-primary" type="button">Search</button>
                               
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects style-1">
                            <table id="empoloyees-tblwrapper" class="table">
                                <thead>
                                    <tr>
                                        <th>File Id</th>
                                        <th>File Name</th>
                                        <th>Download PDF</th>
                                        <th>Delete PDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>81778201042024INDEL4SB22030420242257.pdf</td>
                                        <td>
                                            <a href="#" class="text-success">Download</a>
                                        </td>
                                        <td>
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