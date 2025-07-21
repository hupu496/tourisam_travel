<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      
                    </div>
                </div>
                <div class="box-body">
                  <form method="post" action="<?php echo base_url('admin/serviceprovider_cont/serviceprovider_update') ;?>" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="row">
         
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Name Edit</label>
         <input type="text" name="name" id="name" class="form-control" value="<?php echo $name; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Email Edit</label>
         <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Mobile Edit</label>
         <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $mobile; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Refer Id Edit</label>
         <input type="text" name="refer_id" id="refer_id" class="form-control" value="<?php echo $refer_id; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Shop Name Edit</label>
         <input type="text" name="shop_name" id="shop_name" class="form-control" value="<?php echo $shop_name; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Service Email Edit</label>
         <input type="text" name="service_email" id="service_email" class="form-control" value="<?php echo $service_email; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Service Mobile Edit</label>
         <input type="text" name="service_mobile" id="service_mobile" class="form-control" value="<?php echo $service_mobile; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Gst Edit</label>
         <input type="text" name="gst" id="gst" class="form-control" value="<?php echo $gst; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Username Edit</label>
         <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Password Edit</label>
         <input type="text" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Registration Number Edit</label>
         <input type="text" name="registration_number" id="registration_number" class="form-control" value="<?php echo $registration_number; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Trade License Edit</label>
         <input type="text" name="trade_license" id="trade_license" class="form-control" value="<?php echo $trade_license; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Aadhaar Card Edit</label>
         <input type="text" name="aadhaar_card" id="aadhaar_card" class="form-control" value="<?php echo $aadhaar_card; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Pancard Edit</label>
         <input type="text" name="pancard" id="pancard" class="form-control" value="<?php echo $pancard; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Whatsapp Edit</label>
         <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="<?php echo $whatsapp; ?>">
       </div>
        <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Service Description</label>
         <input type="text" name="service_description" id="service_description" class="form-control" value="<?php echo $service_description; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Address Edit</label>
         <input type="text" name="address" id="address" class="form-control" value="<?php echo $address; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>City Edit</label>
         <input type="text" name="city" id="city" class="form-control" value="<?php echo $city; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>State Edit</label>
         <input type="text" name="state" id="state" class="form-control" value="<?php echo $state; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Pincode Edit</label>
         <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $pincode; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Bankname Edit</label>
         <input type="text" name="bankname" id="bankname" class="form-control" value="<?php echo $bankname; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Accountno Edit</label>
         <input type="text" name="accountno" id="accountno" class="form-control" value="<?php echo $accountno; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Account Type Edit</label>
         <input type="text" name="account_type" id="account_type" class="form-control" value="<?php echo $account_type; ?>">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Categories Edit</label>
      <select name="categories" class="form-control" style="font-size:17px;"> 
       <option  value="" ><?php echo $categories; ?></option>
       <option value="Electrician" <?php if('categories' == 'Electrician'){ echo "selected"; } ?>>Electrician</option>
       <option value="Plumber" <?php if('categories' == 'Plumber'){ echo "selected"; } ?>>Plumber</option>
       <option value="Carpenter"<?php if('categories' == 'Carpenter'){ echo "selected"; } ?>>Carpenter</option>
       <option value="AC & Refrigerator" <?php if('categories' == 'AC & Refrigerator'){ echo "selected"; } ?>>AC & Refrigerator</option>
       <option value="Washing Machine" <?php if('categories' == 'Washing Machine'){ echo "selected"; } ?>>Washing Machine</option>
       <option value="Motor Pump" <?php if('categories' == 'Motor Pump'){ echo "selected"; } ?>>Motor Pump</option>
       <option value="Laundry Service" <?php if('categories' == 'Laundry Service'){ echo "selected"; } ?>>Laundry Service</option>
       <option value="Painting" <?php if('categories' == 'Painting'){ echo "selected"; } ?>>Painting</option>
       <option value="Cleaning" <?php if('categories' == 'Cleaning'){ echo "selected"; } ?>>Cleaning</option>
       <option value="Pest Control" <?php if('categories' == 'Pest Control'){ echo "selected"; } ?>>Pest Control</option>
       <option value="Renovation Work" <?php if('categories' == 'Renovation Work'){ echo "selected"; } ?>>Renovation Work</option>
       <option value="Construction" <?php if('categories' == 'Construction'){ echo "selected"; } ?>>Construction</option>
      </select>
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
        
         <label>Upload Camera Edit</label>
         <img src="<?php echo file_url($upload_camera); ?>" width="70px;">
         <input type="file" name="upload_camera" id="upload_camera" value="<?php echo $upload_camera; ?>" class="form-control">
        
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
        
         <label>Upload Image Edit</label>
          <img src="<?php echo file_url($upload_image); ?>" width="70px;">
         <input type="file" name="upload_image" id="upload_image"value="<?php echo $upload_image; ?>" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" >
            <a href="<?php echo file_url($upload_pdf);?>" width="100" height="60">
                  <i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a>
          <label>Upload Pdf.<span style="color:red;">*</span></label>
          <input type="file" name="upload_pdf" id="upload_pdf" value="<?php echo $upload_pdf; ?>" class="form-control">
       </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info updatedata">Update</button>
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
