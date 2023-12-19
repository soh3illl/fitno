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
                    <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n7 mb-lg-n10" id="kt_toolbar">
                        <!--begin::Page title-->
                        <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
                            <!--begin::Title-->
                            <h1 class="d-flex text-dark fw-bold m-0 fs-3">چت</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Menu-->
                                <a href="#" class="btn btn-sm btn-flex btn-light-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>فیلتر</a>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641acb87c8803">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Tags-->
                                            <label class="form-label fw-semibold">وضعیت:</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_641acb87c8803" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">تایید شده</option>
                                                    <option value="2">در انتظار</option>
                                                    <option value="2">در حال پردازش</option>
                                                    <option value="2">رد شد</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Tags-->
                                            <label class="form-label fw-semibold">نوع عضویت:</label>
                                            <!--end::Tags-->
                                            <!--begin::تنظیمات-->
                                            <div class="d-flex">
                                                <!--begin::تنظیمات-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">نویسنده</span>
                                                </label>
                                                <!--end::تنظیمات-->
                                                <!--begin::تنظیمات-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">مشتری</span>
                                                </label>
                                                <!--end::تنظیمات-->
                                            </div>
                                            <!--end::تنظیمات-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Tags-->
                                            <label class="form-label fw-semibold">اعلان ها:</label>
                                            <!--end::Tags-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                <label class="form-check-label">فعال</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">ریست</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Button-->
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">ساختن</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::قالب بندی-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                            <!--begin::مخاطبین-->
                            <div class="card card-flush">
                                <!--begin::کارت header-->
                                <div class="card-header pt-7" id="kt_chat_contacts_header">
                                    <!--begin::Form-->
                                    <form class="w-100 position-relative" autocomplete="off">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid px-13" name="search" value="" placeholder="با نام کاربری یا ایمیل جستجو کنید ..." />
                                        <!--end::Input-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pt-5" id="kt_chat_contacts_body">
                                    <!--begin::لیست-->
                                    <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px">
                                        @foreach($users as $user)

                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-45px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">{{ $user->name[0] }}</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="/coach/chat/{{ $user->id }}" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">{{ $user->name }}</a>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed d-none"></div>
                                            <!--end::Separator-->
                                        @endforeach
                                    </div>
                                    <!--end::لیست-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::مخاطبین-->
                        </div>
                        <!--end::Sidebar-->
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                            <!--begin::Messenger-->
                            <div class="card" id="kt_chat_messenger">
                                <!--begin::کارت header-->
                                <div class="card-header" id="kt_chat_messenger_header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <!--begin::user-->
                                        <div class="d-flex justify-content-center flex-column me-3">
                                            <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">راهنما</a>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::کارت toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <div class="me-n3">
                                            <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-dots-square fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">دعوت مخاطبین
                                                        <span class="ms-2" data-bs-toggle="tooltip" title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید">
																		<i class="ki-duotone ki-information fs-7">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">گروه ها</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">ساختن گروه</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">دعوت کاربران</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::کارت toolbar-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body" id="kt_chat_messenger_body">
                                    <!--begin::پیام ها-->
                                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px">
                                        <!--begin::پیام(in)-->
                                        <div class="d-flex justify-content-start mb-10">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column align-items-start">
                                                <!--begin::user-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                </div>
                                                <!--end::user-->
                                                <!--begin::Text-->
                                                <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">با انتخاب مخاطبین از سمت راست می توانید با مکالمه با آن ها بپردازید</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::پیام(in)-->
                                        <!--begin::پیام(out)-->
                                        <div class="d-flex justify-content-end mb-10">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column align-items-end">
                                                <!--begin::user-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                </div>
                                                <!--end::user-->
                                                <!--begin::Text-->
                                                <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">متوجه شدم</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::پیام(out)-->
                                        <!--begin::پیام(in)-->
                                        <div class="d-flex justify-content-start mb-10">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column align-items-start">
                                                <!--begin::user-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                </div>
                                                <!--end::user-->
                                                <!--begin::Text-->
                                                <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">خیلی عالی</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::پیام(in)-->
                                    </div>
                                    <!--end::پیام ها-->
                                </div>
                                <!--end::کارت body-->
                                <!--begin::کارت footer-->
                                <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="نوشتن پیام"></textarea>
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-2">
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="بزودی">
                                                <i class="ki-duotone ki-paper-clip fs-3"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="بزودی">
                                                <i class="ki-duotone ki-exit-up fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::ارسال-->
                                        <button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                                        <!--end::ارسال-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::کارت footer-->
                            </div>
                            <!--end::Messenger-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::قالب بندی-->
                    <!--begin::Modals-->
                    <!--begin::Modal - نمایش users-->
                    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-13">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">مرور کاربران</h1>
                                        <!--end::Title-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را بررسی کنید
                                            <a href="#" class="link-primary fw-bold">لیست کاربران</a>.</div>
                                        <!--end::توضیحات-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::users-->
                                    <div class="mb-15">
                                        <!--begin::لیست-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">مرادی نیا
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">کارگردان هنری</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">میلاد مرادی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی تحلیلی</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$50,500</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">جلالی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">مهندس نرم افزار</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$75,900</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محسن برومند
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">توسعه دهنده وب</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$10,500</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">راهنما
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">طراح یو ای و یوایکس</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$20,000</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">میکائیل کرمانی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">سرپرست بازاریابی</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$9,300</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محمد رصایی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">معمار نرم افزار</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$15,000</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">امید وحیدی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">مدیر سیستم</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محسن برومند
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">مدیریت اکانت</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$45,800</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">علی کاربر
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">طراح سایت</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$90,500</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">الهام بارانی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">شرکت دارایی، مالیه، سرمایه گذاری</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$5,000</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">آنا کوهی
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">ارتباط مشتری</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$70,000</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-5">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::نام-->
                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">رابرت دو
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی Executive</span></a>
                                                        <!--end::نام-->
                                                        <!--begin::ایمیل-->
                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                        <!--end::ایمیل-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::فروش-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$45,500</div>
                                                        <div class="fs-7 text-muted">فروش</div>
                                                    </div>
                                                    <!--end::فروش-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::user-->
                                        </div>
                                        <!--end::لیست-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::Notice-->
                                    <div class="d-flex justify-content-between">
                                        <!--begin::Tags-->
                                        <div class="fw-semibold">
                                            <label class="fs-6">افزودن کاربران</label>
                                            <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - نمایش users-->
                    <!--begin::Modal - Users جستجو-->
                    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                    <!--begin::Content-->
                                    <div class="text-center mb-13">
                                        <h1 class="mb-3">جستجو کاربران</h1>
                                        <div class="text-muted fw-semibold fs-5">همکاران را به پروژه خود دعوت کنید</div>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::جستجو-->
                                    <div id="kt_modal_users_search_hوler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                        <!--begin::Form-->
                                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                                            <input type="hidden" />
                                            <!--end::Hidden input-->
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="با نام کاربری ، نام کامل یا ایمیل جستجو کنید ..." data-kt-search-element="input" />
                                            <!--end::Input-->
                                            <!--begin::Spinner-->
                                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
															</span>
                                            <!--end::Spinner-->
                                            <!--begin::ریست-->
                                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
																<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
                                            <!--end::ریست-->
                                        </form>
                                        <!--end::Form-->
                                        <!--begin::Wrapper-->
                                        <div class="py-5">
                                            <!--begin::پیشنهادات-->
                                            <div data-kt-search-element="suggestions">
                                                <!--begin::Heading-->
                                                <h3 class="fw-semibold mb-5">اخیراً جستجو شده:</h3>
                                                <!--end::Heading-->
                                                <!--begin::users-->
                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                    <!--begin::user-->
                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">مرادی نیا</span>
                                                            <span class="badge badge-light">کارگردان هنری</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::user-->
                                                    <!--begin::user-->
                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">میلاد مرادی</span>
                                                            <span class="badge badge-light">بازاریابی تحلیلی</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::user-->
                                                    <!--begin::user-->
                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">جلالی</span>
                                                            <span class="badge badge-light">مهندس نرم افزار</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::user-->
                                                    <!--begin::user-->
                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">محسن برومند</span>
                                                            <span class="badge badge-light">توسعه دهنده وب</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::user-->
                                                    <!--begin::user-->
                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">راهنما</span>
                                                            <span class="badge badge-light">طراح یو ای و یوایکس</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::users-->
                                            </div>
                                            <!--end::پیشنهادات-->
                                            <!--begin::Results(add d-none to below element to hide the کاربران list by default)-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::users-->
                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی نیا</a>
                                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2" selected="selected">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد مرادی</a>
                                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2" selected="selected">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">راهنما</a>
                                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل کرمانی</a>
                                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2" selected="selected">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد رصایی</a>
                                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2" selected="selected">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2" selected="selected">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا کوهی</a>
                                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت دو</a>
                                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد مولای</a>
                                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان کامرانی</a>
                                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2" selected="selected">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان ورزقانی</a>
                                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3">متفرقه</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::user-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                <option value="1">مهمان</option>
                                                                <option value="2">مدیر</option>
                                                                <option value="3" selected="selected">متفرقه </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::user-->
                                                </div>
                                                <!--end::users-->
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-center mt-15">
                                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">انصراف</button>
                                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">کاربران انتخاب شده را اضافه کنید</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Results-->
                                            <!--begin::Empty-->
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Message-->
                                                <div class="fw-semibold py-10">
                                                    <div class="text-gray-600 fs-3 mb-2">هیچ کاربری پیدا نشد</div>
                                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                                </div>
                                                <!--end::Message-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-5">
                                                    <img src="/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::جستجو-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Users جستجو-->
                    <!--end::Modals-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">ساتراس وب</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">درباره ی ما</a>
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

</x-layout>
