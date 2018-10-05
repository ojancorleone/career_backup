<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{title}</title>
    <link href="{base_url}assets/backend/modules/core/common/img/{favicon}" rel="shortcut icon">
    <link href="{base_url}assets/backend/vendors/font-google/font-google.css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- VENDORS -->
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
<!-- START: pages/lockscreen -->
<div class="cat__pages__login cat__pages__login--fullscreen" style="background-image: url({base_url}assets/backend/modules/pages/common/img/login/{login_image})">
    <div class="cat__pages__login__block">
        <div class="row">
            <div class="col-xl-12">
                <div class="cat__pages__login__block__inner">
                    <div class="cat__pages__login__block__form">
                        <form id="frm1" name="frm1" method="#">
                        	<input type="hidden" name="tenant_id" id="tenant_id" value="{tenant_id}">
                            <input type="hidden" name="tenant_id_alias" id="tenant_id_alias" value="{tenant_id_alias}">
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                            <div class="text-center mb-3">
                                
                                    <img src="{base_url}assets/backend/modules/core/common/img/{logo}" alt="Alternative text to the image" width="100px" height="auto">
                                
                            </div>
                            <h2 class="text-center">
                                <i class="icmn-lock"></i>
                                <strong>Forgot your password?</strong>
                      	    </h2>
                            <br />
                           <p align="center"> Enter the username you use to sign into your Recruitment Account, which is usually your email address.</p>
                            <div class="form-group">
                                <input id="email"
                                       class="form-control"
                                       placeholder="Email or Username"
                                       name="email"
                                       type="text"
                                       data-validation="[EMAIL]">
                            </div>
                            <div class="form-actions text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="{base_url}login/{tenant_id_alias}">Or sign in as a different user</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cat__pages__login__footer text-center">

    </div>
</div>
<!-- END: pages/lockscreen -->
<!-- START: page scripts -->
<script>
	var csfrData = {};
	csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
	$.ajaxSetup({
	data: csfrData
	});  
	$("#tesswal").click(function(event) {
		/* Act on the event */
		swal("Here's a message!");
	});
    $(function() {

        $('#frm1').validate({
            submit: {
            	rules : {
	                password : {
	                    minlength : 6
	                },
	                password_confirm : {
	                    minlength : 6,
	                    equalTo : "#password"
	                }
            	},
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
                            url: '{base_url}forgot_password/check_forgot_password/{tenant_id_alias}',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#frm1').serialize() ,
                        })
                        .done(function(data) {
                            if(data.status=='success'){
                                 // Sweet Alert
							    swal({ 
							       title: "Notification",		
								   text: data.reason
								  },
								  function(){
								    document.location.href="{base_url}login/{tenant_id_alias}";
								});                             
                            }else{
                            	// Sweet Alert
							    swal({ 
							       title: "Notification",		
								   text: data.reason
								  });
                            }          
                        })
                        .fail(function() {
                        	// Sweet Alert
							swal({ 
							       title: "Notification",		
								   text: data.reason
								  });
                        });
                        
                    }
                }
            },
            debug: true
         });

    });
</script>
<!-- END: page scripts -->
    <a href="javascript: void(0);" class="cat__core__scroll-top" onclick="$('body, html').animate({'scrollTop': 0}, 500);"><i class="icmn-arrow-up"></i></a>
</div>
</div>
</body>
</html>