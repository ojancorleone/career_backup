<nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
    <span class="cat__core__title d-block mb-2">
        <span class="text-muted">Administration ·</span>
        <strong>Mail Account</strong>
    </span>
</nav>
<!-- START: tables/datatables -->
<section class="card">
    <div class="card-header">
        <span class="cat__core__title">
            <strong> Mail Account </strong>
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
                            <th>Mail Name</th>
                            <th>Email</th>
                            <th>Protocol</th>
                            <th>SMTP Host</th>
                            <th>SMTP Port</th>
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
                { "name": "mail_name" },
                { "name": "email" },
                { "name": "protocol" },
                { "name": "smtp_host" },
                { "name": "smtp_port" }
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
            var dataStatus = '1';
        }else{
            var dataStatus = '0';
        }

        $.ajax({
            url: baseUrl+"/change_status",
            type: 'POST',
            dataType: 'json',
            data: {id: id , status:dataStatus },
        })
        .done(function(data) {
            if(data.status='success'){
                $.notify({
                title: '<strong>Success!</strong>',
                message: data.reason
                },{
                    type: 'primary'
                });
            }else{
                $.notify({
                title: '<strong>Fail!</strong>',
                message: data.reason
                },{
                    type: 'danger'
                });
            }
            
        })
        .fail(function(data) {
            $.notify({
                title: '<strong>Error!</strong>',
                message: data.reason
            },{
                type: 'danger'
            });
        });
        
    }

   
  
    
</script>
<!-- END: page scripts -->