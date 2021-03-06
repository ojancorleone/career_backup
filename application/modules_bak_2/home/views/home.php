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
<body class="home">
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
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Job Vacancies</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Company</a>
                            </li>
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
                                <input type="hidden" name="tenant_id" id="tenant_id" value="{tenant_id}">
                                <input type="hidden" name="tenant_id_alias" id="tenant_id_alias" value="{tenant_id_alias}">
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Create your account for free</h4>
                </div>
                <div class="modal-body">
                    <div class="row gap-20">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" placeholder="Min 4 and Max 10 characters" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" placeholder="Enter your email address" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Min 8 and Max 20 characters" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Password Confirmation</label>
                                <input class="form-control" placeholder="Re-type password again" type="text">
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
                    <button type="button" class="btn btn-primary">Register</button>
                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                </div>
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
            <!-- start hero-header -->
            <div class="hero" style="background-image:url('{base_url}assets/frontend/images/hero-header/01.jpg');">
                <div class="container">
                    <h1>your future starts here now</h1>
                    <p>Finding your next job or career more 1000+ availabilities</p>
                </div>
            </div>
            <!-- end hero-header -->

            <div class="post-hero bg-light">
                <div class="container">
                    <div class="process-item-wrapper mt-20">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="process-item clearfix">
                                    <div class="icon">
                                        <i class="flaticon-line-icon-set-magnification-lens"></i>
                                    </div>
                                    <div class="content">
                                        <h5>01 / Search for jobs</h5>
                                        <p>Property men the smallest graceful insisted smallness expenses as material</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="process-item clearfix">
                                    <div class="icon">
                                        <i class="flaticon-line-icon-set-pencil"></i>
                                    </div>
                                    <div class="content">
                                        <h5>02 / Apply a Job</h5>
                                        <p>Ecstatic elegance disposed smallness rent been part breeding insisted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="process-item clearfix">
                                    <div class="icon">
                                        <i class="flaticon-line-icon-set-calendar"></i>
                                    </div>

                                    <div class="content">
                                        <h5>02 / Start Working</h5>
                                        <p>Property men the smallest graceful insisted smallness building to in</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <div class="section-title">
                                <h2>Top Categories</h2>
                                <p>Prevailed sincerity behaviour to so do principle departure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="category-item-08-wrapper">
                        <div class="grid-category-wrapper">
                            <div class="grid-category-item bg-primary" data-colspan="10" data-rowspan="10">
                                <div class="category-item-08">
                                    <div class="icon">
                                        <i class="flaticon-ventures-open-laptop"></i>
                                    </div>
                                    <div class="heading">
                                        <h4><a href="#">Computer &amp; IT</a></h4>
                                        <span class="font-italic">2548 job positions</span>
                                    </div>
                                    <div class="sub-category">
                                        <a href="#">Software Developer <span class="font-italic font12">(324)</span></a>
                                        <a href="#">Web Developer <span class="font-italic font12">(213)</span></a>
                                        <a href="#">Project Manager <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Business Analyst <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Software Engineer <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Consultant <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Systems Manager <span class="font-italic font12">(324)</span></a>
                                        <a href="#">Support Analyst <span class="font-italic font12">(213)</span></a>
                                        <a href="#">IT Sales <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Systems Admin <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Network Security <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Web Design <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Desktop Support <span class="font-italic font12">(322)</span></a>
                                        <a href="#">Software Testing <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Service Desk <span class="font-italic font12">(432)</span></a>
                                        <div class="sub-category-more">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-category-item bg-warning" data-colspan="10" data-rowspan="5">
                                <div class="category-item-08">
                                    <div class="icon">
                                        <i class="flaticon-ventures-desk-lamp-facing-left"></i>
                                    </div>
                                    <div class="heading">
                                        <h4><a href="#">Education</a></h4>
                                        <span class="font-italic">5455 job positions</span>
                                    </div>
                                    <div class="sub-category">
                                        <a href="#">Secondary School  <span class="font-italic font12">(324)</span></a>
                                        <a href="#">Primary School <span class="font-italic font12">(213)</span></a>
                                        <a href="#">Nursery <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Special Needs <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Teaching Assistant <span class="font-italic font12">(321)</span></a>
                                        <div class="sub-category-more">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-category-item bg-danger" data-colspan="5" data-rowspan="5">

                                <div class="category-item-08">
                                    <div class="icon">
                                        <i class="flaticon-ventures-mathematic-calculator"></i>
                                    </div>
                                    <div class="heading">
                                        <h4><a href="#">Accountancy</a></h4>
                                        <span class="font-italic">2523 job positions</span>
                                    </div>
                                    <div class="sub-category">
                                        <a href="#">Electrical <span class="font-italic font12">(324)</span></a>
                                        <a href="#">Maintenance <span class="font-italic font12">(213)</span></a>
                                        <a href="#">Mechanical <span class="font-italic font12">(321)</span></a>
                                        <div class="sub-category-more">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-category-item bg-success" data-colspan="5" data-rowspan="5">
                                <div class="category-item-08">
                                    <div class="icon">
                                        <i class="flaticon-ventures-two-gears"></i>
                                    </div>
                                    <div class="heading">
                                        <h4><a href="#">Engineering</a></h4>
                                        <span class="font-italic">6658 job positions</span>
                                    </div>
                                    <div class="sub-category">
                                        <a href="#">Automotive <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Electronic <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Manufacturing <span class="font-italic font12">(432)</span></a>
                                        <div class="sub-category-more">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-category-item bg-color-02" data-colspan="10" data-rowspan="5">
                                <div class="category-item-08">
                                    <div class="icon">
                                        <i class="flaticon-ventures-hand-touching-button"></i>
                                    </div>
                                    <div class="heading">
                                        <h4><a href="#">Health &amp; Medicine</a></h4>
                                        <span class="font-italic">8874 job positions</span>
                                    </div>
                                    <div class="sub-category">
                                        <a href="#">Field <span class="font-italic font12">(322)</span></a>
                                        <a href="#">Electrical <span class="font-italic font12">(324)</span></a>
                                        <a href="#">Maintenance <span class="font-italic font12">(213)</span></a>
                                        <a href="#">Mechanical <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Test Manager <span class="font-italic font12">(322)</span></a>
                                        <a href="#">Datacoms Engineer <span class="font-italic font12">(321)</span></a>
                                        <div class="sub-category-more">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-category-item bg-info" data-colspan="10" data-rowspan="5">
                                <div class="category-item-08">
                                    <div class="icon">
                                        <i class="flaticon-ventures-repair-tools"></i>
                                    </div>
                                    <div class="heading">
                                        <h4><a href="#">Construction</a></h4>
                                        <span class="font-italic">2471 job positions</span>
                                    </div>
                                    <div class="sub-category">
                                        <a href="#">Software Engineer <span class="font-italic font12">(321)</span></a>
                                        <a href="#">Consultant <span class="font-italic font12">(432)</span></a>
                                        <a href="#">Systems Manager <span class="font-italic font12">(324)</span></a>
                                        <a href="#">Support Analyst <span class="font-italic font12">(213)</span></a>
                                        <a href="#">IT Sales <span class="font-italic font12">(321)</span></a>
                                        <div class="sub-category-more">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-50">
                        <a href="#" class="btn btn-lg btn-primary btn-inverse">Browse all categories</a>
                    </div>
                </div>
            </div>
            <div class="pt-0 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <div class="section-title">
                                <h2>Featured Companies</h2>
                                <p>Sigh ever way now many. Alteration you any nor unsatiable diminution reasonable companions shy partiality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row top-company-wrapper with-bg">
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/01.png" alt="image" />
                                </div>
                                <h5>Freelancer</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                </div>
                                <h5>Wotif</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/18.png" alt="image" />
                                </div>
                                <h5>Cisco</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                </div>
                                <h5>Wotif</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/18.png" alt="image" />
                                </div>
                                <h5>Cisco</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/12.png" alt="image" />
                                </div>
                                <h5>Airbnb</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/01.png" alt="image" />
                                </div>
                                <h5>Freelancer</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                        <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                            <div class="top-company">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                </div>
                                <h5>Wotif</h5>
                                <a href="#">view 15 jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-title">
                                <h2 class="text-left text-center-sm">Featured Jobs</h2>
                            </div>
                            <div class="recent-job-wrapper">
                                <a href="#" class="recent-job-item highlight clearfix">
                                    <div class="GridLex-grid-middle">
                                        <div class="GridLex-col-6_xs-12">
                                            <div class="job-position">
                                                <div class="image">
                                                    <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                                </div>
                                                <div class="content">
                                                    <h4>IT Web Developer</h4>
                                                    <p>Expedia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="GridLex-col-4_xs-8_xss-12 mt-10-xss">
                                            <div class="job-location">
                                                <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                            </div>
                                        </div>
                                        <div class="GridLex-col-2_xs-4_xss-12">
                                            <div class="job-label label label-success">
                                                Freelance
                                            </div>
                                            <span class="font12 block spacing1 font400 text-center">1 day ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="recent-job-item clearfix">
                                    <div class="GridLex-grid-middle">
                                        <div class="GridLex-col-6_xs-12">
                                            <div class="job-position">
                                                <div class="image">
                                                    <img src="{base_url}assets/frontend/images/brands/01.png" alt="image" />
                                                </div>
                                                <div class="content">
                                                    <h4>IT Web Developer</h4>
                                                    <p>Expedia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="GridLex-col-4_xs-8_xss-12 mt-10-xss">
                                            <div class="job-location">
                                                <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                            </div>
                                        </div>
                                        <div class="GridLex-col-2_xs-4_xss-12">
                                            <div class="job-label label label-danger">
                                                Part-time
                                            </div>
                                            <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="recent-job-item clearfix">
                                    <div class="GridLex-grid-middle">
                                        <div class="GridLex-col-6_xs-12">
                                            <div class="job-position">
                                                <div class="image">
                                                    <img src="{base_url}assets/frontend/images/brands/02.png" alt="image" />
                                                </div>
                                                <div class="content">
                                                    <h4>IT Web Developer</h4>
                                                    <p>Expedia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="GridLex-col-4_xs-8_xss-12 mt-10-xss">
                                            <div class="job-location">
                                                <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                            </div>
                                        </div>
                                        <div class="GridLex-col-2_xs-4_xss-12">
                                            <div class="job-label label label-success">
                                                Freelance
                                            </div>
                                            <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="recent-job-item clearfix">
                                    <div class="GridLex-grid-middle">
                                        <div class="GridLex-col-6_xs-12">
                                            <div class="job-position">
                                                <div class="image">
                                                    <img src="{base_url}assets/frontend/images/brands/04.png" alt="image" />
                                                </div>
                                                <div class="content">
                                                    <h4>IT Web Developer</h4>
                                                    <p>Expedia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="GridLex-col-4_xs-8_xss-12 mt-10-xss">
                                            <div class="job-location">
                                                <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                            </div>
                                        </div>
                                        <div class="GridLex-col-2_xs-4_xss-12">
                                            <div class="job-label label label-danger">
                                                Part-time
                                            </div>
                                            <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="recent-job-item clearfix">
                                    <div class="GridLex-grid-middle">
                                        <div class="GridLex-col-6_xs-12">
                                            <div class="job-position">
                                                <div class="image">
                                                    <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                                </div>
                                                <div class="content">
                                                    <h4>IT Web Developer</h4>
                                                    <p>Expedia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="GridLex-col-4_xs-8_xss-12 mt-10-xss">
                                            <div class="job-location">
                                                <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                            </div>
                                        </div>
                                        <div class="GridLex-col-2_xs-4_xss-12">
                                            <div class="job-label label label-warning">
                                                Full-time
                                            </div>
                                            <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-50-sm">
                            <div class="section-title">
                                <h2 class="text-left text-center-sm">top employers</h2>
                            </div>
                            <div class="row gap-20 top-company-wrapper mmt">
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div class="top-company">
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/01.png" alt="image" />
                                        </div>
                                        <h5>Freelancer</h5>
                                        <a href="#">view 15 jobs</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div class="top-company">
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
                                        </div>
                                        <h5>Wotif</h5>
                                        <a href="#">view 15 jobs</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div class="top-company">
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/18.png" alt="image" />
                                        </div>
                                        <h5>Cisco</h5>
                                        <a href="#">view 15 jobs</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div class="top-company">
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/12.png" alt="image" />
                                        </div>
                                        <h5>Airbnb</h5>
                                        <a href="#">view 15 jobs</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div class="top-company">
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/10.png" alt="image" />
                                        </div>
                                        <h5>Merck</h5>
                                        <a href="#">view 15 jobs</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div class="top-company">
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                        </div>
                                        <h5>FedEx</h5>
                                        <a href="#">view 15 jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-light pt-80 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <div class="section-title">
                                <h2>A world full of possibilities</h2>
                                <p>Prevailed sincerity behaviour to so do principle departure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-30">
                            <div class="featured-icon-png">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/colored-line-icons/06.png" alt="Images" />
                                </div>
                                <h5>First</h5>
                                <p>Set up a targeted alert and be first to the latest jobs.</p>
                                <a href="#">Create Alert</a>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-30">
                            <div class="featured-icon-png">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/colored-line-icons/10.png" alt="Images" />
                                </div>
                                <h5>Fast</h5>
                                <p>Create an account and access your saved settings on any device.</p>
                                <a href="#">Regsiter Now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-30">
                            <div class="featured-icon-png">
                                <div class="image">
                                    <img src="{base_url}assets/frontend/images/colored-line-icons/01.png" alt="Images" />
                                </div>
                                <h5>Smart</h5>
                                <p>Don't just find. Be found. Put your CV in front of great employers.</p>
                                <a href="#">Upload Resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-bg-wrapper counting-wrapper" style="background-image:url('{base_url}assets/frontend/images/about-us-image-bg.jpg');">
                <div class="container mt-10">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="counting-item">
                                        <div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="13254"></span></div>
                                        Job Positions
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="counting-item">
                                        <div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="875"></span></div>
                                        Employers
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="counting-item">
                                        <div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="5845"></span></div>
                                        Candidates
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="counting-item">
                                        <div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="245"></span></div>
                                        Locations
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <div class="section-title mb-50">
                                <h2>you can be the next</h2>
                                <p>But extremity sex now education concluded earnestly her continual.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-lg btn-primary mt-5-xss">Upload resume</a>
                    </div>
                </div>
            </div>
            <div class="bt pt-80 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <div class="section-title">
                                <h3>what's make <span class="text-capitalize">Ha</span><span class="text-capitalize">Ngan</span> different than others</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="featured-icon-01">
                                <div class="icon text-primary">
                                    <i class="flaticon-streamline-outline-target"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Mission</h4>
                                    <p>Now for manners use has company believe parlors. Least nor party who wrote while did. Excuse formed as is agreed admire so on result parish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="featured-icon-01">
                                <div class="icon text-primary">
                                    <i class="flaticon-streamline-outline-globe"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Vission</h4>
                                    <p>Terminated principles sentiments of no pianoforte if projection impossible. Put use set uncommonly announcing and travelling allowance sweetness</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="featured-icon-01">
                                <div class="icon text-primary">
                                    <i class="flaticon-streamline-outline-target"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Mission</h4>
                                    <p>Now for manners use has company believe parlors. Least nor party who wrote while did. Excuse formed as is agreed admire so on result parish.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <div class="section-title mb-50">
                                <h2>Job's trips &amp; Guides</h2>
                                <p>Way extensive and dejection get delivered deficient sincerity gentleman age.</p>
                            </div>
                        </div>
                    </div>
                    <div class="post-grid-wrapper">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post-grid-item">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <a href="#">
                                                <img src="{base_url}assets/frontend/images/post-grid/01.jpg" alt="image" />
                                                <div class="image-overlay">
                                                    <div class="overlay-content">
                                                        <div class="overlay-icon"><i class="pe-7s-link"></i></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-grid-meta clearfix">
                                            <div class="date-posted">Mar 15, 2015</div>
                                            <div>by: Admin</div>
                                            <div>in: Review Trip</div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Raising say express had chiefly detract</a></h3>
                                        <p class="post-grid-entry">Saved he do fruit woody of to. Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed excited suppose to shortly.</p>

                                        <a href="#" class="btn btn-primary btn-inverse">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="post-grid-item">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <a href="#">
                                                <img src="{base_url}assets/frontend/images/post-grid/02.jpg" alt="image" />
                                                <div class="image-overlay">
                                                    <div class="overlay-content">
                                                        <div class="overlay-icon"><i class="pe-7s-link"></i></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-grid-meta clearfix">
                                            <div class="date-posted">Mar 15, 2015</div>
                                            <div>by: Admin</div>
                                            <div>in: Review Trip</div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Cordially convinced did incommode existence</a></h3>
                                        <p class="post-grid-entry">On at tolerably depending do perceived. Luckily eat joy see own shyness minuter. So before remark at depart. Did son unreserved themselves indulgence myself its.</p>
                                        <a href="#" class="btn btn-primary btn-inverse">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="post-grid-item">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <a href="#">
                                                <img src="{base_url}assets/frontend/images/post-grid/03.jpg" alt="image" />
                                                <div class="image-overlay">
                                                    <div class="overlay-content">
                                                        <div class="overlay-icon"><i class="pe-7s-link"></i></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-grid-meta clearfix">
                                            <div class="date-posted">Mar 15, 2015</div>
                                            <div>by: Admin</div>
                                            <div>in: Review Trip</div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="#">Chamber her observe visited removal sending</a></h3>
                                        <p class="post-grid-entry">Unfeeling agreeable suffering it on smallness newspaper be. So come must time no as. Do on unpleasing possession as of unreserved. Her questions favourite him concealed.</p>
                                        <a href="#" class="btn btn-primary btn-inverse">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        });
    </script>
</body>
</html>