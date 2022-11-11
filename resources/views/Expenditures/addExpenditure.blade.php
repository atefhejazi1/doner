@extends('layouts/main-dashboard')


@section('title', 'Kiadás')
@section('app-main')
<div class="d-flex flex-column flex-column-fluid">


        
<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">


									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Kiadás</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="/expenses/expenses/" class="text-muted text-hover-primary">Kiadások</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Kiadás</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">

										<!--begin::Primary button-->
										<a href="/expenses/expenses/" class="btn btn-sm fw-bold btn-primary">Kiadások</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
                                    <div class="card card-flush">
                                        <div class="card-body">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
								<form id="kt_ecommerce_settings_general_form" class="form" action="" method="post" role="form"> <input type="hidden" name="csrfmiddlewaretoken" value="2QhVcoV4KcGdjKwvSemZi40DwgEM5z8nJ3bcyel7JHwdZWpaTCW6fqA1OJ2r82xM">

														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Enter Date</span>
																	
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->

                                                                <input type="date" name="date" class="form-control form-control-solid" required="" id="id_date">
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->

	                                                        <!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Kiadás választás</span>
																	
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->

                                                                <select name="bandexpense" class="form-control form-control-solid" required="" id="id_bandexpense">
  <option value="" selected="">---------</option>

  <option value="1">pita</option>

</select>
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->
                                              <!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Kiadás választás</span>

																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->

                                                                <input type="number" name="amount" value="0" class="form-control form-control-solid" required="" id="id_amount">
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->



														<!--begin::Action buttons-->
														<div class="row py-5">
															<div class="col-md-9 offset-md-3">
																<div class="d-flex">
																	<!--begin::Button-->
																	<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary" value="Mehet">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
															</div>
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
									</div>
									<!--end::Row-->
                                            </div>
                                    </div>
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>


						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2022©</span>
									<a href="#" target="_blank" class="text-gray-800 text-hover-primary">Doner Kabab</a>
								</div>
								<!--end::Copyright-->

							</div>
							<!--end::Footer container-->
						</div>
                    </div>
@endsection