<!DOCTYPE html>

<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head><base href="">
        <meta charset="utf-8" />
        <title>Metronic Live preview | Keenthemes</title>
        <meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="canonical" href="https://keenthemes.com/metronic" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="<?php echo base_url(); ?>dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->
        <link href="<?php echo base_url(); ?>dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="<?php echo base_url(); ?>dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>dist/assets/media/logos/favicon.ico" />
        <link href="<?php echo base_url(); ?>dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <style>
            #main-content{
                display: none
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
        <!--begin::Main-->
        <div id="main-content">
            <!--begin::Header Mobile-->
            <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
                <!--begin::Logo-->
                <a href="index.html">
                    <img alt="Logo" src="<?php echo base_url(); ?>dist/assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
                </a>
                <!--end::Logo-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
                        <span></span>
                    </button>
                    <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                        <span class="svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:<?php echo base_url(); ?>dist/assets/media/svg/icons/General/User.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header Mobile-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Page-->
                <div class="d-flex flex-row flex-column-fluid page">

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                        <!--begin::Header-->
                        <div id="kt_header" class="header header-fixed">
                            <!--begin::Container-->
                            <div class="container d-flex align-items-stretch justify-content-between">
                                <!--begin::Left-->
                                <div class="d-none d-lg-flex align-items-center mr-3">
                                    <!--begin::Aside Toggle-->
                                    <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                                        <span class="svg-icon svg-icon-xxl svg-icon-dark-75">
                                            <!--begin::Svg Icon | path:<?php echo base_url(); ?>dist/assets/media/svg/icons/Text/Align-left.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
                                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
                                            </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </button>
                                    <!--end::Aside Toggle-->
                                    <!--begin::Logo-->
                                    <a href="index.html">
                                        <img alt="Logo" src="<?php echo base_url(); ?>dist/assets/media/logos/logo-letter-1.png" class="logo-sticky max-h-35px" />
                                    </a>
                                    <!--end::Logo-->
                                    <!--begin::Desktop Search-->
                                    <div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">
                                        <!--begin::Form-->
                                        <form method="get" class="quick-search-form">
                                            <div class="input-group rounded bg-light">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:<?php echo base_url(); ?>dist/assets/media/svg/icons/General/Search.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control h-45px" placeholder="Search..." />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                        <!--begin::Search Toggle-->
                                        <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                                        <!--end::Search Toggle-->
                                        <!--begin::Dropdown-->
                                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                                            <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
                                        </div>
                                        <!--end::Dropdown-->
                                    </div>
                                    <!--end::Desktop Search-->
                                </div>
                                <!--end::Left-->
                                <!--begin::Topbar-->
                                <div class="topbar">
                                    <!--begin::Quick Panel-->
                                    <div class="topbar-item mr-4">
                                        <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75 btn-dropdown" id="kt_quick_panel_toggle">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:<?php echo base_url(); ?>dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Quick Actions-->
                                    <!--begin::Quick Actions-->
                                    <div class="topbar-item mr-4">
                                        <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_actions_toggle">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:<?php echo base_url(); ?>dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Quick panel-->
                                    <!--begin::User-->
                                    <div class="topbar-item mr-4">
                                        <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_user_toggle">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:<?php echo base_url(); ?>dist/assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Notifications-->
                                    <div class="topbar-item">
                                        <div class="btn btn-icon btn-sm btn-primary font-weight-bolder p-0" id="kt_quick_notifications_toggle">3</div>
                                    </div>
                                    <!--end::Notifications-->
                                </div>
                                <!--end::Topbar-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                            <!--begin::Entry-->
                            <div class="d-flex flex-column-fluid">
                                <!--begin::Container-->
                                <div class="container">
                                    <!--begin::Dashboard-->
                                    <div class="card card-custom">
                                        <div class="card-header flex-wrap py-5">
                                            <div class="card-title">
                                                <h3 class="card-label">Weather
                                                    <!--<span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span></h3>-->
                                            </div>
                                            
                                        </div>
                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                             <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                                <thead>
                                                    <tr>
                                                        <th>Weather ID</th>
                                                        <th>Lat</th>
                                                        <th>Lon</th>
                                                        <th>Timezone</th>
                                                        <th>Pressure</th>
                                                        <th>Humidity</th>
                                                        <th>Wind_speed</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBody">
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                    <!--end::Dashboard-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Footer-->
                        <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                            <!--begin::Container-->
                            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <!--begin::Copyright-->
                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted font-weight-bold mr-2">2020©</span>
                                    <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                                </div>
                                <!--end::Copyright-->
                                <!--begin::Nav-->
                                <div class="nav nav-dark order-1 order-md-2">
                                    <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
                                    <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                                    <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::Main-->
        </div>

        <div id='preloader'>Loading</div>
        <div class="container">

        </div>

        <script src="<?php echo base_url(); ?>dist/assets/plugins/global/plugins.bundle.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        
        <script type="text/javascript">
            var baseUri = "<?php echo base_url(); ?>";
            $(document).ready(function () {
                auth();
                getWeather();
                console.log()
            })
            async function auth() {

                await $.ajax({
                    url: baseUri + 'api/dashboard',
                    type: "GET",
                    headers: {
                        'Authorization': $.cookie("user_token"),
                        'User-ID': $.cookie("user_id")
                    },
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    success: function (result) {
                        console.log(result);
                        if (!result.status == 200) {
                            window.location.href = baseUri
                        } else {
                            $('#main-content').show();
                            $('#preloader').hide();
                        }
                    },
                    error: function (e) {
                        console.log("error", e);
                        window.location.href = baseUri
                    },
                    fail: function (fail) {
                        console.log(fail)
                        window.location.href = baseUri

                    }
                });
            }
            
            async function getWeather() {
                await $.ajax({
                    url: baseUri + 'api/weather',
                    type: "GET",
                    headers: {
                        'Authorization': $.cookie("user_token"),
                        'User-ID': $.cookie("user_id")
                    },
                    dataType: "json",
                    contentType: "application/json; charset=utf-8",
                    success: function (result) {
                        if (result.status == 200) {
                            
                            var html = "";
                            var weather = result.weather
                            
                            for(var i = 0; i < weather.length; i++){
                                html+= "<tr>"
                                html+= "    <td>"+weather[i].id+"</td>"
                                html+= "    <td>"+weather[i].lat+"</td>"
                                html+= "    <td>"+weather[i].lon+"</td>"
                                html+= "    <td>"+weather[i].timezone+"</td>"
                                html+= "    <td>"+weather[i].pressure+"</td>"
                                html+= "    <td>"+weather[i].humidity+"</td>"
                                html+= "    <td>"+weather[i].wind_speed+"</td>"
                                html+= "</tr>"
                            } 
                            
                            $('#tableBody').html(html)
                        }
                    },
                    error: function (e) {
                        console.log("error", e);
                    },
                    fail: function (fail) {
                        console.log(fail)
                    }
                });
            }
        </script>




         <script type="text/javascript">
    var KTDatatablesAdvancedColumnVisibility = function () {

        var init = function () {
            var table = $('#kt_datatable');

            // begin first table
            table.DataTable({
                responsive: true,
                columnDefs: [
                    {
                        // hide columns by index number
                        targets: [0, 3],
                        visible: true,
                    },
                ],
            });
        };

        return {
            //main function to initiate the module
            init: function () {
                init();
            }
        };

    }();

    jQuery(document).ready(function () {
        KTDatatablesAdvancedColumnVisibility.init();
    });

    // var modal = document.getElementById(id);
    // modal.style.display = "block";
</script>

<script src="<?php echo base_url() ?>dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>

    </body>
</html>