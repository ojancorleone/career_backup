<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="{base_url}assets/backend/modules/core/common/img/{favicon}" type="image/x-icon" />
    <link rel="shortcut icon" href="{base_url}assets/backend/modules/core/common/img/{favicon}" type="image/x-icon" />
    <title>{title}</title
    <link href="{base_url}assets/backend/vendors/font-google/font-google.css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/jscrollpane/style/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/font-linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/font-icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/vendors/font-awesome/css/font-awesome.min.css">
    <script src="{base_url}assets/backend/vendors/jquery/dist/jquery.min.js"></script>
    <script src="{base_url}assets/backend/vendors/tether/dist/js/tether.min.js"></script>
    <script src="{base_url}assets/backend/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="{base_url}assets/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{base_url}assets/backend/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="{base_url}assets/backend/vendors/jscrollpane/script/jquery.jscrollpane.min.js"></script>
    <script src="{base_url}assets/backend/vendors/spin.js/spin.js"></script>
    <script src="{base_url}assets/backend/vendors/ladda/dist/ladda.min.js"></script>
    <script src="{base_url}assets/backend/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{base_url}assets/backend/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="{base_url}assets/backend/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="{base_url}assets/backend/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="{base_url}assets/backend/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="{base_url}assets/backend/vendors/autosize/dist/autosize.min.js"></script>
    <script src="{base_url}assets/backend/vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="{base_url}assets/backend/vendors/moment/min/moment.min.js"></script>
    <script src="{base_url}assets/backend/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="{base_url}assets/backend/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="{base_url}assets/backend/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>


    <!-- CLEAN UI ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/core/common/core.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/vendors/common/vendors.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/layouts/common/layouts-pack.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/themes/common/themes.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/top-bar/common/top-bar.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/footer/common/footer.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/pages/common/pages.cleanui.css">
    <link rel="stylesheet" type="text/css" href="{base_url}assets/backend/modules/apps/common/apps.cleanui.css">
    <script src="{base_url}assets/backend/modules/menu-left/common/menu-left.cleanui.js"></script>
    <script src="{base_url}assets/backend/modules/menu-right/common/menu-right.cleanui.js"></script>
</head>
<body class="cat__config--vertical cat__menu-left--colorful cat__menu-left--visible">
<div class="cat__top-bar">

<div class="cat__content">
<!-- START: pages/login-alpha -->
<div class="cat__pages__login cat__pages__login--fullscreen" style="background-image: url({base_url}assets/backend/modules/pages/common/img/login/{login_image})">
    <div class="cat__pages__login__block" style="padding: 2.71rem 2.85rem 2.71rem;">
        <div class="row">
            <div class="col-xl-12">
                <div class="cat__pages__login__block cat__pages__login__block--extended">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cat__pages__login__block__inner">
                                <div class="cat__pages__login__block__form">
                                    <h4 class="text-uppercase">
                                        Please log in
                                    </h4>
                                    <br />
                                    <form id="form-login" name="form-validation" method="#">
                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input id="validation[email]"
                                                   class="form-control"
                                                   placeholder="Email or Username"
                                                   name="validation[email]"
                                                   type="text"
                                                   data-validation="[EMAIL]">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input id="validation[password]"
                                                   class="form-control password"
                                                   name="validation[password]"
                                                   type="password" data-validation="[L>=3]"
                                                   data-validation-message="$ must be at least 6 characters"
                                                   placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <a href="{base_url}forgot_password/auth/{tenant_id_alias}" class="pull-right cat__core__link--blue cat__core__link--underlined">Forgot Password?</a>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="example6" checked>
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary mr-3">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="cat__pages__login__block__sidebar">
                                    <h4 class="cat__pages__login__block__sidebar__title">
                                        E-Recruitment 2018
                                    </h4>
                                    <div class="cat__pages__login__block__sidebar__item">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s.
                                    </div>
                                    <div class="cat__pages__login__block__sidebar__item">
                                        Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    </div>
                                    <div class="cat__pages__login__block__sidebar__place">
                                        <i class="icmn-location mr-3"><!-- --></i>
                                        New York, USA
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cat__pages__login__footer text-center">
        
    </div>
</div>
<!-- END: pages/login-alpha -->

<!-- START: page scripts -->
<script type="text/javascript">

var csfrData = {};
csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
$.ajaxSetup({
data: csfrData
});    

    $(function() {
        // Form Validation
        $('#form-login').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                },
                callback: {
                    onBeforeSubmit: function (node) {

                    },
                    onSubmit: function (node) {

                        $.ajax({
                            url: 'login/check_login',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#form-login').serialize() ,
                        })
                        .done(function(data) {
                            if(data.status=='success'){
                                document.location.href="{base_url}main#dashboard";
                            }else{
                                $.notify("Login Fail, Please Try Again...");
                            }          
                        })
                        .fail(function() {
                                $.notify("Login Error, Please Check your connections...");
                        });
                        
                    }
                }
            },
            debug: true
         });

        // Show/Hide Password
        $('.password').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });

        // Switch to fullscreen
        $('.switch-to-fullscreen').on('click', function () {
            $('.cat__pages__login').toggleClass('cat__pages__login--fullscreen');
        })

        // Change BG
        $('.random-bg-image').on('click', function () {
            var min = 1, max = 5,
                next = Math.floor($('.random-bg-image').data('img')) + 1,
                final = next > max ? min : next;

            $('.random-bg-image').data('img', final);
            $('.cat__pages__login').data('img', final).css('backgroundImage', 'url({base_url}assets/backend/modules/pages/common/img/login/' + final + '.jpg)');
        })

    });
</script>
    <a href="javascript: void(0);" class="cat__core__scroll-top" onclick="$('body, html').animate({'scrollTop': 0}, 500);"><i class="icmn-arrow-up"></i></a>
</div>
</div>
</body>
</html>