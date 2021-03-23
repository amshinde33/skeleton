{{-- Extends layout --}}
@extends('layout.default')
@section('styles')
<!-- <link href="{{ asset('css/pages/user/custom.css') }}" rel="stylesheet" type="text/css" /> -->
<link href="{{ asset('css/pages/wizard/wizard-2.css') }}" rel="stylesheet" type="text/css" />

{{-- Content --}}
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <!-- <h3 class="card-label">User List
                 <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div> 
            </h3> -->
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                    <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Export</button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-print"></i>
                                    </span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-copy"></i>
                                    </span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-excel-o"></i>
                                    </span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-text-o"></i>
                                    </span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-pdf-o"></i>
                                    </span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="{{url('addApplicationPage')}}" class="btn btn-light-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <span class="svg-icon svg-icon svg-icon-2x">
                            <!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo2/dist/../src/media/svg/icons/Communication/Add-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span>
                        <!--end::Svg Icon-->
                    </span>Add Application</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                    <tr>
                        <th class="active">ID</th>
                        <th>Name</th>
                        <th>Key</th>
                        <th>SKU</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $application)
                    <tr>
                        <td class="active">{{ $application->id}} </td>
                        <td>{{ $application->app_name}}</td>
                        <td>{{ $application->app_key}}</td>
                        <td>{{ $application->sku}}</td>
                        <td>
                            <a class="btn btn-primary" href="appEdit/{{ $application->id }}" title="Edit"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-primary scrap_status" href="" data-id="<?php echo $application->id; ?>" title="Status" data-toggle="modal" data-target="#statusModal"><i class="fa fa-user-slash"></i></a>
                            <a class="btn btn-primary scrap_notification" title="Create Post Notification" data-id="<?php echo $application->id; ?>" data-toggle="modal" data-target="#postNotificationModal"><i class="fa fa-plus"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>


    <!--  Status Modal-->
    <div class="modal fade" id="statusModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form role="form" method='POST' action="appStatus " enctype="multipart/form-data" class="col-xs- col-sm-12 col-md-12 col-lg-">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Status of Application</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type='hidden' id="scrapid_status" name='scrapid_status' value="">
                        <p>Are You Sure? Do You want to deactivate. &hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  Status Modal / -->

    <!--  Post Notification Modal-->
    <div class="modal fade" id="postNotificationModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form role="form" method='POST' action="appCretePushNotification/{{ $application->id }}" enctype="multipart/form-data" class="col-xs- col-sm-12 col-md-12 col-lg-">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create New Push Notification</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type='hidden' id="scrapid_notification" name='scrapid_notification' value="">
                        <!-- <p>Are You Sure? Do You want to deactivate. &hellip;</p> -->
                        <div class="row form-group">
                            <div class="col-8">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-8">
                                <label for="detail">Details</label>
                                <textarea name="detail" class="form-control" id="" cols="10" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group ">
                                <label for="date_time">DateTime</label>
                                <!-- <input type="text" class="form-control" id="kt_datetimepicker_5" placeholder="Select date & time"  data-toggle="datetimepicker" data-target="#kt_datetimepicker_5"/> -->
                                <input type="text" name="date_time" class=" date form-control " autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  Post Notification Modal / -->
    @endsection

    {{-- Scripts Section --}}
    @section('scripts')
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset ('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset ('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset ('js/pages/custom/wizard/wizard-2.js') }}"></script>
    <script>
        $(document).on('click', '.scrap_status', function() {
            scrapid_status = $(this).attr('data-id');
            $('#scrapid_status').val(scrapid_status);
            console.log(scrapid_status);
        });
    </script>
    <script>
        $(document).on('click', '.scrap_notification', function() {
            scrapid_notification = $(this).attr('data-id');
            $('#scrapid_notification').val(scrapid_notification);
            console.log(scrapid_notification);
        });
    </script>
    <script type="text/javascript">
        $('.date').datetimepicker({
             format:'yyyy-mm-dd hh:mm:ss'
        });
    </script> 
<!-- <script>
$('#kt_datetimepicker_5').datetimepicker();
</script> -->
    @endsection