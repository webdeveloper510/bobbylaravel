<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Divider -->
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('orders_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/orders*")||request()->is("admin/packages*")||request()->is("admin/indications*")||request()->is("admin/studies*")||request()->is("admin/protocols*")||request()->is("admin/therapeutic-areas*")||request()->is("admin/distances*")||request()->is("admin/order-patients*")||request()->is("admin/order-users*")||request()->is("admin/order-statuses*")||request()->is("admin/default-questions*")||request()->is("admin/custom-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.ordersManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('order_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/orders*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.orders.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-hand-holding-usd">
                                        </i>
                                        {{ trans('cruds.order.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('package_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/packages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.packages.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.package.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('indication_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/indications*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.indications.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.indication.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('study_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/studies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.studies.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.study.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('protocol_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/protocols*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.protocols.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.protocol.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('therapeutic_area_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/therapeutic-areas*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.therapeutic-areas.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.therapeuticArea.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('distance_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/distances*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.distances.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.distance.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('order_patient_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/order-patients*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.order-patients.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.orderPatient.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('order_user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/order-users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.order-users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.orderUser.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('order_status_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/order-statuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.order-statuses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.orderStatus.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('default_question_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/default-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.default-questions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.defaultQuestion.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('custom_question_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/custom-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.custom-questions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.customQuestion.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('client_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/clients*")||request()->is("admin/cros*")||request()->is("admin/sponsors*")||request()->is("admin/networks*")||request()->is("admin/client-types*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.clientManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('client_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/clients*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.clients.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon far fa-building">
                                        </i>
                                        {{ trans('cruds.client.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('cro_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/cros*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.cros.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.cro.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('sponsor_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/sponsors*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.sponsors.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.sponsor.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('network_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/networks*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.networks.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.network.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('client_type_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/client-types*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.client-types.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.clientType.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('patient_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/patients*")||request()->is("admin/patient-statuses*")||request()->is("admin/patient-contact-logs*")||request()->is("admin/patient-sources*")||request()->is("admin/answer-patients*")||request()->is("admin/indication-patients*")||request()->is("admin/medication-patients*")||request()->is("admin/contact-methods*")||request()->is("admin/contact-times*")||request()->is("admin/answer-types*")||request()->is("admin/medications*")||request()->is("admin/genders*")||request()->is("admin/ethnicities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.patientManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('patient_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/patients*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.patients.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-address-card">
                                        </i>
                                        {{ trans('cruds.patient.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('patient_status_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/patient-statuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.patient-statuses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.patientStatus.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('patient_contact_log_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/patient-contact-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.patient-contact-logs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.patientContactLog.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('patient_source_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/patient-sources*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.patient-sources.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.patientSource.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('answer_patient_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/answer-patients*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.answer-patients.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.answerPatient.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('indication_patient_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/indication-patients*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.indication-patients.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.indicationPatient.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('medication_patient_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/medication-patients*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.medication-patients.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.medicationPatient.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('contact_method_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/contact-methods*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contact-methods.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.contactMethod.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('contact_time_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/contact-times*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contact-times.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.contactTime.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('answer_type_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/answer-types*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.answer-types.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.answerType.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('medication_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/medications*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.medications.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.medication.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('gender_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/genders*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.genders.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.gender.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('ethnicity_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/ethnicities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.ethnicities.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.ethnicity.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.audit-logs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file-alt">
                                        </i>
                                        {{ trans('cruds.auditLog.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('basic_c_r_m_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/crm-statuses*")||request()->is("admin/crm-customers*")||request()->is("admin/crm-notes*")||request()->is("admin/crm-documents*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.basicCRM.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('crm_status_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-statuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-statuses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.crmStatus.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('crm_customer_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-customers*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-customers.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-plus">
                                        </i>
                                        {{ trans('cruds.crmCustomer.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('crm_note_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-notes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-notes.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-sticky-note">
                                        </i>
                                        {{ trans('cruds.crmNote.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('crm_document_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-documents*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-documents.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.crmDocument.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('system_calendar_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/system-calendars*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.system-calendars.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon far fa-calendar">
                            </i>
                            {{ trans('cruds.systemCalendar.title') }}
                        </a>
                    </li>
                @endcan
                @can('content_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/content-categories*")||request()->is("admin/content-tags*")||request()->is("admin/content-pages*")||request()->is("admin/images*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.contentManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('content_category_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/content-categories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.content-categories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.contentCategory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('content_tag_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/content-tags*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.content-tags.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-tags">
                                        </i>
                                        {{ trans('cruds.contentTag.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('content_page_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/content-pages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.content-pages.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file">
                                        </i>
                                        {{ trans('cruds.contentPage.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('image_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/images*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.images.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.image.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('faq_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/faq-categories*")||request()->is("admin/faq-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.faqManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('faq_category_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faq-categories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faq-categories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.faqCategory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('faq_question_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faq-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faq-questions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-question">
                                        </i>
                                        {{ trans('cruds.faqQuestion.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/settings*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.settings.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.setting.title') }}
                        </a>
                    </li>
                @endcan

                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.password.edit") }}" class="{{ request()->is("profile/password") || request()->is("profile/password/*") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fas fa-cogs"></i>
                                {{ trans('global.change_password') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>