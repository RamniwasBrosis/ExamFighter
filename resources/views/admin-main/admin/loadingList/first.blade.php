@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Loading List</h5>
            </li>
        </ol>
        <a class="text-primary fs-13" href="{{ url('admin/ExportBLDataEntry') }}">Go -></a>
    </div>
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Vessel name:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2" placeholder="Select">
                                                    <option value="">Select</option>
                                                <option value="vessel1">AKINADA BRIDGE</option>
                                                <option value="vessel2">ALEXANDRIA BRIDGE</option>
                                                <option value="vessel3">ALS FAUNA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Voy_No:</label>
                                            <div class="col-sm-9">
                                                <div class="d-flex align-items-center">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Terminal Port:</label>
                                            <div class="col-sm-9">
                                                <div class="d-flex align-items-center">
                                                    <select class="default-select form-control wide me-2" placeholder="Select">
                                                    <option value="">Select</option>
                                                    <option value="vessel1">NHAVA SHEVA BMCT</option>
                                                    <option value="vessel2">NHAVA SHEVA NSICT</option>
                                                    <option value="vessel3">NHAVA SHEVA NSIGT</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                  <button class="btn btn-primary me-md-2 btn-sm" type="button">PREVIEW</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12 active-p">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects shorting">
            
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">SUBJECT : LOADING LIST</h4>
                                    </div>
                                    <table id="projects-tblss" class="table ItemsCheckboxSec">
                                        <thead>
                                            <tr>
                                                <th>Booking No</th>
                                                <th>CONTAINER NO.</th>
                                                <th>CONT SIZE</th>
                                                <th>TYPE</th>
                                                <th>VGM WT</th>
                                                <th>POL</th>
                                                <th>POD</th>
                                                <th>TEM</th>
                                                <th>REMARK( HUM & VENT)</th>
                                                <th>COMMODITY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1696</td>
                                                <td>1200</td>
                                                <td>87</td>
                                                <td>c</td>
                                                <td>c</td>
                                                <td>87</td>
                                                <td>MUMBAI</td>
                                                <td>SWEDEN</td>
                                                <td>ytfyku</td>
                                                <td>gfdhg</td>
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
@push('scripts')
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
 
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endpush
