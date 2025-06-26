@extends('admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add New User</a></li>
    </ol>
    <a class="text-primary fs-13" href="{{url('admin/Users')}}">+ Back User</a>
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
                                <label class="col-sm-3 col-form-label"> Name:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Phone-Number<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Email ID:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Password:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Membership-type:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select class="default-select  form-control wide" placeholder="Select">
                                        <option value="Free">Free</option>
                                        <option value="Paid">Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">OTP:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="otp">
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Wallet_amount:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="wallet_amount">
                                </div>
                            </div>

                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Referral_code:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="referral_code">
                                </div>
                            </div>


                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Status:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select class="default-select  form-control wide" placeholder="Select">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Company:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select class="default-select  form-control wide" placeholder="Select"></select>
                                </div>
                            </div>
                            <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                <label class="col-sm-3 col-form-label">Status:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select class="default-select  form-control wide" placeholder="Select"></select>
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
