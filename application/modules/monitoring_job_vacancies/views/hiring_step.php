<style type="text/css">
	.card-no-border{
		border: 0px solid rgba(0,0,0,.125);
	}

    #status-unqualified.active{  
        border-bottom-color: #ff0303 !important;
    }
    #status-qualified.active{  
        border-bottom-color: #46be8a !important;
    }

</style>

<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
        	<div class="row">
        		<div class="col-md-6">
            		<strong>{vacancy_name}</strong> - <span class="badge badge-pill badge-success mr-2 mb-2">{vacancy_status}</span>
        		</div>
        		<div class="col-md-6" align="right">
        			<button class="btn btn-primary btn-sm " id="invite_applicant" data-toggle="modal" data-target="#example1"><i class="fa fa-plus"></i> Invite Applicant</button>
        			<button class="btn btn-default btn-sm "><i class="fa fa-pencil"></i> Edit Job Vacant</button>
                    <input type="hidden" value="0" name="ch_stage_selected" id="ch_stage_selected" />
                    <input type="hidden" value="0" name="ch_status_selected" id="ch_status_selected" />
                    <input type="hidden" value="0" name="ch_applicant_selected" id="ch_applicant_selected" />
        		</div>

        	</div>
        </span>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                    <div class="nav-tabs-horizontal">
                        <ul class="nav nav-tabs mb-4" role="tablist" id="stage_list">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#home1" role="tab">Sourced <span class="badge badge-primary">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#profile1" role="tab">Applied <span class="badge badge-primary">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#messages1" role="tab">Phone Screen <span class="badge badge-primary">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#settings1" role="tab">Hired <span class="badge badge-primary">1</span></a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="tab_stage_list">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="modal fade" id="example1" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Invite Applicant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-validation-search" name="form-validation-search" method="#"> 
                <div class="modal-body">
                   <div class="form-group row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="applicant_email" placeholder="Search Applicant Email..." id="applicant_email" data-validation="[EMAIL]">
                                <input type="hidden" name="invitation_id" id="invitation_id" >
                                <input type="hidden" name="invitation_email" id="invitation_email" >
                                <input type="hidden" name="invitation_fullname" id="invitation_fullname" >
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success" id="save-stage">Search</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    	<div class="row" id="detail_profile">
	                        
	                    </div>
                </div>
                <div class="modal-footer" id="modal-footer-application">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    
                </div>
            </form>  
        </div>
    </div>
</div>
<input type="hidden" class="active_tab" >
<input type="hidden" class="active_tab_name" >
<input type="hidden" id="vacancy_id"  value="{id}">
<input type="hidden" id="vacancy_name"  value="{vacancy_name}">
<script>
    var stages;

    function render_content( id , stage_id , status_applicant , pelamar_id ){
        $('.cat__apps__messaging__tab').on('click', function(){
            $('.cat__apps__messaging__tab').removeClass('cat__apps__messaging__tab--selected');
            $(this).addClass('cat__apps__messaging__tab--selected');
        });

        $("#content-applicant-"+stage_id).html("");
        $(".content_body").remove("");
        


        $.ajax({
            type: "POST",
            url: '{base_url}{parent_page}/get_applicant',
            data: { id: pelamar_id },
            dataType: 'json',      
            beforeSend: function(){
                NProgress.start();
            },
            success: function(result) {
                var tab = "";

                var status_option = "";
                var hide_tab = "";
                switch(status_applicant) {
                    case "qualified":
                        status_option = "<a class='dropdown-item btn-change-status' changeto='disqualified' pelamar_id='"+id+"' stage_id='"+stage_id+"' href='javascript: void(0);'><i class='lnr lnr-thumbs-down'></i> Disqualify</a>";
                    break;
                    case "disqualified":
                        status_option = "<a class='dropdown-item btn-change-status' changeto='qualified' pelamar_id='"+id+"' stage_id='"+stage_id+"' href='javascript: void(0);'><i class='lnr lnr-thumbs-up'></i> Qualify</a>";
                    break;            
                    case "unqualified":
                        status_option = "<a class='dropdown-item btn-change-status' changeto='qualified' pelamar_id='"+id+"' stage_id='"+stage_id+"' href='javascript: void(0);'><i class='lnr lnr-thumbs-up'></i> Qualify</a>\
                                        <a class='dropdown-item btn-change-status' changeto='disqualified' pelamar_id='"+id+"' stage_id='"+stage_id+"' href='javascript: void(0);'><i class='lnr lnr-thumbs-down'></i> Disqualify</a>";
                        hide_tab = "style='display:none;'";
                    break;
                    default:
                }   
                
                stages_option = ""; 
                $.each(stages, function( i, val ) {
                    if(val.m_vacancy_stages_id!= stage_id){
                        stages_option += "<a class='dropdown-item btn-change-stages' data-changeto='"+val.m_vacancy_stages_id+"' data-pelamar_id='"+id+"' data-stage_id='"+stage_id+"' data-status='"+status_applicant+"' href='javascript: void(0);'><i class='icmn-arrow-right2'></i>&nbsp;"+val.stages_name+"</a>";
                    }
                });

                    var content = " <div class='row content_body' >\
                            <div class='col-lg-4'>\
                                <section class='card cat__apps__profile__card' style='background-image: url({base_url}assets/backend/modules/dummy-assets/common/img/photos/4.jpeg); margin-top: 0px;'>\
                                    <div class='card-body text-center'>\
                                        <a class='cat__core__avatar cat__core__avatar--border-white cat__core__avatar--110' href='javascript:void(0);'>\
                                            <img src='{base_url}assets/backend/images/profile/applicant/"+result[0].email+"/"+result[0].img_profile+"' alt='"+result[0].fullname+"' alt='Alternative text to the image'>\
                                        </a>\
                                        <br/>\
                                        <br/>\
                                        <br/>\
                                        \
                                    </div>\
                                </section>\
                            </div>\
                            <div class='col-lg-6'>\
                                <section class='card card-no-border'>\
                                    <div class='card-body'>\
                                        <h5 class='mb-3 text-black'>\
                                            <strong>Information</strong>\
                                        </h5>\
                                        <dl class='row'>\
                                            <dt class='col-xl-3'>Full Name</dt>\
                                            <dd class='col-xl-9'>"+result[0].fullname+"</dd>\
                                            <dt class='col-xl-3'>Gender</dt>\
                                            <dd class='col-xl-9'>"+result[0].jenis_kelamin+"</dd>\
                                            <dt class='col-xl-3'>Phone</dt>\
                                            <dd class='col-xl-9'>"+result[0].phone+"</dd>\
                                            <dt class='col-xl-3'>Email</dt>\
                                            <dd class='col-xl-9'>"+result[0].email+"</dd>\
                                            <dt class='col-xl-3'>Religion</dt>\
                                            <dd class='col-xl-9'>"+result[0].agama+"</dd>\
                                        </dl>\
                                    </div>\
                                </section>\
                            </div>\
                            <div class='col-lg-2'>\
                                <section class='card card-no-border'>\
                                    <div class='card-body'>\
                                        <dl class='row'>\
                                            <div class='btn-group'>\
                                                <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'> Change Status</button>\
                                                <ul class='dropdown-menu'>\
                                                    "+status_option+"\
                                                </ul>\
                                            </div>\
                                        </dl>\
                                        <dl class='row'>\
                                            <div class='btn-group'>\
                                                <button type='button' class='btn btn-success dropdown-toggle' data-toggle='dropdown'> Change Stage</button>\
                                                <ul class='dropdown-menu'>\
                                                    "+stages_option+"\
                                                </ul>\
                                            </div>\
                                        </dl>\
                                    </div>\
                                </section>\
                            </div>\
                        </div>\
                        <div class='row content_body' "+hide_tab+">\
                            <div class='col-lg-12'>\
                                <div class='mb-5'>\
                                    <div class='nav-tabs-horizontal'>\
                                        <ul class='nav nav-tabs mb-4' role='tablist'>\
                                            <!-- <li class='nav-item'>\
                                                <a class='nav-link menu-detail' href='javascript: void(0);' data-toggle='tab' data-target='#send_email' role='tab'>\
                                                    <i class='icmn-home'></i>\
                                                    Send Email\
                                                </a>\
                                            </li>  -->\
                                            <li class='nav-item'>\
                                                <a class='nav-link  menu-detail' href='javascript: void(0);' data-toggle='tab' data-target='.detail_profile' role='tab'>\
                                                    <i class='icmn-profile'></i>\
                                                    Detail Profile\
                                                </a>\
                                            </li>\
                                            <li class='nav-item'>\
                                                <a class='nav-link menu-detail' href='javascript: void(0);' data-toggle='tab' data-target='.detail_schedule' role='tab'>\
                                                    <i class='icmn-calendar'></i>\
                                                    Detail Schedule\
                                                </a>\
                                            </li>\
                                            <li class='nav-item'>\
                                                <a class='nav-link menu-detail' href='javascript: void(0);' data-toggle='tab' data-target='.comments' role='tab'>\
                                                    <i class='icmn-bubbles2'></i>\
                                                    Comments \
                                                </a>\
                                            </li>\
                                            <li class='nav-item'>\
                                                <a class='nav-link menu-detail' href='javascript: void(0);' data-toggle='tab' data-target='.detail_assessment' role='tab'>\
                                                    <i class='icmn-clipboard'></i>\
                                                    Detail Assessment\
                                                </a>\
                                            </li>\
                                        </ul>\
                                        <div class='tab-content'>\
                                            <!-- <div class='tab-pane active send_email' id='' role='tabcard'>\
                                                <div class='form-group'>\
                                                    <input type='text' class='form-control' placeholder='To' />\
                                                </div>\
                                                <div class='form-group'>\
                                                    <input type='text' class='form-control' placeholder='Subject' />\
                                                </div>\
                                                <div class='form-group'>\
                                                <textarea name='job_description' id='email_message' placeholder=' class='form-control summernote' rows='5'> </textarea>\
                                                </div>\
                                                <div class='col-md-12' align='right'>\
                                                    <button type='button' class='btn width-200 btn-primary'><i class='fa fa-send mr-2'></i> Send</button>\
                                                    <button type='button' class='btn btn-link'>Attachment</button>\
                                                </div>\
                                            </div> -->\
                                            <div class='tab-pane detail_profile' id='' role='tabcard' >\
                                            </div>\
                                            <div class='tab-pane detail_schedule' id='' role='tabcard'>\
                                                <div class='col-lg-12'>\
                                                    <div class='mb-5'>\
                                                        <!-- Popup Form Validation -->\
                                                        <form id='form-validation-set_schedule' name='form-validation-set_schedule' method='#'>\
                                                                <div class='mb-5'>\
                                                                    <!-- Horizontal Form -->\
                                                                        <div class='form-group row'>\
                                                                            <label class='col-md-1 col-form-label' for='l13'>When</label>\
                                                                            <div class='col-md-3'>\
                                                                                <div class='form-group'>\
                                                                                    <label class='input-group datepicker-only-init'>\
                                                                                        <input type='text' class='form-control' placeholder='Select Date' id='date_schedule' time='date_schedule' name='date_schedule' />\
                                                                                        <span class='input-group-addon'>\
                                                                                            <i class='icmn-calendar'></i>\
                                                                                        </span>\
                                                                                    </label>\
                                                                                </div>\
                                                                            </div>\
                                                                        <label class='col-md-1 col-form-label' for='l13'>Start</label>\
                                                                            <div class='col-md-3'>\
                                                                                <div class='form-group'>\
                                                                                    <label class='input-group timepicker-init'>\
                                                                                        <input type='text' class='form-control' placeholder='Start Time' id='start_time' name='start_time' />\
                                                                                        <span class='input-group-addon'>\
                                                                                            <i class='icmn-clock'></i>\
                                                                                        </span>\
                                                                                    </label>\
                                                                                </div>\
                                                                            </div>\
                                                                            <label class='col-md-1 col-form-label' for='l13'>End</label>\
                                                                            <div class='col-md-3'>\
                                                                                <div class='form-group'>\
                                                                                    <label class='input-group timepicker-init'>\
                                                                                        <input type='text' class='form-control' placeholder='End Time' id='end_time' name='end_time' />\
                                                                                        <span class='input-group-addon'>\
                                                                                            <i class='icmn-clock'></i>\
                                                                                        </span>\
                                                                                    </label>\
                                                                                </div>\
                                                                            </div>\
                                                                        </div>\
                                                                        <div class='row'>\
                                                                            <div class='col-md-6'>\
                                                                                <div class='form-group'>\
                                                                                    <label>Place </label>\
                                                                                    <textarea class='form-control' rows='3' id='l15' data-validation='[NOTEMPTY]' id='place_schedule' name='place_schedule'></textarea>\
                                                                                </div>\
                                                                            </div>\
                                                                            <div class='col-md-6'>\
                                                                                <div class='form-group'>\
                                                                                    <label>Notes </label>\
                                                                                    <textarea class='form-control' rows='3' id='l15' data-validation='[NOTEMPTY]' id='notes_schedule' name='notes_schedule'></textarea>\
                                                                                </div>\
                                                                            </div>\
                                                                        </div>\
                                                                    <!-- End Horizontal Form -->\
                                                                </div>\
                                                                <input type='hidden' id='id_schedule' name='id_schedule' value='"+result[0].id+"' />\
                                                                <input type='hidden' id='name_schedule' name='name_schedule' value='"+result[0].fullname+"' />\
                                                                <input type='hidden' id='email_schedule' name='email_schedule' value='"+result[0].email+"' />\
                                                                <input type='hidden' id='vacancy_id_schedule' name='vacancy_id_schedule'  />\
                                                                <input type='hidden' id='vacancy_name_schedule' name='vacancy_name_schedule'  />\
                                                            <div class='form-actions'>\
                                                                <button type='submit' class='btn btn-primary width-150'><i class='icmn-compass'></i> Send Schedule</button>\
                                                                <button type='reset' class='btn btn-default remove-error'>Clear</button>\
                                                            </div>\
                                                        </form>\
                                                        <!-- End Popup Form Validation -->\
                                                    </div>\
                                                </div>\
                                            </div>\
                                            <div class='tab-pane comments' id='' role='tabcard'>\
                                                <div class='card-body'>\
                                                    <form name='comments-form' id='comments-form'>\
                                                    <input type='hidden' name='stage_id' value='"+stage_id+"'>\
                                                    <input type='hidden' name='pelamar_id' value='"+pelamar_id+"'>\
                                                    <div class='cat__apps__messaging comments-items'>\
                                                        \
                                                    </div>\
                                                    </form>\
                                                </div>\
                                                    \
                                            </div>\
                                            <div class='tab-pane detail_assessment' id='' role='tabcard'>\
                                               # Detail Assessment\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        <div class='cat__apps__messaging' style='display: none;'> \
                            <div id='scroll-msg' style='height: 400px;overflow-y: scroll'>\
                                <div class='cat__apps__chat-block' id='list_messaging'>\
                                \
                                </div>\
                            </div>\
                            <div class='form-group mt-4 mb-0'>\
                                 <form id='form_send_message' name='form_send_message' method='POST'>\
                                    <input type='hidden' name='<?=$this->security->get_csrf_token_name();?>' value='<?=$this->security->get_csrf_hash();?>' style='display: none'> \
                                    <input type='hidden' name='chat_id' id='chat_id' style='display: none'> \
                                    <textarea class='form-control adjustable-textarea' id='text_message' name='text_message' placeholder='Type and press enter'></textarea>\
                                    <div class='mt-3'>\
                                        <button type='submit' class='btn btn-primary width-200' id='btn_send_message' name='btn_send_message'>\
                                            <i class='fa fa-send mr-2'></i>\
                                            Send\
                                        </button>\
                                        <input type='hidden' name='start' id='start'>\
                                        <input type='hidden' name='records_per_page' id='records_per_page'>\
                                        <input type='hidden' name='last_id' id='last_id'>\
                                        <!-- <div id='message'></div> -->\
                                        <!--   <button class='btn btn-link'>\
                                            Attach File\
                                        </button> -->\
                                    </div>\
                                </form>\
                            </div>\
                        </div>\
                    ";

                        $("#content-applicant-"+stage_id).html(content);
                        $('.dropify').dropify();

                        $('#stage_id_schedule').val($("#selected_stage_id").val());
                        $('#stage_name_schedule').val($("#selected_stage_name").val());
                        $('#vacancy_id_schedule').val($("#vacancy_id").val());
                        $('#vacancy_name_schedule').val($("#vacancy_name").val());

                        $("#form-validation-set_schedule").validate({
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
                                            url: '{base_url}{parent_page}/send_schedule',
                                            type: 'POST',
                                            dataType: 'json',
                                            data: $('#form-validation-set_schedule').serialize()+'&stage_id_schedule='+$("#selected_stage_id").val()+'&stage_name_schedule='+$("#selected_stage_name").val(),
                                        })
                                        .done(function(data) {
                                            if(data.status=='success'){
                                            swal({ 
                                               title: "Notification",       
                                               text: data.reason
                                              },
                                              function(){
                                            }); 
                                            $(".remove-error").click();                            
                                            }else{
                                                swal({ 
                                                   title: "Notification",       
                                                   text: data.reason
                                                  });
                                            }      
                                            NProgress.done();    

                                        })
                                        .fail(function() {
                                            NProgress.done();
                                            swal({ 
                                               title: "Notification",       
                                               text: "Failed"
                                              });
                                        });
                                        
                                    },
                                    onError: function (error) {
                                        toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                                    }

                                }
                            },
                            debug: true
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
                            format: 'LL'
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
                        $(".select2").select2();
                        
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

                    $(".menu-detail").on('click', function(){
                        var menu = $(this).attr('data-target');
                            menu = menu.substring(1);
                        if ( menu == 'detail_profile' && $.trim($(".detail_profile").html()) == '' ) {
                            $.ajax({
                                type: "POST",
                                url: '{base_url}curiculum_vitae/preview',
                                data: { pelamar_id : pelamar_id },
                                dataType: 'html',      
                                beforeSend: function(){
                                    NProgress.start();
                                },success: function(data){
                                    data = data.replace('card-block','');
                                    $('.detail_profile').css('height' , '300px');
                                    $('.detail_profile').css('max-height' , '300px');
                                    $('.detail_profile').css('overflow-y' , 'scroll');

                                    $('.detail_profile').html(data);

                                },complete:function(){
                                    NProgress.done();
                                }
                            });
                        }
                    });    

                    $(".btn-change-status").on('click', function(){
                        var changeto = $(this).attr('changeto');
                        var pelamar_id = $(this).attr('pelamar_id');
                        var stage_id = $(this).attr('stage_id');

                        $.ajax({
                            type: "POST",
                            url: '{base_url}{parent_page}/ch_qualification',
                            data: { changeto: changeto, pelamar_id:pelamar_id, stage_id:stage_id },
                            dataType: 'json',      
                            beforeSend: function(){
                                NProgress.start();
                            },success: function(data){
                                
                            },complete:function(){
                                NProgress.done();
                                $('#ch_stage_selected').val(stage_id);
                                $('#ch_status_selected').val(changeto);
                                $('#ch_applicant_selected').val(pelamar_id);
                                $('#status-'+changeto).click();
                            }
                        });
                    });

                    $(".btn-change-stages").on('click', function(){
                        var changeto        = $(this).data('changeto');
                        var pelamar_id      = $(this).data('pelamar_id');
                        var stage_id        = $(this).data('stage_id');
                        var status_applican = $(this).data('status');
                       
                        $('a.nav-link[data-target="#'+changeto+'"]').click();

                        $.ajax({
                            type: "POST",
                            url: '{base_url}{parent_page}/ch_stage',
                            data: { changeto: changeto, pelamar_id:pelamar_id, stage_id:stage_id },
                            dataType: 'json',      
                            beforeSend: function(){
                                NProgress.start();
                            },success: function(data){
                                if(data.status=='success'){
                                    $('#ch_status_selected').val(data.qualification_status);
                                  
                                }else{
                                    $('#ch_status_selected').val(status_applican);
                                }
                                console.log( 'val_ch_status_selected: ' + $('#ch_status_selected').val() );
                            },complete:function(){
                                NProgress.done();
                                $('#ch_stage_selected').val(changeto);
                                //$('#ch_status_selected').val(status_applican);
                                $('#ch_applicant_selected').val(pelamar_id);
                                $('a.nav-link[data-target="#'+changeto+'"]').click(); 
                                $('#status-'+$('#ch_status_selected').val()).click();
                               
                            }
                        });
                    });

                     $("#comments-form").submit(function(e){
                        e.preventDefault();
                        stage_id     = $(this).find('input[name="stage_id"]').val();
                        pelamar_id   = $(this).find('input[name="pelamar_id"]').val();
                        text_content = $(this).find('.adjustable-textarea').val();
                        fullname     = '{fullname}';

                        $(this).find('.adjustable-textarea').val("");
                        $(this).find('.adjustable-textarea').focus();
                        
                        $.ajax({
                            type: "POST",
                            url: '{base_url}{parent_page}/send_comments',
                            cache: false,
                            data: { stage_id:stage_id, pelamar_id:pelamar_id, content:text_content },
                            dataType: 'json',
                            beforeSend: function(){
                                $(this).find('button[type="submit"]').button("loading");
                                $('#btn-comments').button("loading");
                                $('.comments-items>div.comments-form').before("<div class='msg-loadings custom-scroll cat__core__scrollable'>\
                                    <div class='cat__apps__chat-block'>\
                                        <div class='cat__apps__chat-block__item clearfix'>\
                                            <div class='cat__apps__chat-block__avatar'>\
                                                <a class='cat__core__avatar cat__core__avatar--50' href='javascript:void(0);'>\
                                                    <img src='../../modules/dummy-assets/common/img/avatars/3.jpg' alt='Alternative text to the image' />\
                                                </a>\
                                            </div>\
                                            <div class='cat__apps__chat-block__content'>\
                                                <strong><i>Loading</i></strong><span class='text-muted small pull-right'><i>Loading</i></span>\
                                                <p><i>Loading</i></p>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>");
                            
                            },success: function(data){
                                $('.msg-loadings').remove();
                                $('.comments-items>div.comments-form').before("<div class='custom-scroll cat__core__scrollable'>\
                                    <div class='cat__apps__chat-block'>\
                                        <div class='cat__apps__chat-block__item clearfix'>\
                                            <div class='cat__apps__chat-block__avatar'>\
                                                <a class='cat__core__avatar cat__core__avatar--50' href='javascript:void(0);'>\
                                                    <img src='../../modules/dummy-assets/common/img/avatars/3.jpg' alt='Alternative text to the image' />\
                                                </a>\
                                            </div>\
                                            <div class='cat__apps__chat-block__content'>\
                                            <strong>"+fullname+"</strong><span class='text-muted small pull-right'>"+data.date+"</span>\
                                                <p>"+text_content+"</p>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>");
                            }, complete: function(){
                                $(this).find('button[type="submit"]').button("reset");
                                $('#btn-comments').button("reset");
                            }, error: function(){
                                $('.msg-loadings').remove();
                                $(this).find('button[type="submit"]').button("reset");
                                $('#btn-comments').button("reset");
                            }
                        });

                       
                    });
                NProgress.done();
            

            },  
            complete: function(){
                tab_comment(stage_id,pelamar_id);
            },
            error: function() {
                NProgress.done();
                console.log("error");
            }       
        });
    }

    function tab_comment(stage_id,pelamar_id)
    {

        $.ajax({
            type: "POST",
            url: '{base_url}{parent_page}/get_comments',
            cache: false,
            data: { stage_id: stage_id, pelamar_id:pelamar_id },
            dataType: 'json',
            beforeSend: function(){
                NProgress.start();
                $('.comments-items').html("<div class='comments-form form-group mt-4 mb-0'>\
                                        <textarea class='form-control adjustable-textarea' placeholder='Type and press enter' required></textarea>\
                                        <div class='mt-3'>\
                                            <button type='submit' id='btn-comments' class='btn btn-primary width-200'>\
                                                <i class='fa fa-send mr-2'></i>\
                                                Send\
                                            </button>\
                                        </div>\
                                    </div>");
            },success: function(data){
                $.each(data,function(i,val){
                $('.comments-items>div.comments-form').before("<div class='custom-scroll cat__core__scrollable'>\
                        <div class='cat__apps__chat-block'>\
                            <div class='cat__apps__chat-block__item clearfix'>\
                                <div class='cat__apps__chat-block__avatar'>\
                                    <a class='cat__core__avatar cat__core__avatar--50' href='javascript:void(0);'>\
                                        <img src='../../modules/dummy-assets/common/img/avatars/3.jpg' alt='Alternative text to the image' />\
                                    </a>\
                                </div>\
                                <div class='cat__apps__chat-block__content'>\
                                    <strong>"+val.name+"</strong><span class='text-muted small pull-right'>"+val.create_at+"</span>\
                                    <p>"+val.content+"</p>\
                                </div>\
                            </div>\
                        </div>\
                    </div>");
                });
            },complete:function(){
                NProgress.done();
            }       
        });

       

       
    }

   

    $(function() {

        ///////////////////////////////////////////////////
        // SIDEBAR CURRENT STATE

        ///////////////////////////////////////////////////////////
        // CUSTOM SCROLL
        if (!(/Mobi/.test(navigator.userAgent)) && jQuery().jScrollPane) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('.adjustable-textarea'));

        var vacancy_id = '{id}';

        function render_tab_one(id,stage_name){

        	var id = id.substring(1);
            $(".tab-pane#"+id).html("");
        	$(".section-content").remove();
        	var html = "<section class='card cat__core__card-with-sidebar cat__core__card-with-sidebar--large section-content'>\
							    <div class='cat__core__card-sidebar'>\
							        <div class='cat__apps__messaging__header'>\
							            <input class='form-control cat__apps__messaging__header__input' placeholder='Search...' id='q' />\
							            <i class='icmn-search'></i>\
							            <button></button>\
							        </div>\
							        <div class='cat__apps__messaging__list' id='list_applicant_"+id+"'>\
							        	<div class='nav-tabs-horizontal'>\
					                        <ul class='nav nav-tabs' role='tablist'>\
					                            <li class='nav-item'>\
					                                <a class='nav-link change-status status-qualified' id='status-qualified'  href='javascript: void(0);' data-toggle='tab' data-target='#"+id+"-qualified' data-id='"+id+"' data-status='qualified' role='tab'>Qualified</a>\
					                            </li>\
					                            <li class='nav-item'>\
					                                <a class='nav-link change-status' id='status-disqualified' href='javascript: void(0);' data-toggle='tab' data-target='#"+id+"-disqualified' data-id='"+id+"'  data-status='disqualified' role='tab'>Disqualified</a>\
					                            </li>\
                                                <li class='nav-item'>\
                                                    <a class='nav-link change-status' id='status-unqualified' href='javascript: void(0);' data-toggle='tab' data-target='#"+id+"-unqualified' data-id='"+id+"'  data-status='unqualified' role='tab'>Unqualified</a>\
                                                </li>\
					                        </ul>\
					                        <div class='tab-content'>\
                    							<div class='tab-pane' id='"+id+"-qualified' role='tabcard'>\
                    							</div>\
                    							<div class='tab-pane' id='"+id+"-disqualified' role='tabcard'>\
                    							</div>\
                                                <div class='tab-pane' id='"+id+"-unqualified' role='tabcard'>\
                                                </div>\
                    						</div>\
					                    </div>\
							            \
							        </div>\
							    </div>\
							    <div class='card-header'>\
							        <div class='pull-right'>\
							        </div>\
							        <h4 class='mt-1 mb-1 text-black'>\
							            <strong>"+stage_name+"</strong>\
                                        <input id='selected_stage_id' value='"+id+"' type='hidden' />\
                                        <input id='selected_stage_name' value='"+stage_name+"' type='hidden' />\
							        </h4>\
							    </div>\
							    <div class='card-block' id='content-applicant-"+id+"' >\
							    	<div class='p-t-40 p-b-40 text-center f-s-20 content'><i class='fa fa-warning fa-lg text-muted m-r-5'></i>\
							    	<span class='f-w-600 text-inverse'>No user selected.</span></div>	\
							    </div>\
						</section>";

			$(".tab-pane#"+id).html(html);

			$('.change-status').on('shown.bs.tab', function (e) {
                var target_status = $(e.target).attr("data-target");
                var stage_id = $(e.target).attr("data-id");
                var status_applicant = $(e.target).attr("data-status");
                $(".content_body").remove("");
                $('#content-applicant-'+stage_id).html(" <div class='content_body' >\
                                            <div class='p-t-40 p-b-40 text-center f-s-20 content'><i class='fa fa-warning fa-lg text-muted m-r-5'></i>\
                                            <span class='f-w-600 text-inverse'>No user selected.</span></div>	\
                                        </div>");
                render_applicants( vacancy_id, target_status , stage_id , status_applicant);
			});

        }

        $.ajax({
                type: "POST",
                url: '{base_url}{parent_page}/get_stage',
                data: { vacancy_id: vacancy_id },
                dataType: 'json',      
                beforeSend: function(){
                    NProgress.start();
                },
                success: function(result) {
                    NProgress.done();
                    var tab = "";
                    stages  = result;
                    $.each(result, function( index, value ) {
                    	var active = index==0?"active":""; 
                    	var active_tab = "#"+result[0].m_vacancy_stages_id; 
                    	var active_tab_name = result[0].stages_name; 
                        $("#stage_list").append("<li class='nav-item'>\
					                                <a class='nav-link "+active+" change-stage' href='javascript: void(0);' data-toggle='tab' data-target='#"+result[index].m_vacancy_stages_id+"' role='tab' data-value='"+result[index].stages_name+"'>"+result[index].stages_name+"\
					                            </li>");
                        $("#tab_stage_list").append("<div class='tab-pane "+active+"' id='"+result[index].m_vacancy_stages_id+"' role='tabcard'>#"+result[index].stages_name+"</div>");
                        $(".active_tab").val(active_tab);
						$(".active_tab_name").val(active_tab_name);
                        
                    });

                    render_tab_one($(".active_tab").val(),$(".active_tab_name").val());
                    

                    $(".status-qualified").click();
                    var target_list = $(".active_tab").val().substring(1)+"-qualified";
                    var target = $(".active_tab").val().substring(1);

                    render_applicants( vacancy_id, target_list , target , 'qualified');
                   	
                   	$('.change-stage').on('shown.bs.tab', function (e) {
                        var target = $(e.target).attr("data-target");
                        var stage_name = $(e.target).attr("data-value");
                        render_tab_one(target,stage_name);
                        
            
                        var target_list =  target.substring(1)+"-qualified";
                        var target =  target.substring(1);
                        $(".status-qualified").click();

                        render_applicants( vacancy_id, target_list , target , 'qualified');
					});
                },  
                error: function() {
                    NProgress.done();
                    console.log("error");
                }       
        });

        $("#form-validation-search").validate({
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
                            url: '{base_url}{parent_page}/search_applicant',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#form-validation-search').serialize(),
                        })
                        .done(function(result) {
                            NProgress.done();
                            if(!jQuery.isEmptyObject(result)){
	                            $("#detail_profile").html("");
	                            var html_user = "<div class='col-xl-12'>\
		                            <div class='cat__core__widget cat__core__widget--border cat__core__widget__1 px-3 py-5'>\
		                                <div class='cat__core__widget__1__plus'></div>\
		                                <a class='cat__core__avatar cat__core__avatar--90 cat__core__avatar--border d-block mx-auto' href='javascript:void(0);'>\
		                                    <img src='{base_url}assets/backend/images/profile/applicant/"+result[0].email+"/"+result[0].img_profile+"' alt='"+result[0].fullname+"' alt='Alternative text to the image'>\
		                                </a>\
		                                <div class='my-3 text-center'>\
		                                    <strong class='font-size-18'>"+result[0].fullname+"</strong>\
		                                    <br />\
		                                    <span class='text-muted'>"+result[0].email+"</span>\
		                                </div>\
		                            </div>\
		                        </div>";
		                        
	                        $("#detail_profile").append(html_user);

	                        $("#invitation_id").val(result[0].id);
                            $("#invitation_email").val(result[0].email);
                            $("#invitation_fullname").val(result[0].fullname);

	                        $("#modal-footer-application").html("");
	                        $("#modal-footer-application").append("<a id='send-invitation' class='btn btn-primary'><i class='icmn-compass'></i> Send Invitation</a>");

                            }else{
                            	$("#detail_profile").html("");
                            	$("#send-invitation").remove();

	                        	$("#invitation_id").val("");
                                $("#invitation_email").val("");
                                $("#invitation_fullname").val("");

                                toastr.warning("Warning", "User cant be found", { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }
                    		
                    		$('#send-invitation').click(function(e){
						        e.preventDefault();
                                var id_invitation = $("#invitation_id").val();
                                var email_invitation = $("#invitation_email").val();
						        var fullname_invitation = $("#invitation_fullname").val();
						        $.ajax({
						                type: "POST",
						                url: '{base_url}{parent_page}/send_invitation',
						                data: { vacancy_id: vacancy_id, email_invitation: email_invitation , id_invitation : id_invitation , fullname_invitation : fullname_invitation },
						                dataType: 'json',      
						                beforeSend: function(){
						                    NProgress.start();
						                },
						                success: function(data) {
						                    NProgress.done();
						                    if(data.status=='success'){
			                                    swal({ 
			                                       title: "Notification",       
			                                       text: data.reason
			                                      },
			                                      function(){
			                                    });                             
			                                }else{
			                                    swal({ 
			                                       title: "Notification",       
			                                       text: data.reason
			                                      });
			                                }      
						                       	
						                },  
						                error: function(data) {
						                    NProgress.done();
						                    swal({ 
		                                       title: "Notification",       
		                                       text: data.reason
		                                      });
						                }       
						        });

						    });          
                        })
                        .fail(function() {
                            NProgress.done();
                            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });

                        });
                        
                    },
                    onError: function (error) {
                        toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                    }

                }
            },
            debug: true
        });

    });

    function render_applicants( vacancy_id, target_status ,stage_id , status_applicant){

        $(target_status).html("");

        $.ajax({
            type: "POST",
            url: '{base_url}{parent_page}/get_applicants',
            data: { vacancy_id: vacancy_id , stage_id : stage_id, status_applicant : status_applicant  },
            dataType: 'json',      
            beforeSend: function(){
                NProgress.start();
            },
            success: function(result) {
                var tab = "";
                    if (!jQuery.isEmptyObject(result)){
                        $.each(result, function( index, value ) {
                            $(target_status).append("<div class='cat__apps__messaging__tab'>\
                                    <div class='cat__apps__messaging__tab__avatar'>\
                                        <a class='cat__core__avatar cat__core__avatar--50 render_content' href='javascript: void(0);' onclick='render_content(\""+result[index].id+"\",\""+stage_id+"\",\""+status_applicant+"\" , \""+result[index].pelamar_id+"\" )' setid='"+result[index].id+"'>\
                                            <img src='{base_url}assets/backend/images/profile/applicant/"+result[index].email+"/"+result[index].img_profile+"' alt='"+result[index].fullname+"'>\
                                        </a>\
                                    </div>\
                                    <div class='cat__apps__messaging__tab__content'>\
                                        <small class='cat__apps__messaging__tab__time'>8:34PM</small>\
                                        <div class='cat__apps__messaging__tab__name'>"+result[index].fullname+"</div>\
                                        <div class='cat__apps__messaging__tab__text'>"+result[index].email+"</div>\
                                    </div>\
                                </div>\
                            ");
                        });
                    }else{
                        $(target_status).append("<div class='col-xl-12' align='center' style='padding-top:10px'><strong> Applicant Empty </strong></div");
                        
                    }
                NProgress.done();


            },  
            complete: function(){
                ch_stage_selected = $('#ch_stage_selected').val();
                ch_status_selected = $('#ch_status_selected').val();
                ch_applicant_selected = $('#ch_applicant_selected').val();
                if(stage_id==ch_stage_selected){
                    if( typeof $('a#status-'+ch_status_selected+'.active').html() != 'undefined' ){
                        if( ch_status_selected !=0 && ch_applicant_selected!=0){
                            console.log('stage_id:'+stage_id+'|status_applicant:'+status_applicant+'|ch_applicant_selected:'+ch_applicant_selected+'|ch_status_selected:'+ch_status_selected);
                            $('#'+stage_id+'-'+ch_status_selected).find('[setid='+ch_applicant_selected+']').click();
                            $('#ch_stage_selected').val('0');
                            $('#ch_status_selected').val('0');
                            $('#ch_applicant_selected').val('0');
                        }
                    }   
                }
            },
            error: function() {
                NProgress.done();
            }       
        });
    }
</script>