
<section class="content">
    <div class="row">
       <!--  <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border ">
                    <div class="box-title"><?php //echo $title; ?></div>
                </div>
                <div class="box-body" align="center">
                    <h1 style="color:#3c9e71;"> Udaan Marketing Services</h1>
              
                </div>
            </div>
        </div> -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>&#8377;<?php if(!empty($today_book_total)){
                    echo $today_book_total;
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
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>&#8377;<?php if(!empty($today_book_total)){
                    echo $today_book_total;
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
    
        </div>
    </div>
</section>
