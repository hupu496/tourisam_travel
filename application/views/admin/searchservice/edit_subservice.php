<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/searchservice/sub_servicelist') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>SUB SERVICE LIST</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/searchservice/update_subservice');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">                                
                                        <div class="row form-group">
                                      <input type="hidden" name="id" value="<?php echo $subservicelist['subservice_id']; ?>">
                                        <label class="col-sm-12 col-md-2 col-form-label">Service Type<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <select name="service_id" id="service_id" class="form-control">
    <!-- Default selected option -->
    <option value="<?php echo $subservicelist['service_id']; ?>"><?php echo $subservicelist['name']; ?></option>
    <?php if (!empty($service)) {
        foreach ($service as $key => $values) { 
            // Skip the option that matches the default selected value
            if ($values['id'] == $subservicelist['service_id']) {
                continue;
            } ?>
            <option value="<?php echo $values['id']; ?>"><?php echo $values['name']; ?></option>
    <?php   }
    } ?>
</select>

                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Sub Service<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="text" name="sub_service" class="form-control" placeholder="Enter Sub Service" value="<?php echo $subservicelist['sub_service']; ?>">
                                        </div>
                                        </div>
                                         <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Price<span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <input type="text" name="price" class="form-control" placeholder="Enter &#8377;" value="<?php echo $subservicelist['price']; ?>">
                                        </div>
                                        </div>
                        
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit"  class="btn btn-success btn-block btn-md"  />
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
		// when image is loaded, set the src of the image where you want to display it
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
    