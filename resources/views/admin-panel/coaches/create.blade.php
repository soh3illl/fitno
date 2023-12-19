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
                    <x-page-title>مربیان</x-page-title>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <form class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" action="/admin/coaches" method="POST">
                        @csrf
                        <!--begin::کناری column-->
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::کارت header-->
                                <div class="card-header">
                                    <!--begin::کارت title-->
                                    <div class="card-title">
                                        <h2>تصویر شاخص</h2>
                                    </div>
                                    <!--end::کارت title-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    <style>.image-input-placeholder { background-image: url('/assets/media/avatars/300-2.jpg'); } [data-theme="dark"] .image-input-placeholder { background-image: url('/assets/media/svg/files/blank-image-dark.svg'); }</style>
                                    <!--end::Image input placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                        <!--begin::نمایش existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::نمایش existing avatar-->
                                        <!--begin::Tags-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="تعویض آواتار" data-bs-original-title="تعویض آواتار" data-kt-initialized="1">
                                            <!--begin::Icon-->
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--end::Icon-->
                                            <!--begin::Inputs-->
                                            <input type="file" name="imageUrl" accept=".png, .jpg, .jpeg" value="/home/soul/Desktop/theme/demo28/dist/assets/media/avatars/300-2.jpg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::انصراف-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="انصراف avatar" data-bs-original-title="انصراف avatar" data-kt-initialized="1">
															<i class="bi bi-x fs-2"></i>
														</span>
                                        <!--end::انصراف-->
                                        <!--begin::حذف-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="حذف آواتار" data-bs-original-title="حذف آواتار" data-kt-initialized="1">
															<i class="bi bi-x fs-2"></i>
														</span>
                                        <!--end::حذف-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fs-7">تصویر کوچک دسته را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند</div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::Thumbnail settings-->
                        </div>
                        <!--end::کناری column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::عمومی options-->
                            <div class="card card-flush py-4">
                                <!--begin::کارت header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>اطلاعات</h2>
                                    </div>
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Tags-->
                                        <label class="required form-label">نام و نام خانوادگی</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" name="name" class="form-control mb-2" placeholder="ناو نام خانوادگی مربی" value="{{ old('name') }}">
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        @error('name')
                                        <div class="text-danger fs-7">{{ $errors->first('name') }}</div>
                                        @enderror
                                        <!--end::توضیحات-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--end::Input group-->
                                        <!--begin::Tags-->
                                        <label class="required form-label">نام کاربری</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" name="username" class="form-control mb-2" placeholder="نام کاربری" value="{{ old('username') }}">
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        @error('username')
                                        <div class="text-danger fs-7">{{ $errors->first('username') }}</div>
                                        @enderror
                                        <!--end::توضیحات-->
                                    <!--end::Input group-->
                                </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--end::Input group-->
                                        <!--begin::Tags-->
                                        <label class="required form-label">رمز عبور</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="password" name="password" class="form-control mb-2" placeholder="رمز عبور">
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        @error('password')
                                        <div class="text-danger fs-7">{{ $errors->first('password') }}</div>
                                        @enderror
                                        <!--end::توضیحات-->
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--end::Input group-->
                                        <!--begin::Tags-->
                                        <label class="required form-label">شماره تلفن</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" name="phone" class="form-control mb-2" placeholder="شماره تماس" value="{{ old('phone') }}">
                                        <!--end::Input-->
                                        <!--begin::توضیحات-->
                                        @error('phone')
                                        <div class="text-danger fs-7">{{ $errors->first('phone') }}</div>
                                        @enderror
                                        <!--end::توضیحات-->
                                        <!--end::Input group-->
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
                                <!--end::کارت header-->
                            </div>
                            <!--end::عمومی options-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="/admin/coaches" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">انصراف</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">ایجاد</span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
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
