<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/staff/stafflist') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>  Staff List</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/staff/update_deliverylist');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">
                                	<div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="hidden" name="id" value="<?php echo $deliveryboy['id'];?>">
                                            <input type="text" name="name" value="<?php echo $deliveryboy['name'];?>" id="name" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                      
                                      
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Mobile No</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="mobileno" value="<?php  echo $deliveryboy['mobileno']; ?>" id="fname" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                 

                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="email" value="<?php  echo $deliveryboy['email']; ?>" id="mobile" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                 

                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Address <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                              <textarea type="text" name="address" value="" id="address" placeholder="" class="form-control" ><?php  echo $deliveryboy['address']; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">City <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="city" value="<?php  echo $deliveryboy['city']; ?>" id="location" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                 
                                     
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">State<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="state" value="<?php  echo $deliveryboy['state']; ?>" id="location" placeholder="" class="form-control"/>
                                        </div>
                                        <!-- <div class="col-sm-12 col-md-8">
                                         <select name="service_type" value="" id="service_type" class="form-control" >
                                         <option value="">Select Type</option>
                                         <option value="electrician" <?php if($deliveryboy['service_type'] == 'electrician') {echo "Selected" ;}?>>Electrician</option>
                                         <option value="plumber" <?php if($deliveryboy['service_type'] == 'plumber') {echo "Selected" ;}?>>Plumber</option>
                                        <option value="carpenter" <?php if($deliveryboy['service_type'] == 'carpenter') {echo "Selected" ;}?>>Carpenter</option>
                                        <option value="ac&refrigerator" <?php if($deliveryboy['service_type'] == 'ac&refrigerator') {echo "Selected" ;}?>>AC & Refrigerator</option>
                                        <option value="washingmachine" <?php if($deliveryboy['service_type'] == 'washingmachine') {echo "Selected" ;}?>>Washing Machine</option>
                                        <option value="motorpump" <?php if($deliveryboy['service_type'] == 'motorpump') {echo "Selected" ;}?>>Motor Pump</option>
                                         <option value="laundryservice" <?php if($deliveryboy['service_type'] == 'laundryservice') {echo "Selected" ;}?>>Laundry Service</option>
                                        <option value="painting" <?php if($deliveryboy['service_type'] == 'painting') {echo "Selected" ;}?>>Painting</option>
                                        <option value="cleaning" <?php if($deliveryboy['service_type'] == 'cleaning') {echo "Selected" ;}?>>Cleaning</option>
                                         <option value="pestcontrol" <?php if($deliveryboy['service_type'] == 'pestcontrol') {echo "Selected" ;}?>>Pest Control</option>
                                        <option value="renovationWork"<?php if($deliveryboy['service_type'] == 'renovationWork') {echo "Selected" ;}?>>Renovation Work</option>
                                          <option value="construction"<?php if($deliveryboy['service_type'] == 'construction') {echo "Selected" ;}?>>Construction</option>                             
                                         </select>
                                        </div> -->
                                        </div>
                                      
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Bankname</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="state" value="<?php  echo $deliveryboy['bankname']; ?>" id="location" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Account No</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="state" value="<?php  echo $deliveryboy['accountno']; ?>" id="location" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">IFSC</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="state" value="<?php  echo $deliveryboy['IFSC']; ?>" id="location" placeholder="" class="form-control"/>
                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Account Type</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="state" value="<?php  echo $deliveryboy['account_type']; ?>" id="location" placeholder="" class="form-control"/>
                                        </div>
                                        </div>

                                        <!-- <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">deliveryboy Status <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                         <select name="deliveryboy_status" value="<?php  echo $deliveryboy['deliveryboy_status']; ?>" id="deliveryboy_status" class="form-control" >
                                         <option value="">Select Status</option>
                                         <option value="active">Active</option>
                                         <option value="busy">Busy</option>
                                         <option value="working">Working</option>
                                         <option value="leave">Leave</option>                              
                                         </select>
                                        </div>
                                        </div> -->
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Photo<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8"> 
                                            <img src="<?php echo file_url($deliveryboy['upload_photo']);?>" width="100" height="60">
                                            <input type="file" name="upload_photo" value="<?php  echo $deliveryboy['upload_photo']; ?>" id="image" placeholder="image" class="form-control" />
                                        </div>
                                    </div>    
                                     <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Aadhaar Front Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8"> 
                                            <img src="<?php echo file_url($deliveryboy['upload_aadhaar_front']);?>" width="100" height="60">
                                            <input type="file" name="upload_aadhaar_front" value="<?php  echo $deliveryboy['upload_aadhaar_front']; ?>" id="image" placeholder="image" class="form-control" />
                                        </div>
                                    </div>    
                                     <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Aadhaar Back Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8"> 
                                            <img src="<?php echo file_url($deliveryboy['upload_aadhaar_back']);?>" width="100" height="60">
                                            <input type="file" name="upload_aadhaar_back" value="<?php  echo $deliveryboy['upload_aadhaar_back']; ?>" id="image" placeholder="image" class="form-control" />
                                        </div>
                                    </div>    
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Driving licence<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8"> 
                                            <img src="<?php echo file_url($deliveryboy['upload_driving_licence']);?>" width="100" height="60">
                                            <input type="file" name="upload_driving_licence" value="<?php  echo $deliveryboy['upload_driving_licence']; ?>" id="image" placeholder="image" class="form-control" />
                                        </div>
                                    </div>  
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Vechicle Registration Card<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8"> 
                                            <img src="<?php echo file_url($deliveryboy['upload_vechicle_card']);?>" width="100" height="60">
                                            <input type="file" name="upload_vechicle_card" value="<?php  echo $deliveryboy['upload_vechicle_card']; ?>" id="image" placeholder="image" class="form-control" />
                                        </div>
                                    </div>     
                                        <br><br></br>
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit" class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
    <!-- /.content -->
    <script>
$(document).ready(function(e){	
	function showImage(src,target) {
		var fr=new FileReader();
		
		fr.onload = function(e) { target.src = this.result; };
		src.addEventListener("change",function() {
			// fill fr with image data    
			fr.readAsDataURL(src.files[0]);
		});
	}
	var src = document.getElementById("image");
	var target = document.getElementById("target");
	showImage(src,target);
});
</script> 
    