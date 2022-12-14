
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
    <head><base href="../../../../">
        <meta charset="utf-8" />
        <title>Login Page 6 | Keenthemes</title>
        <meta name="description" content="Login page example" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="canonical" href="https://keenthemes.com/metronic" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="<?php echo base_url(); ?>dist/assets/css/pages/login/classic/login-6.css" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="<?php echo base_url(); ?>dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>dist/assets/media/logos/favicon.ico" />
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-6 login-signin-on login-signin-on d-flex flex-column-fluid" id="kt_login">
                <div class="d-flex flex-column flex-lg-row flex-row-fluid text-center" style="background-image: url(<?php echo base_url(); ?>dist/assets/media/bg/bg-3.jpg);">
                    <!--begin:Aside-->
                    <div class="d-flex w-100 flex-center p-15">
                        <div class="login-wrapper">
                            <!--begin:Aside Content-->
                            <div class="text-dark-75">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>dist/assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
                                </a>
                                <h3 class="mb-8 mt-22 font-weight-bold">JOIN OUR GREAT COMMUNITY</h3>
                                <p class="mb-15 text-muted font-weight-bold">The ultimate Bootstrap &amp; Angular 6 admin theme framework for next generation web apps.</p>
                                <button type="button" id="kt_login_signup" class="btn btn-outline-primary btn-pill py-4 px-9 font-weight-bold">Get An Account</button>
                            </div>
                            <!--end:Aside Content-->
                        </div>
                    </div>
                    <!--end:Aside-->
                    <!--begin:Divider-->
                    <div class="login-divider">
                        <div></div>
                    </div>
                    <!--end:Divider-->
                    <!--begin:Content-->
                    <div class="d-flex w-100 flex-center p-15 position-relative overflow-hidden">
                        <div class="login-wrapper">
                            <!--begin:Sign In Form-->
                            <div class="login-signin">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h2 class="font-weight-bold">Sign In</h2>
                                    <p class="text-muted font-weight-bold">Enter your username and password</p>
                                </div>
                                <form class="f-login" role="form"  method="post" id="kt_form">
                                    <div class="form-group py-2 m-0">
                                        <input id="username" class="form-control h-auto border-0 px-0 placeholder-dark-75"  type="text" placeholder="Username" name="username"  />
                                    </div>
                                    <div class="form-group py-2 border-top m-0">
                                        <input id="password" class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="Password" name="password" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-5">
                                        <div class="checkbox-inline">
                                            <label class="checkbox m-0 text-muted font-weight-bold">
                                                <input type="checkbox" name="remember" />
                                                <span></span>Remember me</label>
                                        </div>
                                        <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary font-weight-bold">Forget Password ?</a>
                                    </div>
                                    <div class="text-center mt-15">
                                        <button  class="btn btn-primary btn-pill shadow-sm py-4 px-9 font-weight-bold">Sign In</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Sign In Form-->
                            <!--begin:Sign Up Form-->
                            <div class="login-signup">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h3 class="">Sign Up</h3>
                                    <p class="text-muted font-weight-bold">Enter your details to create your account</p>
                                </div>
                                <form class="form text-left" id="kt_login_signup_form">
                                    <div class="form-group py-2 m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Fullname" name="fullname" />
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Email" name="email" autocomplete="off" />
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Password" name="password" />
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Confirm Password" name="cpassword" />
                                    </div>
                                    <div class="form-group mt-5">
                                        <div class="checkbox-inline">
                                            <label class="checkbox checkbox-outline font-weight-bold">
                                                <input type="checkbox" name="agree" />
                                                <span></span>I Agree the
                                                <a href="#" class="ml-1">terms and conditions</a>.</label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap flex-center">
                                        <button id="kt_login_signup_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                                        <button id="kt_login_signup_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Sign Up Form-->
                            <!--begin:Forgot Password Form-->
                            <div class="login-forgot">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h3 class="">Forgotten Password ?</h3>
                                    <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
                                </div>
                                <form class="form text-left" id="kt_login_forgot_form">
                                    <div class="form-group py-2 m-0 border-bottom">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Email" name="email" autocomplete="off" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap flex-center mt-10">
                                        <button id="kt_login_forgot_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Forgot Password Form-->
                        </div>
                    </div>
                    <!--end:Content-->
                </div>
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->
        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = '';</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="<?php echo base_url(); ?>dist/assets/plugins/global/plugins.bundle.js"></script>
        <!-- <script src="<?php echo base_url(); ?>dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script> -->
        <!-- <script src="<?php echo base_url(); ?>dist/assets/js/scripts.bundle.js"></script> -->
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <!-- <script src="<?php echo base_url(); ?>dist/assets/js/pages/custom/login/login-general.js"></script> -->
        <!--end::Page Scripts-->
        <script type="text/javascript">
            var baseUri = "<?php echo base_url(); ?>";

            $(document).ready(function() {
                $('#kt_form').on('submit', function(e) {
                    e.preventDefault();
                    login();                    
                })
            })

            async function login() {
                var data = {
                    "username": $('#username').val(),
                    "password": $('#password').val()
                };

                await $.ajax({
                    url: baseUri+'auth/login',
                    type: "POST",
                    dataType: "json",
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    success: function (result) {
                        if(result.status == 200){
                            document.cookie="user_token="+result.token;
                            document.cookie="user_id="+result.id;
                            window.location.href = baseUri+'dashboard'
                        }
                    },
                    error: function (e) {
                        console.log("error", e);
                    },
                    fail: function(fail) {
                        console.log(fail)
                    }
                });
            }
        </script>

    </body>
    <!--end::Body-->
</html>