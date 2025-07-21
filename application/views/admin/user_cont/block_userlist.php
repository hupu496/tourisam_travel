<style type="text/css">
	 <style>
        /* Basic styling for the image thumbnail */
        img {
            cursor: pointer;
        }

        /* Modal styling (hidden by default) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.8); /* Black background with opacity */
        }

        /* Modal content (image) */
        .modal-content {
            margin: 10% auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
        }

        /* Close button styling */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Responsive adjustments */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
</style>
<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <!-- <a href="<?php echo base_url('admin/user_cont') ;?>">
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
                                 <th>Address </th>
                                 <th>Photo</th>
                                 <th>Aadhaar Card</th>
								 <th>Added On</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($blocklist)){ $i=0;
								foreach($blocklist as $slist){ $i++;   

                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $slist['firstname'].' '.$slist['lastname']; ?></td>
                                <td ><?php echo $slist['email']; ?></td>
                                <td ><?php echo $slist['phone']; ?></td>
								<td ><?php echo $slist['address']; ?></td>
								<td ><img id="thumbnail" src="<?php echo base_url($slist['photo']); ?>" width="100px" height="100px" alt="Thumbnail Image"></td>
								<td ><img id="thumbnail" src="<?php echo base_url($slist['aadhar_card']); ?>" width="100px" height="100px" alt="Thumbnail Image"></td>
								<td ><?php echo $slist['added_on']; ?></td>
                                <td>
                                    
                                     <a  href='<?php echo base_url("admin/user_cont/activateuser/$slist[id]") ;?>' class="btn btn-sm btn-success" ><i class="fa fa-trash"></i> Activate </a>
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
					url:"<?php echo base_url('admin/user_cont/delete_user')?>",
					method:"POST",
					data:{id:id},
					success:function(data){
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