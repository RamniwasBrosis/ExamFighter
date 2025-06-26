@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Add New Branch</a></li>
        </ol>
        <a class="text-primary fs-13" href="{{ url('admin/Branch') }}">+ Back Branch</a>
    </div>
    <div class="container-fluid p-2">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create">
                            <div class="row form-material">
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Branch Code:<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Branch Name:<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Status:<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="default-select  form-control wide"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-info">Save</button>
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
