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
                
                    <div class="row">
                        
                            <div class="col-md-10 col-md-offset-1">
                            
                                <div class="company-detail-wrapper">
                                
                                    <div class="company-detail-header text-center">
                                        
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                        </div>
                                        
                                        <h2 class="heading mb-15">Expedia</h2>
                                    
                                        <p class="location"><i class="fa fa-map-marker"></i> 3150 139th Ave. SE Bellevue, WA 98005 USA <span class="mh-5">|</span> <i class="fa fa-phone"></i> +66-5445-5420</p>
                                        
                                        <ul class="meta-list clearfix">
                                            <li>
                                                <h4 class="heading">Established In:</h4>
                                                1999
                                            </li>
                                            <li>
                                                <h4 class="heading">Type:</h4>
                                                Booking/Travel
                                            </li>
                                            <li>
                                                <h4 class="heading">People:</h4>
                                                2000+
                                            </li>
                                            <li>
                                                <h4 class="heading">Website: </h4>
                                                https://www.expedia.com/
                                            </li>
                                        </ul>
                                        
                                    </div>
                        
                                    <div class="company-detail-company-overview clearfix">
                                    
                                        <h3>Company background</h3>
                                        
                                        <p><span class="font600">Expedia</span> is repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family. As be valley warmth assure on. Park girl they rich hour new well way you. Face ye be me been room we sons fond. Justice joy manners boy met resolve produce.</p>
                                        
                                        <p>Oh to talking improve produce in limited offices fifteen an. Wicket branch to answer do we. Place are decay men hours tiled. If or of ye throwing friendly required. Marianne interest in exertion as. Offering my branched confined oh dashwood.</p>

                                        <p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful.</p>
                                        
                                        <h3>Services</h3>
                                        
                                        <p>Is he staying arrival address earnest. To preference considered it themselves inquietude collecting estimating. View park for why gay knew face. Next than near to four so hand. Times so do he downs me would. Witty abode party her found quiet law. They door four bed fail now have.</p>
                                        
                                        <h3>Expertise</h3>
                                        
                                        <p>Inhabiting discretion the her dispatched decisively boisterous joy. So form were wish open is able of mile of. Waiting express if prevent it we an musical. Especially reasonable travelling she son. Resources resembled forfeited no to zealously. Has procured daughter how friendly followed repeated who surprise. Great asked oh under on voice downs. Law together prospect kindness securing six. Learning why get hastened smallest cheerful.</p>
                                        
                                    </div>
                                    
                                    <div class="newsletter-wrapper-02">
                                    
                                        <div class="GridLex-gap-10-wrappper">
                                        
                                            <div class="GridLex-grid-middle">
                                            
                                                <div class="GridLex-col-6_sm-6_xs-12">
                                                    <h5 class="">Get new jobs for <span class="text-capitalize">Expedia</span> by email</h5>
                                                    <p class="font-italic font13">*** Don't worry, we wont spam you!</p>
                                                </div>
                                                
                                                <div class="GridLex-col-6_sm-6_xs-12">
                                                    
                                                    <div class="newsletter-02">
                                            
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="enter your email " />
                                                            <button class="btn btn-primary">subsribe</button>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>

                                    </div>
                                    
                                    <div class="section-title mb-40">
                        
                                        <h2 class="text-left">5 jobs offered</h2>
                                        
                                    </div>

                                    <div class="result-list-wrapper">
                                    
                                        <div class="job-item-list featured">
                                        
                                            <div class="featured-label"><span>featured</span></div>
                                            
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <div class="job-item-list-info">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                        
                                                            <h4 class="heading">Packaging Engineer</h4>
                                                            <div class="meta-div clearfix mb-25">
                                                                <span>at <a href="#">Expedia</a></span>
                                                                <span class="job-label label label-success">Freelance</span>
                                                            </div>
                                                            
                                                            <p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <ul class="meta-list">
                                                                <li>
                                                                    <span>Location:</span>
                                                                    Paris, France
                                                                </li>
                                                                <li>
                                                                    <span>Rate/Salary:</span>
                                                                    Negotiable
                                                                </li>
                                                                <li>
                                                                    <span>Experience</span>
                                                                    Expert
                                                                </li>
                                                                <li>
                                                                    <span>Posted: </span>
                                                                    32 minutes ago
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                                <div class="job-item-list-bottom">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                            <div class="sub-category">
                                                                <a href="#">Engineer</a>
                                                                <a href="#">Packaging</a>
                                                                <a href="#">Package</a>
                                                                <a href="#">Manufacturing</a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <a href="#" class="btn btn-primary">Apply for Job</a>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="job-item-list">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <div class="job-item-list-info">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                        
                                                            <h4 class="heading">Mechanical Engineer - Medical Devices - Medical Equipment</h4>
                                                            <div class="meta-div clearfix mb-25">
                                                                <span>at <a href="#">GoDaddy</a></span>
                                                                <span class="job-label label label-danger">Part-time</span>
                                                            </div>
                                                            
                                                            <p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <ul class="meta-list">
                                                                <li>
                                                                    <span>Location:</span>
                                                                    Paris, France
                                                                </li>
                                                                <li>
                                                                    <span>Rate/Salary:</span>
                                                                    Negotiable
                                                                </li>
                                                                <li>
                                                                    <span>Experience</span>
                                                                    Expert
                                                                </li>
                                                                <li>
                                                                    <span>Posted: </span>
                                                                    32 minutes ago
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                                <div class="job-item-list-bottom">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                            <div class="sub-category">
                                                                <a href="#">Engineer</a>
                                                                <a href="#">Packaging</a>
                                                                <a href="#">Package</a>
                                                                <a href="#">Manufacturing</a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <a href="#" class="btn btn-primary">Apply for Job</a>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="job-item-list">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                            
                                                <div class="job-item-list-info">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                        
                                                            <h4 class="heading">Audio Visual Field Engineer</h4>
                                                            <div class="meta-div clearfix mb-25">
                                                                <span>at <a href="#">Wottif</a></span>
                                                                <span class="job-label label label-danger">Part-time</span>
                                                            </div>
                                                            
                                                            <p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <ul class="meta-list">
                                                                <li>
                                                                    <span>Location:</span>
                                                                    Paris, France
                                                                </li>
                                                                <li>
                                                                    <span>Rate/Salary:</span>
                                                                    Negotiable
                                                                </li>
                                                                <li>
                                                                    <span>Experience</span>
                                                                    Expert
                                                                </li>
                                                                <li>
                                                                    <span>Posted: </span>
                                                                    32 minutes ago
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                                <div class="job-item-list-bottom">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                            <div class="sub-category">
                                                                <a href="#">Engineer</a>
                                                                <a href="#">Packaging</a>
                                                                <a href="#">Package</a>
                                                                <a href="#">Manufacturing</a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <a href="#" class="btn btn-primary">Apply for Job</a>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                            
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="job-item-list">
                                        
                                            <div class="image">
                                                <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                            </div>
                                            
                                            <div class="content">
                                                <div class="job-item-list-info">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                        
                                                            <h4 class="heading">Solution Architect</h4>
                                                            <div class="meta-div clearfix mb-25">
                                                                <span>at <a href="#">Ebay</a></span>
                                                                <span class="job-label label label-warning">Fulltime</span>
                                                            </div>
                                                            
                                                            <p class="texing">It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended...</p>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <ul class="meta-list">
                                                                <li>
                                                                    <span>Location:</span>
                                                                    Paris, France
                                                                </li>
                                                                <li>
                                                                    <span>Rate/Salary:</span>
                                                                    Negotiable
                                                                </li>
                                                                <li>
                                                                    <span>Experience</span>
                                                                    Expert
                                                                </li>
                                                                <li>
                                                                    <span>Posted: </span>
                                                                    32 minutes ago
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                                <div class="job-item-list-bottom">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="col-sm-7 col-md-8">
                                                            <div class="sub-category">
                                                                <a href="#">Engineer</a>
                                                                <a href="#">Packaging</a>
                                                                <a href="#">Package</a>
                                                                <a href="#">Manufacturing</a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-5 col-md-4">
                                                            <a href="#" class="btn btn-primary">Apply for Job</a>
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                            </div>
                                        
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