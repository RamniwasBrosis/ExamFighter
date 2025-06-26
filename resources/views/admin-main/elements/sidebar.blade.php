<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">YOUR COMPANY</li>
            <li><a href="{{ url('admin/dashboard') }}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a href="{{ url('admin/Users') }}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9732 2.52102H7.0266C4.25735 2.52102 2.52118 4.48177 2.52118 7.25651V14.7438C2.52118 17.5186 4.2491 19.4793 7.0266 19.4793H14.9723C17.7507 19.4793 19.4795 17.5186 19.4795 14.7438V7.25651C19.4795 4.48177 17.7507 2.52102 14.9732 2.52102Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.73657 11.0002L9.91274 13.1754L14.2632 8.82493" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Users</span>
                </a>
            </li>



            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Paper History</span>
                </a>
                {{-- <ul aria-expanded="false">
                    <li><a href="{{ url('admin/LoadingList') }}">Loading List</a></li>
            <li><a href="{{ url('admin/CostSheetReport') }}">CostSheet Report</a></li>
            <li><a href="{{ url('admin/SalesOutstanding') }}">Sales Outstanding</a></li>
            <li><a href="{{ url('admin/PurchaseTDSReport') }}">Purchase TDS Report</a></li>
            <li><a href="{{ url('admin/SacSummaryReport') }}">Sac Summary Report</a></li>
            <li><a href="{{ url('admin/SalesTDSReport') }}">Sales TDS Report</a></li>
            <li><a href="{{ url('admin/DSRReport') }}">DSR Report</a></li>
            <li><a href="{{ url('admin/PurchaseOutstanding') }}">Purchase Outstanding</a></li>
            <li><a href="{{ url('admin/SallesRegister') }}">Salles Register</a></li>
            <li><a href="{{ url('admin/GstPayableReport') }}">Gst Payable Report</a></li>
            <li><a href="{{ url('admin/PurchaseRegister') }}">Purchase Register</a></li>
            <li><a href="{{ url('admin/ProductivityReport') }}">Productivity Report</a></li>
            <li><a href="{{ url('admin/DeliveryAdviceReport') }}">Delivery Advice Report</a></li>
            <li><a href="{{ url('admin/ReceiptLedger') }}">Receipt Ledger</a></li>
            <li><a href="{{ url('admin/PurchaseLedger') }}">Purchase Ledger</a></li>
            <li><a href="#">Report Enquiry</a></li>

            <!-- Corrected operations menu -->
            <li class="">
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <span class="nav-text">Tally Excel Transfer</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/Sales') }}">Sales</a></li>
                    <li><a href="{{ url('admin/Purchase') }}">Purchase</a></li>
                </ul>
            </li>
        </ul> --}}
        </li>

        <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Payment History</span>
            </a>
            {{-- <ul aria-expanded="false">
                <li><a href="{{ url('admin/Booking') }}">Booking</a></li>
        <li><a href="{{ url('admin/Enquiry') }}">Enquiry</a></li>
        <li><a href="{{ url('admin/JobMaster') }}">Job Master</a></li>
        <li><a href="{{ url('admin/AirImport') }}">Air Import</a></li>
        <li><a href="{{ url('admin/AirExport') }}">Air Export</a></li>
        <li><a href="{{ url('admin/JobOpenclose') }}">Job Open close</a></li>
        <li><a href="{{ url('admin/PackingList') }}">Packing List</a></li>
        <li><a href="{{ url('admin/SeaImport') }}">Sea Import</a></li>
        <li><a href="{{ url('admin/SeaExport') }}">See Export</a></li>
        <!-- Corrected operations menu -->
        <li class="">
            <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                <span class="nav-text">Accounts</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/SalesInvoice') }}">Sales Invoice</a></li>
                <li><a href="{{ url('admin/PurchaseInvoice') }}">Purchase Invoice</a></li>
                <li><a href="{{ url('admin/ProformaInvoice') }}">Proforma Invoice</a></li>
                <li><a href="{{ url('admin/Receipt') }}">Receipt</a></li>
                <li><a href="{{ url('admin/PurchasePayment') }}">Purchase Payment</a></li>
                <li><a href="{{ url('admin/OnAccount') }}">OnAccount</a></li>
            </ul>
        </li>
        <li><a href="{{ url('admin/FileDownload') }}">File Download</a></li>
        <li><a href="{{ url('admin/SeeImportDataEntry') }}">See Import Data Entry</a></li>
        <li><a href="{{ url('admin/ExportBLDataEntry') }}">Export BL Data Entry</a></li>
        <li><a href="{{ url('admin/FixedCharge') }}">Fixed Charge</a></li>
        <li><a href="{{ url('admin/Transport') }}">Transport</a></li>
        </ul> --}}
        </li>

        <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Schools</span>
            </a>
            {{-- <ul aria-expanded="false">
                    <li><a href="{{ url('admin/Users') }}">Users</a></li>
        <li><a href="{{ url('admin/UserRole') }}">User Role</a></li>
        </ul> --}}
        </li>
        <li><a href="{{ url('admin/CompanySetting') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9732 2.52102H7.0266C4.25735 2.52102 2.52118 4.48177 2.52118 7.25651V14.7438C2.52118 17.5186 4.2491 19.4793 7.0266 19.4793H14.9723C17.7507 19.4793 19.4795 17.5186 19.4795 14.7438V7.25651C19.4795 4.48177 17.7507 2.52102 14.9732 2.52102Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.73657 11.0002L9.91274 13.1754L14.2632 8.82493" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Board of Education</span>
            </a>
        </li>
        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Class</span>
            </a>
        </li>
        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Subject</span>
            </a>
        </li>
        </li>
        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Chapter
                </span>
            </a>
        </li>

        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Topic
                </span>
            </a>
        </li>

        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Question Types</span>
            </a>
        </li>

        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Membership Plans</span>
            </a>
        </li>

        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Question Bank</span>
            </a>
        </li>

        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Paper Management</span>
            </a>
        </li>

        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Sliders</span>
            </a>
        </li>
        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Notifications</span>
            </a>
        </li>
        <li><a href="{{ url('admin/Branch') }}" class="" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Payment Gateway</span>
            </a>
        </li>



        </ul>
    </div>
</div>
