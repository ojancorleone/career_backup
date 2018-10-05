<?php $this->load->view('master/m_header_frontend')?>
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
        </header>
        <!-- start Main Wrapper -->
        <div class="main-wrapper">
           
            <div class="section sm">
            
                <div class="container">
                
                    <div class="sorting-wrappper">
            
                        <div class="sorting-header">
                            <h3 class="sorting-title">We found 2,584 engineering jobs</h3>
                        </div>
                        
                        <div class="sorting-content">

                            <div class="row">
                            
                                <div class="col-sm-12 col-md-7">
                                
                                    <div class="row gap-10">
                                    
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Sort by:</label>
                                                <select class="selectpicker form-control" data-show-subtext="true">
                                                    <option value="0">Relavent</option>
                                                    <option value="1" data-subtext="(newest to oldest)">Date Posted</option>
                                                    <option value="2" data-subtext="(oldest to newest)">Date Posted</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Date Added</label>
                                                <select class="selectpicker form-control" data-show-subtext="true">
                                                    <option value="0">Anytime</option>
                                                    <option value="1">Last 24 hours</option>
                                                    <option value="2">Last 7 days</option>
                                                    <option value="3">Last 14 days</option>
                                                    <option value="4">Last 30 days</option>
                                                    <option value="5">Since Last Visit</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Job Title</label>
                                                <select class="selectpicker show-tick form-control" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" multiple>
                                                    <option value="0" selected>All</option>
                                                    <option value="1">.Net Developer</option>
                                                    <option value="2">Java Developer</option>
                                                    <option value="3">Part Time Merchandiser</option>
                                                    <option value="4">Senior Software Engineer</option>
                                                    <option value="6">Software Development Engineer</option>
                                                    <option value="7">Software Engineer</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                
                                <div class="col-sm-12 col-md-5">
                                    
                                    <div class="text-right hidden-sm hidden-xs">
                                        <button class="btn btn-toggle btn-refine collapsed" data-toggle="collapse" data-target="#refine-result">More filters</button>
                                    </div>
                                    
                                    <div class="job-type-checkbox-wrapper clearfix">

                                        <div class="checkbox-block job-type-checkbox freelance-checkbox">
                                            <input id="job_type_checkbox-3" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" checked />
                                            <label class="" for="job_type_checkbox-3">Freelance</label>
                                        </div>
                                        
                                        <div class="checkbox-block job-type-checkbox part-time-checkbox">
                                            <input id="job_type_checkbox-2" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" checked />
                                            <label class="" for="job_type_checkbox-2">Part-time</label>
                                        </div>
                                        
                                        <div class="checkbox-block job-type-checkbox full-time-checkbox">
                                            <input id="job_type_checkbox-1" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" checked />
                                            <label class="" for="job_type_checkbox-1">Full-time</label>
                                        </div>
                                        
                                    </div>

                                    
                                    <div class="clear"></div>
                                    
                                    <div class="text-right visible-sm visible-xs">
                                        <button class="btn btn-toggle btn-refine collapsed" data-toggle="collapse" data-target="#refine-result">More filters</button>
                                    </div>

                                </div>
                                
                            </div>

                            <div id="refine-result" class="collapse">

                                <div class="collapse-inner clearfix">
                                
                                    <div class="row">
                                    
                                        <div class="col-sm-12 col-md-7">
                                    
                                            <div class="job-type-checkbox-wrapper visible-sm visible-xs clearfix">
                                                            
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-4-mobile" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-4-mobile">Seasonal</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-5-mobile" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-5-mobile">Temporary</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-6-mobile" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-6-mobile">Internship</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-7-mobile" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-7-mobile">Contract</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-8-mobile" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-8-mobile">Permanent</label>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row gap-10">
                                            
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Company:</label>
                                                        <select class="selectpicker form-control" data-show-subtext="true">
                                                            <option value="0">Relavent</option>
                                                            <option value="1" data-subtext="(newest to oldest)">Date Posted</option>
                                                            <option value="2" data-subtext="(oldest to newest)">Date Posted</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Job Board:</label>
                                                        <select class="selectpicker form-control" data-show-subtext="true">
                                                            <option value="0">Anytime</option>
                                                            <option value="1">Last 24 hours</option>
                                                            <option value="2">Last 7 days</option>
                                                            <option value="3">Last 14 days</option>
                                                            <option value="4">Last 30 days</option>
                                                            <option value="5">Since Last Visit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Special Filters:</label>
                                                        <select class="selectpicker show-tick form-control" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" multiple>
                                                            <option value="0" selected>All</option>
                                                            <option value="1">.Net Developer</option>
                                                            <option value="2">Java Developer</option>
                                                            <option value="3">Part Time Merchandiser</option>
                                                            <option value="4">Senior Software Engineer</option>
                                                            <option value="6">Software Development Engineer</option>
                                                            <option value="7">Software Engineer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Salary:</label>
                                                        <div class="sidebar-module-inner">
                                                            <input id="price_range" />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        
                                        <div class="col-sm-12 col-md-5 hidden-sm hidden-xs">
                                            
                                            <div class="job-type-checkbox-wrapper clearfix">
                                                    
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-4" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-4">Seasonal</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-5" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-5">Temporary</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-6" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-6">Internship</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-7" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-7">Contract</label>
                                                </div>
                                                
                                                <div class="checkbox-block job-type-checkbox">
                                                    <input id="job_type_checkbox-8" name="job_type_checkbox" type="checkbox" class="checkbox" value="First Choice" />
                                                    <label class="" for="job_type_checkbox-8">Permanent</label>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            
                            </div>
            
                        </div>
        
                    </div>
                    
                    <div class="result-wrapper">
                    
                        <div class="row">
                        
                            <div class="col-sm-8 col-md-9 mt-25">
                            
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/02.png" alt="image" />
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/07.png" alt="image" />
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                        </div>
                                        
                                        <div class="content">
                                            <div class="job-item-list-info">
                                            
                                                <div class="row">
                                                
                                                    <div class="col-sm-7 col-md-8">
                                                    
                                                        <h4 class="heading">Controls Engineer</h4>
                                                        <div class="meta-div clearfix mb-25">
                                                            <span>at <a href="#">FedEx</a></span>
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/02.png" alt="image" />
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/05.png" alt="image" />
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/07.png" alt="image" />
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="job-item-list">
                                    
                                        <div class="image">
                                            <img src="{base_url}assets/frontend/images/brands/08.png" alt="image" />
                                        </div>
                                        
                                        <div class="content">
                                        
                                            <div class="job-item-list-info">
                                            
                                                <div class="row">
                                                
                                                    <div class="col-sm-7 col-md-8">
                                                    
                                                        <h4 class="heading">Controls Engineer</h4>
                                                        <div class="meta-div clearfix mb-25">
                                                            <span>at <a href="#">FedEx</a></span>
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
                                                        <a href="{base_url}job/detail" class="btn btn-primary">Detail Job</a>
                                                    </div>
                                                    
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
                            
                            <div class="col-sm-4 col-md-3 mt-25">
                            
                                <div class="result-list-wrapper">
                                
                                    <aside class="sidebar with-filter">
                                    
                                        <div class="sidebar-inner">
                                        
                                            <div class="sidebar-module">
                                                <h4 class="sidebar-title">Featured Employers</h4>
                        
                                                <div class="top-company-2-wrapper">
                                                
                                                    <div class="GridLex-gap-10">
            
                                                        <div class="GridLex-grid-noGutter-equalHeight">
                                            
                                                            <div class="GridLex-col-12_sm-12_xs-6_xss-12">
                                                            
                                                                <div class="top-company-2">
                                                                    <a href="#">
                                                                    
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
                                                            
                                                            <div class="GridLex-col-12_sm-12_xs-6_xss-12">
                                                            
                                                                <div class="top-company-2">
                                                                    <a href="#">
                                                                    
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
                                                            
                                                            <div class="GridLex-col-12_sm-12_xs-6_xss-12">
                                                                
                                                                <div class="top-company-2">
                                                                    <a href="#">
                                                                    
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
                                                            
                                                        </div>
                                                    
                                                    </div>

                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </aside>
                                    
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
    
</body>
</html>