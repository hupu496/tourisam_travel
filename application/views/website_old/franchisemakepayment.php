<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow: 3px 4px 6px #d2daf9;">
                    <h3 style="font-size: 25px; font-weight: 800; color: #2196f3; text-align: center;padding: 5px;">Make Payment</h3>
                </div>
            </div>
            <div class="col-md-6">
                <!-- QR Code Explain -->
          <p>Scan the QR code to make a payment:</p>
<img src="data:image/png;base64,<?php echo $qrcode; ?>" alt="QR Code" />

            </div>
            <div class="col-md-6">
                
                <div class="card" style="padding:40px; text-align: center; margin-top: 50px;background: #eff7ff;">
                   <form action="<?php echo base_url('homeservice/franchise_payment_verify');?>" method="post">
                        <div>
                            <label style="font-weight:800">Total Amount: <?php echo $price; ?></label><br>
                            <label>UTR No/Transaction No</label>
                            <input type="hidden" name="price" value="<?php echo $price; ?>">
                            <input type="hidden" name="id" value="<?php echo $customerdata['id']; ?>">
                            <input class="form-control" type="text" name="utr_no">
                        </div>
                        <button type="sumbit" class="btn btn-block btn-success">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
 
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <?php if(isset($this->session->web_msg)){ ?>
        <script type="text/javascript">
           swal("Good job!", "You clicked the button!", "success");
           swal('Good job!','<?php echo $this->session->web_msg;?>','success');
        </script>
           <?php }else if(isset($this->session->web_err_msg)){ ?>
        <script type="text/javascript">
           // swal("Good job!", "You clicked the button!", "success");
           swal('Opps!','<?php echo $this->session->web_err_msg;?>','error');
        </script>
    <?php }?>
