<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<!-- <div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('admin/staff') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Delivery Boy List </button>
                        </a>
                    </div>
                </div> -->
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th>Name</th>
                                 <th>Mobile</th>
                                 <th>Email </th>
                                 <th>Address </th>
								 <th>City</th>
								 <th>State</th>
								 <th>BankName</th>
								 <th>Account No</th>
								 <th>IFSC</th>
								  <th>Account Type</th>
								 <th>Aadhaar Front Image</th>
								  <th>Aadhaar Back Image</th>
								   <th>Profile Image</th>
								    <th>Driving Licence Image</th>
								    <th>Registration Vechicle Card</th>
                                <th> Staff Status</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($stafflist)){ $i=0;
								foreach($stafflist as $slist){ $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $slist['name']; ?></td>
                                <td ><?php echo $slist['mobileno']; ?></td>
                                <td ><?php echo $slist['email']; ?></td>
								<td ><?php echo $slist['address']; ?></td>
								<td ><?php echo $slist['city']; ?></td>
								<td ><?php echo $slist['state']; ?></td>
								<td ><?php echo $slist['bankname']; ?></td>
								<td ><?php echo $slist['accountno']; ?></td>
								<td ><?php echo $slist['IFSC']; ?></td>
								<td ><?php echo $slist['account_type']; ?></td>
								<td ><img src="<?php echo file_url($slist['upload_aadhaar_front']);?>" width="100" height="60"></td>
								<td ><img src="<?php echo file_url($slist['upload_aadhaar_back']);?>" width="100" height="60"></td>
								<td ><img src="<?php echo file_url($slist['upload_photo']);?>" width="100" height="60"></td>
								<td ><img src="<?php echo file_url($slist['upload_driving_licence']);?>" width="100" height="60"></td>
								<td ><img src="<?php echo file_url($slist['upload_vechicle_card']);?>" width="100" height="60"></td>

                                <td ><?php if($slist['approval_status']== 1){ ?>
                                      <a href="<?php echo base_url('admin/staff/unapproved_deliveryboy/'.$slist['id']);?>" class="btn btn-sm btn-success ">Approved</a>

                           <?php     }else{ ?>
                                    <a href="<?php echo base_url('admin/staff/approved_deliveryboy/'.$slist['id']);?>" class="btn btn-sm btn-danger">Unapproved</a>
                         <?php  }
                               ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/staff/update_staff/'.$slist['id']);?>" class="btn btn-sm btn-warning edit" value="<?php echo $slist['id'] ;?>"><i class="fa fa-edit"></i> Edit </a>
                                    <a href="<?php echo base_url('admin/staff/delete_deliveryboy/'.$slist['id']);?>" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i> Block </a>
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
		 
		// $('body').one('click','.delete',function(){
		// 	var dlt = $(this).attr('value');
		// 	var prompt = confirm("Are you Sure you want to delete?");
		// 	if(prompt){
		// 		//alert(dlt);
		// 		$.ajax({
		// 			url:"<?php echo base_url('admin/staff/delete_deliveryboy')?>",
		// 			method:"POST",
		// 			data:{id:id},
		// 			success:function(data){
		// 				if(data == 1){
		// 					 swal("Deleted !", "You clicked the button!", "success");
		// 				}
		// 				else{
		// 					swal("Oops!", "Something Error!", "error");
		// 				}
						
		// 			}
		// 		});
		// 	}
		// });
		
	});
</script>