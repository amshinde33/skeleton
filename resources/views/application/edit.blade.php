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

									<form class="form" action="http://localhost/skeleton/public/appUpdate/<?php echo $applications->id; ?>" id="kt_form" method="GET">
										<!--begin: Wizardp Step 1-->
										@csrf
							
										<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
											<h4 class="mb-10 font-weight-bold text-dark">Application details</h4>

                                            <div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Application Name</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="app_name" placeholder="Application Name" value="<?php echo $applications->app_name; ?>" />
														<span class="form-text text-muted">Please enter your application name.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Application key</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="app_key" placeholder="App Key" value="<?php echo $applications->app_key; ?>" />
														<span class="form-text text-muted">Please enter your application key.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Application SKU</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="sku" placeholder="Application SKU" value="<?php echo $applications->sku; ?>" />
														<span class="form-text text-muted">Please enter your application sku.</span>
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

@endsection