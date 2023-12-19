<x-layout>
    <!--begin::Wrapper container-->
    <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar align-items-center justify-content-between py-4 py-lg-6">
                    <!--begin::Toolbar wrapper-->
                    <x-page-title>کاربران</x-page-title>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Form-->
                <form class="form d-flex flex-column flex-lg-row" action="/admin/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin:::Tabs-->
                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" style="cursor: default">افزودن کاربر</a>
                                </li>
                                <!--end:::Tab item-->
                            </ul>
                            <!--end:::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::عمومی options-->
                                        <div class="card card-flush py-4">
                                            <!--begin::کارت header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>اطلاعات کاربران</h2>
                                                </div>
                                            </div>
                                            <!--end::کارت header-->
                                            <!--begin::کارت body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Tags-->
                                                    <label class="required form-label">نام و نام خانوادگی</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="name" class="form-control mb-2" placeholder="نام" value="{{ $user->name }}" />
                                                    <!--end::Input-->
                                                    <!--begin::توضیحات-->
                                                    @error('name')
                                                        <div class="text-danger fs-7">{{ $errors->first('name') }}</div>
                                                    @enderror
                                                    <!--end::توضیحات-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Tags-->
                                                    <label class="required form-label">شماره تماس</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="phone" class="form-control mb-2" placeholder="شماره تماس" value="{{ $user->phone }}" />
                                                    <!--end::Input-->
                                                    <!--begin::توضیحات-->
                                                    @error('phone')
                                                    <div class="text-danger fs-7">{{ $errors->first('phone') }}</div>
                                                    @enderror
                                                    <!--end::توضیحات-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Tags-->
                                                    <label class="required form-label">جنیست</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select name="sex" class="form-control mb-2">
                                                        <option value="مرد">مرد</option>
                                                        <option value="زن">زن</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::کارت header-->
                                        </div>
                                        <!--end::عمومی options-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="/admin/users" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">انصراف</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="" class="btn btn-primary">
                                    <span class="indicator-label">ویرایش</span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2022&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">درباره</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://rtl-theme.com" target="_blank" class="menu-link px-2">پشتیبانی</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://www.rtl-theme.com/metronic-admin-html-template/" target="_blank" class="menu-link px-2">خرید</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper container-->

    @section('js')
        <script src="/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
        <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="/assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
    @endsection
</x-layout>
