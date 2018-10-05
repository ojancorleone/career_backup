<?php $this->load->view('master/m_header_frontend')?>
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
                            <?php $this->load->view('master/m_menu_frontend')?>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                    <div class="nav-mini-wrapper">
                        <ul class="nav-mini sign-in" id="homepage">
                            <li><a data-toggle="modal" href="#loginModal">login</a></li>
                            <li><a data-toggle="modal" href="#registerModal">register</a></li>
                        </ul>

                        <ul class="nav-mini sign-in" id="dashboard">
                            <li><a href="{base_url}main#dashboard">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div id="slicknav-mobile"></div>
            </nav>
            <!-- end Navbar (Header) -->
            <?php $this->load->view('master/m_modal_frontend')?>
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

            <?php $this->load->view('master/m_footer_frontend')?>

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
    <?php $this->load->view('master/m_script_frontend')?>
    <script type="text/javascript">
         $(function() {

            var vid = '{vid}';
            var applied = '{applied}';
            if (vid === "1" && applied == "1") {
                $("#loginModal").modal('show');
            }
         })
    </script>
</body>
</html>