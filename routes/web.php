<?php

use App\Http\Controllers\AdminMain\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\W3crmAdminController;
// Super Admin 
use App\Http\Controllers\AdminMain\BankController;
use App\Http\Controllers\AdminMain\SalesController;
use App\Http\Controllers\AdminMain\BlTypeController;
use App\Http\Controllers\AdminMain\BranchController;
use App\Http\Controllers\AdminMain\VoyageController;
// Admin 
use App\Http\Controllers\AdminMain\BookingController;
use App\Http\Controllers\AdminMain\ChargesController;
use App\Http\Controllers\AdminMain\EnquiryController;
use App\Http\Controllers\AdminMain\ReceiptController;
use App\Http\Controllers\AdminMain\PurchaseController;
use App\Http\Controllers\AdminMain\AirExportController;
use App\Http\Controllers\AdminMain\AirImportController;
use App\Http\Controllers\AdminMain\ContainerController;
use App\Http\Controllers\AdminMain\DSRReportController;
use App\Http\Controllers\AdminMain\JobMasterController;
use App\Http\Controllers\AdminMain\OnAccountController;
use App\Http\Controllers\AdminMain\SeaExportController;
use App\Http\Controllers\AdminMain\SeaImportController;
use App\Http\Controllers\AdminMain\TransportController;
use App\Http\Controllers\AdminMain\MasterBankController;
use App\Http\Controllers\AdminMain\MasterPortController;
use App\Http\Controllers\AdminMain\FixedChargeController;
use App\Http\Controllers\AdminMain\LoadingListController;
use App\Http\Controllers\AdminMain\MemberUsersController;
use App\Http\Controllers\AdminMain\PackingListController;
use App\Http\Controllers\AdminMain\FileDownloadController;
use App\Http\Controllers\AdminMain\JobOpencloseController;
use App\Http\Controllers\AdminMain\MasterBlTypeController;
use App\Http\Controllers\AdminMain\MasterChargeController;
use App\Http\Controllers\AdminMain\MasterVoyageController;
use App\Http\Controllers\AdminMain\SalesInvoiceController;
use App\Http\Controllers\AdminMain\ContainerSizeController;
use App\Http\Controllers\AdminMain\MasterPackageController;
use App\Http\Controllers\AdminMain\ReceiptLedgerController;
use App\Http\Controllers\AdminMain\ReportEnquiryController;
use App\Http\Controllers\SuperAdminMain\AdminFaqController;
use App\Http\Controllers\SuperAdminMain\InvoicesController;
use App\Http\Controllers\SuperAdminMain\PackagesController;
use App\Http\Controllers\AdminMain\CompanySettingController;
use App\Http\Controllers\AdminMain\MasterShippingController;
use App\Http\Controllers\AdminMain\PurchaseLedgerController;
use App\Http\Controllers\AdminMain\SalesTDSReportController;
use App\Http\Controllers\AdminMain\SallesRegisterController;
use App\Http\Controllers\AdminMain\Vessels\VesselController;
use App\Http\Controllers\SuperAdminMain\CompaniesController;
use App\Http\Controllers\AdminMain\CostSheetReportController;
use App\Http\Controllers\AdminMain\MasterContainerController;
use App\Http\Controllers\AdminMain\MembersUserRoleController;
use App\Http\Controllers\AdminMain\ProformaInvoiceController;
use App\Http\Controllers\AdminMain\PurchaseInvoiceController;
use App\Http\Controllers\AdminMain\PurchasePaymentController;
use App\Http\Controllers\AdminMain\GstPayableReportController;
use App\Http\Controllers\AdminMain\PurchaseRegisterController;
use App\Http\Controllers\AdminMain\SacSummaryReportController;
use App\Http\Controllers\AdminMain\SalesOutstandingController;
use App\Http\Controllers\AdminMain\ExportBLDataEntryController;
use App\Http\Controllers\AdminMain\MasterExportPartyController;
use App\Http\Controllers\AdminMain\MasterImportPartyController;
use App\Http\Controllers\AdminMain\Party\ExportPartyController;
use App\Http\Controllers\AdminMain\PurchaseTDSReportController;
use App\Http\Controllers\SuperAdminMain\FrontSettingController;
use App\Http\Controllers\AdminMain\ProductivityReportController;
use App\Http\Controllers\AdminMain\SeeImportDataEntryController;
use App\Http\Controllers\AdminMain\MasterContainerSizeController;
use App\Http\Controllers\AdminMain\PurchaseOutstandingController;
use App\Http\Controllers\AdminMain\DeliveryAdviceReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(W3crmAdminController::class)->group(function () {

    Route::middleware(['auth'])->group(function() {
        
        Route::get('/admin/dashboard','dashboard_2')->name('dashboard');
        Route::get('/super-admin/dashboard', 'dashboard');
        
        Route::get('/page-error-400 ','page_error_400');
        Route::get('page-error-403 ','page_error_403');
        Route::get('page-error-404 ','page_error_404');
        Route::get('page-error-500 ','page_error_500');
        Route::get('page-error-503 ','page_error_503');
        
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::get('page-forgot-password ','page_forgot_password');
    Route::get('/','page_login')->name('login');
    Route::get('register ','page_register');
    
    
});

Route::post('/admin/login', [W3crmAdminController::class, 'login'])->name('admin.login');

Route::get('/admin/dashboard',[W3crmAdminController::class, 'dashboard_2'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    // Super Admin Route
    Route::get('/super-admin/packages', [PackagesController::class, 'index']);
    Route::get('/super-admin/packages/create', [PackagesController::class, 'create']);
    Route::get('/super-admin/packages/{id}/edit', [PackagesController::class, 'edit']);
    
    Route::get('/super-admin/companies', [CompaniesController::class, 'index']);
    Route::get('/super-admin/companies/create', [CompaniesController::class, 'create']);
    Route::get('/super-admin/companies/{id}/edit', [CompaniesController::class, 'edit']);
    
    Route::get('/super-admin/invoices', [InvoicesController::class, 'index']);
    
    Route::get('/super-admin/admin-faq', [AdminFaqController::class, 'index']);
    Route::get('/super-admin/admin-faq/create', [AdminFaqController::class, 'create']);
    Route::get('/super-admin/admin-faq/{id}/edit', [AdminFaqController::class, 'edit']);
    
    Route::get('/super-admin/contact-setting', [FrontSettingController::class, 'contactsetting']);
    Route::get('/super-admin/footer-setting', [FrontSettingController::class, 'footersetting']);
    
    
    // Admin Route
    Route::group(['prefix' => 'admin'], function () {
    
        Route::resource('vessels', VesselController::class);
        Route::resource('ports', MasterPortController::class);
        Route::resource('shippings', MasterShippingController::class);

        Route::resource('voyages', MasterVoyageController::class);
        Route::resource('packages', MasterPackageController::class);

        Route::resource('import-parties', MasterImportPartyController::class);
        Route::resource('export-parties', MasterExportPartyController::class);

        Route::resource('charges', MasterChargeController::class);
        Route::resource('containers', MasterContainerController::class);
        Route::resource('container-sizes', MasterContainerSizeController::class);
        Route::resource('bl-types', MasterBlTypeController::class);
        Route::resource('banks', MasterBankController::class);
        
    });

    // Route::get('/admin/voyage', [VoyageController::class, 'index']);
    // Route::get('/admin/voyage/create', [VoyageController::class, 'create']);
    // Route::get('/admin/voyage/{id}/edit', [VoyageController::class, 'edit']);
    
    // Route::get('/admin/package', [PackageController::class, 'index']);
    // Route::get('/admin/package/create', [PackageController::class, 'create']);
    // Route::get('/admin/package/{id}/edit', [PackageController::class, 'edit']);
        
    // Route::get('/admin/ImportParty', [ImportPartyController::class, 'index']);
    // Route::get('/admin/ImportParty/create', [ImportPartyController::class, 'create']);
    // Route::get('/admin/ImportParty/{id}/edit', [ImportPartyController::class, 'edit']);
    
    // Route::get('/admin/ExportParty', [ExportPartyController::class, 'index']);
    // Route::get('/admin/ExportParty/create', [ExportPartyController::class, 'create']);
    // Route::get('/admin/ExportParty/{id}/edit', [ExportPartyController::class, 'edit']);
    
    // Route::get('/admin/Charges', [ChargesController::class, 'index']);
    // Route::get('/admin/Charges/create', [ChargesController::class, 'create']);
    // Route::get('/admin/Charges/{id}/edit', [ChargesController::class, 'edit']);
    
    // Route::get('/admin/Container', [ContainerController::class, 'index']);
    // Route::get('/admin/Container/create', [ContainerController::class, 'create']);
    // Route::get('/admin/Container/{id}/edit', [ContainerController::class, 'edit']);
    
    // Route::get('/admin/ContainerSize', [ContainerSizeController::class, 'index']);
    // Route::get('/admin/ContainerSize/create', [ContainerSizeController::class, 'create']);
    // Route::get('/admin/ContainerSize/{id}/edit', [ContainerSizeController::class, 'edit']);
    
    // Route::get('/admin/BLType', [BlTypeController::class, 'index']);
    // Route::get('/admin/BLType/create', [BlTypeController::class, 'create']);
    // Route::get('/admin/BLType/{id}/edit', [BlTypeController::class, 'edit']);
    
    // Route::get('/admin/Bank', [BankController::class, 'index']);
    // Route::get('/admin/Bank/create', [BankController::class, 'create']);
    // Route::get('/admin/Bank/{id}/edit', [BankController::class, 'edit']);



    // user create route in exam fighter//

    Route::get('/admin/Users',[UserController::class, 'index']);
    Route::get('/admin/Users/create',[UserController::class,'create']);



    
    
    // Route::get('/admin/Users', [MemberUsersController::class, 'index']);
    // Route::get('/admin/Users/create', [MemberUsersController::class, 'create']);
    // Route::get('/admin/Users/{id}/edit', [MemberUsersController::class, 'edit']);
    
    Route::get('/admin/UserRole', [MembersUserRoleController::class, 'index']);
    Route::get('/admin/UserRole/create', [MembersUserRoleController::class, 'create']);
    Route::get('/admin/UserRole/{id}/edit', [MembersUserRoleController::class, 'edit']);
    
    Route::get('/admin/CompanySetting', [CompanySettingController::class, 'index']);
    Route::get('/admin/CompanySetting/create', [CompanySettingController::class, 'create']);
    Route::get('/admin/CompanySetting/{id}/edit', [CompanySettingController::class, 'edit']);
    
    Route::get('/admin/Branch', [BranchController::class, 'index']);
    Route::get('/admin/Branch/create', [BranchController::class, 'create']);
    Route::get('/admin/Branch/{id}/edit', [BranchController::class, 'edit']);
    
    Route::get('/admin/Booking', [BookingController::class, 'index']);
    Route::get('/admin/Booking/create', [BookingController::class, 'create']);
    Route::get('/admin/Booking/{id}/edit', [BookingController::class, 'edit']);
    
    Route::get('/admin/Enquiry', [EnquiryController::class, 'index']);
    Route::get('/admin/Enquiry/create', [EnquiryController::class, 'create']);
    Route::get('/admin/Enquiry/{id}/edit', [EnquiryController::class, 'edit']);
    
    Route::get('/admin/JobMaster', [JobMasterController::class, 'index']);
    Route::get('/admin/JobMaster/create', [JobMasterController::class, 'create']);
    Route::get('/admin/JobMaster/{id}/edit', [JobMasterController::class, 'edit']);
    
    Route::get('/admin/AirImport', [AirImportController::class, 'index']);
    Route::get('/admin/AirImport/create', [AirImportController::class, 'create']);
    Route::get('/admin/AirImport/{id}/edit', [AirImportController::class, 'edit']);
    
    Route::get('/admin/AirExport', [AirExportController::class, 'index']);
    Route::get('/admin/AirExport/create', [AirExportController::class, 'create']);
    Route::get('/admin/AirExport/{id}/edit', [AirExportController::class, 'edit']);
    
    Route::get('/admin/JobOpenclose', [JobOpencloseController::class, 'index']);
    Route::get('/admin/JobOpenclose/create', [JobOpencloseController::class, 'create']);
    Route::get('/admin/JobOpenclose/{id}/edit', [JobOpencloseController::class, 'edit']);
    
    Route::get('/admin/PackingList', [PackingListController::class, 'index']);
    Route::get('/admin/PackingList/create', [PackingListController::class, 'create']);
    Route::get('/admin/PackingList/{id}/edit', [PackingListController::class, 'edit']);
    
    Route::get('/admin/SeaImport', [SeaImportController::class, 'index']);
    Route::get('/admin/SeaImport/create', [SeaImportController::class, 'create']);
    Route::get('/admin/SeaImport/{id}/edit', [SeaImportController::class, 'edit']);
    
    Route::get('/admin/SeaExport', [SeaExportController::class, 'index']);
    Route::get('/admin/SeaExport/create', [SeaExportController::class, 'create']);
    Route::get('/admin/SeaExport/{id}/edit', [SeaExportController::class, 'edit']);
    
    Route::get('/admin/SalesInvoice', [SalesInvoiceController::class, 'index']);
    Route::get('/admin/SalesInvoice/create', [SalesInvoiceController::class, 'create']);
    Route::get('/admin/SalesInvoice/{id}/edit', [SalesInvoiceController::class, 'edit']);
    
    Route::get('/admin/PurchaseInvoice', [PurchaseInvoiceController::class, 'index']);
    Route::get('/admin/PurchaseInvoice/create', [PurchaseInvoiceController::class, 'create']);
    Route::get('/admin/PurchaseInvoice/{id}/edit', [PurchaseInvoiceController::class, 'edit']);
    
    Route::get('/admin/ProformaInvoice', [ProformaInvoiceController::class, 'index']);
    Route::get('/admin/ProformaInvoice/create', [ProformaInvoiceController::class, 'create']);
    Route::get('/admin/ProformaInvoice/{id}/edit', [ProformaInvoiceController::class, 'edit']);
    
    Route::get('/admin/Receipt', [ReceiptController::class, 'index']);
    Route::get('/admin/Receipt/create', [ReceiptController::class, 'create']);
    Route::get('/admin/Receipt/{id}/edit', [ReceiptController::class, 'edit']);
    
    Route::get('/admin/PurchasePayment', [PurchasePaymentController::class, 'index']);
    Route::get('/admin/PurchasePayment/create', [PurchasePaymentController::class, 'create']);
    Route::get('/admin/PurchasePayment/{id}/edit', [PurchasePaymentController::class, 'edit']);
    
    Route::get('/admin/OnAccount', [OnAccountController::class, 'index']);
    Route::get('/admin/OnAccount/create', [OnAccountController::class, 'create']);
    Route::get('/admin/OnAccount/{id}/edit', [OnAccountController::class, 'edit']);
    
    Route::get('/admin/FileDownload', [FileDownloadController::class, 'index']);
    Route::get('/admin/FileDownload/create', [FileDownloadController::class, 'create']);
    Route::get('/admin/FileDownload/{id}/edit', [FileDownloadController::class, 'edit']);
    
    Route::get('/admin/SeeImportDataEntry', [SeeImportDataEntryController::class, 'index']);
    Route::get('/admin/SeeImportDataEntry/create', [SeeImportDataEntryController::class, 'create']);
    Route::get('/admin/SeeImportDataEntry/{id}/edit', [SeeImportDataEntryController::class, 'edit']);
    
    Route::get('/admin/ExportBLDataEntry', [ExportBLDataEntryController::class, 'index']);
    Route::get('/admin/ExportBLDataEntry/create', [ExportBLDataEntryController::class, 'create']);
    Route::get('/admin/ExportBLDataEntry/{id}/edit', [ExportBLDataEntryController::class, 'edit']);
    
    Route::get('/admin/FixedCharge', [FixedChargeController::class, 'index']);
    Route::get('/admin/FixedCharge/create', [FixedChargeController::class, 'create']);
    Route::get('/admin/FixedCharge/{id}/edit', [FixedChargeController::class, 'edit']);
    
    Route::get('/admin/Transport', [TransportController::class, 'index']);
    Route::get('/admin/Transport/create', [TransportController::class, 'create']);
    Route::get('/admin/Transport/{id}/edit', [TransportController::class, 'edit']);
    
    Route::get('/admin/LoadingList', [LoadingListController::class, 'first']);
    Route::get('/admin/LoadingList/index', [LoadingListController::class, 'index']);
    Route::get('/admin/LoadingList/create', [LoadingListController::class, 'create']);
    Route::get('/admin/LoadingList/{id}/edit', [LoadingListController::class, 'edit']);
    
    Route::get('/admin/CostSheetReport', [CostSheetReportController::class, 'first']);
    Route::get('/admin/CostSheetReport/index', [CostSheetReportController::class, 'index']);
    Route::get('/admin/CostSheetReport/create', [CostSheetReportController::class, 'create']);
    Route::get('/admin/CostSheetReport/{id}/edit', [CostSheetReportController::class, 'edit']);
    
    Route::get('/admin/SalesOutstanding', [SalesOutstandingController::class, 'first']);
    Route::get('/admin/SalesOutstanding/index', [SalesOutstandingController::class, 'index']);
    Route::get('/admin/SalesOutstanding/create', [SalesOutstandingController::class, 'create']);
    Route::get('/admin/SalesOutstanding/{id}/edit', [SalesOutstandingController::class, 'edit']);
    
    Route::get('/admin/PurchaseTDSReport', [PurchaseTDSReportController::class, 'first']);
    Route::get('/admin/PurchaseTDSReport/index', [PurchaseTDSReportController::class, 'index']);
    Route::get('/admin/PurchaseTDSReport/create', [PurchaseTDSReportController::class, 'create']);
    Route::get('/admin/PurchaseTDSReport/{id}/edit', [PurchaseTDSReportController::class, 'edit']);
    
    Route::get('/admin/SacSummaryReport', [SacSummaryReportController::class, 'first']);
    // Route::get('/admin/SacSummaryReport/index', [SacSummaryReportController::class, 'index']);
    // Route::get('/admin/SacSummaryReport/create', [SacSummaryReportController::class, 'create']);
    // Route::get('/admin/SacSummaryReport/{id}/edit', [SacSummaryReportController::class, 'edit']);
    
    Route::get('/admin/SalesTDSReport', [SalesTDSReportController::class, 'first']);
    Route::get('/admin/SalesTDSReport/index', [SalesTDSReportController::class, 'index']);
    Route::get('/admin/SalesTDSReport/create', [SalesTDSReportController::class, 'create']);
    Route::get('/admin/SalesTDSReport/{id}/edit', [SalesTDSReportController::class, 'edit']);
    
    Route::get('/admin/DSRReport', [DSRReportController::class, 'first']);
    // Route::get('/admin/DSRReport/index', [DSRReportController::class, 'index']);
    // Route::get('/admin/DSRReport/create', [DSRReportController::class, 'create']);
    // Route::get('/admin/DSRReport/{id}/edit', [DSRReportController::class, 'edit']);
    
    Route::get('/admin/PurchaseOutstanding', [PurchaseOutstandingController::class, 'first']);
    Route::get('/admin/PurchaseOutstanding/index', [PurchaseOutstandingController::class, 'index']);
    Route::get('/admin/PurchaseOutstanding/create', [PurchaseOutstandingController::class, 'create']);
    Route::get('/admin/PurchaseOutstanding/{id}/edit', [PurchaseOutstandingController::class, 'edit']);
    
    Route::get('/admin/SallesRegister', [SallesRegisterController::class, 'first']);
    Route::get('/admin/SallesRegister/index', [SallesRegisterController::class, 'index']);
    Route::get('/admin/SallesRegister/create', [SallesRegisterController::class, 'create']);
    Route::get('/admin/SallesRegister/{id}/edit', [SallesRegisterController::class, 'edit']);
    
    Route::get('/admin/GstPayableReport', [GstPayableReportController::class, 'first']);
    Route::get('/admin/GstPayableReport/index', [GstPayableReportController::class, 'index']);
    Route::get('/admin/GstPayableReport/create', [GstPayableReportController::class, 'create']);
    Route::get('/admin/GstPayableReport/{id}/edit', [GstPayableReportController::class, 'edit']);
    
    Route::get('/admin/PurchaseRegister', [PurchaseRegisterController::class, 'first']);
    Route::get('/admin/PurchaseRegister/index', [PurchaseRegisterController::class, 'index']);
    Route::get('/admin/PurchaseRegister/create', [PurchaseRegisterController::class, 'create']);
    Route::get('/admin/PurchaseRegister/{id}/edit', [PurchaseRegisterController::class, 'edit']);
    
    Route::get('/admin/ProductivityReport', [ProductivityReportController::class, 'first']);
    // Route::get('/admin/ProductivityReport/index', [ProductivityReportController::class, 'index']);
    // Route::get('/admin/ProductivityReport/create', [ProductivityReportController::class, 'create']);
    // Route::get('/admin/ProductivityReport/{id}/edit', [ProductivityReportController::class, 'edit']);
    
    Route::get('/admin/DeliveryAdviceReport', [DeliveryAdviceReportController::class, 'first']);
    Route::get('/admin/DeliveryAdviceReport/index', [DeliveryAdviceReportController::class, 'index']);
    Route::get('/admin/DeliveryAdviceReport/create', [DeliveryAdviceReportController::class, 'create']);
    Route::get('/admin/DeliveryAdviceReport/{id}/edit', [DeliveryAdviceReportController::class, 'edit']);
    
    Route::get('/admin/ReceiptLedger', [ReceiptLedgerController::class, 'first']);
    Route::get('/admin/ReceiptLedger/index', [ReceiptLedgerController::class, 'index']);
    Route::get('/admin/ReceiptLedger/create', [ReceiptLedgerController::class, 'create']);
    Route::get('/admin/ReceiptLedger/{id}/edit', [ReceiptLedgerController::class, 'edit']);
    
    Route::get('/admin/PurchaseLedger', [PurchaseLedgerController::class, 'first']);
    Route::get('/admin/PurchaseLedger/index', [PurchaseLedgerController::class, 'index']);
    Route::get('/admin/PurchaseLedger/create', [PurchaseLedgerController::class, 'create']);
    Route::get('/admin/PurchaseLedger/{id}/edit', [PurchaseLedgerController::class, 'edit']);
    
    // Route::get('/admin/ReportEnquiry', [ReportEnquiryController::class, 'first']);
    // Route::get('/admin/ReportEnquiry/index', [ReportEnquiryController::class, 'index']);
    // Route::get('/admin/ReportEnquiry/create', [ReportEnquiryController::class, 'create']);
    // Route::get('/admin/ReportEnquiry/{id}/edit', [ReportEnquiryController::class, 'edit']);
    
    Route::get('/admin/Sales', [SalesController::class, 'first']);
    // Route::get('/admin/Sales/index', [SalesController::class, 'index']);
    // Route::get('/admin/Sales/create', [SalesController::class, 'create']);
    // Route::get('/admin/Sales/{id}/edit', [SalesController::class, 'edit']);
    
    Route::get('/admin/Purchase', [PurchaseController::class, 'first']);
    // Route::get('/admin/Purchase/index', [PurchaseController::class, 'index']);
    // Route::get('/admin/Purchase/create', [PurchaseController::class, 'create']);
    // Route::get('/admin/Purchase/{id}/edit', [PurchaseController::class, 'edit']);

    
});

require __DIR__.'/auth.php';
