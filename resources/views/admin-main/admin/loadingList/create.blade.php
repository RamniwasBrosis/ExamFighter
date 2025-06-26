@extends('admin-main.layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">Export BL</a></li>
        </ol>
        <a href="{{ url('admin/LoadingList/index') }}" class="text-primary"><- Go Back</a>
    </div>
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Entry By:</label>
                            <div class="col-sm-9">
                                <div class="d-flex gap-3">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="lcl">
                                        <label class="form-check-label" for="lcl">
                                            Packinglist     
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="fcl20">
                                        <label class="form-check-label" for="fcl20">
                                            Nominated 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>General Details</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Job No:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">BookingNo:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Ocean_Vsl:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#AddNewVesselModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">MBL No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Enquiry Reference No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">FullJobNo:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">BookingDate:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Voy_No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="MBL Date">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">HBL No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="HBL Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h4>Cargo Deails</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Quantity:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Freight:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Gross_Wt:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Tare_Wt:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Movement:</label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">ETA_Date:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">CBM:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">PORT CUTOFF:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">DOCUMENT CUTOFF:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">REMARKS:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Package:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#AddNewPackageModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Frt_charges:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Net_Wt:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Volume:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Cargo_Type:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">ETD Date:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">SOB_Dt:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">SI CUTOFF:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">VGM CUTOFF:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h4>Overseas Agent Details</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Agent_Nm:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Issue Place:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Place Of Acceptance:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Stuffing Point:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Shipping:</label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">BL Issued Date:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">BL_Type:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No Of Origin:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Sales_Person:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">CHA:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Forwarder:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">VGM Issued Date:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h4>Party Details</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6 col-xxl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">SHIPPER:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Consignee:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-xxl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Notify:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Notify 2:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#partyDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h4>Port Details</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6 col-xxl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Loading Port:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#portDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Discharge Port:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#portDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Insurance:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">F.Premium.Amt:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Transportation:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-xxl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Receipt Port:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#portDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Delivery Port:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal" data-bs-target="#portDetailsModal">
                                                    <i class="bi bi-plus-lg">+</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Transportation Details:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Clearance:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Shipping Bill:</label>
                                            <div class="col-sm-9 d-flex align-items-center">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h4>Other Details</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-primary btn-sm" type="button">LOADING CONFIRMATION</button>
                                        <button class="btn btn-primary btn-sm" type="button">HBL PRINT</button>
                                        <button class="btn btn-warning btn-sm" type="button">Cancle</button>
                                        <button class="btn btn-primary btn-sm" type="button">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Cont_Hbl:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Gross Weight:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Total Package:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Ground Date:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Temp:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Cont_Job No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Container_No:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">CBM:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Cargo Type:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">VGM WT:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">SOC(Y/N):</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Commodity:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Size:</label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2" placeholder="Select"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Refer(Y/N):</label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2" placeholder="Select"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Agent Seal No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Imo Code:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Disposal:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Sector:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Cust_Seal No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">FCL/LCL:</label>
                                            <div class="col-sm-9">
                                                <select class="default-select form-control wide me-2"
                                                    placeholder="Select"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Net Weight:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Uno No:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Detent Date:</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Prev_Days:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-primary" type="button">Add CONTAINER</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h4>File Upload</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Choose File:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <div class="d-flex">
                                                    <input type="file" class="form-control me-2" />
                                                    <button type="button" class="btn btn-warning">UploadFile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-9">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Find PDF File:<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <div class="d-flex">
                                                    <input type="search" class="form-control me-2" />
                                                    <button type="button" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add New Vessel Models -->
    <div class="modal fade" id="AddNewVesselModal" tabindex="-1" aria-labelledby="oceanVslModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="oceanVslModalLabel">Add New PORT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="oceanVslForm">
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Vessel Name:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Vessel Call Sign:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">IMO Code:</label>
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
                            <button class="btn btn-outline-primary" type="button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Port Details -->
    <div class="modal fade" id="portDetailsModal" tabindex="-1" aria-labelledby="oceanVslModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="oceanVslModalLabel">Add New PORT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="oceanVslForm">
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Port Code:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Port Name:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">EDI Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">JNPT Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">NSICT Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">NSICT GROUP Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">GTI Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">GTI GROUP Code:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">NSI GT Code:</label>
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
                            <button class="btn btn-outline-primary" type="button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add new Package Modal -->
    <div class="modal fade" id="AddNewPackageModal" tabindex="-1" aria-labelledby="oceanVslModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="oceanVslModalLabel">Add New Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="oceanVslForm">
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Package Code:<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Description:</label>
                            <div class="col-sm-8">
                                <textarea class="form-control h-100" id="validationCustom04" rows="2"></textarea>
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
                            <button class="btn btn-outline-primary" type="button">Save</button>
                        </div>
                    </form>
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
                            <button class="btn btn-outline-primary" type="button">Save</button>
                        </div>
                    </form>
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
