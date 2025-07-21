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
                 <th>Service Description</th>
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
								<td ><a href="<?php echo file_url($slist['upload_pdf']);?>" width="100" height="60">
									<i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i></a></td>
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
                                <a  href='<?php echo base_url("admin/serviceprovider_cont/serviceprovider_edit/$slist[id]") ;?>' class="btn btn-sm btn-success" ><i class="fa fa-edit"></i> Edit </a>
                                    <button  class="btn btn-sm btn-danger delete" data-value="<?php echo $slist['id'] ;?>"><i class="fa fa-trash"></i> Block </button>
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


 <!--modal-->
 <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Services Provider Edit</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url('admin/serviceprovider_cont/serviceprovider_edit') ;?>" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="row">
         
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Name Edit</label>
         <input type="text" name="name" id="name" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Email Edit</label>
         <input type="text" name="email" id="email" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Mobile Edit</label>
         <input type="text" name="mobile" id="mobile" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Refer Id Edit</label>
         <input type="text" name="refer_id" id="refer_id" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Shop Name Edit</label>
         <input type="text" name="shop_name" id="shop_name" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Service Email Edit</label>
         <input type="text" name="service_email" id="service_email" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Service Mobile Edit</label>
         <input type="text" name="service_mobile" id="service_mobile" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Gst Edit</label>
         <input type="text" name="gst" id="gst" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Username Edit</label>
         <input type="text" name="username" id="username" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Password Edit</label>
         <input type="text" name="password" id="password" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Registration Number Edit</label>
         <input type="text" name="registration_number" id="registration_number" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Trade License Edit</label>
         <input type="text" name="trade_license" id="trade_license" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Aadhaar Card Edit</label>
         <input type="text" name="aadhaar_card" id="aadhaar_card" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Pancard Edit</label>
         <input type="text" name="pancard" id="pancard" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Whatsapp Edit</label>
         <input type="text" name="whatsapp" id="whatsapp" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Address Edit</label>
         <input type="text" name="address" id="address" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>City Edit</label>
         <input type="text" name="city" id="city" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>State Edit</label>
         <input type="text" name="state" id="state" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Pincode Edit</label>
         <input type="text" name="pincode" id="pincode" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Bankname Edit</label>
         <input type="text" name="bankname" id="bankname" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Accountno Edit</label>
         <input type="text" name="accountno" id="accountno" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Account Type Edit</label>
         <input type="text" name="account_type" id="account_type" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
         <label>Categories Edit</label>
		  <select name="categories" class="form-control" style="font-size:17px;"> 
		   <option  value="">Select Category </option>
		   <option value="Electrician">Electrician</option>
		   <option value="Plumber">Plumber</option>
		   <option value="Carpenter">Carpenter</option>
		   <option value="AC & Refrigerator">AC & Refrigerator</option>
		   <option value="Washing Machine">Washing Machine</option>
		   <option value="Motor Pump">Motor Pump</option>
		   <option value="Laundry Service">Laundry Service</option>
		   <option value="Painting">Painting</option>
		   <option value="Cleaning">Cleaning</option>
		   <option value="Pest Control">Pest Control</option>
		   <option value="Renovation Work">Renovation Work</option>
		   <option value="Construction">Construction</option>
		  </select>
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
       	
         <label>Upload Camera Edit</label>
         <input type="file" name="upload_camera" id="upload_camera" class="form-control">
        
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
       	
         <label>Upload Image Edit</label>
         <input type="file" name="upload_image" id="upload_image" class="form-control">
       </div>
       <div class="col-md-12 col-lg-12 col-12 mb-2">
            <input type="hidden" name="id" id="id">
            
          <label>Upload Pdf.<span style="color:red;">*</span></label>
          <input type="file" name="upload_pdf" id="upload_pdf" class="form-control">
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
</div> -->
 <!--end modal-->
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!--  <?php if(isset($this->session->web_msg)){ ?>
        <script type="text/javascript">
           swal("Good job!", "You clicked the button!", "success");
           swal('Good job!','<?php echo $this->session->web_msg;?>','success');
        </script>
           <?php }else if(isset($this->session->web_err_msg)){ ?>
        <script type="text/javascript">
           // swal("Good job!", "You clicked the button!", "success");
           swal('Opps!','<?php echo $this->session->web_err_msg;?>','error');
        </script>
    <?php }?> -->
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
<!-- <script type="text/javascript">
   $(document).ready(function(){
      $('body').on('click','.edit',function(){
        debugger;
        $('#id').val($(this).data('id'));
        $('#name').val($(this).data('name'));
        $('#email').val($(this).data('email'));
        $('#mobile').val($(this).data('mobile'));
        $('#refer_id').val($(this).data('refer_id'));
        $('#shop_name').val($(this).data('shop_name'));
        $('#service_email').val($(this).data('service_email'));
        $('#service_mobile').val($(this).data('service_mobile'));
        $('#gst').val($(this).data('gst'));
        $('#username').val($(this).data('username'));
        $('#password').val($(this).data('password'));
        $('#registration_number').val($(this).data('registration_number'));
        $('#trade_license').val($(this).data('trade_license'));
        $('#aadhaar_card').val($(this).data('aadhaar_card'));
        $('#pancard').val($(this).data('pancard'));
        $('#whatsapp').val($(this).data('whatsapp'));
        $('#upload_camera').val($(this).data('upload_camera'));
        $('#upload_image').val($(this).data('upload_image'));
        $('#upload_pdf').val($(this).data('upload_pdf'));
        $('#address').val($(this).data('address'));
        $('#city').val($(this).data('city'));
        $('#state').val($(this).data('state'));
        $('#pincode').val($(this).data('pincode'));
        $('#bankname').val($(this).data('bankname'));
        $('#accountno').val($(this).data('accountno'));
        $('#IFSC').val($(this).data('IFSC'));
        $('#account_type').val($(this).data('account_type'));
        $('#categories').val($(this).data('categories')); 
      });
   });
 </script> -->