@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Job Master</a></li>
        </ol>
        <a class="text-primary fs-13" href="{{ url('admin/JobMaster') }}">+ Back Job Master</a>
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
                                    <label class="col-sm-3 col-form-label">BL Issued By:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    Nominated
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    Enquiry
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Job No:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Job Date:<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Job Activity:<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="default-select form-control wide" placeholder="Select"></select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Job Party:<span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <select class="default-select form-control wide me-2" placeholder="Select"></select>
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#partyDetailsModal">
                                            <i class="bi bi-plus-lg">+</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Job Remarks:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Term:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Enquiry Reference No:</label>
                                    <div class="col-sm-9">
                                        <select class="default-select  form-control wide" placeholder="Select"></select>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Job Activity:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    Single Hbl
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    Multi Hbl
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Shipment Type:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    FCL
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    LCL
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    AIR
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Job Status:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    OPEN
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    CLOSED
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Insurance:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Clearance:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Transportation:</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-3">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lcl">
                                                <label class="form-check-label" for="lcl">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="fcl20">
                                                <label class="form-check-label" for="fcl20">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h3>Pre-Shipment Details</h3>
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-12">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Booking Date:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Cargo Ready Date:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Pickup Date:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-warning btn-sm">Cancle</button>
                                <button type="button" class="btn btn-primary btn-sm">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Party Details -->
    <div class="modal fade" id="partyDetailsModal" tabindex="-1" aria-labelledby="oceanVslModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="oceanVslModalLabel">Party</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="oceanVslForm">
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Party Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Party Name:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Address Line 1:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Address Line 2:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Address Line 3:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Address Line 4:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">City:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Pincode:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Party Type:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="default-select  form-control wide" placeholder="Select"></select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Contact Person:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Tel / Contact No:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">GSTIN NO:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">PAN No:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">CIN No:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Credit Days:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">TDS %:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Status:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="default-select  form-control wide" placeholder="Active"></select>
                            </div>
                        </div>
                        <div class="d-grid d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-primary" type="button">Update</button>
                        </div>
                    </form>
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
