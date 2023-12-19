<x-layout>
    <!--begin::Wrapper container-->
    <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar align-items-center justify-content-between py-4 py-lg-6">
                    <x-page-title>شاگردان</x-page-title>
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::کاربران-->
                    <div class="card card-flush">
                        <!--begin::کارت header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::کارت title-->
                            <div class="card-title">
                                <!--begin::جستجو-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                                  height="2" rx="1"
                                                                  transform="rotate(45 17.0365 15.1223)"
                                                                  fill="currentColor"/>
															<path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-ecommerce-product-filter="search"
                                           class="form-control form-control-solid w-250px ps-14"
                                           placeholder="جست و جو کاربران"/>
                                </div>
                                <!--end::جستجو-->
                            </div>
                            <!--end::کارت title-->
                            <!--begin::کارت toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="w-100 mw-150px">
                                    <!--begin::انتخاب2-->
                                    {{--                                    <select class="form-select form-select-solid" data-control="select2"--}}
                                    {{--                                            data-hide-search="true" data-placeholder="وضعیت"--}}
                                    {{--                                            data-kt-ecommerce-product-filter="status">--}}
                                    {{--                                        <option></option>--}}
                                    {{--                                        <option value="all">همه</option>--}}
                                    {{--                                        <option value="published">منتشر شده</option>--}}
                                    {{--                                        <option value="scheduled">در انتظار</option>--}}
                                    {{--                                        <option value="inactive">غیرفعال</option>--}}
                                    {{--                                    </select>--}}
                                    <!--end::انتخاب2-->
                                </div>
                            </div>
                            <!--end::کارت toolbar-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                   id="kt_ecommerce_کاربران_table">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                   data-kt-check-target="#kt_ecommerce_کاربران_table .form-check-input"
                                                   value="1"/>
                                        </div>
                                    </th>
                                    <th class="win-w-100px">نام و نام خانوادگی</th>
                                    <th class="win-w-200px">جنسیت</th>
                                    <th class="win-w-200px">شماره تماس</th>
                                    {{--                                    <th class="text-end min-w-100px">وضعیت</th>--}}
                                </tr>
                                <!--end::Table row-->

                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">

                                @foreach($users as $user)
                                    <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"/>
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <td class="pe-0">
                                        {{ $user->name }}
                                    </td>
                                    <td class="pe-0">
                                        {{ $user->sex }}
                                    </td>
                                    <td class="pe-0">
                                        {{ $user->phone }}
                                    </td>
                                </tr>
                                <!--end::Table row-->
                                @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::کارت body-->
                    </div>
                    <!--end::کاربران-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper container-->
</x-layout>
