@extends('layouts/main-dashboard')


@section('title', 'CenterItems')
@section('app-main')

@if (Session::has('success'))
    <div class="alert alert-success">
            <li>{!! \Session::get('success') !!}</li>
    </div>
@endif

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
			<!--begin::Title-->
			<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">CenterItems</h1>
			<!--end::Title-->

		</div>
		<!--end::Page title-->
		<!--begin::Actions-->
		<div class="d-flex align-items-center gap-2 gap-lg-3">

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
		<!--begin::Category-->
		<div class="card card-flush">
			<!--begin::Card header-->
			<div class="card-header align-items-center py-5 gap-2 gap-md-5">
				<!--begin::Card title-->
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-4">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Category">
					</div>
					<!--end::Search-->
				</div>
				<!--end::Card title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Add customer-->
					<a href="{{url('centerItem/add')}}" class="btn btn-primary">Új CenterItem</a>
					<!--end::Add customer-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0">
				<!--begin::Table-->
				<div id="kt_ecommerce_category_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
					<div class="table-responsive">
						<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_category_table">
							<!--begin::Table head-->
							<thead>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Nev: activate to sort column ascending" style="width: 195.297px;">Nev</th>
									<th class="min-w-150px sorting_disabled" rowspan="1" colspan="1" aria-label="Megjegyzés " style="width: 201.188px;">Megjegyzés </th>
									<th class="min-w-150px sorting_disabled" rowspan="1" colspan="1" aria-label="Type" style="width: 201.188px;">Type</th>
									<th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 198.234px;">Date</th>
									<th class="text-end min-w-70px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 128.094px;">Actions</th>
								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-semibold text-gray-600">
								<!--begin::Table row-->


								<!--end::Table row-->


								@foreach($centerItems as $cItem)
								<tr class="odd">

									<!--begin::Category=-->
									<td>
										<div class="d-flex">

											<div class="ms-5">
												<!--begin::Title-->
												<a class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">{{ $cItem->name}}</a>
												<!--end::Title-->

											</div>
										</div>
									</td>
									<!--end::Category=-->

									<!--begin::Category=-->
									<td>
										<div class="d-flex">

											<div class="ms-5">
												<!--begin::Title-->
												<a class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">{{ $cItem->description}}</a>
												<!--end::Title-->

											</div>
										</div>
									</td>
									<!--end::Category=-->
									<!--begin::Category=-->
									<td>
										<div class="d-flex">

											<div class="ms-5">
												<!--begin::Title-->
												<a class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">{{ $cItem->type}}</a>
												<!--end::Title-->

											</div>
										</div>
									</td>
									<!--end::Category=-->


									<td>
										<div class="d-flex">

											<div class="ms-5">
												<!--begin::Title-->
												<a class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">{{ $cItem->created_at}}</a>
												<!--end::Title-->

											</div>
										</div>
									</td>
									<!--end::Category=-->

									<!--begin::Action=-->
									<td class="text-end">
										<a class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-5 m-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href={{ url('centerItem/edit/' . $cItem->id)}} class="btn ink-reaction btn-floating-action btn-success w-125px">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href={{ url('centerItem/delete/' . $cItem->id)}} class="btn ink-reaction btn-floating-action btn-danger w-125px" onclick="return confirm('Biztos törölni szeretnéd !!??')">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>

								@endforeach
							</tbody>
							<!--end::Table body-->
						</table>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
							<div class="dataTables_length" id="kt_ecommerce_category_table_length"><label><select name="kt_ecommerce_category_table_length" aria-controls="kt_ecommerce_category_table" class="form-select form-select-sm form-select-solid">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select></label></div>
						</div>
						<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
							<div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_category_table_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="kt_ecommerce_category_table_previous"><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
									<li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
									<li class="paginate_button page-item next disabled" id="kt_ecommerce_category_table_next"><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!--end::Table-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Worker-->
	</div>
	<!--end::Content container-->
</div>
<!--end::Content-->
@endsection