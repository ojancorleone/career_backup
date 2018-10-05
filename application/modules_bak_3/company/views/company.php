<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>{title}</title>
    <meta name="description" content="HTML Responsive Landing Page Template for Job Portal Based on Twitter Bootstrap 3.x.x" />
    <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{base_url}assets/frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{base_url}assets/frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{base_url}assets/frontend/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="{base_url}assets/frontend/images/ico/{favicon}">

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{base_url}assets/frontend/bootstrap/css/bootstrap.min.css" media="screen">
    <link href="{base_url}assets/frontend/css/animate.css" rel="stylesheet">
    <link href="{base_url}assets/frontend/css/main.css" rel="stylesheet">
    <link href="{base_url}assets/frontend/css/component.css" rel="stylesheet">

    <!-- CSS Font Icons -->
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/linearicons/style.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/rivolicons/style.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="{base_url}assets/frontend/icons/flaticon-ventures/flaticon-ventures.css">

    <!-- CSS Custom -->
    <link href="{base_url}assets/frontend/css/style.css" rel="stylesheet">

</head>
<body class="home not-transparent-header">
    <div id="introLoader" class="introLoading"></div>
    <!-- start Container Wrapper -->
    <div class="container-wrapper">
        <!-- start Header -->
        <header id="header">
            <!-- start Navbar (Header) -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">
                <div class="container">
                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="#"><img src="{base_url}assets/frontend/images/{logo}" alt="Logo" /></a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
                        <ul class="nav navbar-nav" id="responsive-menu" style="">
                            <?php $this->load->view('master/m_menu_frontend')?>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                    <div class="nav-mini-wrapper">
                        <ul class="nav-mini sign-in">
                            <li><a data-toggle="modal" href="#loginModal">login</a></li>
                            <li><a data-toggle="modal" href="#registerModal">register</a></li>
                        </ul>
                    </div>
                </div>
                <div id="slicknav-mobile"></div>
            </nav>
            <!-- end Navbar (Header) -->
            <!-- start Sign-in Modal -->
            <div id="loginModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <form id="form-login" name="form-validation" method="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Sign-in into your account</h4>
                </div>
                    <div class="modal-body">
                        <div class="row gap-20">
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input id="validation[email]"
                                                           class="form-control"
                                                           placeholder="Email or Username"
                                                           name="validation[email]"
                                                           type="text"
                                                           data-validation="[EMAIL]">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="validation[password]"
                                                           class="form-control password"
                                                           name="validation[password]"
                                                           type="password" data-validation="[L>=3]"
                                                           data-validation-message="$ must be at least 6 characters"
                                                           placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="checkbox-block">
                                        <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                        <label class="" for="remember_me_checkbox">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="login-box-link-action">
                                        <a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="login-box-box-action">
                                        No account? <a data-toggle="modal" href="#registerModal">Register</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary">Log-in</button>
                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                </div>
                </form>
            </div>
            <!-- end Sign-in Modal -->
            <!-- start Register Modal -->
            <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <form id="form-register" name="form-validation" method="#">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Create your account for free</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row gap-20">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="validation[email]"
                                                           class="form-control"
                                                           placeholder="Email or Username"
                                                           name="validation[email]"
                                                           type="text"
                                                           data-validation="[EMAIL]">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password"
                                                           class="form-control password"
                                                           name="validation[password]"
                                                           type="password" data-validation="[L>=3]"
                                                           data-validation-message="$ must be at least 6 characters"
                                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input id="password_confirm"
                                                           class="form-control password"
                                                           name="validation[password_confirm]"
                                                           type="password" data-validation="[L>=3]"
                                                           placeholder="Re-type password again">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="checkbox-block">
                                    <input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                    <label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="login-box-box-action">
                                    Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" id="btn-register" class="btn btn-primary">Register</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                    </div>
                </form>
            </div>
            <!-- end Register Modal -->
            <!-- start Forget Password Modal -->
            <div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Restore your forgotten password</h4>
                </div>
                <div class="modal-body">
                    <div class="row gap-20">
                        <div class="col-sm-12 col-md-12">
                            <p class="mb-20">Maids table how learn drift but purse stand yet set. Music me house could among oh as their. Piqued our sister shy nature almost his wicket. Hand dear so we hour to.</p>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" placeholder="Enter your email address" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="checkbox-block">
                                <input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                <label class="" for="forgot_password_checkbox">Generate new password</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="login-box-box-action">
                                Return to <a data-toggle="modal" href="#loginModal">Log-in</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary">Restore</button>
                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                </div>
            </div>
            <!-- end Forget Password Modal -->
        </header>
        <!-- start Main Wrapper -->
        <div class="main-wrapper">
           
            
            
            <div class="section sm">
            
                <div class="container">
                
                    <div class="sorting-wrappper alt">
            
                        <div class="GridLex-grid-middle">
                        
                            <div class="GridLex-col-3_sm-12_xs-12">
                            
                                <div class="sorting-header">
                                    <h3 class="sorting-title">254 Company</h3>
                                </div>
                                
                            </div>
                            
                            <div class="GridLex-col-5_sm-6_xs-6_xss-12">
                            
                                <div class="sorting-content">
                                
                                    <div class="form-group GridLex-gap-10-wrappper">
                                        
                                        <div class="GridLex-grid-middle">
                                        
                                            <div class="GridLex-col-5_sm-6_xs-12">
                                                <label>Sort by:</label>
                                            </div>
                                            
                                            <div class="GridLex-col-7_sm-6_xs-12">
                                                <select class="selectpicker form-control" data-show-subtext="true">
                                                    <option value="0">Relavent</option>
                                                    <option value="1" data-subtext="(newest to oldest)">Date Posted</option>
                                                    <option value="2" data-subtext="(oldest to newest)">Date Posted</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="GridLex-col-4_sm-6_xs-6_xss-12">
                            
                                <div class="sorting-content">
                                
                                    <div class="form-group GridLex-gap-10-wrappper">
                                        
                                        <div class="GridLex-grid-middle">
                                        
                                            <div class="GridLex-col-3_sm-6_xs-12">
                                                <label>Filter by:</label>
                                            </div>
                                            
                                            <div class="GridLex-col-9_sm-6_xs-12">
                                                <select class="selectpicker form-control" data-show-subtext="true">
                                                    <option value="0">All</option>
                                                    <option value="1">Asia</option>
                                                    <option value="2">Africa</option>
                                                    <option value="3">Europe</option>
                                                    <option value="4">America</option>
                                                    <option value="5">Oceana</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="company-grid-wrapper top-company-2-wrapper">

                        <div class="GridLex-gap-30">
                        
                            <div class="GridLex-grid-noGutter-equalHeight">
                            
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/09.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wrigley</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">Wotif</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="GridLex-col-3_sm-4_xs-6_xss-12">
                                
                                    <div class="top-company-2">
                                        <a href="{base_url}company/detail">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <h5 class="heading text-primary font700">FexEd</h5>
                                                <p class="texting font600">Account, IT, Manager, Marketing, and much more...</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">25</span> <span class="font13">position available</span> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></p>
                                            </div>
                                        
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        
                        </div>

                    </div>
                    
                    <div class="pager-wrapper">
                                
                        <ul class="pager-list">
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="number">
                                <span class="mr-5"><span class="font600">page</span></span>
                            </li>
                            <li class="form">
                                <form>
                                    <input type="text" value="1" class="form-control"> 
                                </form>
                            </li>
                            <li class="number">
                                <span class="mr-5">/</span> <span class="font600">79</span>
                            </li>
                            <li class="paging-nav"><a href="#">go</a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li class="paging-nav"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>   
                    
                    </div>

                </div>
            
            </div>
            <footer class="footer-wrapper">
                <div class="main-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="footer-about-us">
                                            <h5 class="footer-title">about E-Recruit</h5>
                                            <p>Sudden looked elinor off gay estate nor silent. Son read such next see the rest two. Was use extent old entire sussex...</p>
                                            <a href="#">read more</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5 mt-30-xs">
                                        <h5 class="footer-title">quick links</h5>
                                        <ul class="footer-menu clearfix">
                                            <li><a href="#">Local Jobs</a></li>
                                            <li><a href="#">Company Directory</a></li>
                                            <li><a href="#">Browse Jobs</a></li>
                                            <li><a href="#">Salary Estimator</a></li>
                                            <li><a href="#">Success Stories</a></li>
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Post a Job</a></li>
                                            <li><a href="#">Employer Login</a></li>
                                            <li><a href="#">Publisher</a></li>
                                            <li><a href="#">Include My Jobs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 mt-30-sm">
                                <h5 class="footer-title">newsletter</h5>
                                <p>Subsribe to get our latest updates and oeffers</p>
                                <div class="footer-newsletter">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="enter your email " />
                                        <button class="btn btn-primary">subsribe</button>
                                    </div>
                                    <p class="font-italic font13">*** Don't worry, we wont spam you!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <p class="copy-right">&#169; Copyright {copyright} {footer}</p>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <ul class="bottom-footer-menu">
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Blogs</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <ul class="bottom-footer-menu for-social">
                                    <li><a href="#"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
                                    <li><a href="#"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
                                    <li><a href="#"><i class="ri ri-google-plus" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
                                    <li><a href="#"><i class="ri ri-youtube-play" data-toggle="tooltip" data-placement="top" title="youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end Main Wrapper -->
    </div>
    <!-- / .wrapper -->
    <!-- end Container Wrapper -->
    <!-- start Back To Top -->
    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>
    <!-- end Back To Top -->
    <!-- JS -->
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/smoothscroll.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/wow.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-tokenfield.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap3-wysihtml5.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery-filestyle.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/handlebars.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.countimator.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.countimator.wheel.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/slick.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/easy-ticker.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.introLoader.min.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/jquery.responsivegrid.js"></script>
    <script type="text/javascript" src="{base_url}assets/frontend/js/customs.js"></script>
    <script src="{base_url}assets/backend/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
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
                                url: '{base_url}login/check_login',
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

            $('#form-register').validate({
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
                            var password = $("#password").val();
                            var password_confirm = $("#password_confirm").val();

                            if (password != password_confirm ) {
                                console.log("fail");
                            }else{
                                $.ajax({
                                    url: '{base_url}register',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: $('#form-register').serialize() ,
                                })
                                .done(function(data) {
                                    console.log("success");        
                                })
                                .fail(function() {
                                    console.log("fail");
                                });
                            }
                        }
                    }
                },
                debug: true
            });
        });
    </script>
</body>
</html>