<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <!-- <a href="<?php echo base_url('admin/user_cont') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD STAFF </button>
                        </a> -->
                    </div>
                </div>
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th>Name</th>
								<th>Email </th>
                                 <th>Mobile</th>
                                 <th>Address </th>
								<th>City </th>
								<th>State </th>
								<th>Pincode </th>
								<th>Username </th>
								<th>password</th>
								<th>Bankname </th>
								<th>Accountno </th>
                                <th>IFSC</th>
                                <th>account_type</th>
								 <th>Added On</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($user_list)){ $i=0;
								foreach($user_list as $slist){ $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $slist['name']; ?></td>
                                <td ><?php echo $slist['email']; ?></td>
                                <td ><?php echo $slist['mobile']; ?></td>
								<td ><?php echo $slist['address']; ?></td>
								<td ><?php echo $slist['city']; ?></td>
								<td ><?php echo $slist['state']; ?></td>
								<td ><?php echo $slist['pincode']; ?></td>
								<td ><?php echo $slist['username']; ?></td>
								<td ><?php echo $slist['password']; ?></td>
								<td ><?php echo $slist['bankname']; ?></td>
								<td ><?php echo $slist['accountno']; ?></td>
								<td ><?php echo $slist['IFSC']; ?></td>
								<td ><?php echo $slist['account_type']; ?></td>
								<td ><?php echo $slist['added_on']; ?></td>
                                <td>
                                   
                                    <button class="btn btn-sm btn-warning unblock" data-value="<?php echo $slist['id'] ;?>"><i class="fa fa-trash"></i> Unblock </button>
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
		 
		$('body').one('click','.unblock',function(){
			var id = $(this).data('value');
			var prompt = confirm("Are you Sure you want to unblock?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/user_cont/unblock_user')?>",
					method:"POST",
					data:{id:id},
					success:function(data){
						if(data == 1){
							 swal("Unblock !", "You clicked the button!", "success");
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