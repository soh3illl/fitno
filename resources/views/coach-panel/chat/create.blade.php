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
                                        <input type="text" class="form-control form-control-solid px-13" name="search"
                                               value="" placeholder="با نام کاربری یا ایمیل جستجو کنید ..."/>
                                        <!--end::Input-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pt-5" id="kt_chat_contacts_body">
                                    <!--begin::لیست-->
                                    <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                                         data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                                         data-kt-scroll-offset="5px">
                                        @foreach($users as $user)

                                            <!--begin::user-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-45px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">{{ $user->name[0] }}</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="/coach/chat/{{ $user->id }}"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">{{ $user->name }}</a>
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
                                            <a href="#"
                                               class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">{{ $targetUser->name }}</a>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body" id="kt_chat_messenger_body">
                                    <!--begin::پیام ها-->
                                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages"
                                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                         data-kt-scroll-max-height="auto"
                                         data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                         data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                                         data-kt-scroll-offset="5px">
                                        @foreach($chats as $chat)

                                            @if($chat->sender_id != auth()->user()->id)
                                                <!--begin::پیام(in)-->
                                                <div class="d-flex justify-content-start mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start">
                                                        <!--begin::user-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">{{ $user->name[0] }}</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{ $targetUser->name }}</a>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::user-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                            data-kt-element="message-text">{{ $chat->message }}</div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::پیام(in)-->
                                            @endif

                                            @if($chat->sender_id == auth()->user()->id)
                                                <!--begin::پیام(out)-->
                                                <div class="d-flex justify-content-end mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-end">
                                                        <!--begin::user-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Details-->
                                                            <div class="me-3">
                                                                <a href="#"
                                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                {{--                                                        <img alt="Pic" src="/assets/media/avatars/300-1.jpg" />--}}
                                                                <img alt="Pic" src="{{ auth()->user()->imagePath() }}"/>
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::user-->
                                                        <!--begin::Text-->
                                                        <div
                                                            class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                            data-kt-element="message-text">{{ $chat->message }}</div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::پیام(out)-->
                                            @endif

                                        @endforeach
                                    </div>
                                    <!--end::پیام ها-->
                                </div>
                                <!--end::کارت body-->
                                <!--begin::کارت footer-->
                                <form action="/coach/chat" method="POST">
                                    @csrf


                                    <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-flush mb-3" rows="1"
                                                  data-kt-element="input" placeholder="نوشتن پیام" name="message"></textarea>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <input type="hidden" name="sender_id" value="{{ auth()->user()->id }}">
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <input type="hidden" name="receiver_id" value="{{ $targetUser->id }}">
                                        <!--end::Input-->
                                        <!--begin:Toolbar-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::ارسال-->
                                            <button class="btn btn-primary" type="submit" data-kt-element="send">ارسال
                                            </button>
                                            <!--end::ارسال-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>


                                </form>
                                <!--end::کارت footer-->
                            </div>
                            <!--end::Messenger-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::قالب بندی-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">ساتراس
                        وب</a>
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
                        <a href="https://www.rtl-theme.com/metronic-admin-html-template/" target="_blank"
                           class="menu-link px-2">خرید</a>
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
