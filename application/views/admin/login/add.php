<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('user/franchise_order_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Order List</button>
                        	</a>
                        </div>
                       
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/login/insert_franchise_custorder/');?>" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="franchise_id" value="<?php echo $fran_id; ?>">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">
                                	<div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="name" value="" id="name" placeholder="Name" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Mobile No <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="text" name="mobile" value="" id="name" placeholder="Mobile no" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">From Date <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="date" name="from_date" value="" id="name"  class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">To Date <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <input type="date" name="to_date" value="" id="name"  class="form-control" required/>
                                        </div>
                                    </div>
                                  <div class="row form-group">
    <label class="col-sm-12 col-md-2 col-form-label">Service <span class="text-danger">*</span></label>
    <div class="col-sm-12 col-md-8">
        <select class="form-control" name="service" id="serviceSelect">  
            <option value="">Select Service</option>
            <?php if (!empty($service)) {
                foreach ($service as $key => $value) { ?>
                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
            <?php }
            } ?>
        </select>
    </div>
</div>

<div class="row form-group">
    <label class="col-sm-12 col-md-2 col-form-label">Sub Service <span class="text-danger">*</span></label>
    <div class="col-sm-12 col-md-8">
        <select class="form-control" name="subservice" id="subServiceSelect">  
            <option value="">Select Sub Service</option>
        </select>
    </div>
</div>

<div class="row form-group">
    <label class="col-sm-12 col-md-2 col-form-label">Price<span class="text-danger">*</span></label>
    <div class="col-sm-12 col-md-8">
        <input type="text" class="form-control" name="price" id="priceField" >
    </div>
</div>


                                   
                                     <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Description<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                            <textarea class="form-control" name="description" rows="5" cols="5" placeholder="Enter Description">  </textarea>
                                            <!-- <input type="text" class="form-control" placeholder="Enter Price">     -->
                                        </div>
                                    </div>


                                    
                                  
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit" name="addservice" value="Add Service"  class="btn btn-success btn-block btn-md"  />
                                </div>
                            </div>
                        </div>
                    </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
<script type="text/javascript">    
$(document).ready(function() {
    // When a service is selected
    $('#serviceSelect').change(function() {
        var serviceId = $(this).val();
        
        // Clear previous sub-service options
        $('#subServiceSelect').html('<option value="">Select Sub Service</option>');
        $('#priceField').val('');

        if (serviceId !== "") {
            // Make an AJAX request to get the sub-services for the selected service
            $.ajax({
                url: '<?= base_url("user/get_sub_services"); ?>', // This is the URL of the PHP script that returns sub-services
                type: 'POST',
                data: {service_id: serviceId},
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    // Populate the sub-service select field
                    if (response.length > 0) {
                        $.each(response, function(index, subService) {
                            $('#subServiceSelect').append('<option value="'+subService.id+'" data-price="'+subService.price+'">'+subService.sub_service+'</option>');
                        });
                    }
                }
            });
        }
    });

    // When a sub-service is selected, show its price
    $('#subServiceSelect').change(function() {
        var selectedOption = $(this).find(':selected');
        var price = selectedOption.data('price');
        
        // Set the price field value
        $('#priceField').val(price);
    });
});
</script>


    