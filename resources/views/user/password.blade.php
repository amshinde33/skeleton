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

									<form class="form" action="updatepassword" id="kt_form" method="POST">
										<!--begin: Wizardp Step 1-->
										@csrf
										<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
											<h4 class="mb-10 font-weight-bold text-dark">Enter your New password</h4>

											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Old Password</label>
														<input type="password" class="form-control form-control-solid form-control-lg" name="oldpassword" placeholder="Password" value="" />
														<span class="form-text text-muted">Please enter your old password.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control form-control-solid form-control-lg" name="newpassword" placeholder="New Password" value="" />
														<span class="form-text text-muted">Please enter your new password.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Confirm Password</label>
														<input type="password" class="form-control form-control-solid form-control-lg" name="confirmpassword" placeholder="Confirm Passowrd" value="" />
														<span class="form-text text-muted">Please enter your confirm password.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>

											
										</div>
										<!--end: Wizard Step 1-->
										

										<!--begin: Wizard Actions-->
										<div class="float-right">
											<button type="Submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4 float-right" name="">Save</button>
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

@endsection