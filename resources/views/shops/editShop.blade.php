@extends('layouts/main-dashboard')


@section('title', 'Jávitási')
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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Új Vevő</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="/" class="text-muted text-hover-primary">Shops</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Új Vevő</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">

					<!--begin::Primary button-->
					<a href="/shops/" class="btn btn-sm fw-bold btn-primary">Shops</a>
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
							<form id="kt_ecommerce_settings_general_form" class="form" action="{{ url('shops/update') }}" method="post" role="form"> <input type="hidden" name="csrfmiddlewaretoken" value="i0PObtfztVq7nBS0icNvgwKjtjRw2l9oZdJ5xjFCsqg73NLFjAnCdSkHLMfb5OyN">
								@csrf()
								<input type="hidden" value={{ $shop->id }}>

								<!--begin::Input group-->
								<div class="row fv-row mb-7">
									<div class="col-md-3 text-md-end">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold form-label mt-3">
											<span class="required">Shop Name/Név</span>

										</label>
										<!--end::Label-->
									</div>
									<div class="col-md-9">
										<!--begin::Input-->

										<input type="text" name="shop_name" value={{ $shop->shop_name }} maxlength="100" class="form-control form-control-solid" required="" id="id_shop_name">
										<!--end::Input-->
									</div>
								</div>
								<!--end::Input group-->

								<!--begin::Input group-->
								<div class="row fv-row mb-7">
									<div class="col-md-3 text-md-end">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold form-label mt-3">
											<span class="required">Company Name/Cégnév</span>

										</label>
										<!--end::Label-->
									</div>
									<div class="col-md-9">
										<!--begin::Input-->

										<input type="text" name="company_name" value={{ $shop->company_name }} maxlength="200" class="form-control form-control-solid" id="id_company_name">
										<!--end::Input-->
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row fv-row mb-7">
									<div class="col-md-3 text-md-end">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold form-label mt-3">
											<span class="required">Company Place/Székhely</span>

										</label>
										<!--end::Label-->
									</div>
									<div class="col-md-9">
										<!--begin::Input-->

										<input type="text" name="company_address" value={{ $shop->company_address }} maxlength="200" class="form-control form-control-solid" required="" id="id_company_address">
										<!--end::Input-->
									</div>
								</div>
								<!--end::Input group-->

								<!--begin::Input group-->
								<div class="row fv-row mb-7">
									<div class="col-md-3 text-md-end">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold form-label mt-3">
											<span class="required">Tax ID/Adó szám</span>

										</label>
										<!--end::Label-->
									</div>
									<div class="col-md-9">
										<!--begin::Input-->

										<input type="text" name="tax_number" value={{ $shop->tax_number }} maxlength="200" class="form-control form-control-lg form-control-solid" required="" id="id_tax_number">
										<!--end::Input-->
									</div>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row fv-row mb-7">
									<div class="col-md-3 text-md-end">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold form-label mt-3">
											<span class="required">Shop Address/Szállítási cím</span>

										</label>
										<!--end::Label-->
									</div>
									<div class="col-md-9">
										<!--begin::Input-->

										<input type="text" name="shop_address" value={{ $shop->shop_address }} maxlength="200" class="form-control form-control-solid" required="" id="id_shop_address">
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