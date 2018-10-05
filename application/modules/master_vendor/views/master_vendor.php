<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Administration ·</span>
        <strong>Vendor</strong>
    </span>
</nav>
<!-- START: tables/datatables -->
<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong> Vendor </strong>
            <a href='main#{page_content}/view_detail' id=$id class='btn btn-outline-primary mr-2 mb-2 pull-right' data-toggle='tooltip' title='Add' aria-expanded='false'>
                <i class='icmn-plus'></i> Insert Data
            </a>
        </span>   
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                    <table class="table table-hover nowrap" id="data-table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Nickname</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="list_queue_data" >
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade modal-size-large" id="modal_detail_apps" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">List Vendor Applications  (<span id="detail_id"></span>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
					<div class="accordion accordion-margin-bottom" id="accordionDetails">
						<div class="card">
                            <div class="card-header collapsed" role="tab" id="headingDetails" data-toggle="collapse" data-parent="#accordionDetails" data-target="#collapseVendorDetails" aria-expanded="false" aria-controls="collapseVendorDetails">
                                <div class="card-title">
                                    <span class="accordion-indicator pull-right">
                                        <i class="plus fa fa-plus"></i>
                                        <i class="minus fa fa-minus"></i>
                                    </span>
                                    <a>
                                        Form Details <span id="detail_title" style="color:red;"></span>
                                    </a>
                                </div>
                            </div>
                            <div id="collapseVendorDetails" class="card-collapse collapse" role="tabcard" aria-labelledby="headingDetails">
                                <div class="card-block">
                                    <!-- Horizontal Form -->
									<form id="form-vendor-details" name="form-vendor-details" method="POST">
										<input type="hidden" name="vendor_details_act" id="vendor_details_act" value="">
										<input type="hidden" name="vendor_details_id" id="vendor_details_id" value="">
										<input type="hidden" name="vendor_details_vendor_id" id="vendor_details_vendor_id" value="">
										<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
											<div class="row">
												<div class="col-lg-5">
													<div class="form-group">
														<label for="vendor_details_name">Name Apps</label>
															<input class="form-control" type="text" name="vendor_details_name" id="vendor_details_name" value="" data-validation="[NOTEMPTY]" placeholder="Apps Name">
													</div>
												</div>
												<div class="col-lg-7">
													<div class="form-group">
														<label for="vendor_details_description">Description</label>
															<input class="form-control" type="text" name="vendor_details_description" id="vendor_details_description" value="" data-validation="[NOTEMPTY]" placeholder="Apps Description">
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label for="status">Status</label>
															<select class="form-control select2"
																		data-validation="[NOTEMPTY]"
																		id="vendor_details_status" 
																		name="vendor_details_status">
																	<option value="">Choose</option>    
																	{list_status}
															</select>
													</div>
												 </div>
												<div class="col-lg-7">
													<div class="form-group">
														<label for="vendor_details_app_url">APP URL</label>
															<input class="form-control" type="text" name="vendor_details_app_url" id="vendor_details_app_url" value="" data-validation="[NOTEMPTY]" placeholder="URL">
													</div>
												</div>
											</div>
										<div class="form-actions">
											<div class="form-group">
												<div class="col-md-12">
													<button type="submit" class="btn btn-primary btn-md">Save</button>
												</div>
											</div>
										</div>
									</form>
									<!-- End Horizontal Form -->
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="mb-5">
                        <table class="table table-hover nowrap" id="data-table-2" width="100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Url</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="list_queue_data" >
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-size-large" id="modal_detail_pic" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">List Vendor PIC  (<span id="pic_id"></span>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
					<div class="accordion accordion-margin-bottom" id="accordionPIC">
						<div class="card">
                            <div class="card-header collapsed" role="tab" id="headingPIC" data-toggle="collapse" data-parent="#accordionPIC" data-target="#collapseVendorPIC" aria-expanded="false" aria-controls="collapseVendorPIC">
                                <div class="card-title">
                                    <span class="accordion-indicator pull-right">
                                        <i class="plus fa fa-plus"></i>
                                        <i class="minus fa fa-minus"></i>
                                    </span>
                                    <a>
                                        Form PIC <span id="pic_title" style="color:red;"></span>
                                    </a>
                                </div>
                            </div>
                            <div id="collapseVendorPIC" class="card-collapse collapse" role="tabcard" aria-labelledby="headingPIC">
                                <div class="card-block">
                                    <!-- Horizontal Form -->
									<form id="form-vendor-pic" name="form-vendor-pic" method="POST">
										<input type="hidden" name="vendor_pic_act" id="vendor_pic_act" value="">
										<input type="hidden" name="vendor_pic_id" id="vendor_pic_id" value="">
										<input type="hidden" name="vendor_pic_vendor_id" id="vendor_pic_vendor_id" value="">
										<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> 
											<div class="row">
												<div class="col-lg-7">
													<div class="form-group">
														<label for="vendor_pic_name">Name</label>
															<input class="form-control" type="text" name="vendor_pic_name" id="vendor_pic_name" value="" data-validation="[NOTEMPTY]" placeholder="PIC Name">
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label for="vendor_pic_position">Position</label>
															<input class="form-control" type="text" name="vendor_pic_position" id="vendor_pic_position" value="" data-validation="[NOTEMPTY]" placeholder="Position">
													</div>
												</div>
												<div class="col-lg-7">
													<div class="form-group">
														<label for="vendor_pic_email">Email</label>
															<input class="form-control" type="text" name="vendor_pic_email" id="vendor_pic_email" value="" data-validation="[NOTEMPTY]" placeholder="Email">
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label for="vendor_pic_handphone_no">Handphone</label>
															<input class="form-control" type="text" name="vendor_pic_handphone_no" id="vendor_pic_handphone_no" value="" data-validation="[NOTEMPTY]" placeholder="Handphone">
													</div>
												</div>
												<div class="col-lg-5">
													<div class="form-group">
														<label for="status">Status</label>
															<select class="form-control select2"
																		data-validation="[NOTEMPTY]"
																		id="vendor_pic_status" 
																		name="vendor_pic_status">
																	<option value="">Choose</option>    
																	{list_status}
															</select>
													</div>
												 </div>
												
											</div>
										<div class="form-actions">
											<div class="form-group">
												<div class="col-md-12">
													<button type="submit" class="btn btn-primary btn-md">Save</button>
												</div>
											</div>
										</div>
									</form>
									<!-- End Horizontal Form -->
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="mb-5">
                        <table class="table table-hover nowrap" id="data-table-3" width="100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Handphone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="list_queue_data" >
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END: tables/datatables -->
<!-- START: page scripts -->
<script>
    $(function(){
     var baseUrl = '{base_url}';
	 var vendor_id = '';

     var table =   
     $('#data-table').DataTable({
            processing: true,
            destroy:true,
            serverSide: true,
            responsive: true,
            autoFill: true,
            autoWidth:false,
            colReorder: true,
            keys: true,
            rowReorder: true,
            columnDefs: [
                { "width": "10%", "targets": 0 },
                { className: "text-center col-with-icon", "targets": [ 7 ] },
                { className: "text-center col-with-icon", "targets": [ 8 ] },
            ],
            columns: [
                { "name": "no" },
                { "name": "vendor_name" },
                { "name": "vendor_nickname" },
                { "name": "address" },
                { "name": "phone" },
                { "name": "fax_no" },
                { "name": "email_support" }
            ],
            ajax: {
                url: baseUrl+"/json_list",
                type:'POST',
            },
            bStateSave: true,
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('offersDataTables', JSON.stringify(oData));
            },
            "fnStateLoad": function (oSettings) {
                return JSON.parse(localStorage.getItem('offersDataTables'));
            }
        });

   // 

    del = function (id){   
   
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, remove it",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {

                $.ajax({
                    url: baseUrl+"/del_item",
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id},
                })
                .done(function() {
                    swal({
                        title: "Deleted!",
                        text: "Your item has been deleted.",
                        type: "success",
                        confirmButtonClass: "btn-success"
                    });
                })
                .fail(function() {
                    swal({
                        title: "Error",
                        text: "Your item is safe :). Fail deleted item",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                })
                .always(function() {
                    table.ajax.reload();
                });
                          
            } else {
                swal({
                    title: "Cancelled",
                    text: "Your item is safe :)",
                    type: "error",
                    confirmButtonClass: "btn-danger"
                });
            }
        });
    }

    });

    function change_status(id){

        var baseUrl = '{base_url}';  
        
        if ($("#"+id+"").is(':checked')) {
            var dataStatus = 'Aktif';
        }else{
            var dataStatus = 'Tidak Aktif';
        }

        $.ajax({
            url: baseUrl+"/change_status",
            type: 'POST',
            dataType: 'json',
            data: {id: id , status:dataStatus },
        })
        .done(function(data) {
            if(data.status='success'){
                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                
            }else{
               toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
            }
            
        })
        .fail(function(data) {
            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
        });
        
    }

    function detail_apps(id,name){
		clear_form_details();
		collapse_form_details();
        $('#modal_detail_apps').modal('toggle');
        $("#detail_id").html(name);
		vendor_id = id;
		reload_grid_details();		
    }
	
	function reload_grid_details(){
		var baseUrl = '{base_url}';  
		 $('#data-table-2').DataTable({
			processing: true,
			destroy:true,
			serverSide: true,
			responsive: true,
			autoFill: true,
			autoWidth: false,
			colReorder: true,
			keys: true,
			rowReorder: true,
			columnDefs: [
				{ className: "text-center col-with-icon", "targets": [ 4 ] },
				{ className: "text-center col-with-icon", "targets": [ 5 ] }
			],
				columns: [
				{ "name": "no" },
				{ "name": "name" },
				{ "name": "app_url" },
				{ "name": "description" },
			],
			ajax: {
				url: baseUrl+"/json_list_apps/"+vendor_id,
				type:'POST',
			},
			"language":{
				"lengthMenu": "Show _MENU_ entries - <a class='btn btn-sm btn-success' onClick='addDetails();'>Add Apps</a>"
			}
		});
	}
	
	function collapse_form_details(){
		if ($("#headingDetails").attr('aria-expanded') == "true"){
			$("#headingDetails").attr('data-toggle', 'collapse');
			$("#headingDetails").click();
		}
	}
	function expand_form_details(){
		if ($("#headingDetails").attr('aria-expanded') == "false"){
			$("#headingDetails").attr('data-toggle', 'collapse');
			$("#headingDetails").click();
		}
	}	
	function clear_form_details(){
		$("#detail_title").html("");
		$("#vendor_details_act").val("");
		$("#vendor_details_id").val("");
		$("#vendor_details_name").val("");
		$("#vendor_details_description").val("");
		$("#vendor_details_app_url").val("");
		$("#vendor_details_status").val("");
	}
	
	function addDetails(){
		clear_form_details();
		expand_form_details();
		$("#detail_title").html("[NEW RECORD]");
		$("#vendor_details_name").focus();
		$("#vendor_details_vendor_id").val(vendor_id);
	}
	
	function updDetails(idDetails){
		var baseUrl = '{base_url}';
        
        $.ajax({
            url: baseUrl+"/json_detail_apps/"+idDetails,
            type: 'POST',
            dataType: 'json',
            //data: {id: id , status:dataStatus },
			beforeSend: function(){
				NProgress.start();
			}
        })
        .done(function(res) {
            //console.log(res);
			if(res.status == 'success'){
				$("#detail_title").html("("+res.data.name+")");
				$("#vendor_details_act").val("Edit");
				$("#vendor_details_id").val(res.data.id);
				$("#vendor_details_vendor_id").val(vendor_id);
				$("#vendor_details_name").val(res.data.name);
				$("#vendor_details_description").val(res.data.description);
				$("#vendor_details_app_url").val(res.data.app_url);
				$("#vendor_details_status").val(res.data.status);
				expand_form_details();
				$("#vendor_details_name").focus();
			}
			NProgress.done();
        })
        .fail(function(data) {
            console.log(data);
			NProgress.done();
        });
    };
	
	$(function(){
        $('#form-vendor-details').validate({
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
						$.ajax({
                            url: '{base_url}/forms_details_submit',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#form-vendor-details').serialize(),
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status=="success"){
                                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                                reload_grid_details();
								collapse_form_details();
								clear_form_details();
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
                        toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                    }

                }
            },
            debug: true
        });
    });
	
	function change_status_detail(id){

        var baseUrl = '{base_url}';
        
        if ($("#detail_"+id+"").is(':checked')) {
            var dataStatus = 'Aktif';
        }else{
            var dataStatus = 'Tidak Aktif';
        }

        $.ajax({
            url: baseUrl+"/change_status_detail",
            type: 'POST',
            dataType: 'json',
            data: {id: id , status:dataStatus },
			beforeSend: function(){
				NProgress.start();
			}
        })
        .done(function(data) {
            if(data.status='success'){
				NProgress.done();
                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                collapse_form_details();
				clear_form_details();
            }else{
				NProgress.done();
				toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
            }
            
        })
        .fail(function(data) {
			NProgress.done();
            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
        });
        
    }
	
	function delDetails(id){   
   
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, remove it",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
			var baseUrl = '{base_url}';
            if (isConfirm) {

                $.ajax({
                    url: baseUrl+"/del_item_detail",
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id},
					beforeSend: function(){
						NProgress.start();
					}
                })
                .done(function() {
					NProgress.done();
                    swal({
                        title: "Deleted!",
                        text: "Your item has been deleted.",
                        type: "success",
                        confirmButtonClass: "btn-success"
                    });
                })
                .fail(function() {
					NProgress.done();
                    swal({
                        title: "Error",
                        text: "Your item is safe :). Fail deleted item",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                })
                .always(function() {
					clear_form_details();
					collapse_form_details();
                    reload_grid_details();
                });
                          
            } else {
				NProgress.done();
                swal({
                    title: "Cancelled",
                    text: "Your item is safe :)",
                    type: "error",
                    confirmButtonClass: "btn-danger"
                });
            }
        });
    }
	
	function detail_pic(id,name){
		clear_form_pic();
		collapse_form_pic();
        $('#modal_detail_pic').modal('toggle');
        $("#pic_id").html(name);
		vendor_id = id;
		reload_grid_pic();		
    }
	
	function reload_grid_pic(){
		var baseUrl = '{base_url}';  
		 $('#data-table-3').DataTable({
			processing: true,
			destroy:true,
			serverSide: true,
			responsive: true,
			autoFill: true,
			autoWidth: false,
			colReorder: true,
			keys: true,
			rowReorder: true,
			columnDefs: [
				{ className: "text-center col-with-icon", "targets": [ 5 ] },
				{ className: "text-center col-with-icon", "targets": [ 6 ] }
			],
				columns: [
				{ "name": "no" },
				{ "name": "name" },
				{ "name": "position" },
				{ "name": "email" },
				{ "name": "handphone_no" },
			],
			ajax: {
				url: baseUrl+"/json_list_pic/"+vendor_id,
				type:'POST',
			},
			"language":{
				"lengthMenu": "Show _MENU_ entries - <a class='btn btn-sm btn-success' onClick='addPIC();'>Add PIC</a>"
			}
		});
	}
	
	function collapse_form_pic(){
		if ($("#headingPIC").attr('aria-expanded') == "true"){
			$("#headingPIC").attr('data-toggle', 'collapse');
			$("#headingPIC").click();
		}
	}
	function expand_form_pic(){
		if ($("#headingPIC").attr('aria-expanded') == "false"){
			$("#headingPIC").attr('data-toggle', 'collapse');
			$("#headingPIC").click();
		}
	}	
	function clear_form_pic(){
		$("#pic_title").html("");
		$("#vendor_pic_act").val("");
		$("#vendor_pic_id").val("");
		$("#vendor_pic_name").val("");
		$("#vendor_pic_position").val("");
		$("#vendor_pic_email").val("");
		$("#vendor_pic_handphone_no").val("");
		$("#vendor_pic_status").val("");
	}
	
	function addPIC(){
		clear_form_pic();
		expand_form_pic();
		$("#pic_title").html("[NEW RECORD]");
		$("#vendor_pic_name").focus();
		$("#vendor_pic_vendor_id").val(vendor_id);
	}
	
	function updPIC(idPIC){
		var baseUrl = '{base_url}';
        
        $.ajax({
            url: baseUrl+"/json_detail_pic/"+idPIC,
            type: 'POST',
            dataType: 'json',
            //data: {id: id , status:dataStatus },
			beforeSend: function(){
				NProgress.start();
			}
        })
        .done(function(res) {
            //console.log(res);
			if(res.status == 'success'){
				$("#pic_title").html("("+res.data.name+")");
				$("#vendor_pic_act").val("Edit");
				$("#vendor_pic_id").val(res.data.pic_id);
				$("#vendor_pic_vendor_id").val(vendor_id);
				$("#vendor_pic_name").val(res.data.name);
				$("#vendor_pic_position").val(res.data.position);
				$("#vendor_pic_email").val(res.data.email);
				$("#vendor_pic_handphone_no").val(res.data.handphone_no);
				$("#vendor_pic_status").val(res.data.status);
				expand_form_pic();
				$("#vendor_pic_name").focus();
			}
			NProgress.done();
        })
        .fail(function(data) {
            console.log(data);
			NProgress.done();
        });
    };
	
	$(function(){
        $('#form-vendor-pic').validate({
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
						$.ajax({
                            url: '{base_url}/forms_pic_submit',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#form-vendor-pic').serialize(),
                        })
                        .done(function(data) {
                            NProgress.done();
                            if(data.status=="success"){
                                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                                reload_grid_pic();
								collapse_form_pic();
								clear_form_pic();
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
                        toastr.warning('Fail', 'Please Check your input...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                    }

                }
            },
            debug: true
        });
    });
	
	function change_status_pic(id){

        var baseUrl = '{base_url}';
        
        if ($("#detail_"+id+"").is(':checked')) {
            var dataStatus = 'Aktif';
        }else{
            var dataStatus = 'Tidak Aktif';
        }

        $.ajax({
            url: baseUrl+"/change_status_pic",
            type: 'POST',
            dataType: 'json',
            data: {id: id , status:dataStatus },
			beforeSend: function(){
				NProgress.start();
			}
        })
        .done(function(data) {
            if(data.status='success'){
				NProgress.done();
                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                collapse_form_pic();
				clear_form_pic();
            }else{
				NProgress.done();
				toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
            }
            
        })
        .fail(function(data) {
			NProgress.done();
            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
        });
        
    }
	
	function delPIC(id){   
   
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, remove it",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm) {
			var baseUrl = '{base_url}';
            if (isConfirm) {

                $.ajax({
                    url: baseUrl+"/del_item_pic",
                    type: 'POST',
                    dataType: 'json',
                    data: {id: id},
					beforeSend: function(){
						NProgress.start();
					}
                })
                .done(function() {
					NProgress.done();
                    swal({
                        title: "Deleted!",
                        text: "Your item has been deleted.",
                        type: "success",
                        confirmButtonClass: "btn-success"
                    });
                })
                .fail(function() {
					NProgress.done();
                    swal({
                        title: "Error",
                        text: "Your item is safe :). Fail deleted item",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                })
                .always(function() {
					clear_form_pic();
					collapse_form_pic();
                    reload_grid_pic();
                });
                          
            } else {
				NProgress.done();
                swal({
                    title: "Cancelled",
                    text: "Your item is safe :)",
                    type: "error",
                    confirmButtonClass: "btn-danger"
                });
            }
        });
    }
</script>
<!-- END: page scripts -->