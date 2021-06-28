<?php

use App\Http\Controllers\Admin\AnswerPatientController;
use App\Http\Controllers\Admin\AnswerTypeController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ClientTypeController;
use App\Http\Controllers\Admin\ContactMethodController;
use App\Http\Controllers\Admin\ContactTimeController;
use App\Http\Controllers\Admin\ContentCategoryController;
use App\Http\Controllers\Admin\ContentPageController;
use App\Http\Controllers\Admin\ContentTagController;
use App\Http\Controllers\Admin\CrmCustomerController;
use App\Http\Controllers\Admin\CrmDocumentController;
use App\Http\Controllers\Admin\CrmNoteController;
use App\Http\Controllers\Admin\CrmStatusController;
use App\Http\Controllers\Admin\CroController;
use App\Http\Controllers\Admin\CustomQuestionController;
use App\Http\Controllers\Admin\DefaultQuestionController;
use App\Http\Controllers\Admin\DistanceController;
use App\Http\Controllers\Admin\EthnicityController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqQuestionController;
use App\Http\Controllers\Admin\GenderController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\IndicationController;
use App\Http\Controllers\Admin\IndicationPatientController;
use App\Http\Controllers\Admin\MedicationController;
use App\Http\Controllers\Admin\MedicationPatientController;
use App\Http\Controllers\Admin\NetworkController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderPatientController;
use App\Http\Controllers\Admin\OrderStatusController;
use App\Http\Controllers\Admin\OrderUserController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PatientContactLogController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PatientSourceController;
use App\Http\Controllers\Admin\PatientStatusController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProtocolController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\StudyController;
use App\Http\Controllers\Admin\SystemCalendarController;
use App\Http\Controllers\Admin\TherapeuticAreaController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::post('permissions/csv', [PermissionController::class, 'csvStore'])->name('permissions.csv.store');
    Route::put('permissions/csv', [PermissionController::class, 'csvUpdate'])->name('permissions.csv.update');
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::post('roles/csv', [RoleController::class, 'csvStore'])->name('roles.csv.store');
    Route::put('roles/csv', [RoleController::class, 'csvUpdate'])->name('roles.csv.update');
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::post('users/csv', [UserController::class, 'csvStore'])->name('users.csv.store');
    Route::put('users/csv', [UserController::class, 'csvUpdate'])->name('users.csv.update');
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Faq Category
    Route::post('faq-categories/csv', [FaqCategoryController::class, 'csvStore'])->name('faq-categories.csv.store');
    Route::put('faq-categories/csv', [FaqCategoryController::class, 'csvUpdate'])->name('faq-categories.csv.update');
    Route::resource('faq-categories', FaqCategoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Faq Question
    Route::resource('faq-questions', FaqQuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Content Category
    Route::resource('content-categories', ContentCategoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Content Tag
    Route::resource('content-tags', ContentTagController::class, ['except' => ['store', 'update', 'destroy']]);

    // Content Page
    Route::post('content-pages/media', [ContentPageController::class, 'storeMedia'])->name('content-pages.storeMedia');
    Route::resource('content-pages', ContentPageController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Status
    Route::resource('crm-statuses', CrmStatusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Customer
    Route::post('crm-customers/csv', [CrmCustomerController::class, 'csvStore'])->name('crm-customers.csv.store');
    Route::put('crm-customers/csv', [CrmCustomerController::class, 'csvUpdate'])->name('crm-customers.csv.update');
    Route::resource('crm-customers', CrmCustomerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Note
    Route::post('crm-notes/csv', [CrmNoteController::class, 'csvStore'])->name('crm-notes.csv.store');
    Route::put('crm-notes/csv', [CrmNoteController::class, 'csvUpdate'])->name('crm-notes.csv.update');
    Route::resource('crm-notes', CrmNoteController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Document
    Route::post('crm-documents/media', [CrmDocumentController::class, 'storeMedia'])->name('crm-documents.storeMedia');
    Route::post('crm-documents/csv', [CrmDocumentController::class, 'csvStore'])->name('crm-documents.csv.store');
    Route::put('crm-documents/csv', [CrmDocumentController::class, 'csvUpdate'])->name('crm-documents.csv.update');
    Route::resource('crm-documents', CrmDocumentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Client Types
    Route::post('client-types/csv', [ClientTypeController::class, 'csvStore'])->name('client-types.csv.store');
    Route::put('client-types/csv', [ClientTypeController::class, 'csvUpdate'])->name('client-types.csv.update');
    Route::resource('client-types', ClientTypeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Clients
    Route::post('clients/csv', [ClientController::class, 'csvStore'])->name('clients.csv.store');
    Route::put('clients/csv', [ClientController::class, 'csvUpdate'])->name('clients.csv.update');
    Route::resource('clients', ClientController::class, ['except' => ['store', 'update', 'destroy']]);

    // Ethnicities
    Route::resource('ethnicities', EthnicityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Genders
    Route::resource('genders', GenderController::class, ['except' => ['store', 'update', 'destroy']]);

    // Distances
    Route::resource('distances', DistanceController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Methods
    Route::resource('contact-methods', ContactMethodController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Times
    Route::resource('contact-times', ContactTimeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Patients
    Route::post('patients/csv', [PatientController::class, 'csvStore'])->name('patients.csv.store');
    Route::put('patients/csv', [PatientController::class, 'csvUpdate'])->name('patients.csv.update');
    Route::resource('patients', PatientController::class, ['except' => ['store', 'update', 'destroy']]);

    // Packages
    Route::resource('packages', PackageController::class, ['except' => ['store', 'update', 'destroy']]);

    // Order Status
    Route::resource('order-statuses', OrderStatusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Images
    Route::post('images/media', [ImageController::class, 'storeMedia'])->name('images.storeMedia');
    Route::resource('images', ImageController::class, ['except' => ['store', 'update', 'destroy']]);

    // Sponsors
    Route::post('sponsors/csv', [SponsorController::class, 'csvStore'])->name('sponsors.csv.store');
    Route::put('sponsors/csv', [SponsorController::class, 'csvUpdate'])->name('sponsors.csv.update');
    Route::resource('sponsors', SponsorController::class, ['except' => ['store', 'update', 'destroy']]);

    // Protocols
    Route::post('protocols/csv', [ProtocolController::class, 'csvStore'])->name('protocols.csv.store');
    Route::put('protocols/csv', [ProtocolController::class, 'csvUpdate'])->name('protocols.csv.update');
    Route::resource('protocols', ProtocolController::class, ['except' => ['store', 'update', 'destroy']]);

    // Cro
    Route::resource('cros', CroController::class, ['except' => ['store', 'update', 'destroy']]);

    // Orders
    Route::post('orders/csv', [OrderController::class, 'csvStore'])->name('orders.csv.store');
    Route::put('orders/csv', [OrderController::class, 'csvUpdate'])->name('orders.csv.update');
    Route::resource('orders', OrderController::class, ['except' => ['store', 'update', 'destroy']]);

    // Patient Status
    Route::post('patient-statuses/csv', [PatientStatusController::class, 'csvStore'])->name('patient-statuses.csv.store');
    Route::put('patient-statuses/csv', [PatientStatusController::class, 'csvUpdate'])->name('patient-statuses.csv.update');
    Route::resource('patient-statuses', PatientStatusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Order Patient
    Route::post('order-patients/csv', [OrderPatientController::class, 'csvStore'])->name('order-patients.csv.store');
    Route::put('order-patients/csv', [OrderPatientController::class, 'csvUpdate'])->name('order-patients.csv.update');
    Route::resource('order-patients', OrderPatientController::class, ['except' => ['store', 'update', 'destroy']]);

    // Patient Contact Log
    Route::post('patient-contact-logs/csv', [PatientContactLogController::class, 'csvStore'])->name('patient-contact-logs.csv.store');
    Route::put('patient-contact-logs/csv', [PatientContactLogController::class, 'csvUpdate'])->name('patient-contact-logs.csv.update');
    Route::resource('patient-contact-logs', PatientContactLogController::class, ['except' => ['store', 'update', 'destroy']]);

    // Medications
    Route::resource('medications', MedicationController::class, ['except' => ['store', 'update', 'destroy']]);

    // Networks
    Route::post('networks/csv', [NetworkController::class, 'csvStore'])->name('networks.csv.store');
    Route::put('networks/csv', [NetworkController::class, 'csvUpdate'])->name('networks.csv.update');
    Route::resource('networks', NetworkController::class, ['except' => ['store', 'update', 'destroy']]);

    // Therapeutic Areas
    Route::post('therapeutic-areas/csv', [TherapeuticAreaController::class, 'csvStore'])->name('therapeutic-areas.csv.store');
    Route::put('therapeutic-areas/csv', [TherapeuticAreaController::class, 'csvUpdate'])->name('therapeutic-areas.csv.update');
    Route::resource('therapeutic-areas', TherapeuticAreaController::class, ['except' => ['store', 'update', 'destroy']]);

    // Indications
    Route::post('indications/csv', [IndicationController::class, 'csvStore'])->name('indications.csv.store');
    Route::put('indications/csv', [IndicationController::class, 'csvUpdate'])->name('indications.csv.update');
    Route::resource('indications', IndicationController::class, ['except' => ['store', 'update', 'destroy']]);

    // Studies
    Route::post('studies/csv', [StudyController::class, 'csvStore'])->name('studies.csv.store');
    Route::put('studies/csv', [StudyController::class, 'csvUpdate'])->name('studies.csv.update');
    Route::resource('studies', StudyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Answer Types
    Route::resource('answer-types', AnswerTypeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Patient Sources
    Route::post('patient-sources/csv', [PatientSourceController::class, 'csvStore'])->name('patient-sources.csv.store');
    Route::put('patient-sources/csv', [PatientSourceController::class, 'csvUpdate'])->name('patient-sources.csv.update');
    Route::resource('patient-sources', PatientSourceController::class, ['except' => ['store', 'update', 'destroy']]);

    // Order User
    Route::post('order-users/csv', [OrderUserController::class, 'csvStore'])->name('order-users.csv.store');
    Route::put('order-users/csv', [OrderUserController::class, 'csvUpdate'])->name('order-users.csv.update');
    Route::resource('order-users', OrderUserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Medication Patient
    Route::post('medication-patients/csv', [MedicationPatientController::class, 'csvStore'])->name('medication-patients.csv.store');
    Route::put('medication-patients/csv', [MedicationPatientController::class, 'csvUpdate'])->name('medication-patients.csv.update');
    Route::resource('medication-patients', MedicationPatientController::class, ['except' => ['store', 'update', 'destroy']]);

    // Indication Patient
    Route::post('indication-patients/csv', [IndicationPatientController::class, 'csvStore'])->name('indication-patients.csv.store');
    Route::put('indication-patients/csv', [IndicationPatientController::class, 'csvUpdate'])->name('indication-patients.csv.update');
    Route::resource('indication-patients', IndicationPatientController::class, ['except' => ['store', 'update', 'destroy']]);

    // Default Questions
    Route::post('default-questions/csv', [DefaultQuestionController::class, 'csvStore'])->name('default-questions.csv.store');
    Route::put('default-questions/csv', [DefaultQuestionController::class, 'csvUpdate'])->name('default-questions.csv.update');
    Route::resource('default-questions', DefaultQuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Custom Questions
    Route::post('custom-questions/csv', [CustomQuestionController::class, 'csvStore'])->name('custom-questions.csv.store');
    Route::put('custom-questions/csv', [CustomQuestionController::class, 'csvUpdate'])->name('custom-questions.csv.update');
    Route::resource('custom-questions', CustomQuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // System Calendar
    Route::resource('system-calendars', SystemCalendarController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit', 'show']]);

    // Answer Patient
    Route::post('answer-patients/csv', [AnswerPatientController::class, 'csvStore'])->name('answer-patients.csv.store');
    Route::put('answer-patients/csv', [AnswerPatientController::class, 'csvUpdate'])->name('answer-patients.csv.update');
    Route::resource('answer-patients', AnswerPatientController::class, ['except' => ['store', 'update', 'destroy']]);

    // Settings
    Route::resource('settings', SettingController::class, ['except' => ['store', 'update', 'destroy']]);
});
