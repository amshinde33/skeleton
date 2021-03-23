{{-- Extends layout --}}
@extends('layout.default')
@section('styles')
<link href="{{ asset('css/pages/wizard/wizard-2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/pages/wizard/wizard-2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

{{-- Content --}}
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="card card-custom">
				<div class="card-body p-0">
					<!--begin: Wizard-->
					<div class="wizard wizard-2" id="kt_wizard_v2" data-wizard-state="step-first" data-wizard-clickable="true">
				        <!--begin: Wizard Body-->
						<div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
							<!--begin: Wizard Form-->
							<div class="row">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif
								<div class="offset-xxl-2 col-xxl-8">

									<form class="form" action="http://localhost/skeleton/public/appUpdateNotification/<?php echo $pushNotifications->id; ?>" id="kt_form" method="POST">
										<!--begin: Wizardp Step 1-->
										@csrf
							
										<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
											<h4 class="mb-10 font-weight-bold text-dark">Notifcation details</h4>

                                            <div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Title</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="title" placeholder="Title" value="<?php echo $pushNotifications->title; ?>" />
														<span class="form-text text-muted">Please enter your notification title.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Details</label>
                                                        <textarea name="detail" class="form-control form-control-solid form-control-lg" id="" cols="10" rows="3">
														<?php echo $pushNotifications->detail; ?>
														</textarea>
                                                        <span class="form-text text-muted">Please enter your notification details.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>DateTime</label>
														<input type="text" class=" date form-control form-control-solid form-control-lg" name="date_time" placeholder="DateTime" value="<?php echo $pushNotifications->date_time; ?>" />
														<span class="form-text text-muted">Please enter your notification date time.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											
										</div>
										<!--end: Wizard Step 1-->
										

										<!--begin: Wizard Actions-->
										<div class="float-right">
											<button type="Submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4 float-right" name="">Update</button>
										</div>
										<!--end: Wizard Actions-->
									</form>
								</div>
								<!--end: Wizard-->
							</div>
							<!--end: Wizard Form-->
						</div>
						<!--end: Wizard Body-->
					</div>
					<!--end: Wizard-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>

<script src="{{ asset ('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset ('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset ('js/scripts.bundle.js') }}"></script>
<script src="{{ asset ('js/pages/custom/wizard/wizard-2.js') }}"></script>

<script type="text/javascript">
        $('.date').datetimepicker({
			 format:'dd-mm-yyyy HH:mm:ss'
        });
    </script>
@endsection