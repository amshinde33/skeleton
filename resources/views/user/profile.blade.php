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
						<!--begin: Wizard Nav-->
						<div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
							<!--begin::Wizard Step 1 Nav-->
							<div class="wizard-steps">
								<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<span class="svg-icon svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">User Profile</h3>
											<div class="wizard-desc">Setup Your User Details</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 1 Nav-->
								<!--begin::Wizard Step 2 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<span class="svg-icon svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Compass.svg-->
												<span class="svg-icon  svg-icon-2x">
													<!--begin::Svg Icon | path:/home/keenthemes/www/metronic/themes/metronic/theme/html/demo1/dist/../src/media/svg/icons/Communication/Mail.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Social Media</h3>
											<div class="wizard-desc">Set Your Social Media</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 2 Nav-->
								<!--begin::Wizard Step 4 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<span class="svg-icon  svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Like.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000" />
														<rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Completed!</h3>
											<div class="wizard-desc">Review and Submit</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 4 Nav-->
							</div>
						</div>
						<!--end: Wizard Nav-->
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

									<form class="form" action="<?php  echo ((isset($userdetails)) ? "update" : "insert"); ?> " id="kt_form" method="POST">
										<!--begin: Wizardp Step 1-->
										@csrf
										<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
											<h4 class="mb-10 font-weight-bold text-dark">Enter your User Details</h4>

											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="fname" placeholder="First Name" value="<?php echo (isset($userdetails->fname) ? $userdetails->fname : ''); ?>" />
														<span class="form-text text-muted">Please enter your first name.</span>
													</div>
												</div>
												<!--end::Input-->
												<!--begin::Input-->
												<div class="col-xl-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="lname" placeholder="Last Name" value="<?php echo (isset($userdetails->lname) ? $userdetails->lname : ''); ?>" />
														<span class="form-text text-muted">Please enter your last name.</span>
													</div>
												</div>
											</div>
											<!--end::Input-->
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>User Name ( Not your Email )</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="name" placeholder="User Name" value="<?php echo (isset($userdetails->name) ? $userdetails->name : ''); ?>" />
														<span class="form-text text-muted">Please enter your user name.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Email</label>
														<input type="email" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" value="<?php echo (isset($userdetails->email) ? $userdetails->email : ''); ?>" />
														<span class="form-text text-muted">Please enter your email address.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label> Personal Phone Number</label>
														<input type="tel" class="form-control form-control-solid form-control-lg" name="personalphoneno" placeholder="Personal Phone Number" value="<?php echo (isset($userdetails->personalphoneno) ? $userdetails->personalphoneno : ''); ?>" />
														<span class="form-text text-muted">Please enter your personal phone number.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Work Phone Number</label>
														<input type="tel" class="form-control form-control-solid form-control-lg" name="workphoneno" placeholder="Work Phone Number" value="<?php echo (isset($userdetails->workphoneno) ? $userdetails->workphoneno : ''); ?>" />
														<span class="form-text text-muted">Please enter your work phone number.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label> Country, City</label>
														<?php   if(isset($userdetails->country)) { $selectedvalue = $userdetails->country;} else {$selectedvalue='';}?>
														<select name="country" class="form-control form-control-solid form-control-lg">
															<option value="" <?php echo (''== $selectedvalue ? 'selected': '');?>>Select</option>
															<option value="AF" <?php echo ('AF'== $selectedvalue ? 'selected': '');?>>Afghanistan</option>
															<option value="AX" <?php echo ('AX'== $selectedvalue ? 'selected': '');?>>Åland Islands</option>
															<option value="AL"  <?php echo ('AL'== $selectedvalue ? 'selected': '');?>>Albania</option>
															<option value="DZ"  <?php echo ('DZ'== $selectedvalue ? 'selected': '');?>>Algeria</option>
															<option value="AS"  <?php echo ('AS'== $selectedvalue ? 'selected': '');?>>American Samoa</option>
															<option value="AD" <?php echo ('AD'== $selectedvalue ? 'selected': '');?>>Andorra</option>
															<option value="AO" <?php echo ('AO'== $selectedvalue ? 'selected': '');?>>Angola</option>
															<option value="AI" <?php echo ('AI'== $selectedvalue ? 'selected': '');?>>Anguilla</option>
															<option value="AQ" <?php echo ('AQ'== $selectedvalue ? 'selected': '');?>>Antarctica</option>
															<option value="AG" <?php echo ('AG'== $selectedvalue ? 'selected': '');?>>Antigua and Barbuda</option>
															<option value="AR" <?php echo ('AR'== $selectedvalue ? 'selected': '');?>>Argentina</option>
															<option value="AM" <?php echo ('AM'== $selectedvalue ? 'selected': '');?>>Armenia</option>
															<option value="AW" <?php echo ('AW'== $selectedvalue ? 'selected': '');?>>Aruba</option>
															<option value="AU" <?php echo ('AU'== $selectedvalue ? 'selected': '');?>>Australia</option>
															<option value="AT" <?php echo ('AT'== $selectedvalue ? 'selected': '');?>>Austria</option>
															<option value="AZ" <?php echo ('AZ'== $selectedvalue ? 'selected': '');?>>Azerbaijan</option>
															<option value="BS" <?php echo ('BS'== $selectedvalue ? 'selected': '');?>>Bahamas</option>
															<option value="BH" <?php echo ('BH'== $selectedvalue ? 'selected': '');?>>Bahrain</option>
															<option value="BD" <?php echo ('BD'== $selectedvalue ? 'selected': '');?>>Bangladesh</option>
															<option value="BB" <?php echo ('BB'== $selectedvalue ? 'selected': '');?>>Barbados</option>
															<option value="BY" <?php echo ('BY'== $selectedvalue ? 'selected': '');?>>Belarus</option>
															<option value="BE" <?php echo ('BE'== $selectedvalue ? 'selected': '');?>>Belgium</option>
															<option value="BZ" <?php echo ('BZ'== $selectedvalue ? 'selected': '');?>>Belize</option>
															<option value="BJ" <?php echo ('BJ'== $selectedvalue ? 'selected': '');?>>Benin</option>
															<option value="BM" <?php echo ('BM'== $selectedvalue ? 'selected': '');?>>Bermuda</option>
															<option value="BT" <?php echo ('BT'== $selectedvalue ? 'selected': '');?>>Bhutan</option>
															<option value="BO" <?php echo ('BO'== $selectedvalue ? 'selected': '');?>>Bolivia, Plurinational State of</option>
															<option value="BQ" <?php echo ('BQ'== $selectedvalue ? 'selected': '');?>>Bonaire, Sint Eustatius and Saba</option>
															<option value="BA" <?php echo ('BA'== $selectedvalue ? 'selected': '');?>>Bosnia and Herzegovina</option>
															<option value="BW" <?php echo ('BW'== $selectedvalue ? 'selected': '');?>>Botswana</option>
															<option value="BV" <?php echo ('BV'== $selectedvalue ? 'selected': '');?>>Bouvet Island</option>
															<option value="BR" <?php echo ('BR'== $selectedvalue ? 'selected': '');?>>Brazil</option>
															<option value="IO" <?php echo ('IO'== $selectedvalue ? 'selected': '');?>>British Indian Ocean Territory</option>
															<option value="BN" <?php echo ('BN'== $selectedvalue ? 'selected': '');?>>Brunei Darussalam</option>
															<option value="BG" <?php echo ('BG'== $selectedvalue ? 'selected': '');?>>Bulgaria</option>
															<option value="BF" <?php echo ('BF'== $selectedvalue ? 'selected': '');?>>Burkina Faso</option>
															<option value="BI" <?php echo ('BI'== $selectedvalue ? 'selected': '');?>>Burundi</option>
															<option value="KH" <?php echo ('KH'== $selectedvalue ? 'selected': '');?>>Cambodia</option>
															<option value="CM" <?php echo ('CM'== $selectedvalue ? 'selected': '');?>>Cameroon</option>
															<option value="CA" <?php echo ('CA'== $selectedvalue ? 'selected': '');?>>Canada</option>
															<option value="CV" <?php echo ('CV'== $selectedvalue ? 'selected': '');?>>Cape Verde</option>
															<option value="KY" <?php echo ('KY'== $selectedvalue ? 'selected': '');?>>Cayman Islands</option>
															<option value="CF" <?php echo ('CF'== $selectedvalue ? 'selected': '');?>>Central African Republic</option>
															<option value="TD" <?php echo ('TD'== $selectedvalue ? 'selected': '');?>>Chad</option>
															<option value="CL" <?php echo ('CL'== $selectedvalue ? 'selected': '');?>>Chile</option>
															<option value="CN" <?php echo ('CN'== $selectedvalue ? 'selected': '');?>>China</option>
															<option value="CX" <?php echo ('CX'== $selectedvalue ? 'selected': '');?>>Christmas Island</option>
															<option value="CC" <?php echo ('CC'== $selectedvalue ? 'selected': '');?>>Cocos (Keeling) Islands</option>
															<option value="CO" <?php echo ('CO'== $selectedvalue ? 'selected': '');?>>Colombia</option>
															<option value="KM" <?php echo ('KM'== $selectedvalue ? 'selected': '');?>>Comoros</option>
															<option value="CG" <?php echo ('CG'== $selectedvalue ? 'selected': '');?>>Congo</option>
															<option value="CD" <?php echo ('CD'== $selectedvalue ? 'selected': '');?>>Congo, the Democratic Republic of the</option>
															<option value="CK" <?php echo ('CK'== $selectedvalue ? 'selected': '');?>>Cook Islands</option>
															<option value="CR" <?php echo ('CR'== $selectedvalue ? 'selected': '');?>>Costa Rica</option>
															<option value="CI" <?php echo ('CI'== $selectedvalue ? 'selected': '');?>>Côte d'Ivoire</option>
															<option value="HR" <?php echo ('HR'== $selectedvalue ? 'selected': '');?>>Croatia</option>
															<option value="CU" <?php echo ('CU'== $selectedvalue ? 'selected': '');?>>Cuba</option>
															<option value="CW" <?php echo ('CW'== $selectedvalue ? 'selected': '');?>>Curaçao</option>
															<option value="CY" <?php echo ('CY'== $selectedvalue ? 'selected': '');?>>Cyprus</option>
															<option value="CZ" <?php echo ('CZ'== $selectedvalue ? 'selected': '');?>>Czech Republic</option>
															<option value="DK" <?php echo ('DK'== $selectedvalue ? 'selected': '');?>>Denmark</option>
															<option value="DJ" <?php echo ('DJ'== $selectedvalue ? 'selected': '');?> >Djibouti</option>
															<option value="DM" <?php echo ('DM'== $selectedvalue ? 'selected': '');?>>Dominica</option>
															<option value="DO" <?php echo ('DO'== $selectedvalue ? 'selected': '');?>>Dominican Republic</option>
															<option value="EC" <?php echo ('EC'== $selectedvalue ? 'selected': '');?>>Ecuador</option>
															<option value="EG" <?php echo ('EG'== $selectedvalue ? 'selected': '');?>>Egypt</option>
															<option value="SV" <?php echo ('SV'== $selectedvalue ? 'selected': '');?>>El Salvador</option>
															<option value="GQ" <?php echo ('GQ'== $selectedvalue ? 'selected': '');?>>Equatorial Guinea</option>
															<option value="ER" <?php echo ('ER'== $selectedvalue ? 'selected': '');?>>Eritrea</option>
															<option value="EE" <?php echo ('EE'== $selectedvalue ? 'selected': '');?>>Estonia</option>
															<option value="ET" <?php echo ('ET'== $selectedvalue ? 'selected': '');?>>Ethiopia</option>
															<option value="FK" <?php echo ('FK'== $selectedvalue ? 'selected': '');?>>Falkland Islands (Malvinas)</option>
															<option value="FO" <?php echo ('FO'== $selectedvalue ? 'selected': '');?>>Faroe Islands</option>
															<option value="FJ" <?php echo ('FJ'== $selectedvalue ? 'selected': '');?>>Fiji</option>
															<option value="FI" <?php echo ('FI'== $selectedvalue ? 'selected': '');?>>Finland</option>
															<option value="FR" <?php echo ('FR'== $selectedvalue ? 'selected': '');?>>France</option>
															<option value="GF" <?php echo ('GF'== $selectedvalue ? 'selected': '');?>>French Guiana</option>
															<option value="PF" <?php echo ('PF'== $selectedvalue ? 'selected': '');?> >French Polynesia</option>
															<option value="TF" <?php echo ('TF'== $selectedvalue ? 'selected': '');?>>French Southern Territories</option>
															<option value="GA" <?php echo ('GA'== $selectedvalue ? 'selected': '');?>>Gabon</option>
															<option value="GM" <?php echo ('GM'== $selectedvalue ? 'selected': '');?>>Gambia</option>
															<option value="GE" <?php echo ('GE'== $selectedvalue ? 'selected': '');?>>Georgia</option>
															<option value="DE" <?php echo ('DE'== $selectedvalue ? 'selected': '');?>>Germany</option>
															<option value="GH" <?php echo ('GH'== $selectedvalue ? 'selected': '');?>>Ghana</option>
															<option value="GI" <?php echo ('GI'== $selectedvalue ? 'selected': '');?>>Gibraltar</option>
															<option value="GR" <?php echo ('GR'== $selectedvalue ? 'selected': '');?>>Greece</option>
															<option value="GL" <?php echo ('GL'== $selectedvalue ? 'selected': '');?>>Greenland</option>
															<option value="GD" <?php echo ('GD'== $selectedvalue ? 'selected': '');?>>Grenada</option>
															<option value="GP" <?php echo ('GP'== $selectedvalue ? 'selected': '');?>>Guadeloupe</option>
															<option value="GU" <?php echo ('GU'== $selectedvalue ? 'selected': '');?>>Guam</option>
															<option value="GT" <?php echo ('GT'== $selectedvalue ? 'selected': '');?>>Guatemala</option>
															<option value="GG" <?php echo ('GG'== $selectedvalue ? 'selected': '');?>>Guernsey</option>
															<option value="GN" <?php echo ('GN'== $selectedvalue ? 'selected': '');?>>Guinea</option>
															<option value="GW" <?php echo ('GW'== $selectedvalue ? 'selected': '');?>>Guinea-Bissau</option>
															<option value="GY" <?php echo ('GY'== $selectedvalue ? 'selected': '');?>>Guyana</option>
															<option value="HT" <?php echo ('HT'== $selectedvalue ? 'selected': '');?>>Haiti</option>
															<option value="HM" <?php echo ('HM'== $selectedvalue ? 'selected': '');?>>Heard Island and McDonald Islands</option>
															<option value="VA" <?php echo ('VA'== $selectedvalue ? 'selected': '');?>>Holy See (Vatican City State)</option>
															<option value="HN" <?php echo ('HN'== $selectedvalue ? 'selected': '');?>>Honduras</option>
															<option value="HK" <?php echo ('HK'== $selectedvalue ? 'selected': '');?>>Hong Kong</option>
															<option value="HU" <?php echo ('HU'== $selectedvalue ? 'selected': '');?>>Hungary</option>
															<option value="IS" <?php echo ('IS'== $selectedvalue ? 'selected': '');?>>Iceland</option>
															<option value="IN" <?php echo ('IN'== $selectedvalue ? 'selected': '');?> >India</option>
															<option value="ID" <?php echo ('ID'== $selectedvalue ? 'selected': '');?>>Indonesia</option>
															<option value="IR" <?php echo ('IR'== $selectedvalue ? 'selected': '');?>>Iran, Islamic Republic of</option>
															<option value="IQ" <?php echo ('IQ'== $selectedvalue ? 'selected': '');?>>Iraq</option>
															<option value="IE" <?php echo ('IE'== $selectedvalue ? 'selected': '');?>>Ireland</option>
															<option value="IM" <?php echo ('IM'== $selectedvalue ? 'selected': '');?>>Isle of Man</option>
															<option value="IL" <?php echo ('IL'== $selectedvalue ? 'selected': '');?>>Israel</option>
															<option value="IT" <?php echo ('IT'== $selectedvalue ? 'selected': '');?>>Italy</option>
															<option value="JM" <?php echo ('JM'== $selectedvalue ? 'selected': '');?>>Jamaica</option>
															<option value="JP" <?php echo ('JP'== $selectedvalue ? 'selected': '');?>>Japan</option>
															<option value="JE" <?php echo ('JE'== $selectedvalue ? 'selected': '');?>>Jersey</option>
															<option value="JO" <?php echo ('JO'== $selectedvalue ? 'selected': '');?>>Jordan</option>
															<option value="KZ" <?php echo ('KZ'== $selectedvalue ? 'selected': '');?>>Kazakhstan</option>
															<option value="KE" <?php echo ('KE'== $selectedvalue ? 'selected': '');?>>Kenya</option>
															<option value="KI" <?php echo ('KI'== $selectedvalue ? 'selected': '');?>>Kiribati</option>
															<option value="KP" <?php echo ('KP'== $selectedvalue ? 'selected': '');?>>Korea, Democratic People's Republic of</option>
															<option value="KR" <?php echo ('KR'== $selectedvalue ? 'selected': '');?>>Korea, Republic of</option>
															<option value="KW" <?php echo ('KW'== $selectedvalue ? 'selected': '');?>>Kuwait</option>
															<option value="KG"<?php echo ('KG'== $selectedvalue ? 'selected': '');?>>Kyrgyzstan</option>
															<option value="LA" <?php echo ('LA'== $selectedvalue ? 'selected': '');?>>Lao People's Democratic Republic</option>
															<option value="LV" <?php echo ('LV'== $selectedvalue ? 'selected': '');?>>Latvia</option>
															<option value="LB" <?php echo ('LB'== $selectedvalue ? 'selected': '');?>>Lebanon</option>
															<option value="LS" <?php echo ('LS'== $selectedvalue ? 'selected': '');?>>Lesotho</option>
															<option value="LR" <?php echo ('LR'== $selectedvalue ? 'selected': '');?>>Liberia</option>
															<option value="LY" <?php echo ('LY'== $selectedvalue ? 'selected': '');?>>Libya</option>
															<option value="LI" <?php echo ('LI'== $selectedvalue ? 'selected': '');?>>Liechtenstein</option>
															<option value="LT" <?php echo ('LT'== $selectedvalue ? 'selected': '');?>>Lithuania</option>
															<option value="LU" <?php echo ('LU'== $selectedvalue ? 'selected': '');?>>Luxembourg</option>
															<option value="MO" <?php echo ('MO'== $selectedvalue ? 'selected': '');?>>Macao</option>
															<option value="MK" <?php echo ('MK'== $selectedvalue ? 'selected': '');?>>Macedonia, the former Yugoslav Republic of</option>
															<option value="MG" <?php echo ('MG'== $selectedvalue ? 'selected': '');?>>Madagascar</option>
															<option value="MW" <?php echo ('MW'== $selectedvalue ? 'selected': '');?>>Malawi</option>
															<option value="MY" <?php echo ('MY'== $selectedvalue ? 'selected': '');?>>Malaysia</option>
															<option value="MV" <?php echo ('MV'== $selectedvalue ? 'selected': '');?>>Maldives</option>
															<option value="ML" <?php echo ('ML'== $selectedvalue ? 'selected': '');?>>Mali</option>
															<option value="MT" <?php echo ('MT'== $selectedvalue ? 'selected': '');?>>Malta</option>
															<option value="MH" <?php echo ('MH'== $selectedvalue ? 'selected': '');?>>Marshall Islands</option>
															<option value="MQ" <?php echo ('MQ'== $selectedvalue ? 'selected': '');?>>Martinique</option>
															<option value="MR" <?php echo ('MR'== $selectedvalue ? 'selected': '');?>>Mauritania</option>
															<option value="MU" <?php echo ('MU'== $selectedvalue ? 'selected': '');?>>Mauritius</option>
															<option value="YT" <?php echo ('YT'== $selectedvalue ? 'selected': '');?>>Mayotte</option>
															<option value="MX" <?php echo ('MX'== $selectedvalue ? 'selected': '');?>>Mexico</option>
															<option value="FM" <?php echo ('FM'== $selectedvalue ? 'selected': '');?>>Micronesia, Federated States of</option>
															<option value="MD" <?php echo ('MD'== $selectedvalue ? 'selected': '');?>>Moldova, Republic of</option>
															<option value="MC" <?php echo ('MC'== $selectedvalue ? 'selected': '');?>>Monaco</option>
															<option value="MN" <?php echo ('MN'== $selectedvalue ? 'selected': '');?>>Mongolia</option>
															<option value="ME" <?php echo ('ME'== $selectedvalue ? 'selected': '');?> >Montenegro</option>
															<option value="MS" <?php echo ('MS'== $selectedvalue ? 'selected': '');?>>Montserrat</option>
															<option value="MA" <?php echo ('MA'== $selectedvalue ? 'selected': '');?>>Morocco</option>
															<option value="MZ" <?php echo ('MZ'== $selectedvalue ? 'selected': '');?>>Mozambique</option>
															<option value="MM" <?php echo ('MM'== $selectedvalue ? 'selected': '');?>>Myanmar</option>
															<option value="NA" <?php echo ('NA'== $selectedvalue ? 'selected': '');?>>Namibia</option>
															<option value="NR" <?php echo ('NR'== $selectedvalue ? 'selected': '');?>>Nauru</option>
															<option value="NP" <?php echo ('NP'== $selectedvalue ? 'selected': '');?>>Nepal</option>
															<option value="NL" <?php echo ('NL'== $selectedvalue ? 'selected': '');?>>Netherlands</option>
															<option value="NC" <?php echo ('NC'== $selectedvalue ? 'selected': '');?>>New Caledonia</option>
															<option value="NZ" <?php echo ('NZ'== $selectedvalue ? 'selected': '');?>>New Zealand</option>
															<option value="NI" <?php echo ('NI'== $selectedvalue ? 'selected': '');?>>Nicaragua</option>
															<option value="NE" <?php echo ('NE'== $selectedvalue ? 'selected': '');?>>Niger</option>
															<option value="NG" <?php echo ('NG'== $selectedvalue ? 'selected': '');?>>Nigeria</option>
															<option value="NU" <?php echo ('NU'== $selectedvalue ? 'selected': '');?>>Niue</option>
															<option value="NF" <?php echo ('NF'== $selectedvalue ? 'selected': '');?>>Norfolk Island</option>
															<option value="MP" <?php echo ('MP'== $selectedvalue ? 'selected': '');?>>Northern Mariana Islands</option>
															<option value="NO" <?php echo ('NO'== $selectedvalue ? 'selected': '');?>>Norway</option>
															<option value="OM" <?php echo ('OM'== $selectedvalue ? 'selected': '');?>>Oman</option>
															<option value="PK" <?php echo ('PK'== $selectedvalue ? 'selected': '');?>>Pakistan</option>
															<option value="PW" <?php echo ('PW'== $selectedvalue ? 'selected': '');?>>Palau</option>
															<option value="PS" <?php echo ('PS'== $selectedvalue ? 'selected': '');?>>Palestinian Territory, Occupied</option>
															<option value="PA" <?php echo ('PA'== $selectedvalue ? 'selected': '');?>>Panama</option>
															<option value="PG" <?php echo ('PG'== $selectedvalue ? 'selected': '');?>>Papua New Guinea</option>
															<option value="PY" <?php echo ('PY'== $selectedvalue ? 'selected': '');?>>Paraguay</option>
															<option value="PE" <?php echo ('PE'== $selectedvalue ? 'selected': '');?>>Peru</option>
															<option value="PH" <?php echo ('PH'== $selectedvalue ? 'selected': '');?>>Philippines</option>
															<option value="PN" <?php echo ('PN'== $selectedvalue ? 'selected': '');?>>Pitcairn</option>
															<option value="PL" <?php echo ('PL'== $selectedvalue ? 'selected': '');?>>Poland</option>
															<option value="PT" <?php echo ('PT'== $selectedvalue ? 'selected': '');?>>Portugal</option>
															<option value="PR" <?php echo ('PR'== $selectedvalue ? 'selected': '');?>>Puerto Rico</option>
															<option value="QA" <?php echo ('QA'== $selectedvalue ? 'selected': '');?>>Qatar</option>
															<option value="RE" <?php echo ('RE'== $selectedvalue ? 'selected': '');?>>Réunion</option>
															<option value="RO" <?php echo ('RO'== $selectedvalue ? 'selected': '');?>>Romania</option>
															<option value="RU" <?php echo ('RU'== $selectedvalue ? 'selected': '');?>>Russian Federation</option>
															<option value="RW" <?php echo ('RW'== $selectedvalue ? 'selected': '');?>>Rwanda</option>
															<option value="BL" <?php echo ('BL'== $selectedvalue ? 'selected': '');?>>Saint Barthélemy</option>
															<option value="SH" <?php echo ('SH'== $selectedvalue ? 'selected': '');?>>Saint Helena, Ascension and Tristan da Cunha</option>
															<option value="KN" <?php echo ('KN'== $selectedvalue ? 'selected': '');?>>Saint Kitts and Nevis</option>
															<option value="LC" <?php echo ('LC'== $selectedvalue ? 'selected': '');?>>Saint Lucia</option>
															<option value="MF" <?php echo ('MF'== $selectedvalue ? 'selected': '');?>>Saint Martin (French part)</option>
															<option value="PM" <?php echo ('PM'== $selectedvalue ? 'selected': '');?>>Saint Pierre and Miquelon</option>
															<option value="VC" <?php echo ('VC'== $selectedvalue ? 'selected': '');?>>Saint Vincent and the Grenadines</option>
															<option value="WS" <?php echo ('WS'== $selectedvalue ? 'selected': '');?>>Samoa</option>
															<option value="SM" <?php echo ('SM'== $selectedvalue ? 'selected': '');?>>San Marino</option>
															<option value="ST" <?php echo ('ST'== $selectedvalue ? 'selected': '');?>>Sao Tome and Principe</option>
															<option value="SA" <?php echo ('SA'== $selectedvalue ? 'selected': '');?>>Saudi Arabia</option>
															<option value="SN" <?php echo ('SN'== $selectedvalue ? 'selected': '');?>>Senegal</option>
															<option value="RS" <?php echo ('RS'== $selectedvalue ? 'selected': '');?>>Serbia</option>
															<option value="SC" <?php echo ('SC'== $selectedvalue ? 'selected': '');?>>Seychelles</option>
															<option value="SL" <?php echo ('SL'== $selectedvalue ? 'selected': '');?>>Sierra Leone</option>
															<option value="SG" <?php echo ('SG'== $selectedvalue ? 'selected': '');?>>Singapore</option>
															<option value="SX" <?php echo ('SX'== $selectedvalue ? 'selected': '');?>>Sint Maarten (Dutch part)</option>
															<option value="SK" <?php echo ('SK'== $selectedvalue ? 'selected': '');?>>Slovakia</option>
															<option value="SI" <?php echo ('SI'== $selectedvalue ? 'selected': '');?>>Slovenia</option>
															<option value="SB" <?php echo ('SB'== $selectedvalue ? 'selected': '');?>>Solomon Islands</option>
															<option value="SO" <?php echo ('SO'== $selectedvalue ? 'selected': '');?>>Somalia</option>
															<option value="ZA" <?php echo ('ZA'== $selectedvalue ? 'selected': '');?>>South Africa</option>
															<option value="GS" <?php echo ('GS'== $selectedvalue ? 'selected': '');?>>South Georgia and the South Sandwich Islands</option>
															<option value="SS" <?php echo ('SS'== $selectedvalue ? 'selected': '');?>>South Sudan</option>
															<option value="ES" <?php echo ('ES'== $selectedvalue ? 'selected': '');?>>Spain</option>
															<option value="LK" <?php echo ('LK'== $selectedvalue ? 'selected': '');?>>Sri Lanka</option>
															<option value="SD" <?php echo ('SD'== $selectedvalue ? 'selected': '');?>>Sudan</option>
															<option value="SR" <?php echo ('SR'== $selectedvalue ? 'selected': '');?>>Suriname</option>
															<option value="SJ" <?php echo ('SJ'== $selectedvalue ? 'selected': '');?>>Svalbard and Jan Mayen</option>
															<option value="SZ" <?php echo ('SZ'== $selectedvalue ? 'selected': '');?>>Swaziland</option>
															<option value="SE" <?php echo ('SE'== $selectedvalue ? 'selected': '');?>>Sweden</option>
															<option value="CH" <?php echo ('CH'== $selectedvalue ? 'selected': '');?>>Switzerland</option>
															<option value="SY" <?php echo ('SY'== $selectedvalue ? 'selected': '');?>>Syrian Arab Republic</option>
															<option value="TW" <?php echo ('TW'== $selectedvalue ? 'selected': '');?>>Taiwan, Province of China</option>
															<option value="TJ" <?php echo ('TJ'== $selectedvalue ? 'selected': '');?>>Tajikistan</option>
															<option value="TZ" <?php echo ('TZ'== $selectedvalue ? 'selected': '');?>>Tanzania, United Republic of</option>
															<option value="TH" <?php echo ('TH'== $selectedvalue ? 'selected': '');?>>Thailand</option>
															<option value="TL" <?php echo ('TL'== $selectedvalue ? 'selected': '');?>>Timor-Leste</option>
															<option value="TG" <?php echo ('TG'== $selectedvalue ? 'selected': '');?>>Togo</option>
															<option value="TK" <?php echo ('TK'== $selectedvalue ? 'selected': '');?>>Tokelau</option>
															<option value="TO" <?php echo ('TO'== $selectedvalue ? 'selected': '');?>>Tonga</option>
															<option value="TT" <?php echo ('TT'== $selectedvalue ? 'selected': '');?>>Trinidad and Tobago</option>
															<option value="TN" <?php echo ('TN'== $selectedvalue ? 'selected': '');?>>Tunisia</option>
															<option value="TR" <?php echo ('TR'== $selectedvalue ? 'selected': '');?>>Turkey</option>
															<option value="TM" <?php echo ('TM'== $selectedvalue ? 'selected': '');?>>Turkmenistan</option>
															<option value="TC" <?php echo ('TC'== $selectedvalue ? 'selected': '');?>>Turks and Caicos Islands</option>
															<option value="TV" <?php echo ('TV'== $selectedvalue ? 'selected': '');?>>Tuvalu</option>
															<option value="UG" <?php echo ('UG'== $selectedvalue ? 'selected': '');?>>Uganda</option>
															<option value="UA" <?php echo ('UA'== $selectedvalue ? 'selected': '');?>>Ukraine</option>
															<option value="AE" <?php echo ('AE'== $selectedvalue ? 'selected': '');?>>United Arab Emirates</option>
															<option value="GB" <?php echo ('GB'== $selectedvalue ? 'selected': '');?>>United Kingdom</option>
															<option value="US" <?php echo ('US'== $selectedvalue ? 'selected': '');?>>United States</option>
															<option value="UM" <?php echo ('UM'== $selectedvalue ? 'selected': '');?>>United States Minor Outlying Islands</option>
															<option value="UY" <?php echo ('UY'== $selectedvalue ? 'selected': '');?>>Uruguay</option>
															<option value="UZ" <?php echo ('UZ'== $selectedvalue ? 'selected': '');?>>Uzbekistan</option>
															<option value="VU" <?php echo ('VU'== $selectedvalue ? 'selected': '');?>>Vanuatu</option>
															<option value="VE" <?php echo ('VE'== $selectedvalue ? 'selected': '');?>>Venezuela, Bolivarian Republic of</option>
															<option value="VN" <?php echo ('VN'== $selectedvalue ? 'selected': '');?>>Viet Nam</option>
															<option value="VG"> <?php echo ('VG'== $selectedvalue ? 'selected': '');?>Virgin Islands, British</option>
															<option value="VI" <?php echo ('VI'== $selectedvalue ? 'selected': '');?>>Virgin Islands, U.S.</option>
															<option value="WF" <?php echo ('WF'== $selectedvalue ? 'selected': '');?>>Wallis and Futuna</option>
															<option value="EH" <?php echo ('EH'== $selectedvalue ? 'selected': '');?>>Western Sahara</option>
															<option value="YE" <?php echo ('YE'== $selectedvalue ? 'selected': '');?>>Yemen</option>
															<option value="ZM" <?php echo ('ZM'== $selectedvalue ? 'selected': '');?> >Zambia</option>
															<option value="ZW" <?php echo ('ZW'== $selectedvalue ? 'selected': '');?>>Zimbabwe</option>
														</select>

															
														<span class="form-text text-muted">Please enter your country name.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Organization</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="orgnization" placeholder="Orgnization Name" value="<?php echo (isset($userdetails->orgnization) ? $userdetails->orgnization : ''); ?>" />
														<span class="form-text text-muted">Please enter your orgnization name.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Website</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="website" placeholder="Website" value="<?php echo (isset($userdetails->website) ? $userdetails->website : ''); ?>" />
														<span class="form-text text-muted">Please enter your website name.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Upload File</label>
														<input type="file" class="form-control form-control-solid form-control-lg" name="file" placeholder="Upload File here" value="<?php echo (isset($userdetails->file) ? $userdetails->file : ''); ?>" />
														<span class="form-text text-muted">Please enter your orgnization name.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>About Me</label>
														<textarea name="aboutme" id="" cols="10" rows="4" class="form-control form-control-solid form-control-lg" value="<?php echo (isset($userdetails->aboutme) ? $userdetails->aboutme : ''); ?>"><?php echo (isset($userdetails->aboutme) ? $userdetails->aboutme : ''); ?></textarea>
														<span class="form-text text-muted">Please enter about yourself .</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
										</div>
										<!--end: Wizard Step 1-->
										<!--begin: Wizard Step 2-->
										<div class="pb-5" data-wizard-type="step-content">
											<h4 class="mb-10 font-weight-bold text-dark">Setup Your Social media information</h4>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Facebook</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="facebook" placeholder="Facebook" value="<?php echo (isset($userdetails->facebook) ? $userdetails->facebook : ''); ?>" />
														<span class="form-text text-muted">Please enter your facebook id.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>LinkedIn</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="linkedin" placeholder="LinkedIn" value="<?php echo (isset($userdetails->linkedin) ? $userdetails->linkedin : ''); ?>" />
														<span class="form-text text-muted">Please enter your linkedin id.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>Twitter</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="twitter" placeholder="Twitter" value="<?php echo (isset($userdetails->twitter) ? $userdetails->twitter : ''); ?>" />
														<span class="form-text text-muted">Please enter your twitter id.</span>
													</div>
													<!--end::Input-->
												</div>
												<div class="col-xl-6">
													<!--begin::Input-->
													<div class="form-group">
														<label>GitHub</label>
														<input type="text" class="form-control form-control-solid form-control-lg" name="github" placeholder="GitHub" value="<?php echo (isset($userdetails->github) ? $userdetails->github : ''); ?>" />
														<span class="form-text text-muted">Please enter your github id.</span>
													</div>
													<!--end::Input-->
												</div>
											</div>
										</div>
										<!--end: Wizard Step 2-->
										

										<!--begin: Wizard Actions-->
										<div class="d-flex justify-content-between border-top mt-5 pt-10">
											<div class="mr-2">
												<button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
											</div>
											<div>
												<button type="Submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" name="" data-wizard-type="action-submit"><?php echo (isset($userdetails) ? 'Update' : 'Save'); ?></button>
												<button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
											</div>
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