<section class="content">
	<div class="row">
    	<div class="col-md-12">
        	<div class="box">
            	<div class="box-header with-border">
                	<div class="box-title">
                      <a href="<?php echo base_url('admin/searchservice') ;?>">
                            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> ADD SEARCH </button>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                	<table class="table data-table stripe hover nowrap">
                    	<thead>
                        	<tr>
                            	<th class="table-plus" >Sl No</th>
                                <th >Location</th>
                                <!-- <th >Desp</th> -->
                                <th>Service type</th>
                                <!-- <th class="datatable-nosort">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php
							if(is_array($searchlist)){ $i=0;
								foreach($searchlist as $srlist){ $i++;                    
                            ?>
                        	<tr>
                            	<td class="table-plus" ><?php echo $i; ?></td>
                                <td ><?php echo $srlist['location']; ?></td>
								<td ><?php echo $srlist['service_type'];?></td>
								<!-- <td><?php echo $srlist['desp']; ?></td>  -->
                                <td >
    
                                  <!-- <a href="" class="btn btn-sm btn-danger delete" value="<?php //echo $list['id'] ;?>"><i class="fa fa-trash"></i> Delete </a> -->
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
		 
		/*$('body').one('click','.delete',function(){
			var dlt = $(this).attr('value');
			var prompt = confirm("Are you Sure you want to delete?");
			if(prompt){
				//alert(dlt);
				$.ajax({
					url:"<?php echo base_url('lead/teamleader/delete_teamleader')?>",
					method:"POST",
					data:{id:dlt},
					success:function(data){
						console.log();
						//alert(data);
						//location.reload();
					}
				});
			}
		});*/
		
	});
</script>