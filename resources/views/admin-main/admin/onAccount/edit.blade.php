@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit OnAccount</a></li>
        </ol>
        <a class="text-primary fs-13" href="{{ url('admin/OnAccount') }}"><- Go Back</a>
    </div>
    <div class="container-fluid p-2">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create">
                            <div class="row form-material">
                                <div class="form-validation">
                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-xl-6 col-xxl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Date:<span
                                                        class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-6 col-xxl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Party Name:<span
                                                        class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <select class="default-select form-control wide" placeholder="Select"></select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Amount:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label">Balance Amount:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="button" class="btn btn-warning btn-sm">Cancle</button>
                                                <button type="button" class="btn btn-primary btn-sm">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
