<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <!-- <a href="<?php echo base_url('admin/serviceprovider_cont') ;?>">
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
                                 <th>Refer Id </th>
								 <th>Shop name</th>
								 <th>Shop Email</th>
								 <th>Shop Mobile</th>
								 <th>GST</th>
								 <th>Username</th>
								 <th>password</th>
								 <th>Registrator Number</th>
								 <th>Trade License</th>
								 <th>Aadhaar Card</th>
								 <th>Pancard Card</th>
								 <th>Whatsup</th>
								 <th>Serivce Description</th>
								 <th>Upload Camera Image</th>
								 <th>Upload image Jpg</th>
								 <th>Upload Pdf</th>
								 <th>Address</th>
								 <th>City</th>
								 <th>State</th>
								 <th>Pincode</th>
								 <th>Bankname</th>
								 <th>Account Number</th>
								 <th>IFSC</th>
								 <th>Account Type</th>
								 <th>Categories</th>
                                <th>Added on</th>
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
                                <td ><?php echo $slist['email']; ?></td>
                                <td ><?php echo $slist['mobile']; ?></td>
								<td ><?php echo $slist['refer_id']; ?></td>
								<td ><?php echo $slist['shop_name']; ?></td>
								<td ><?php echo $slist['service_email']; ?></td>
								<td ><?php echo $slist['service_mobile']; ?></td>
								<td ><?php echo $slist['gst']; ?></td>
								<td ><?php echo $slist['username']; ?></td>
								<td ><?php echo $slist['password']; ?></td>
								<td ><?php echo $slist['registration_number']; ?></td>
								<td ><?php echo $slist['trade_license']; ?></td>
								<td ><?php echo $slist['aadhaar_card']; ?></td>
								<td ><?php echo $slist['pancard']; ?></td>
								<td ><?php echo $slist['whatsapp']; ?></td>
								<td ><?php echo $slist['service_description']; ?></td>
								
								<td ><img src="<?php echo file_url($slist['upload_camera']);?>" width="100" height="60"></td>
								<td ><img src="<?php echo file_url($slist['upload_image']);?>" width="100" height="60"></td>
								<td ><a href="<?php echo file_url($slist['upload_pdf']);?>" width="100" height="60"><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a></td>
								<td ><?php echo $slist['address']; ?></td>
								<td ><?php echo $slist['city']; ?></td>
								<td ><?php echo $slist['state']; ?></td>
								<td ><?php echo $slist['pincode']; ?></td>
								<td ><?php echo $slist['bankname']; ?></td>
								<td ><?php echo $slist['accountno']; ?></td>
								<td ><?php echo $slist['IFSC']; ?></td>
                                <td ><?php echo $slist['account_type'];?></td>
                                <td ><?php echo $slist['categories'];?></td>
                                 <td ><?php echo $slist['added_on'];?></td>
                                <td>
                                    <button  class="btn btn-sm btn-warning unblock" data-value="<?php echo $slist['id'] ;?>"><i class="fa fa-trash"></i> Unblock </button>
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
			// alert(id);
			var prompt = confirm("Are you Sure you want to unblock?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/serviceprovider_cont/unblock_serviceprovider'); ?>",
					method:"POST",
					data:{id:id},
					success:function(data){
						// console.log(data);
						if(data == 1){
							 swal("unblockd !", "You clicked the button!", "success");
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