<!DOCTYPE html>
<!--
نویسنده: Keenthemes
محصولات نام: مترونیک
خرید: https://1.envato.market/EA4JP
وب سایت: http://www.keenthemes.com
تماس با ما: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
لاینسس شده: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <!-- <base href="../../../" /> -->
    <title>قالب مدیریت مترونیک پیش نمایش</title>
    <meta charset="utf-8"/>
    <meta
        name="description"
        content="The most advanced پنل ادمین بوت استراپ Theme on Themeforest trusted by 100,000 beginners و professionals. Multi-demo, حالت تیره, RTL support و complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now و get life-time updates for free."
    />
    <meta
        name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="مترونیک "/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | مترونیک"/>
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico"/>
    <!--begin::Fonts(mوatory for all pages)-->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
    <link
        href="/assets/plugins/global/plugins.bundle.rtl.css"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="/assets/css/style.bundle.rtl.css"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank">
<!--begin::Theme mode setup on page load-->
<script>
    let defaultThemeMode = "light";
    document.documentElement.setAttribute("data-theme", defaultThemeMode);
</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::احراز هویت - ثبت نام -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div
            class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1"
        >
            <!--begin::Form-->
            <div
                class="d-flex flex-center flex-column flex-lg-row-fluid"
            >
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10">
                    <!--begin::Form-->
                    <form
                        method="post"
                        action="/{{ $user->username }}"
                        class="form w-100"
                    >
                        @if($errors->any())
                            <!--begin::Alert-->
                            <div class="alert alert-danger d-flex align-items-center p-5">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span
                                        class="path1"></span><span class="path2"></span></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column">

                                    <!--begin::Content-->
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Alert-->
                        @endif
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">
                                عضویت
                            </h1>
                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::نام-->
                            <input
                                type="text"
                                placeholder="نام"
                                name="name"
                                autocomplete="off"
                                class="form-control bg-transparent"
                                value="{{ old('name') }}"
                            />
                            <!--end::نام-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::نام-->
                            <input
                                type="text"
                                placeholder="شماره تلفن"
                                name="phone"
                                autocomplete="off"
                                class="form-control bg-transparent"
                                value="{{ old('phone') }}"
                            />
                            <!--end::نام-->
                        </div>
                        <!--end::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::رمز عبور-->
                            <input
                                placeholder="رمز عبور"
                                name="password"
                                type="password"
                                autocomplete="off"
                                class="form-control bg-transparent"
                            />
                            <!--end::رمز عبور-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::نام-->
                            <select
                                type="text"
                                placeholder="جنیست"
                                name="sex"
                                autocomplete="off"
                                class="form-control bg-transparent"
                                value="{{ old('name') }}"
                            >
                                <option value="مرد">مرد</option>
                                <option value="زن">زن</option>
                            </select>
                            <!--end::نام-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::ثبت button-->
                        <div class="d-grid mb-10">
                            <button
                                type="submit"
                                id="kt_sign_up_submit"
                                class="btn btn-primary"
                            >
                                <!--begin::Indicator label-->
                                <span class="indicator-label"
                                >ورود</span
                                >
                                <!--end::Indicator label-->
                            </button>
                        </div>
                        <!--end::ثبت button-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Body-->
        <!--begin::کناری-->
        <div
            class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
            style="background-image: url(assets/media/misc/auth-bg.png)"
        >
            <!--begin::Content-->
            <div
                class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100"
            >
                <!--begin::Logo-->
                <a
                    href="#"
                    class="mb-0 mb-lg-12"
                >
                    <img
                        alt="Logo"
                        src="/assets/media/logos/custom-1.png"
                        class="h-60px h-lg-75px"
                    />
                </a>
                <!--end::Logo-->
                <!--begin::Image-->
                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ $user->imagePath() }}" alt="" />
                <!--end::Image-->                <!--begin::Title-->
                <h1
                    class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7"
                >{{ $user->name }}</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div
                    class="d-none d-lg-block text-white fs-base text-center"
                    style="width: 50%"
                >
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                    صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                    است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                    متنوع با هدف بهبود ابزارهای کاربردی می باشد
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::کناری-->
    </div>
    <!--end::احراز هویت - ثبت نام-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
</body>
<!--end::Body-->
</html>
