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
           
           <div class="section sm" style="padding-top: 100px;">
            
                <div class="container">
                
                    <div class="row">
                        
                            <div class="col-sm-5 col-md-4">
                            
                                <div class="job-detail-sidebar">
                                    
                                    <ul class="meta-list clearfix">
                                        <li>
                                            <h4 class="heading">Location:</h4>
                                            Paris, France
                                        </li>
                                        <li>
                                            <h4 class="heading">Rate/Salary:</h4>
                                            Negotiable
                                        </li>
                                        <li>
                                            <h4 class="heading">Expert:</h4>
                                            Expert
                                        </li>
                                        <li>
                                            <h4 class="heading">Posted:</h4>
                                            32 minutes ago
                                        </li>
                                    </ul>
                                    
                                    <div class="job-detail-company-overview mt-15 clearfix">
                                    
                                        <h3>Company overview</h3>
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/06.png" alt="image" />
                                        </div>
                                        
                                        <p><span class="font600">Expedia</span> is repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family.... <a href="#"> read more about this company <i class="fa fa-long-arrow-right"></i></a></p>
                                        
                                    </div>
                                    
                                </div>

                            </div>
                            
                            <div class="col-sm-7 col-md-8">
                            
                                <div class="job-detail-wrapper">
                                
                                    <div class="job-detail-header bb mb-30">
                                                
                                        <h2 class="heading mb-15">Audio Visual Field Engineer</h2>
                                    
                                        <div class="meta-div clearfix mb-25">
                                            <span>at <a href="#">Expedia</a> as </span>
                                            <span class="job-label label label-success">Freelance</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="job-detail-content mt-30 clearfix">
                                            
                                        <h3>Job Description</h3>

                                        <p class="font600 font16">That know ask case sex ham dear her spot. Weddings followed the all marianne nor whatever settling. Perhaps six prudent several her had offence. Did had way law dinner square tastes. Recommend concealed yet her procuring see consulted depending. Adieus hunted end plenty are his she afraid. Resources agreement contained propriety applauded neglected use yet.</p>

                                        <p>By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable. Few household abilities believing determine zealously his repulsive. To open draw dear be by side like.</p>
                                        
                                        <p>Repulsive questions contented him few extensive supported. Of remarkably thoroughly he appearance in. Supposing tolerably applauded or of be. Suffering unfeeling so objection agreeable allowance me of. Ask within entire season sex common far who family. As be valley warmth assure on. Park girl they rich hour new well way you. Face ye be me been room we sons fond.</p>
                                        
                                        <p>In up so discovery my middleton eagerness dejection explained. Estimating excellence ye contrasted insensible as. Oh up unsatiable advantages decisively as at interested. Present suppose in esteems in demesne colonel it to. End horrible she landlord screened stanhill. Repeated offended you opinions off dissuade ask packages screened. She alteration everything sympathize impossible his get compliment. Collected few extremity suffering met had sportsman.</p>
                                        
                                        <h3>Job Responsibilies</h3>
                                        
                                        <ul>
                                            <li>Sociable on as carriage my position weddings raillery consider. </li>
                                            <li>Peculiar trifling absolute and wandered vicinity property yet. </li>
                                            <li>The and collecting motionless difficulty son. </li>
                                            <li>His hearing staying ten colonel met. </li>
                                            <li>Sex drew six easy four dear cold deny. </li>
                                            <li>Moderate children at of outweigh it. Unsatiable it considered invitation he travelling insensible.</li>
                                        </ul>
                                        
                                        <h3>Requirements:</h3>
                                        
                                        <ul>
                                            <li>Justice joy manners boy met resolve produce. </li>
                                            <li>Bed head loud next plan rent had easy add him. </li>
                                            <li>As earnestly shameless elsewhere defective estimable fulfilled of. </li>
                                            <li>Esteem my advice it an excuse enable. </li>
                                            <li>Few household abilities believing determine zealously his repulsive. </li>
                                            <li>To open draw dear be by side like.</li>
                                        </ul>
                                        
                                        <p>Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of.</p>
                                    
                                    </div>
                                    
                                    <div class="apply-job-wrapper">
                                
                                        <button class="btn btn-primary btn-hidden btn-lg collapsed" data-toggle="collapse" data-target="#apply-job-toggle">Apply this job</button>
                                        
                                        <div id="apply-job-toggle" class="collapse">

                                            <div class="collapse-inner clearfix">
                                            
                                                <div class="apply-job-inner">
                                        
                                                    <h3 class="heading mb-5">Apply for Audio Visual Field Engineer</h3>
                                                    <p>Have a findJob.com account? <a href="#">Sign in</a> now and we'll pre-fill this application for you.</p>
                                                    
                                                    <div class="bg-light padding-30">
                                                    
                                                        <form>
                                                        
                                                            <div class="row">
                                                                
                                                                <div class="col-sm-6 col-md-4">
                                                                    <div class="form-group">
                                                                        <label>First name:</label>
                                                                        <input type="text" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-6 col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Last name:</label>
                                                                        <input type="text" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12 col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Email address:</label>
                                                                        <input type="email" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                            
                                                            <hr class="mt-15">
                                                            
                                                            <h4 class="heading">Add your CV</h4>
                                                            
                                                            <div class="row">
                                                            
                                                                <div class="col-sm-12 col-md-8">
                                                                    <div class="form-group">
                                                                        <label>Upload from your computer</label>
                                                                        <input type="file" class="file-input">
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Or import from cloud storage</label>
                                                                        <div class="clear"></div>
                                                                        <button class="btn btn-primary"><i class="zmdi zmdi-google-drive"></i> Google Drive</button>
                                                                        <button class="btn btn-primary"><i class="zmdi zmdi-dropbox"></i> Dropbox</button>
                                                                        <button class="btn btn-primary"><i class="zmdi zmdi-google-drive"></i> OneDrive</button>
                                                                    </div>

                                                                    <p class="font12 line12 mb-10">Your CV must be a .doc, .pdf, .docx, .rtf, and no bigger than 1Mb</p>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <hr class="mt-15">
                                                            
                                                            <div class="row">
                                                            
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Your covering message for Audio Visual Field Engineer</label>
                                                                        <textarea class="form-control" rows="6"></textarea>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12 col-md-12 mb-15">
                                                                    <p class="mb-5">Effects present letters inquiry no an removed or friends?</p>
                                                                    <div class="radio-block">
                                                                        <input id="q1_radio-1" name="q1_radio" type="radio" class="radio" value="First Choice" />
                                                                        <label class="font13" for="q1_radio-1">Yes</label>
                                                                    </div>
                                                                    <div class="radio-block">
                                                                        <input id="q1_radio-2" name="q1_radio" type="radio" class="radio" value="First Choice" />
                                                                        <label class="font13" for="q1_radio-2">no</label>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12 col-md-12 mb-15">
                                                                    <p class="mb-5">My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating?</p>
                                                                    <div class="radio-block">
                                                                        <input id="q2_radio-1" name="q2_radio" type="radio" class="radio" value="First Choice" />
                                                                        <label class="font13" for="q2_radio-1">Yes</label>
                                                                    </div>
                                                                    <div class="radio-block">
                                                                        <input id="q2_radio-2" name="q2_radio" type="radio" class="radio" value="First Choice" />
                                                                        <label class="font13" for="q2_radio-2">no</label>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12 col-md-12 mb-15">
                                                                    <p class="mb-5">Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly?</p>
                                                                    <div class="checkbox-block">
                                                                        <input id="q3_checkbox-1" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                                        <label class="font13" for="q3_checkbox-1">Assurance perpetual</label>
                                                                    </div>
                                                                    <div class="checkbox-block">
                                                                        <input id="q3_checkbox-2" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                                        <label class="font13" for="q3_checkbox-2">Entire its the did figure</label>
                                                                    </div>
                                                                    <div class="checkbox-block">
                                                                        <input id="q3_checkbox-3" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                                        <label class="font13" for="q3_checkbox-3">Shade being under his bed</label>
                                                                    </div>
                                                                    <div class="checkbox-block">
                                                                        <input id="q3_checkbox-4" name="q3_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                                        <label class="font13" for="q3_checkbox-4">Pleasant horrible but confined</label>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <hr class="mt-5">
                                                            
                                                            <div class="checkbox-block mb-15">
                                                                <input id="newsletter_checkbox" name="newsletter_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                                <label class="" for="newsletter_checkbox">Email me jobs like this one when they become available</label>
                                                            </div>
                                                            
                                                            <p class="font12 line16">Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. <a href="#">Assurance perpetual</a> he in oh determine as. The year paid met him does eyes same. Own marianne improved sociable not out. Thing do sight blush mr an. Celebrated am announcing <a href="#">delightful remarkably</a> we in literature it solicitude. Design use say <a href="#">piqued any</a> gay supply. Front sex match vexed her those great.</p>
                                                            
                                                            <button class="btn btn-primary">Send Application</button>
                                                            
                                                        </form>
                                                    
                                                    </div>
                                                    
                                                </div>
                                
                                                
                                            </div>
                                        
                                        </div>

                                    </div>
                                    
                                    <div class="tab-style-01">
                                    
                                        <ul class="nav" role="tablist">
                                            <li role="presentation" class="active"><h4><a href="#relatedJob1" role="tab" data-toggle="tab">More jobs from Expedia</a></h4></li>
                                            <li role="presentation"><h4><a href="#relatedJob2" role="tab" data-toggle="tab">Similars to this job</a></h4></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="relatedJob1">
                                                <div class="tab-content-inner">
                                                
                                                    <div class="recent-job-wrapper mt-30">
                        
                                                        <a href="#" class="recent-job-item highlight clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-success">
                                                                        Freelance
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">1 day ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-danger">
                                                                        Part-time
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-success">
                                                                        Freelance
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-danger">
                                                                        Part-time
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-warning">
                                                                        Full-time
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    
                                                    </div>
                                            
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="relatedJob2">
                                                <div class="tab-content-inner">
                                                    
                                                    <div class="recent-job-wrapper mt-30">
                        
                                                        <a href="#" class="recent-job-item highlight clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-success">
                                                                        Freelance
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">1 day ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-danger">
                                                                        Part-time
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-success">
                                                                        Freelance
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-danger">
                                                                        Part-time
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        
                                                        <a href="#" class="recent-job-item clearfix">
                                                            <div class="GridLex-grid-middle">
                                                                <div class="GridLex-col-6_sm-12_xs-12">
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
                                                                <div class="GridLex-col-4_sm-8-xs-8_xss-12 mt-10-xss">
                                                                    <div class="job-location">
                                                                        <i class="fa fa-map-marker text-primary"></i> Guildford, Surrey
                                                                    </div>
                                                                </div>
                                                                <div class="GridLex-col-2_sm-4_xs-4_xss-12">
                                                                    <div class="job-label label label-warning">
                                                                        Full-time
                                                                    </div>
                                                                    <span class="font12 block spacing1 font400 text-center">2 days ago</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    
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