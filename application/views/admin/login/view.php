<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('user/frachise_order_add') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD ORDER </button>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th>Booking Date</th>
                                 <th>Name</th>
                                 <th>Mobile</th>
                                 <th>Service</th>
								                 <th>From-To</th>
								                 <th>Price</th>
								                 <th>Description</th>
                                
                                 <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($list)){ $i=0;
								foreach($list as $slist){ $i++; 

                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $slist['name']; ?></td>
                             
                                <td ><?php echo $slist['mobile']; ?></td>
								<td ><?php echo $slist['service'].'('.$slist['subservice'].')'; ?></td>
								<td ><?php echo date('Y-m-d',strtotime($slist['from_date'])).'-'.date('Y-m-d',strtotime($slist['to_date'])); ?></td>
								<td ><?php echo $slist['price']; ?></td>
								<td ><?php echo $slist['price']; ?></td>
								<td ><?php echo $slist['description']; ?></td>
								
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
			// alert(id);
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/serviceprovider_cont/delete_serviceprovider'); ?>",
					method:"POST",
					data:{id:id},
					success:function(data){
						// console.log(data);
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
