<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/searchservice/searchlist') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>SEARCH LIST</button>
                        	</a>
                        </div>
                        <!--<div class="pull-right"><a href="" class="btn btn-sm btn-primary"> STAFF LIST </a></div>-->
                    </div>
                    <div class="box-body">
						<form action="<?php echo base_url('admin/searchservice/insert_search');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                                <div class="col-md-1"></div>
                                <div class="col-sm-12 col-md-6">
                     
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label"> Location <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                        <select name="location" type="" id="location" class="form-control" >
                                         <option value="">Select location</option>
                                        <option value="lalpur">Lalpur</option>
                                         <option value="kokar">Kokar</option>
                                        <option value="kantatoli">Kanta toli</option>
                                        <option value="namkum">Namkum</option>
                                        <option value="raturoad"> Ratu Road</option>
                                        <option value="Bariyatu">Bariyatu</option>
                                         <option value="lawadih">Lawadih</option>
                                        <option value="piskamore">Piska More</option>
                                        <option value="hinno">Hinno</option>
                                         <option value="mainroad">Main Road</option>
                                        <option value="harmu road">Harmu Road</option>
                                          <option value="lowerbazar">Lower Bazar</option>                            
                                         </select>
                                        </div>
                                        </div>
                                 
                                        <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Work Type <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                         <select name="service_type" type="" id="service_type" class="form-control" >
                                         <option value="">Select Type</option>
                                        <option value="electrician">Electrician</option>
                                         <option value="plumber">Plumber</option>
                                        <option value="carpenter">Carpenter</option>
                                        <option value="ac&refrigerator">AC & Refrigerator</option>
                                        <option value="washingmachine">Washing Machine</option>
                                        <option value="motorpump">Motor Pump</option>
                                         <option value="laundryservice">Laundry Service</option>
                                        <option value="painting">Painting</option>
                                        <option value="cleaning">Cleaning</option>
                                         <option value="pestcontrol">Pest Control</option>
                                        <option value="renovation Work">Renovation Work</option>
                                          <option value="construction">Construction</option>                            
                                         </select>
                                        </div>
                                        </div>
                        
                                  <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-2 text-center"> 
                                    <input type="submit" name="search" value="Add Search"  class="btn btn-success btn-block btn-md"  />
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
    