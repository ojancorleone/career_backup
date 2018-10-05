<!--START: apps/profile -->
<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <div class="row">
        <div class="col-xl-8 offset-xl-4">
            <h2>
                <span class="text-black">
                    <strong>{fullname}</strong>
                </span>
                <small class="text-muted">{email}</small>
            </h2>
            <p class="mb-1">{userlevel}</p>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-xl-4">
        <section class="card cat__apps__profile__card" style="background-image: url({base_url}assets/backend/modules/dummy-assets/common/img/photos/4.jpeg)">
            <div class="card-block text-center">
                <a class="cat__core__avatar cat__core__avatar--border-white cat__core__avatar--110" href="javascript:void(0);">
                    <img src="{image_url}"/> 
                </a>
                <br />
                <br />
                <br />
                <!-- <p class="text-white">
                    Last activity: 21-10-2018
                </p> -->
                <p class="text-white">
                    <span class="cat__core__donut cat__core__donut--success"></span>
                    Online 
                </p>
            </div>
        </section>
        <section class="card">
            <div class="card-block">
                <h5 class="mb-3 text-black">
                    <strong>Information</strong>
                </h5>
                <dl class="row">
                    <dt class="col-xl-4">Email</dt>
                    <dd class="col-xl-8">{email}</dd>
                    <dt class="col-xl-4">Phone</dt>
                    <dd class="col-xl-8">{phone}</dd>
                    <dt class="col-xl-4">Level</dt>
                    <dd class="col-xl-8">{userlevel}</dd>
                </dl>
            </div>
        </section>
    </div>
    <div class="col-xl-8">
        <section class="card">
            <div class="card-block">
                <div class="nav-tabs-horizontal">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#settings" role="tab">
                                <i class="icmn-cog"></i>
                                Personal Information
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#change_password" role="tab">
                                <i class="fa fa-key"></i>
                                Change Password
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">    
                        <div class="tab-pane active" id="settings" role="tabcard">
                            <form id="form-update" name="form-update" method="#">
                                <input type="hidden" name="tenant_id" id="tenant_id" value="{tenant_id} ">
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                <h5 class="text-black mt-4">
                                    <strong>Personal Information</strong>
                                </h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l0">Full Name</label>
                                            <input type="text" id="fullname" name="fullname" class="form-control" value="{fullname}" data-validation="[NOTEMPTY]">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l0">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" value="{email}" data-validation="[EMAIL]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l1">Phone</label>
                                            <input type="text" id="phone" name="phone" class="form-control" value="{phone}" data-validation="[NOTEMPTY]">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="12">Profile Picture</label>
                                            <input type="file" class="dropify" id="img_profile" name="img_profile" data-height="300" data-max-file-size="1M" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="form-actions">
                                    <div class="form-group">
                                        <button type="submit" class="btn width-200 btn-primary pointer">Submit</button>
                                        <button type="button" class="btn btn-default pointer" onclick="goBack()">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="change_password" role="tabcard">
                            <form id="form-change-password" name="form-change-password" method="#">
                                <input type="hidden" name="tenant_id" id="tenant_id" value="{tenant_id} ">
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
                                <h5 class="text-black mt-4">
                                    <strong>Change Password</strong>
                                </h5>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l3">Current Password</label>
                                            <input id="current_password"
                                               class="form-control"
                                               name="current_password"
                                               type="password" data-validation="[L>=6]"
                                               data-validation-message="$ must be at least 6 characters"
                                               placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l4">New Password</label>
                                            <input id="new_password"
                                               class="form-control"
                                               name="new_password"
                                               type="password" data-validation="[NOTEMPTY]"
                                               data-validation-message="New Password"
                                               placeholder="Re-type Password">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="l4">Repeat new Password</label>
                                            <input id="confirm_password"
                                               class="form-control"
                                               name="confirm_password"
                                               type="password" data-validation="[V==new_password]"
                                               data-validation-message="Re-type New Password does not match the password"
                                               placeholder="Re-type Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="form-group">
                                        <button type="submit" class="btn width-200 btn-primary pointer">Submit</button>
                                        <button type="button" class="btn btn-default pointer" onclick="goBack()">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- END: apps/profile -->
<!-- START: page scripts -->
<script>
    $(function() {


        $('.dropify').dropify();

        $('#form-update').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                },
                callback: {
                    onBeforeSubmit: function (node) {
                        NProgress.start();    
                    },
                    onSubmit: function (node) {
                        var form = document.getElementById('form-update');
                        var formData = new FormData(form);

                        $.ajax({
                            url: '{base_url}profile/form_update',
                            enctype: 'multipart/form-data',
                            data: formData,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            dataType: 'json',
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status == 'success'){
                                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }else{
                                toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }  

                            // if(data.status=="success"){
                            //     $.notify(data.reason);
                            //      setTimeout(function () {
                            //         location.reload(true);
                            //     }, 1000);
                            // }else{
                            //     $.notify(data.reason);
                            // }          
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

         $('#form-change-password').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                },
                callback: {
                    onBeforeSubmit: function (node) {
                        NProgress.start();    
                    },
                    onSubmit: function (node) {
                        var form = document.getElementById('form-change-password');
                        var formData = new FormData(form);

                        $.ajax({
                            url: '{base_url}profile/change_password',
                            enctype: 'multipart/form-data',
                            data: formData,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            dataType: 'json',
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status == 'success'){
                                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }else{
                                toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                            }  

                            // if(data.status=="success"){
                            //     $.notify(data.reason);
                            //      setTimeout(function () {
                            //         location.reload(true);
                            //     }, 1000);
                            // }else{
                            //     $.notify(data.reason);
                            // }          
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

        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('.adjustable-textarea'));

        ///////////////////////////////////////////////////////////
        // CALENDAR
        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 450,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            Actionable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!(/Mobi/.test(navigator.userAgent)) && jQuery().jScrollPane) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            },
            defaultDate: '{calendar}',
           /* events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01',
                    className: 'fc-event-success'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00',
                    className: 'fc-event-default'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00',
                    className: 'fc-event-success'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-14',
                    className: 'fc-event-danger'
                }
            ]*/
        });

        ///////////////////////////////////////////////////////////
        // SWAL ALERTS
        $('.swal-btn-success').click(function(e){
            e.preventDefault();
            swal({
                title: "Following",
                text: "Now you are following Artour Scott",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok"
            });
        });

        $('.swal-btn-success-2').click(function(e){
            e.preventDefault();
            swal({
                title: "Friends request",
                text: "Friends request was succesfully sent to Artour Scott",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Ok"
            });
        });

    });

     function goBack() {
        window.history.back();
    }
</script>
<!-- END: page scripts