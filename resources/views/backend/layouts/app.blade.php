<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>E Kinerja</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/backend/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/backend/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/backend/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/backend/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/backend/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/backend/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/assets/backend/vendors/simplebar/simplebar.min.js"></script>
    <script src="/assets/backend/js/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/assets/backend/vendors/choices/choices.min.css" rel="stylesheet">
    <link href="/assets/backend/vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
    <link href="/assets/backend/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="/assets/backend/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="/assets/backend/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="/assets/backend/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="/assets/backend/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="/assets/backend/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">


    <script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
    </script>
    @stack('css')
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <!-- sidebar -->
        @include('backend.layouts.sidebar')
        <!-- end sidebar -->

        <!-- navbar -->
        @include('backend.layouts.navbar')
        <!-- end navbar -->

        <div class="content">
            @yield('content')
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-body">Copy right<span
                                class="d-none d-sm-inline-block"></span><span
                                class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a
                                class="mx-1" href="https://stmik-mi.ac.id/">STMIK MARDIRA INDONESIA</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-body-tertiary text-opacity-85">v1.19.0</p>
                    </div>
                </div>
            </footer>
        </div>
        <script>
        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
            navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVertical && navbarVerticalStyle === 'darker') {
            navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
        </script>
        <div class="support-chat-container">
            <div class="container-fluid support-chat">
                <div class="card bg-body-emphasis">
                    <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
                        <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                                class="fa-solid fa-circle text-success fs-11"></span></h5>
                        <div class="btn-reveal-trigger">
                            <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex"
                                type="button" id="support-chat-dropdown" data-bs-toggle="dropdown"
                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                                    class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item"
                                    href="#!">Search in
                                    chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item"
                                    href="#!">Report
                                    to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body chat p-0">
                        <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                            <div class="text-end mt-6"><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span
                                        class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p>
                                    <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span
                                        class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a
                                    class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span
                                        class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a>
                            </div>
                            <div class="text-center mt-auto">
                                <div class="avatar avatar-3xl status-online"><img
                                        class="rounded-circle border border-3 border-light-subtle"
                                        src="/assets/backend/img/team/30.webp" alt="" /></div>
                                <h5 class="mt-2 mb-3">Eric</h5>
                                <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you
                                    here or by email
                                    within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
                        <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4">
                            <input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text"
                                placeholder="Write message" />
                            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                                for="supportChatPhotos"><span class="fa-solid fa-image"></span></label>
                            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
                            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0"
                                for="supportChatAttachment">
                                <span class="fa-solid fa-paperclip"></span></label>
                            <input class="d-none" type="file" id="supportChatAttachment" />
                        </div>
                        <button class="btn p-0 border-0 send-btn"><span
                                class="fa-solid fa-paper-plane fs-9"></span></button>
                    </div>
                </div>
            </div>
            <button class="btn btn-support-chat p-0 border border-translucent"><span
                    class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span
                    class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span
                        class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span
                    class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span
                    class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
                    <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
                </div>
                <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
                        class="fas fa-times fs-8"> </span></button>
            </div>
            <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                    class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card" id="themeController">
            <div class="setting-panel-item mt-0">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-4">
                        <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light"
                            data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="/assets/backend/img/generic/default-light.png" alt="" /></span><span
                                class="label-text">Light</span></label>
                    </div>
                    <div class="col-4">
                        <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark"
                            data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="/assets/backend/img/generic/default-dark.png" alt="" /></span><span
                                class="label-text">
                                Dark</span></label>
                    </div>
                    <div class="col-4">
                        <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto"
                            data-theme-control="phoenixTheme" />
                        <label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="/assets/backend/img/generic/auto.png" alt="" /></span><span class="label-text">
                                Auto</span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets/backend/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="/assets/backend/vendors/anchorjs/anchor.min.js"></script>
    <script src="/assets/backend/vendors/is/is.min.js"></script>
    <script src="/assets/backend/vendors/fontawesome/all.min.js"></script>
    <script src="/assets/backend/vendors/lodash/lodash.min.js"></script>
    <script src="/assets/backend/vendors/list.js/list.min.js"></script>
    <script src="/assets/backend/vendors/feather-icons/feather.min.js"></script>
    <script src="/assets/backend/vendors/dayjs/dayjs.min.js"></script>
    <script src="/assets/backend/vendors/choices/choices.min.js"></script>
    <script src="/assets/backend/vendors/echarts/echarts.min.js"></script>
    <script src="/assets/backend/vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
    <script src="/assets/backend/vendors/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('assets/backend/vendors/prism/prism.js')}}"></script>
    <script src="/assets/backend/js/phoenix.js"></script>
    <script src="/assets/backend/js/projectmanagement-dashboard.js"></script>

    @stack('js')

</body>

</html>