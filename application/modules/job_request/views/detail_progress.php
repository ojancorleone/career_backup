<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Detail Progress Job Request</span>
        <!-- <strong>Company</strong> -->
    </span>
</nav>
<!-- START: tables/datatables -->
<div class="row">
<section class="card col-lg-3">
    <div class="card-header">
        <h4>Description</h4>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
               <table class="table">
                    <tr>
                        <td>
                            <b>Job Title</b>
                        </td>
                        <td>:</td>
                        <td>
                            {vacancy_name}
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>City</b>
                        </td>
                        <td>:</td>
                        <td>
                            {city}
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Created</b>
                        </td>
                        <td>:</td>
                        <td>
                            {create_at}
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <b>Last Status</b>
                        </td>
                        <td>:</td>
                        <td>
                            <h4>
                            {if '{vacancy_status}' == 'requested' }
                                    <span class='badge badge-pill badge-warning mr-2 mb-2'>{vacancy_status}</span>
                                {else}
                                    <span class='badge badge-pill badge-danger mr-2 mb-2'>{vacancy_status}</span>
                            {/if}
                            </h4>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a onclick="goBack()" class="btn btn-block btn-default previous"><i class='icmn-undo2'></i> Back</a>&nbsp;
            </div>
            <div class="col-lg-6">
                <a href='main#{parent_page}/create_job_request' class='btn btn-block btn-outline-primary pull-right' >
                    <i class='icmn-pencil'></i>&nbsp;Edit Job Request
                </a>
            </div>
        </div>
    </div>
</section>


<!-- START: tables/datatables -->
<section class="card col-lg-9">
<div class="card-header">
       <h4>History Request</h4>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                    <table class="table table-hover nowrap" id="data-table" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Administrator Notes</th>
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
</div>
<!-- END: tables/datatables -->
<!-- START: page scripts -->
<script>
    $(function(){
     var baseUrl        = '{base_url}';  
     var parentUrl      = '{parent_url}';  
     var m_vacancy_id   = '{id}';  

    $("[data-toggle=tooltip]").tooltip();
        
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
                { "width": "10%", "targets": 0 }
            ],
            columns: [
                { "name": "no" },
                { "name": "created_at" },
                { "name": "approval_status" },
                { "name": "notes_admin" }
            ],
            ajax: {
                url: parentUrl+"/json_list_history/"+m_vacancy_id,
                type:'POST',
                data: {} 
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
        
        NProgress.start();    
        $.ajax({
            url: baseUrl+"/change_status",
            type: 'POST',
            dataType: 'json',
            data: {id: id , status:dataStatus },
        })
        .done(function(data) {
            if(data.status='success'){
                NProgress.done();    
                toastr.success(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
                
            }else{
               toastr.warning(data.success, data.reason , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
            }
            
        })
        .fail(function(data) {
            NProgress.done();    
            toastr.warning('error', 'Please check your connections...' , { "closeButton": true, "debug": false, "positionClass": "toast-top-right", "onclick": null, "showDuration": "1000", "hideDuration": "1000", "timeOut": "5000", "extendedTimeOut": "1000", "showEasing": "swing", "hideEasing": "linear", "showMethod": "fadeIn", "hideMethod": "fadeOut" });
        });
        
    }

    function goBack() {
        window.history.back();
    }

   
  
    
</script>
<!-- END: page scripts -->