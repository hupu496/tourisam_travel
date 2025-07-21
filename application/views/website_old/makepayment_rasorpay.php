<?php 
$someprice = $customerdata['paid_amount'];
$paisaprice = $someprice*100;
$id = $customerdata['id'];
$custname = $customerdata['name'];
$user_id = $customerdata['user_id'];
// $itemInfo['price']=$paisaprice;
// $itemInfo['name']=$member['name'];
// $itemInfo['image']='';
$productinfo = 'service From Customer';
$txnid = time();
$surl = base_url("homeservice/success/");
$furl = base_url("homeservice/fail_order/");
$key_id = API_KEY;
$currency_code = 'INR';
$total = $paisaprice; 
$amount = $someprice;
$merchant_order_id = strtoupper(random_string('alpha', 4)).random_string('numeric', 4);
$card_holder_name = $custname;
$email =  $customerdata['email'];
$phone = $customerdata['mobileno'];
$name = "Customer of $custname - $id";
$return_url = site_url().'razorpay/callback';

?>
<section class="">  
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 p-3">
            <!---------------------------------- Response Msg ------------------------------------------->
            <?php 
                $popup="d-none";
                $msg=$pstatus=$picon='';
                if($this->session->flashdata('request_msg')!==NULL){
                $msg=$this->session->flashdata('request_msg');
                $pstatus="success";
                $picon="check";
                $popup="";
                }
                if($this->session->flashdata('request_err_msg')!==NULL){
                $msg=$this->session->flashdata('request_err_msg');
                $pstatus="danger";
                $picon="exclamation";
                $popup="";
                }
            ?>
            <div class="alert alert-<?php echo $pstatus ?> alert-dismissible msg-popup <?php echo $popup ?>">
            <button type="button" id='msgpopup' class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-<?php echo $picon ?>"></i>
            <?php echo $msg; ?>
            </div>
            <!---------------------------------- End Response Msg ------------------------------------------->    
            <h3>Make Payment</h3><hr/>   
            <div class="row">
                <div class="col-md-12 card p-3">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h3><?php echo ucwords($customerdata['name']);?></h3>
                            <p class='mb-0' style='font-size:14px'><?php echo $customerdata['email'];?></p>
                            <p class='mb-0' style='font-size:14px'>+91 <?php echo $customerdata['mobileno'];?></p>
                        </div>
                       <!--  <div class="col-6 col-md-6">
                            Payment Window Open For:<br/><span style='font-size:30px;color:brown' id='timeremain'><?php echo $customerdata['payment_time'];?> Minutes</span>
                        </div>
                    </div><hr/> -->
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <u><h5>Order Details</h5></u>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Order No :</label>
                                    <p class='col-6 col-md-6'><?php echo $customerdata['id'];?></p>
                                </div>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Order Total Amount:</label>
                                    <p class='col-6 col-md-6 text-danger' style='font-size:20px;font-weight:600'>Rs. <?php echo $this->amount->toDecimal($customerdata['paid_amount']);?></p>
                                </div>
                                <div class="form-row p-2">
                                    <div class="col-1 col-md-2"></div>
                                    <div class="col-10 col-md-8 text-center">
                                        <?php echo form_open('homeservice/success','id="razorpay-form"'); ?>
                                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                                        <input type="hidden" name="id" value="<?php echo $customerdata['id']; ?>">
                                        <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
                                        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
                                        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $productinfo; ?>"/>
                                        <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
                                        <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
                                        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
                                        <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
                                        <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
                                        <input type="hidden" name="order_id" id="order_id" value="<?php echo $merchant_order_id; ?>">
                                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
                                        <!-- <button class='btn btn-danger btn-outline-warning'>MAKE PAYMENT</button> -->
                                        <input  id="submit-pay" type="button" onclick="razorpaySubmit(this);" value="PAY NOW" class="btn btn-sm btn-success" />
                                        </form>
                                    </div>
                                    <div class="col-1 col-md-2"></div>
                                </div>                            
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    
                </div>
            </div>                 
        </div>
        <div class="col-md-1"></div>
    </div>
    
    </div>
</section>

    

    <div id="PgFooter"><?php $this->load->view('website/footer');?></div>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    var razorpay_options = {
        key: "<?php echo $key_id; ?>",
        amount: "<?php echo $total; ?>",
        name: "<?php echo $name; ?>",
        description: "Order # <?php echo $merchant_order_id; ?>",
        netbanking: true,
        currency: "<?php echo $currency_code; ?>",
        prefill: {
        name:"<?php echo $card_holder_name; ?>",
        email: "<?php echo $email; ?>",
        contact: "<?php echo $phone; ?>"
        },
        notes: {
        soolegal_order_id: "<?php echo $merchant_order_id; ?>",
        },
        handler: function (transaction) {
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function(){
                location.reload()
            }
        }
    };
    var razorpay_submit_btn, razorpay_instance;

    function razorpaySubmit(el){
        if(typeof Razorpay == 'undefined'){
        setTimeout(razorpaySubmit, 200);
        if(!razorpay_submit_btn && el){
            razorpay_submit_btn = el;
            el.disabled = true;
            el.value = 'Please wait...';  
        }
        } else {
        if(!razorpay_instance){
            razorpay_instance = new Razorpay(razorpay_options);
            if(razorpay_submit_btn){
            razorpay_submit_btn.disabled = false;
            razorpay_submit_btn.value = "Pay Now";
            }
        }
        razorpay_instance.open();
        }
    }  
    </script>

    <script>
        $('document').ready(function(){
            setTimeout(function() {
                $('#msgpopup').click();
            },5000); 
            countdown();
        });
            
        function countdown(){
            // Set the date we're counting down to
            // 1. JavaScript
            // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
            // 2. PHP
            var countDownDate = <?php if(!isset($differencemin)){$totime = $customerdata['time_duration']; echo strtotime('+'.$totime.'minutes');}else{ echo strtotime('+'.$differencemin.'minutes');} ?> * 1000;
            var now = <?php echo time() ?> * 1000;

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                // 1. JavaScript
                // var now = new Date().getTime();
                // 2. PHP
                now = now + 1000;

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("timeremain").innerHTML = days + "d " +  hours + "h " +
                    minutes + "min " + seconds + "sec ";
                updatecur_time();
                // If the count down is over, write some text 
                if (distance <= 0) {
                    clearInterval(x);
                    location.reload();
                    document.getElementById("timeremain").innerHTML = "EXPIRED";
                    $('#submit_exam').trigger('click');
                }
            }, 1000);
        }

        function updatecur_time(){
            var id = <?php echo $customerdata['id'];?> 
            $.ajax({
                url:"<?php echo base_url('website/update_order_curtime');?>",
                method:"POST",
                data:{order:id},
                success:function(data){
                    //console.log(data);					                                                        
                }
            });
        }  
    </script>

  </body>
</html>