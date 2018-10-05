<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Request Job Vacancy</span>
        <!-- <strong>Company</strong> -->
    </span>
</nav>
<!-- START: tables/datatables -->
<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong> List Request</strong>
            <a href='main#{page_content}/form_job_request/{add_form}' id=$id class='btn btn-outline-primary mr-2 mb-2 pull-right' data-toggle='tooltip' title='Add' aria-expanded='false'>
                <i class='icmn-plus'></i>&nbsp;Create Job Request
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
                            <th>Request Code</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Approval Status</th>
                            <th>Create Date</th>
                            <th style="width:100px;text-align:center">Action</th>
                        </tr>
                        </thead>
                        <tbody id="list_queue_data" >
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
           <small><i>** Verified Job Request will be automatically moved from the request list to <b>Monitoring Job Vacancy</b></i></small>
        </div>
    </div>
</section>
<!-- END: tables/datatables -->
<!-- START: page scripts -->
<script>
    $(function(){
     var baseUrl = '{base_url}';  

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
                { className: "text-center col-with-icon", "targets": [ 6 ] },
                { className: "text-center col-with-icon", "targets": [ 7 ] },
            ],
            columns: [
                { "name": "no" },
                { "name": "request_code" },
                { "name": "company_name" },
                { "name": "vacancy_name" },
                { "name": "request_code" },
                { "name": "user_pic" }
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
 
    
</script>
<!-- END: page scripts -->