<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<!-- <div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('admin/service') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD SERVICE </button>
                        </a>
                    </div>
                </div> -->
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th >Customer Name</th>
                                <th >Mobile</th>
                                <th >Address</th>
                                <th>Description</th>
                                <th>Services</th>
                                <th>pincode</th>
                                <th>Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($blockserviceprovider)){ $i=0;
								foreach($blockserviceprovider as $list){ $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $list['name']; ?></td>
                                <td ><?php echo $list['mobileno']; ?></td>
                                <td ><?php echo $list['address']; ?></td>
                                <td ><?php echo $list['description']; ?></td>
                                <td ><?php echo $list['services']; ?></td>
                                <td ><?php echo $list['pincode']; ?></td>
                                <td ><?php echo $list['added_on']; ?></td>
								
                                <td >
      <button  class="btn btn-sm btn-danger delete" data-value="<?php echo $list['id'] ;?>"><i class="fa fa-trash"></i>Delete </button>

                                </td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$(document).ready(function(e) {
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "datatable-nosort",
				orderable: false,
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search"
			},
		});
		new $.fn.dataTable.FixedHeader( table );
		 
		$('body').one('click','.delete',function(){
			var id = $(this).data('value');
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/service/permdelete_order_list')?>",
					method:"POST",
					data:{id:id},
					success:function(data){
						if(data == 1){
							 swal("Deleted !", "You clicked the button!", "success");
						}
						else{
							swal("Oops!", "Something Error!", "error");
						}
						
						
					}
				});
			}
		});
		
	});
</script>