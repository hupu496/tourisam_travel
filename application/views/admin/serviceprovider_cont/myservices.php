<section class="content">
      <div class="container-fluid">
     <?php echo form_open_multipart('admin/serviceprovider_cont/myservices_update'); ?>
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Shop Details</h3>
                    </div>
                    <div class="card-body">
                        
                    <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Shop Name <span class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('name' => 'name', 'class' => 'form-control', 'id' => 'name', 'value'=>$oneshop['name'] , 'placeholder' => 'Enter Shop Name')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Mobile No. <span class="text-danger">*</span></label>
                            <div class="col-md-10">
                                <!-- <?php echo form_input(array('name' => 'mobile', 'id' => 'mobile', 'class' => 'form-control', 'required' => 'true','value'=>$oneshop['mobile'], 'placeholder' => 'Enter Mobile No.')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email Address <span class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'email', 'name' => 'email', 'id' => 'email', 'class' => 'form-control','value'=>$oneshop['email'], 'required' => 'true', 'placeholder' => 'Enter Email Id')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">GSTIN <span class="text-muted">(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'gst_no', 'id' => 'gst_no', 'class' => 'form-control','value'=>$oneshop['gst_no'], 'placeholder' => 'Enter GSTIN')); ?> -->
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Registration Number <span class="text-muted">(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'registration_no', 'id' => 'registration_no', 'class' => 'form-control','value'=>$oneshop['registration_no'], 'placeholder' => 'Enter Registration No.')); ?> -->
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Licence Number <span class="text-muted">(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'licence_no', 'id' => 'licence_no', 'class' => 'form-control','value'=>$oneshop['licence_no'], 'placeholder' => 'Enter Licence No.')); ?> -->
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">CIN <span class="text-muted">(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'cin_no', 'id' => 'cin_no', 'class' => 'form-control','value'=>$oneshop['cin_no'], 'placeholder' => 'Enter Corporate Identification Number')); ?> -->
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Aadhar Card No. <span>(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'aadhar_card', 'id' => 'aadhar_card', 'class' => 'form-control', 'value'=>$oneshop['aadhar_card'], 'placeholder' => 'Enter Aadhar Card Number')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Pan Card No. <span>(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'pan_card', 'id' => 'pan_card', 'class' => 'form-control', 'value'=>$oneshop['pan_card'], 'placeholder' => 'Enter Pan Card Number')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Whatsapp No. <span>(optional)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('type' => 'text', 'name' => 'whatsapp_no', 'id' => 'whatsapp_no', 'class' => 'form-control', 'value'=>$oneshop['whatsapp_no'], 'placeholder' => 'Enter Whatsapp Number')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Shop Username <span class="text-danger">* (in small letters, username to login to it's dashboard)</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('name' => 'username', 'id' => 'username', 'class' => 'form-control', 'value'=>$oneshop['username'], 'required' => 'true', 'placeholder' => 'Username')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Shop Password <span class="text-danger">* (in small letters, password to login to it's dashboard)</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('name' => 'password', 'id' => 'password', 'class' => 'form-control', 'value'=>$oneshop['password'], 'required' => 'true', 'placeholder' => 'Password')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Shop Address <span class='text-danger'>*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_textarea(array('type' => 'text', 'name' => 'shop_address', 'id' => 'shop_address', 'class' => 'form-control', 'rows' => '2', 'placeholder' => 'Enter Shop Address', 'value'=>$oneshop['shop_address'], 'required' => 'true')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Pincode<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_input(array('name' => 'pincode', 'maxlength' => '6', 'id' => 'pincode', 'class' => 'form-control', 'value'=>$oneshop['pincode'], 'placeholder' => 'Enter Pincode', 'required' => 'true')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">State<span class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                            <!-- <?php echo form_dropdown(array('name' => 'state_id', 'id' => 'state_id', 'class' => 'form-control', 'required' => 'true'), $state_option,$oneshop['state_id']); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">District<span class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                            <!-- <?php echo form_dropdown(array('name' => 'district_id', 'id' => 'district_id', 'class' => 'form-control', 'required' => 'true'),$distirct_option,$oneshop['district_id']); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Post Office<span class="text-danger">*</span> </label>
                            <div class="col-sm-12 col-md-10">
                                <!-- <?php echo form_dropdown(array('name' => 'postoffice_id', 'id' => 'postoffice_id', 'class' => 'form-control', 'required' => 'true'),$postoffice_option,$oneshop['postoffice_id']); ?> -->
                            </div>
                        </div>
                        
                        <!-- <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Payment Option<span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-10 mt-2">
                            <input type="radio" name="pay_mth" <?php if($oneshop['pay_mth']=='0'){echo "checked";} ?>  value='0' required>C.O.D&nbsp;&nbsp;
                            <input type="radio" name="pay_mth" <?php if($oneshop['pay_mth']=='1'){echo "checked";} ?>   value='1' required>Online&nbsp;&nbsp;
                            <input type="radio" name="pay_mth" <?php if($oneshop['pay_mth']=='2'){echo "checked";} ?>  value='2' required>Both&nbsp;&nbsp;
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bank Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Bank<span class='text-danger'>*</span></label>
                            <div class="col-sm-12 col-md-9">
                            <!-- <?php echo form_dropdown(array('name' => 'bank_id', 'id' => 'bank_id', 'class' => 'form-control', 'required' => 'true'), $bank_option,$oneshop['bank_id']); ?> -->
                        </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Branch<span class='text-danger'>*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <!-- <?php echo form_input(array('name' => 'branch', 'maxlength' => '25', 'id' => 'branch', 'class' => 'form-control', 'value'=>$oneshop['branch'], 'placeholder' => 'Enter Branch', 'required' => 'true')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">IFSC Code<span class='text-danger'>*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <!-- <?php echo form_input(array('name' => 'ifsc','maxlength' => '11', 'id' => 'ifsc', 'class' => 'form-control', 'value'=>$oneshop['ifsc'] ,'placeholder' => 'Enter IFSC Code', 'required' => 'true')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Bank Account No. <span class='text-danger'>*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <!-- <?php echo form_input(array('name' => 'acc_no', 'maxlength' => '16', 'id' => 'acc_no', 'class' => 'form-control', 'value'=>$oneshop['acc_no'], 'placeholder' => 'Enter Bank Account No.', 'required' => 'true')); ?> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Account Holder Name<span class='text-danger'>*</span></label>
                            <div class="col-sm-12 col-md-9">
                                <!-- <?php echo form_input(array('name' => 'acc_name', 'id' => 'acc_name', 'class' => 'form-control', 'value'=>$oneshop['acc_name'],'placeholder' => 'Enter Account Holder Name', 'required' => 'true')); ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-sm-2 col-md-6">
                    <<!-- ?php        
                        echo form_hidden('editid',$oneshop['id']);                                                                                 
                        echo form_submit('addshop', 'Update Shop', array('class'=>'btn btn-success btn-sm form-control','id'=>'submit-btn')); 
                    ?> -->
                        <button type="button" class="btn btn-danger btn-sm cancel-edit hidden">Cancel</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
        </div>
    </section>    
<!-- <script>
	$(document).ready(function(e) {
            var pincode = $(this).val();
            if(pincode!=''){
            $.ajax({
                url: "<?php echo base_url('admin/shop/ajax_pincodedata'); ?>",
                method: "POST",
                async: false,
                data: {
                    pincode: pincode
                },
                dataType: "json",
                success: function(data) {   
                    console.log(data);            
                    $('#state_id').val(data.single.state_id);
                    $('#state_id').trigger('change');
                    $('#district_id').val(data.single.district_id);
                    $('#postoffice_id').html(data.postoffice);
                }
            })
        }
        $('body').on('keyup', '#pincode', function() {
            var pincode = $(this).val();
            if(pincode.length==6){
            $.ajax({
                url: "<?php echo base_url('admin/shop/ajax_pincodedata'); ?>",
                method: "POST",
                async: false,
                data: {
                    pincode: pincode
                },
                dataType: "json",
                success: function(data) {   
                    //console.log(data);            
                    $('#state_id').val(data.single.state_id);
                    $('#state_id').trigger('change');
                    $('#district_id').val(data.single.district_id);
                    $('#postoffice_id').html(data.postoffice);
                }
            })
        }
        });
 
            $('body').on('change', '#state_id', function() {
            var stateid = $(this).val();
            $.ajax({
                url: "<?php echo base_url('admin/masterkey/ajax_getdistrict'); ?>",
                method: "POST",
                async: false,
                data: {
                    stateid: stateid
                },
                dataType: "json",
                success: function(data) {
                    //console.log(data);                  
                    $('#district_id').html(data);
                }
            })
        });
 
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "no-sort",
				orderable: false,
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search"
			},
		});		

    });
</script> -->