<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      
                    </div>
                </div>
                <div class="box-body">
                          <form method="post" action="<?php echo base_url('admin/service/pincode_update') ;?>" enctype="multipart/form-data">
                            <div class="row form-group">
                              <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">
                                   <div class="row form-group">
                                      <label class="col-sm-12 col-md-2 col-form-label">Pincode <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="hidden" name="pid" value="<?php echo $edit_list['pid']; ?>">
                                            <input type="text" name="pincode" value="<?php echo $edit_list['pincode']; ?>" id="pincode" placeholder="pincode" class="form-control" />
                                           
                                        </div>
                                        <br><br>
                                        <label class="col-sm-12 col-md-2 col-form-label">service list <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <select name="service" class="form-control">
                                                <option value = "<?php echo $edit_list['service']; ?>"><?php echo $edit_list['service']; ?></option>
                                                <?php if(!empty($servicelist)){
                                                	
                                                    foreach ($servicelist as $key => $value) { ?>
                                                      <option value="<?php $value['name']; ?>"><?php echo $value['name']; ?></option>
                                             <?php }
                                                } ?>
                                                <option value="all">All</option>
                                                
                                            </select>
                                          </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2 text-center"> 
                                    <input type="submit"class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                          </form>
                	
                    
                </div>
            </div>
        </div>
    </div>


 <!--modal-->
 
 <!--end modal-->
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
