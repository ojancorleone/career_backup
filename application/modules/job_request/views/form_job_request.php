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
            <strong>{title}</strong>
        </span>
    </div>
    <div class="card-block">
        <div class="row">
            {if '{act}'== 'add'}
                <div class="col-md-12">
                {else}
                <div class="col-md-4">
                <div class="card" order-id="card-4">
                <div class="card-header">   
                    <h5 class="mb-0 text-black">
                        <strong>History</strong>
                        <span class="text-muted"> | Job Vacancy Request</span>
                    </h5>
                </div>
                <div class="card-block">
                    <div class="cat__apps__messaging">
                        <div class="custom-scroll cat__core__scrollable">
                            <div class="cat__apps__chat-block" id="history_content"></div>
                        </div>
                    </div>
                </div>
            </div>



                </diV>
                <div class="col-md-8">
            {/if}
          
                <form id="form-create-vacancy" name="form-create-vacancy" method="POST">
                        <div class="panel card">
                            <div id="collapseOne" class="card-collapse collapse show" role="tabcard" aria-labelledby="headingOne">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-5">   
                                                <!-- Horizontal Form -->
                                                        <input type="hidden" name="act" id="act" value="{act}">
                                                        <input type="hidden" name="id" id="id" value="{id}">
                                                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                                        <input type="hidden" id="save_type" name="save_type" value="requested" />

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                 <h5 class="text-black"><strong>Job Details</strong></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Job Title: <span>*</span></label>
                                                                    <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control" data-validation="[NOTEMPTY]" value="{job_title}">
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
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="department" id="department" data-validation="[NOTEMPTY]">
                                                                          <option value="">Choose</option>
                                                                          {list_department}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Total Job Available: <span>*</span></label>
                                                                    <input type="text" name="total_job_available" id="total_job_available" placeholder="Total Job Available" class="form-control" value="{total_job_available}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Job Level: <span>*</span></label>
                                                                    <select class="form-control select2" name="job_level" id="job_level" >
                                                                          <option value="">Choose Job Level</option>
                                                                          {list_job_level}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Job Code: <span>*</span></label>
                                                                    <input type="text" name="job_code" id="job_code" placeholder="Job Code" class="form-control" value="{job_code}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Country: <span>*</span></label>
                                                                    <input type="text" name="country" id="country" placeholder="Country" class="form-control" data-validation="[NOTEMPTY]" value="{country}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>State/Region: <span>*</span></label>
                                                                    <input type="text" name="state_region" id="state_region" placeholder="State/Region" class="form-control" data-validation="[NOTEMPTY]" value="{state_region}">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>City: <span>*</span></label>
                                                                    <input type="text" name="city" id="city" placeholder="City" class="form-control" data-validation="[NOTEMPTY]" value="{city}">
                                                                </div>
                                                            </div>
                                                              <div class="col-md-6" style="display:{isset_pic};">
                                                                <div class="form-group" >
                                                                    <label>PIC: <span>*</span></label>
                                                                    <select class="form-control select2" name="user_id" id="user_id">
                                                                          <option value="">Choose</option>
                                                                          {list_pic}
                                                                    </select>
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
                                                                    <input type="text" name="currency" id="currency" placeholder="currency" class="form-control" data-validation="[NOTEMPTY]" value="{currency}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Show Salary: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="show_salary" id="show_salary" value="{show_salary}">
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
                                                                    <input type="text" name="maximum_salary" id="maximum_salary" placeholder="Maximum Salary" class="form-control" data-validation="[NOTEMPTY]" value="{maximum_salary}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Minimum Salary: <span>*</span></label>
                                                                    <input type="text" name="minimum_salary" id="minimum_salary" placeholder="Minimum Salary" class="form-control" data-validation="[NOTEMPTY]" value="{minimum_salary}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h5 class="text-black"><strong>Job Description</strong></h5>
                                                                <div class="form-group">
                                                                    <textarea name="job_description" id="job_description" placeholder="Job Description" class="form-control summernote" rows="5" data-validation="[NOTEMPTY]">{job_description}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="text-black"><strong>Job Requirements</strong></h5>
                                                                <div class="form-group">
                                                                    <textarea name="job_requirements" id="job_requirements" placeholder="Job Description" class="form-control summernote" rows="5" data-validation="[NOTEMPTY]">{job_requirements}</textarea>
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
                                                                        <select class="form-control select2" name="experience" id="experience" value="{experience}">
                                                                            <option value="">Select Level</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Industry: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="industry" id="industry" value="{industry}">
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
                                                                        <select class="form-control select2" name="stream" id="stream" value="{stream}">
                                                                            <option value="">Choose Stream</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label>Education: <span>*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control select2" name="education" id="education" value="{education}">
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
                                                                        <select class="form-control select2" name="employeement_type" id="employeement_type" data-validation="[NOTEMPTY]" value="{employeement_type}">
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
                                                                        <select class="form-control select2" id="auto_close_job" name="auto_close_job"  value="auto_closed_job">
                                                                          <option value="0">No</option>
                                                                          <option value="1">Yes</option>
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-4" style="display:none;" id="job_date">
                                                                <label>Choose Date</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" name="job_date" value="{job_date}"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="display:none;" id="job_time">
                                                                <label>Choose Time</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control timepicker-init" placeholder="Select Time" name="job_time" value="{job_time}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Request Code</label>
                                                                    <input readonly type="text" name="request_code" id="request_code"  class="form-control" data-validation="[NOTEMPTY]" value="{request_code}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="text-black"><strong>Note request to Sharedvis</strong></h5>
                                                                <div class="form-group">
                                                                    <textarea name="notes_request" id="notes_request" placeholder="Please give note request" class="form-control" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12" align="right">
                                                                <a onclick="goBack()" class="btn btn-danger previous"><i class='icmn-undo2'></i> Cancel</a> 
                                                                <button type="submit" onclick="document.getElementById('save_type').value='requested';console.log('requested');" class="btn btn-primary "><i class='fa fa-check'></i> Submit Request</button>
                                                            </div>
                                                         </div>
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

        render_admin_notes();

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
                        alert($('#request_code').val());
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


        $('.list-group-sortable-handles').sortable({
                placeholderClass: 'list-group-item',
                handle: 'span',
                items: ':not(.disabled)'
        });

    });

    function  render_admin_notes(){

        var action = '{act}';
        if(action == 'edit'){
            $('#history_content').html('<center><i class="fa fa-spinner fa-spin"></i></center>');
            $.ajax({
                    url: '{base_url}{parent_page}/history_request',
                    type: 'POST',
                    dataType: 'json',
                    data: {id : '{id}'},
                    })
                    .done(function(data) {
                        
                        $('#history_content').html(data.html);
                          
                     })
                    .fail(function() {
                        $('#history_content').html('<center><b>Theres no history</b></center>');
                    });
        }                  
    }

    function goBack() {
        window.history.back();
    }



</script>

