<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>{title}</title>
    <link rel="icon" href="{base_url}assets/backend/inf/img/{favicon}" type="image/x-icon">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="{base_url}assets/backend/css/font_google.css" rel="stylesheet" type="text/css">
	<link href="{base_url}assets/backend/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="{base_url}assets/backend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{base_url}assets/backend/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- <link href="{base_url}assets/backend/plugins/icheck/skins/all.css" rel="stylesheet" /> -->
	<link href="{base_url}assets/backend/css/animate.min.css" rel="stylesheet" />
	<link href="{base_url}assets/backend/css/style.min.css" rel="stylesheet" />
	<link href="{base_url}assets/backend/css/style-responsive.min.css" rel="stylesheet" />
	<link href="{base_url}assets/backend/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="{base_url}assets/backend/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN INF CSS STYLE ================== -->
    <link href="{base_url}assets/backend/inf/css/login-v3.css" rel="stylesheet" />
    <!-- ================== END INF CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{base_url}assets/backend/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-black">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="{base_url}assets/backend/img/login-bg/bg_tami1.jpeg" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-briefcase"></i> {title}</h4>
                    <p>
						{footer}
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand" style="text-align: center;">
                        <span class="navbar-images">New Password</span> 
                        <small>Renew Your Password</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="" method="post" name="frm-login" id="frm-login">
                        <label class="control-label">Insert new password for your ID {nik}  <span class="text-danger">*</span></label>
                        <input type="hidden" name="nik" value="{nik}">

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="npassword" id="npassword" class="form-control" placeholder="New Password" required />
                                <div id="passwordStrengthDiv" class="is0 m-t-5"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="rnpassword" id="rnpassword" class="form-control" placeholder="Repeat Password" required />  
                                <div id="passwordStrengthDiv2" class="is0 m-t-5"></div>
                            </div>
                        </div>
                        
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Change Password</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                           <!--  Forgot Password? Click <a href="{base_url}forgot_password">here</a> to get new password. -->
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; {footer} {copyright}
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{base_url}assets/backend/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="{base_url}assets/backend/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="{base_url}assets/backend/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="{base_url}assets/backend/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="{base_url}assets/backend/js/notify.js"></script>
	<script src="{base_url}assets/backend/plugins/jquery-hashchange/jquery.hashchange.min.js"></script>
	<!--[if lt IE 9]>
		<script src="{base_url}assets/backend/crossbrowserjs/html5shiv.js"></script>
		<script src="{base_url}assets/backend/crossbrowserjs/respond.min.js"></script>
		<script src="{base_url}assets/backend/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{base_url}assets/backend/js/apps.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
	$(document).ready(function() {
        App.init(function(){
                
        });
    });
    $.getScript('{base_url}assets/backend/plugins/gritter/js/jquery.gritter.js');

	$('#username').focus();
	
	$("#frm-login").submit(function(e){
		e.preventDefault();
		
		$.ajax({
			url: '{base_url}forgot_password/change_password',
			method: 'post',
			cache:false,
			data: $(this).serialize(),
			dataType: "json",
			beforeSend: function(){
				$("#btn-submit").button("loading");
			},
			success:function(data){
				if(data.status=='fail'){
					$.gritter.add({title:"Save Result",text:""+data.reason});
				}else if(data.status=='success'){
					$.gritter.add({title:"Save Result",text:""+data.reason});
					//document.location.href="{base_url}";
					setTimeout(function() { document.location.href="{base_url}"; }, 5000);
				}
			},complete: function(){
				$("#btn-submit").button("reset");
			},error: function(){
				$("#btn-submit").button("reset");
				$.gritter.add({title:"Error!",text:"Please Check Your Network Connection"});
			}
			
		});
		
	});

	$.getScript('{base_url}assets/backend/plugins/password-indicator/js/password-indicator.js').done(function() {
            $.getScript('{base_url}assets/backend/plugins/bootstrap-show-password/bootstrap-show-password.js').done(function() {
                handleFormPasswordIndicator = function () {
                "use strict";
                $("#npassword").passwordStrength(),
                $("#rnpassword").passwordStrength({
                    targetDiv: "#passwordStrengthDiv2"
                })
            },
                handleFormPasswordIndicator();
            });
        });
</script>
</body>
</html>
