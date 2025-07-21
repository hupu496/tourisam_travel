<section class="content">
	<div class="row">
        <div class="col-lg-1"></div>
                   <div class="col-lg-5 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>&#8377;<?php if(!empty($today_total)){
                    echo $today_total;
                }else{
                    echo "0";
                } ?></h3>

                <p>Today Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('admin/service/serviceorder_list'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-5 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>&#8377;<?php if(!empty($overall_total)){
                    echo $overall_total;
                }else{
                    echo "0";
                } ?></h3>

                <p>Total Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('admin/service/serviceorder_list'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-1"></div>
    	<div class="col-md-12">
        	<div class="box">
            
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th >Customer Name</th>
                                <th >Mobile</th>
                                <th >Address</th>
                                <th>Services</th>
                                <th>Sub Services</th>
                                <th>Service Description</th>
                                <th>Booked Duration</th>
                                <th>price</th>
                                <th>UTR NO</th>
                                <th>Aadhaar</th>
                                <th>Photo</th>
                                <th class="datatable-nosort">Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($serviceprovider)){ $i=0;
								foreach($serviceprovider as $list){

                                $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $list['firstname'].''. $list['lastname']; ?></td>
                                <td ><?php echo $list['phone']; ?></td>
                                <td ><?php echo $list['address']; ?></td>
                                <td ><?php echo $list['service']; ?></td> 
                                <td ><?php echo $list['sub_service']; ?></td>
                                <td ><?php echo $list['message']; ?></td> 
                                <td ><span style="font-weight: 800;color: blue;"><?php echo date('d M Y',strtotime($list['from_date'])); ?>To <?php echo date('d M Y',strtotime($list['to_date'])); ?></span></td>  
                                <td ><?php echo $list['price']; ?></td>
                                <td ><?php echo $list['utr_no']; ?></td>
                               
                                 <td>
                                 <a href="<?php echo base_url($list['aadhar_card']); ?>" download="aadhar_card.jpg" class="btn btn-sm btn-success">Service PDF</a>

</td>
                           <td> <a  href="<?php echo base_url($list['photo']); ?>" download="photo.jpg" class="btn btn-sm ">
                             <img src="<?php echo file_url($list['photo']);?>"  width="100" height="60"></a></td>
                                
                             <td><?php
                             if($list['order_status']== 0){
                                echo " <span style='background-color: red; color:white;'>Payment Failed</span>";
                             }elseif ($list['order_status'] == 1) {  ?>
                                <a href='<?php echo base_url('admin/service/paymentverify/'.$list['book_id']); ?>' class='btn btn-sm btn-warning'>Unverified</a>
                                 <a href='<?php echo base_url('admin/service/paymentverify/wrong/'.$list['book_id']); ?>' class='btn btn-sm btn-info'>wrong UTR</a>
                               
                                 
                        <?php     }elseif ($list['order_status'] == 2) {
                                 echo "<a href='#' class='btn btn-sm btn-success'>verified</a>";
                             }elseif ($list['order_status'] == 3) {
                                 echo "<a href='#' class='btn btn-sm btn-danger'>Wrong UTR</a>";
                                 
                             }
                               ?></td>

                                
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
		 
		$('body').one('click','.delete',function(){
			var id = $(this).data('value');
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/service/delete_order_list')?>",
					method:"POST",
					data:{id:id},
					success:function(data){
						if(data == 1){
							 swal("Blocked !", "You clicked the button!", "success");
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
<script>
    // Add event listener for download click
    document.querySelector('.down').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        
        // Get the image URL from the href attribute or data attribute
        const aadharCardUrl = this.getAttribute('data-aadhar_card');

        // Create a temporary anchor element for download
        const downloadLink = document.createElement('a');
        downloadLink.href = aadharCardUrl;
        downloadLink.download = 'aadhar_card.jpg';  // Provide a default file name for download

        // Append the anchor to the body (necessary for Firefox)
        document.body.appendChild(downloadLink);

        // Trigger the download
        downloadLink.click();

        // Remove the anchor after the download starts
        document.body.removeChild(downloadLink);
    });
</script>