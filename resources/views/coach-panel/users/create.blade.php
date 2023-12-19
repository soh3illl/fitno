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
                    <x-page-title>سفارشات</x-page-title>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Form-->
                <form class="form d-flex flex-column flex-lg-row" action="/admin/users" method="POST">
                    @csrf
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
                                                    <h2>ارسال برنامه</h2>
                                                </div>
                                            </div>
                                            <!--end::کارت header-->
                                            <!--begin::کارت body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Media-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::کارت header-->
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <h2>رسانه</h2>
                                                        </div>
                                                    </div>
                                                    <!--end::کارت header-->
                                                    <!--begin::کارت body-->
                                                    <div class="card-body pt-0">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-2">
                                                            <!--begin::Dropzone-->
                                                            <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                                <!--begin::Message-->
                                                                <div class="dz-message needsclick">
                                                                    <!--begin::Icon-->
                                                                    <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <div class="ms-4">
                                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">پرونده ها را اینجا رها کنید یا برای بارگذاری کلیک کنید.</h3>
                                                                        <span class="fs-7 fw-semibold text-gray-400">اپلود فایل بیش از 10 تا</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                            </div>
                                                            <!--end::Dropzone-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::توضیحات-->
                                                        <div class="text-muted fs-7">گالری رسانه محصول را تنظیم کنید.</div>
                                                        <!--end::توضیحات-->
                                                    </div>
                                                    <!--end::کارت header-->
                                                </div>
                                                <!--end::Media-->
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
                                    <span class="indicator-label">افزودن</span>
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
