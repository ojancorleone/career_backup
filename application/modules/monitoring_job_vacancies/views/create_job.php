<style type="text/css">
    .icmn-list2{
    padding-right: 20px;
    }
    .list-group-item{
    padding: 20px;
    }
    .list-group-item.disabled{
    background-color: #e3e5e8;
    }

    .preview-form {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .form-control-preview {
    padding: 0;
    pointer-events: none;
    }

    .form-group-preview {
    margin-bottom: 0rem;
    }

    input.form-control-preview {
    pointer-events: none;
    }

    h6{
    font-size: 10px;
     font-weight: bold;
    }
    .applicant-profile{
    padding-top: 3px;
    }

</style>

<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong>Create Job Vacancy</strong>
        </span>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-md-12">
                <form id="form-create-vacancy" name="form-create-vacancy" method="POST">
                    <div class="accordion" id="accordion" aria-multiselectable="true">
                        <div class="panel card">
                            <div class="card-header collapsed" role="tab" id="headingOne" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="card-title">
                                    <span class="accordion-indicator pull-right">
                                        <i class="plus fa fa-plus"></i>
                                        <i class="minus fa fa-minus"></i>
                                    </span>
                                    <a><strong>
                                        Job Details
                                    </strong>
                                    </a>
                                </div>
                            </div>
                            <div id="collapseOne" class="card-collapse collapse show" role="tabcard" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-5">   
                                                <!-- Horizontal Form -->
                                                        <input type="hidden" name="act" id="act" value="{act}">
                                                        <input type="hidden" name="id" id="id" value="{id}">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                        <input type="hidden" id="save_type" name="save_type" value="publish" />

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                 <h5 class="text-black"><strong>Job Details</strong></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Job Title: <span>*</span></label>
                                                                    <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control" data-validation="[NOTEMPTY]" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Company: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="tenant_id" id="tenant_id" data-validation="[NOTEMPTY]">
                                                                          <option value="">Choose</option>
                                                                          {list_tenant}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Department: <span>*</span></label>
                                                                    <select class="form-control select2" name="department" id="department" data-validation="[NOTEMPTY]" disabled="true">
                                                                          <option value="">Choose</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Total Job Available: <span>*</span></label>
                                                                    <input type="text" name="total_job_available" id="total_job_available" placeholder="Total Job Available" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>PIC: <span>*</span></label>
                                                                    <select class="form-control select2" name="user_id" id="user_id" data-validation="[NOTEMPTY]" >
                                                                          <option value="">Choose</option>
                                                                          {list_pic}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Job Level: <span>*</span></label>
                                                                    <select class="form-control select2" name="job_level" id="job_level" >
                                                                          <option value="">Choose Job Level</option>
                                                                          {list_job_level}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Job Code: <span>*</span></label>
                                                                    <input type="text" name="job_code" id="job_code" placeholder="Job Code" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country: <span>*</span></label>
                                                                    <input type="text" name="country" id="country" placeholder="Country" class="form-control" data-validation="[NOTEMPTY]">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>State/Region: <span>*</span></label>
                                                                    <input type="text" name="state_region" id="state_region" placeholder="State/Region" class="form-control" data-validation="[NOTEMPTY]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City: <span>*</span></label>
                                                                    <input type="text" name="city" id="city" placeholder="City" class="form-control" data-validation="[NOTEMPTY]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="text-black"><strong>Mountly Salary</strong></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Currency: <span>*</span></label>
                                                                    <input type="text" name="currency" id="currency" placeholder="currency" class="form-control" data-validation="[NOTEMPTY]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Show Salary: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="show_salary" id="show_salary" >
                                                                          <option value="1">Yes</option>
                                                                          <option value="0">No</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Maximum Salary: <span>*</span></label>
                                                                    <input type="text" name="maximum_salary" id="maximum_salary" placeholder="Maximum Salary" class="form-control" data-validation="[NOTEMPTY]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Minimum Salary: <span>*</span></label>
                                                                    <input type="text" name="minimum_salary" id="minimum_salary" placeholder="Minimum Salary" class="form-control" data-validation="[NOTEMPTY]">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h5 class="text-black"><strong>Job Description</strong></h5>
                                                                <div class="form-group">
                                                                    <textarea name="job_description" id="job_description" placeholder="Job Description" class="form-control summernote" rows="5" data-validation="[NOTEMPTY]"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="text-black"><strong>Job Requirements</strong></h5>
                                                                <div class="form-group">
                                                                    <textarea name="job_requirements" id="job_requirements" placeholder="Job Description" class="form-control summernote" rows="5" data-validation="[NOTEMPTY]"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="text-black"><strong>Add extras details</strong></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Experience: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="experience" id="experience" >
                                                                            <option value="">Select Level</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Industry: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="industry" id="industry" >
                                                                                <option value="">Select Industry</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Stream<span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="stream" id="stream" >
                                                                            <option value="">Choose Stream</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Education: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="education" id="education" >
                                                                            <option value="">Choose Education Level</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Employeement Type: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="employeement_type" id="employeement_type" data-validation="[NOTEMPTY]">
                                                                          <option value="">Choose Employeement Type</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Skill Requirement: <span>*</span></label>
                                                                    <select class="form-control select2" name="skill_requirement[]" id="skill_requirement" multiple="multiple" >
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="text-black"><strong>Job Duration</strong></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Auto Close Job:</label>
                                                                <div class="form-group">
                                                                        <select class="form-control select2" id="auto_close_job" name="auto_close_job" >
                                                                          <option value="0">No</option>
                                                                          <option value="1">Yes</option>
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4" style="display:none;" id="job_date">
                                                                <label>Choose Date</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" name="job_date" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="display:none;" id="job_time">
                                                                <label>Choose Time</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control timepicker-init" placeholder="Select Time" name="job_time" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a data-parent="#accordion" href="#headingTwo" class="btn btn-success pull-right continue"><i class='icmn-redo2'></i> Continue</a>
                                                <!-- End Horizontal Form -->
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel card">
                            <div class="card-header collapsed" role="tab" id="headingTwo" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="card-title">
                                    <span class="accordion-indicator pull-right">
                                        <i class="plus fa fa-plus"></i>
                                        <i class="minus fa fa-minus"></i>
                                    </span>
                                    <a><strong>
                                        Setting Hiring
                                    </strong>
                                    </a>
                                </div>
                            </div>
                            <div id="collapseTwo" class="card-collapse collapse" role="tabcard" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Hiring Stages For This Position</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-sm btn-secondary mr-2 mb-2 pull-right" id="create_stage" data-toggle="modal" data-target="#example1">Create Stage</button>
                                                    <div class="modal fade" id="example1" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel">Create Stage</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- <form id="form-validation" name="form-validation" method="POST"> -->
                                                                    <div class="modal-body">

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="stage_name">Stage Name</label>
                                                                                    <input id="stage_name" class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group" id="section-pic-type">
                                                                                    <label class="form-label">Stage Type</label>
                                                                                    <div class="btn-group" data-toggle="buttons">
                                                                                        <label class="btn btn-outline-default">
                                                                                            <input type="radio" name="stage_type" class="stage_type" value="internal">
                                                                                            Internal 
                                                                                        </label>
                                                                                        <label class="btn btn-outline-default">
                                                                                            <input type="radio" name="stage_type" class="stage_type" value="external">
                                                                                            External
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group internal">
                                                                                    <label class="form-label">Company</label>
                                                                                    <select class="form-control select2"  id="company_id">
                                                                                        <option value="">Choose Company</option>
                                                                                        {list_tenant}
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group internal">
                                                                                    <label class="form-label">Department</label>
                                                                                    <select class="form-control select2"  id="department_id">
                                                                                        <option value="">Choose Department</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group internal">
                                                                                    <label class="form-label">PIC</label>
                                                                                    <select class="form-control select2"  id="pic_id" disabled="true">
                                                                                        <option value="">Choose PIC</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group external">
                                                                                    <label class="form-label" for="vendor_id">Vendor</label>
                                                                                    <select class="form-control select2" id="vendor_id">
                                                                                        <option value="">Choose Vendor</option>
                                                                                        {list_vendor}
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group external">
                                                                                    <label class="form-label" >Choosee Vendor App</label>
                                                                                    <select class="form-control select2"  id="vendor_details_id">
                                                                                        <option value="">Choose Vendor App</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group external">
                                                                                    <label class="form-label" >PIC</label>
                                                                                    <select class="form-control select2"  id="vendor_pic_id" >
                                                                                        <option value="">Choose Vendor PIC</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row section-form-type">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Choose Form</label><br>
                                                                                    <div class="btn-group" data-toggle="buttons">
                                                                                        <label class="btn btn-outline-default active">
                                                                                            <input type="radio" name="form_type" class="form_type" value="default" checked>
                                                                                            Default 
                                                                                        </label>
                                                                                        <label class="btn btn-outline-default">
                                                                                            <input type="radio" name="form_type" class="form_type" value="interview">
                                                                                            Interview
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary" id="save-stage">Save</button>
                                                                    </div>
                                                                <!-- </form>  -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="example2" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel">Update Stage</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- <form id="form-validation" name="form-validation" method="POST"> -->
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="stage_name">Stage Name</label>
                                                                            <input id="stage_name_e"
                                                                                   class="form-control"
                                                                                   type="text" 
                                                                                   >
                                                                        </div>

                                                                        <div class="form-group" id="section-pic-type-e" align="center">
                                                                            <div class="btn-group" data-toggle="buttons">
                                                                                <label class="btn btn-outline-default">
                                                                                    <input type="radio" name="stage_type_e" class="stage_type_e" value="internal">
                                                                                    Internal 
                                                                                </label>
                                                                                <label class="btn btn-outline-default">
                                                                                    <input type="radio" name="stage_type_e" class="stage_type_e" value="external">
                                                                                    External
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group internal">
                                                                            <label class="form-label">Company</label>
                                                                            <select class="form-control select2"  id="company_id_e">
                                                                                <option value="">Choose Company</option>
                                                                                {list_tenant}
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group internal">
                                                                            <label class="form-label">Department</label>
                                                                            <select class="form-control select2"  id="department_id_e">
                                                                                <option value="">Choose Department</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group internal">
                                                                            <label class="form-label">PIC</label>
                                                                            <select class="form-control select2"  id="pic_id_e">
                                                                                <option value="">Choose PIC</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group external">
                                                                            <label class="form-label" for="vendor_id">Vendor</label>
                                                                            <select class="form-control select2" id="vendor_id_e">
                                                                                <option value="">Choose Vendor</option>
                                                                                {list_vendor}
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group external">
                                                                            <label class="form-label" >Choosee Vendor App</label>
                                                                            <select class="form-control select2" id="vendor_details_id_e">
                                                                                <option value="">Choose Vendor App</option>
                                                                                {list_vendor_details}
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group external">
                                                                            <label class="form-label" >PIC</label>
                                                                            <select class="form-control select2"  id="vendor_pic_id_e">
                                                                                <option value="">Choose Vendor PIC</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group section-form-type" >
                                                                            <div class="btn-group" data-toggle="buttons">
                                                                                <label class="btn btn-outline-default">
                                                                                    <input type="radio" name="form_type_e" class="form_type_e" value="default">
                                                                                    Default 
                                                                                </label>
                                                                                <label class="btn btn-outline-default">
                                                                                    <input type="radio" name="form_type_e" class="form_type_e" value="interview">
                                                                                    Interview
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                            <input type="hidden" name="stage_id_e" id="stage_id_e" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary" id="edit-stage">Save</button>
                                                                    </div>
                                                                <!-- </form>  -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <section id="stage-sortable">
                                                <ul class="list-group list-group-sortable-handles" id="list-stage">
                                                    <li class="list-group-item disabled" id="stage1">
                                                        <div class="col-lg-1"> 
                                                            <span class="icmn-list2"></span> 
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span id="label_stage1">
                                                                Sourced 
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-3" align="right">
                                                            <span></span>
                                                        </div>
                                                    </li>
                                                    
                                                    <li class="list-group-item disabled" id="stage2">
                                                        <div class="col-lg-1"> 
                                                            <span class="icmn-list2"></span> 
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span id="label_stage1">
                                                                Applied 
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-3" align="right">
                                                            <span></span>
                                                        </div>
                                                    </li>

                                                    <li class="list-group-item disabled" id="stage3">
                                                        <div class="col-lg-1"> 
                                                            <span class="icmn-list2"></span> 
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span id="label_stage1">
                                                                Hired 
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-3" align="right">
                                                            <span></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                            <input type="hidden" name="data_stage" id="data_stage" />
                                            <input type="hidden" name="data_stage_sort" id="data_stage_sort" />
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-12" align="right">
                                            <a data-parent="#accordion" href="#headingOne" class="btn btn-danger previous"><i class='icmn-undo2'></i> Previous</a>
                                            <a data-parent="#accordion" href="#headingThree" class="btn btn-success continue" id="hiring-continue"><i class='icmn-redo2'></i> Continue</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="panel card">
                            <div class="card-header collapsed" role="tab" id="headingThree" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="card-title">
                                    <span class="accordion-indicator pull-right">
                                        <i class="plus fa fa-plus"></i>
                                        <i class="minus fa fa-minus"></i>
                                    </span>
                                    <a><strong>
                                        Setting Form Application
                                    </strong>
                                    <input type="hidden"  id="data_form_setting" value="{data_form_setting}">
                                    </a>
                                </div>
                            </div>
                            <div id="collapseThree" class="card-collapse collapse" role="tabcard" aria-labelledby="headingThree">
                                <div class="card-block">
                                     <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-5">   
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="table-responsive mb-5">
                                                                <table class="table table-hover">
                                                                    <tbody id="list_form_setting">
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 preview-form" style="font-size: 9px;">
                                                            <div class="mb-5" id="list_form_setting_priveiew">
                                                                <center>
                                                                    <h5 class="text-black" style="padding:15px; "><strong>Preview Job Form</strong></h5>
                                                                </center>
                                                            </div>
                                                            <div class="col-md-12" align="left">
                                                                <button type="button" class="btn btn-sm btn-primary"><i class='fa fa-save'></i> Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" align="right">
                                            <a data-parent="#accordion" href="#headingTwo" class="btn btn-danger previous"><i class='icmn-undo2'></i> Previous</a>
                                            <button type="submit" onclick="document.getElementById('save_type').value='draft';console.log('draft');" class="btn btn-default "><i class='fa fa-save'></i> Draft</button>
                                            <button type="submit" onclick="document.getElementById('save_type').value='published';console.log('published');" class="btn btn-primary "><i class='fa fa-upload'></i> Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END: ecommerce/dashboard -->
<!-- START: page scripts -->

<script src="{base_url}assets/backend/vendors/jquery-sortable/jquery.sortable.js"></script>
<script src="{base_url}assets/backend/vendors/jquery-sortable/jquery.sortable.min.js"></script>

<script>
    jQuery(document).ready(function($) {

        $(".external").hide();
        $(".internal").hide();
        $(".section-form-type").hide();


        $('.stage_type').change(function(){
            var stage_type = $(this).val();
            if ( stage_type == 'internal' )  {
                $(".internal").show();
                $(".section-form-type").show();
                $(".external").hide();
            }else{
                $(".external").show();
                $(".section-form-type").show();
                $(".internal").hide();
            }
        });

        $.ajax({
            type: "POST",
            url: '{base_url}{parent_page}/get_form_setting',
            dataType: 'json',      
            beforeSend: function(){
                NProgress.start();
            },
            success: function(result) {
                NProgress.done();
                var tab = "";
                $.each(result, function( index, value ) {
                    var table_type = result[index].table_type;
                    var table_name = result[index].table_name;
                    var field_name = result[index].field_name;
                    var field_type = result[index].field_type;
                    var field_type_ref = result[index].field_type_ref;
                    var field_label = result[index].field_label;
                    var field_status = result[index].field_status;
                    var tab_name = result[index].tab_name;


                    if ( tab != tab_name ) {
                        $("#list_form_setting").append(" <tr>\
                                                            <td colspan='4'><strong>"+tab_name+"</strong></td>\
                                                        </tr>");
                        $("#list_form_setting_priveiew").append("<hr><div class='row' id='preview-group-"+tab_name+"' style='padding-top: 6px;'>\
                                                            <div class='col-md-12'>\
                                                                <h6 class='text-black'>"+tab_name+"</h6>\
                                                            </div>\
                                                        </div>");
                    }
                    tab = tab_name;

                    $("#list_form_setting").append("<tr>\
                                    <td>"+field_label+"</td>\
                                    <td>\
                                        <label class='cat__core__control cat__core__control--radio'>Off\
                                            <input type='radio' name='setform["+index+"][radio_field]' value='0'  class='radio-form' data-target='"+field_name+"'/>\
                                            <div class='cat__core__control__indicator'></div>\
                                        </label>\
                                    </td>\
                                    <td>\
                                        <label class='cat__core__control cat__core__control--radio'>Optional\
                                            <input type='radio' name='setform["+index+"][radio_field]' checked='checked' value='1' class='radio-form' data-target='"+field_name+"'/>\
                                            <div class='cat__core__control__indicator'></div>\
                                        </label>\
                                    </td>\
                                    <td>\
                                        <label class='cat__core__control cat__core__control--radio'>Mandatory\
                                            <input type='radio' name='setform["+index+"][radio_field]'  value='2' class='radio-form' data-target='"+field_name+"' />\
                                            <div class='cat__core__control__indicator'></div>\
                                        </label>\
                                    </td>\
                                    <input name='setform["+index+"][table_type]' type='hidden' value='"+table_type+"' />\
                                    <input name='setform["+index+"][table_name]' type='hidden' value='"+table_name+"' />\
                                    <input name='setform["+index+"][field_type]' type='hidden' value='"+field_type+"' />\
                                    <input name='setform["+index+"][field_name]' type='hidden' value='"+field_name+"' />\
                                    <input name='setform["+index+"][field_label]' type='hidden' value='"+field_label+"' />\
                                    <input name='setform["+index+"][field_type_ref]' type='hidden' value='"+field_type_ref+"' />\
                                    <input name='setform["+index+"][tab_name]' type='hidden' value='"+tab_name+"' />\
                                </tr>");

                    if ( field_type == "freetext" || field_type == "numeric" || field_type == "datetime") {   
                        $("#list_form_setting_priveiew").append("<div class='form-group form-group-preview' id='preview-"+field_name+"' style='padding-top: 8px;'>\
                                                                    <label class='form-label'>"+field_label+"</label>\
                                                                    <input class='form-control form-control-preview'>\
                                                                </div>");
                    }

                    else if ( field_type == "file" ) {   
                        $("#list_form_setting_priveiew").append("<div class='form-group form-group-preview' id='preview-"+field_name+"' style='padding-top: 8px;'>\
                                                                        <div class='row'>\
                                                                            <div class='col-lg-6'>\
                                                                                <label class='form-label'>"+field_label+"</label>\
                                                                            </div>\
                                                                            <div class='col-lg-6' align='right'>\
                                                                                <span class='fa fa-paperclip'></span>\
                                                                                <span class='fa fa-file-text-o'></span>\
                                                                            </div>\
                                                                        </div>\
                                                                    </div>");
                    }else if( field_type == "textarea" ){
                        $("#list_form_setting_priveiew").append("<div class='form-group form-group-preview' id='preview-"+field_name+"' style='padding-top: 8px;'>\
                                                                        <label class='form-label'>"+field_label+" </label>\
                                                                        <textarea class='form-control form-control-preview' rows='2'></textarea>\
                                                                    </div>");

                    }
                    else if( field_type == "option" ){
                        $("#list_form_setting_priveiew").append("<div class='form-group form-group-preview' id='preview-"+field_name+"' style='padding-top: 8px;'>\
                                                                        <label class='form-label' >"+field_label+" </label>\
                                                                        <select class='form-control-preview form-control' style='font-size: 9px'>\
                                                                            <option value=''>Please Choosee</option>\
                                                                        </select>\
                                                                    </div>");
                    }


                });
                $('.radio-form').change(function() {
                    var radio_val   = this.value;
                    var name_val    = $(this).attr("data-target");

                    // console.log($('input[type=radio]:checked').attr('name'));

                    console.log(radio_val);        
                    console.log(name_val);        
                    // console.log("here");        
                    switch (radio_val) {
                        case "0": // OFF
                            $("#preview-"+name_val).hide();
                            $("#mandatory-"+name_val).remove();
                        break;

                        case "1": // Optional
                            $("#preview-"+name_val).show();
                            $("#mandatory-"+name_val).remove();
                        break;

                        case "2": // Mandatory
                            $("#preview-"+name_val).show();
                            $( "#preview-"+name_val ).find( "label.form-label" ).append( " <span id='mandatory-"+name_val+"' ><strong>(*)</strong></span>")
                        break;
                    }
                });
            },  
            error: function() {
                NProgress.done();
                console.log("error");
            }       
        });
        
        
        $("[data-toggle=tooltip]").tooltip();
        
        $("#auto_close_job").on('change', function(){
            if(this.value == "1" ){
                $("#job_date").show();
                $("#job_time").show();
            }else{
                $("#job_date").hide();
                $("#job_time").hide();
            }
        });

        $('.datepicker-only-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'YYYY-MM-DD'
        });

        $('.timepicker-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'LT'
        });

        $('.summernote').summernote({
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ],
          height: 200,
        });

        $(".select2").select2();

        $("#form-create-vacancy").validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger',
                    scrollToError: {
                        offset: -100,
                        duration: 500
                    }
                },
                callback: {
                    onBeforeSubmit: function (node) {
                        NProgress.start();    
                    },
                    onSubmit: function (node) {
                        NProgress.start();    

                        $.ajax({
                            url: '{base_url}{parent_page}/submit_vacancy',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#form-create-vacancy').serialize(),
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status=="success"){
                                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                                document.location.href="{base_url}main#{parent_page}";
                            }else{
                                toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }          
                        })
                        .fail(function() {
                            NProgress.done();
                            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });

                        });
                        
                    },
                    onError: function (error) {
                        $("#headingOne").attr('data-toggle', 'collapse');
                        $("#headingOne").click();
                        toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                    }

                }
            },
            debug: true
        });

        // Begin Select 2
            $('#experience').select2({
                placeholder: 'Select Experience',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_opt_experience"
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#industry').select2({
                placeholder: 'Select Industry',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_opt_industri"
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });        
            $('#stream').select2({
                placeholder: 'Select Industry',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_opt_stream"
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#education').select2({
                placeholder: 'Select Education',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_opt_education"
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#employeement_type').select2({
                placeholder: 'Select Employeement Type',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_opt_employee_type"
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#skill_requirement').select2({
                placeholder: 'Select Skill Requirements',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_opt_keterampilan"
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#vendor_details_id').select2({
                placeholder: 'Select Vendor App',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_vendor_details",
                            vendor_id : $("#vendor_id").val()
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });
            $('#vendor_details_id_e').select2({
                placeholder: 'Select Vendor App',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_vendor_details",
                            vendor_id : $("#vendor_id_e").val()
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#department').select2({
                placeholder: 'Select Department ',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_department",
                            tenant_id : $("#tenant_id").val()
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

            $('#department_id').select2({
                placeholder: 'Select Department',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_option",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_department",
                            tenant_id : $("#tenant_id").val()
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });         

            $('#pic_id').select2({
                placeholder: 'Select PIC',
                allowClear: false,
                language: {
                     noResults: function(term) {
                        return "No Results Found";
                    }
                },
                escapeMarkup: function (markup) {
                        return markup;
                },
                ajax: {
                url: "{base_url}{parent_page}/get_pic",
                method:'post',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            table: "m_admin",
                            department_id : $("#department_id").val()
                        };
                    },
                  processResults: function (data) {
                        return {
                        results: data
                    };
                  },
                  cache: true
                }     
            });

        // End Select 2

        $("#tenant_id").change(function(event) {
            $("#department").val("").trigger("change");
            if($("#tenant_id").val()!=""){
                $("#department").removeAttr('disabled');
            }else{
                $("#department").attr('disabled', 'true');
            }
        });


        $("#department_id").change(function(event) {
            if($("#department_id").val()!=""){
                $("#pic_id").removeAttr('disabled');

            }else{
                $("#pic_id").attr('disabled', 'true');
            }
        });


        $('.list-group-sortable-handles').sortable({
                placeholderClass: 'list-group-item',
                handle: 'span',
                items: ':not(.disabled)'
        });


        $('#example1').on('show.bs.modal', function (e) {
            $("#company_id").val($("#tenant_id").val()).trigger("change");
            $("#company_id").attr('disabled', 'true');
            console.log("here");
        });        


        $('#example1').on('hidden.bs.modal', function (e) {
            $("#stage_name").val("");
            $("#vendor_id").val("").trigger("change");
            $("#vendor_details_id").val("").trigger("change");
        });
        
        $('#example2').on('hidden.bs.modal', function (e) {
            $("#stage_name_e").val("");
            $("#vendor_id_e").val("").trigger("change");
            $("#vendor_details_id_e").val("").trigger("change");
        });
    });

    var data_stages = [];
    $('#save-stage').click(function(e){
        e.preventDefault();

        var stage_name          = $("#stage_name").val();
        var vendor_id           = $("#vendor_id").val();
        var vendor_details_id   = $("#vendor_details_id").val();
        var stage_type          = $(".stage_type:checked").val();
        var form_type           = $(".form_type:checked").val();
        var pic_id              = $("#pic_id").val();

        
        var last_stage          = $('.list-group-item').last().attr('id');
        var new_stage_id        = parseInt(last_stage.substr(5 , 1));
        var last_id             = parseInt(last_stage.substr(5 , 1)) + 1;

        $('#'+last_stage).attr('id', "stage"+last_id );
        $("#list-stage").find('li[id="stage'+last_id+'"]').before('<li class="list-group-item" draggable="true" id="'+last_stage+'">\
                                                                        <div class="col-lg-1"><span class="icmn-list2"></span></div> \
                                                                        <div class="col-lg-8"><span id="label_'+last_stage+'"> '+stage_name+' </span></div>\
                                                                        <div class="col-lg-3" align="right"> \
                                                                            <span> \
                                                                                <a onclick="update_stage(\''+last_stage+'\')" class="stage-edit" id="stage-edit-'+new_stage_id+'"><span class="fa fa-pencil"></span> </a>\
                                                                                <a onclick="delete_stage(\''+last_stage+'\')" class="stage-delete" id="stage-delete-'+new_stage_id+'"><span class="fa fa-times"></span> </a>\
                                                                            </span> \
                                                                        </div>\
                                                                    </li>\
                                                                ');

        var data_stage = {
                                "stage_id": last_stage, 
                                "stage_name": stage_name, 
                                "vendor_id": vendor_id, 
                                "vendor_details_id" : vendor_details_id , 
                                "pic_type" : stage_type,
                                "pic_id": pic_id
                        };

        data_stages.push(data_stage);
        $('#data_stage').val( JSON.stringify(data_stages));

        $('.list-group-sortable-handles').sortable({
                placeholderClass: 'list-group-item',
                handle: 'span',
                items: ':not(.disabled)'
        });

        $('#example1').modal('hide');
    });

    $('#edit-stage').click(function(e){
        e.preventDefault();

        var stage_id_e            = $("#stage_id_e").val();
        var stage_name_e          = $("#stage_name_e").val();
        var vendor_id_e           = $("#vendor_id_e").val();
        var vendor_details_id_e   = $("#vendor_details_id_e").val();
        
        var data=[];

        data = JSON.parse($("#data_stage").val());
        data = $.grep(data, function(data, index) {
           return data.stage_id != stage_id_e
        });

        // $('#data_stage').val( JSON.stringify(data) );

        data_stages = data;
        var data_stage = { "stage_id": stage_id_e, "stage_name": stage_name_e, "vendor_id": vendor_id_e, "vendor_details_id" : vendor_details_id_e } ;
        data_stages.push(data_stage);
        $('#data_stage').val( JSON.stringify(data_stages));

        $("#label_"+stage_id_e).html(stage_name_e);

        $('.list-group-sortable-handles').sortable({
                placeholderClass: 'list-group-item',
                handle: 'span',
                items: ':not(.disabled)'
        });

        $('#example2').modal('hide');
    });

    // $('#vendor_details_id_e').on('select2:opening', function (e) {
    //     console.log("here");
    // });

    function update_stage(stage_id){
        var data_stage = $("#data_stage").val();
        var obj = getObjByStage( data_stage, stage_id );
        $('#example2').modal('show');
        $("#stage_id_e").val(obj.stage_id);
        $("#stage_name_e").val(obj.stage_name);
        $("#vendor_id_e").val(obj.vendor_id).trigger("change");
        $("#vendor_details_id_e").val(obj.vendor_details_id).trigger("change");
        console.log(obj.vendor_details_id);
    }    

    function delete_stage(stage_id){
        var data = [];
        data = JSON.parse($("#data_stage").val());
        data = $.grep(data, function(data, index) {
            return data.stage_id != stage_id
        });
        data_stages = data;
        $('#data_stage').val( JSON.stringify(data_stages) );
        $('#'+stage_id).remove();
    }

    function getObjByStage( tree, stage_id ){
        var tree = JSON.parse(tree);

        for( var i= 0; i<tree.length; i++ )
        {
            if( tree[i].stage_id === stage_id )
            {
               return tree[i];
            }
            if( tree[i].children )
            {
                var returned = getObjByStage(tree[i].children,stage_id);
                if( returned != undefined )
                return returned;
            }
        }
    };

    $('#hiring-continue').click(function(e){
        $('#data_stage_sort').val("");
        var arr = document.querySelectorAll('#stage-sortable > ul li');
        var stage_sort = [];
        for (var i = 0; i < arr.length; i++) {
            data_stage_sort = { "stage_id" : arr[i].id , "sortable" : i+1 };
            console.log({ "stage_id" : arr[i].id , "sortable" : i+1 });
            stage_sort.push(data_stage_sort);
            $('#data_stage_sort').val( JSON.stringify(stage_sort) );
        }


    });


    //[0].checkValidity()
    $('.continue').click(function(e){
        e.preventDefault();
        var sectionValid = true;
        var href = $(this).attr("href");
        if(!$("#form-create-vacancy")[0].checkValidity()){
            sectionValid = false;
        }
        if(sectionValid){
            $(href).attr('data-toggle', 'collapse');
            $(href).click();
        }else{
            $(href).removeAttr("data-toggle");
        }
    });

    $('.previous').click(function(e){
        e.preventDefault();
        var href = $(this).attr("href");
        $(href).attr('data-toggle', 'collapse');
        $(href).click();
        // $(href).removeAttr("data-toggle");
    });


    function goBack() {
        window.history.back();
    }



</script>

