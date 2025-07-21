<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('admin/service') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD SERVICE </button>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th >Name</th>
                                <th >Service</th>
                                <th>Sub Service</th>
                                <th>Review</th>
                                <th>Rating</th>                              
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($servilist)){ $i=0;
								foreach($servilist as $list){ $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $list['firstname'].' '. $list['lastname']; ?></td>
								<td><?php echo $list['service']; ?></td>
								<td><?php echo $list['sub_service']; ?></td>
								<td><?php echo $list['review']; ?></td>
								<td><?php if(!empty($list['rating'])){
									for ($i=0; $i < $list['rating']; $i++) { ?>
										<i class="fa fa-star"></i>
							<?php		}
								}?></td>
							
                                <td >
                                <?php if($list['status'] == 1){  ?>
                                	  <a  href='<?php echo base_url("admin/service/review_update/$list[id]") ;?>' class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i> Unactivate </a>
 
                          <?php      }elseif($list['status'] == 2){ ?>
                          	<a  href='<?php echo base_url("admin/service/review_update/$list[id]") ;?>' class="btn btn-sm btn-success" ><i class="fa fa-right"></i> Activate </a>


                    <?php      }  ?>
   
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
		 
		$('body').one('click','.delete',function(){
			var id = $(this).data('value');
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				
				$.ajax({
					url:"<?php echo base_url('admin/service/delete_service')?>",
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