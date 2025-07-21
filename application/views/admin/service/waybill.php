<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" moznomarginboxes mozdisallowselectionprint>
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
        <style type="text/css" media="print">
			@page {
					/*size:8.27in 11.69in ;
					/*height:3508 px;
					width:2480 px;
					/*size: auto;   auto is the initial value */
					/*margin:0;   this affects the margin in the printer settings 
			  		-webkit-print-color-adjust:exact;*/
			}
			@media print{
				table {page-break-inside: avoid;}
				#buttons{
						display:none;
				}
				#invoice{
					margin-top:15px;
					margin-right:0px;
					margin-left:0px;
  				}
			}
		</style>
        <style>
        	.bleft{
				border-left:1px solid #999;
			}
        	.bbottom{
				border-bottom:1px solid #999;
			}
        	.bright{
				border-right:1px solid #999;
			}
        	.btop{
				border-top:1px solid #999;
			}
            #invoice{
                /* margin: 0 auto; */
                /* border: 1px solid black; */
                /* padding: 2px; */
            }
        </style>
    </head>
    
    <body>
	<div id="invoice" style="width:298px; margin:10px auto;">
		<table style="border: 1px solid black; width: 454px;  border-collapse: collapse;" cellpadding="1" cellspacing="0" width="454">
		<tr>
			<td colspan="4" style="border: 1px solid black;  border-collapse: collapse; text-align: center;"><h4 style="margin: 0; padding:0;">Daesyncart <br><img src="<?php echo file_url('assets/images/dcdasicart_logo.png'); ?>" alt="DC Daisy Cart" style="width:200px; height:70px"></h4></td>
		</tr>
		<tr>
			<td colspan="4" align="center" style="border: 1px solid black;  border-collapse: collapse;"> <font style="font-size:12px; font-family:Arial, Helvetica, sans-serif">Daesyncart Services Provider<br /></font>
                <font style="font-size:11px; font-family:Arial, Helvetica, sans-serif">+91-9661612333</br></font>
                <font style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">Bariatu District-Ranchi<br>State - Jharkhand Pin Code - 834009</td>
		</tr>
		<tr>
			<!-- <td colspan="3" style="border-left: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">MemberID:-  <?php //echo $order['member']; ?></td> -->
			<td colspan="3" style="border-right: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Bill No:- <?php echo str_replace('ORDER-','',$order['order_id']); ?></td>
			<td colspan="2" style="border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">GST No:- 20AA1CD4404C1ZH</td>
		</tr>
		<tr>
			<td colspan="3" style="border-left: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Name :- <?php echo $order['name'] ?></td>
			<td colspan="2" style="border-right: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Date :- <?php echo date( 'd/m/y',strtotime($order['added_on'])); ?></td>
		</tr>
		<tr>
			<td colspan="3" style="border-left: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Mobile:- <?php echo $order['mobileno'] ?></td>
			<td colspan="2" style="border-right: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Time :- <?php echo date( 'h:i A',strtotime($order['added_on'])); ?></td>
		</tr>
		<tr>
			<td colspan="5" style="border-left: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Delivery Address:- <?php echo $order['address']." - ".$order['pincode']; ?></td>
			
		</tr>
		<tr>
			<td colspan="5">
			<table style="border-top: 1px solid black;  border-collapse: collapse; font-size:12px; font-family:Arial, Helvetica, sans-serif;" cellpadding="0" cellspacing="0">
			<tr align="center">
				
				<th style="border: 1px solid black;  border-collapse: collapse;">services</th>
			
				
				<th style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;  border-collapse: collapse;">Service Amount</th>
				<th style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;  border-collapse: collapse;">Gst</th>
				<th style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;  border-collapse: collapse;">Gst Amount</th>
				<th style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black;  border-collapse: collapse;">Total</th>
				<th style="border: 1px solid black;  border-collapse: collapse;">Payment Mode</th>
				<th style="border: 1px solid black;  border-collapse: collapse;">Payment Date/Time</th>
			
			</tr>
			
			<tr align="left">
				<th colspan="5" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;">   </th>
			</tr>
			<tr align="center" style="font-size:12px;">
				<td ><?php echo $order['services']; ?></td>
				
				<td><?php echo $order['amount']; ?></td>
				<td><?php echo $order['gst']; ?>%</td>
				<td><?php $amt =  $order['amount'];
			              $gst = $order['gst'];
			             $gst_amt = $amt*($gst/100);
			             echo $gst_amt;?></td>
				<td><?php echo $order['paid_amount']; ?></td>
				<td><?php if($order['payment_mode']==1){
					echo "Online";

				}elseif($order['payment_mode']==2){
					echo "C.O.D";
				}else{
					echo "Online";
				} ?></td>
				<td><?php echo  date('d-m-Y h:i A', strtotime($order['payment_time'])); ?></td>
			
				
			</tr>
			
			
			<tr style="border-top: 1px solid black;  border-collapse: collapse;">
				<th colspan="4" align="left" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Order Description</th>
				<th colspan="3" align="right" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;"><?php echo $order['description']; ?></th>
			</tr>
				<tr>
				<th colspan="4" align="left" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Work Done Description</th>
				<th colspan="3" align="right" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;"><?php echo $order['desc_bill']; ?></th>
				</tr>
				<tr>
				<th colspan="4" align="left" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Payment</th>
				<th colspan="3" align="right" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;"><?php if($order['payment_status']==1){
					echo "Success";

				}elseif($order['payment_status']==2){
					echo "Pending";
				}else{
					echo "Success";
				} ?></th>
				</tr>
				
				<tr>
				<th colspan="4" align="left" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Transaction ID</th>
				<th colspan="3" align="right" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;"><?php echo $order['payment_id']; ?></th>
				</tr>
			<tr style="border-top: 1px solid black; border-bottom: 1px solid black;  border-collapse: collapse;">
				<td colspan="6" style="padding:1px !important; font-size:12px; font-family:Arial, Helvetica, sans-serif;">You Have Saved Rs.unt-> in this visit.</td>
			</tr>
			<tr  style="font-size:12px; font-family: serif;">
				<td colspan="8">
					<b style="padding:1px !important; ">Terms & Conditions :</b>
					<p style="padding:1px !important; margin:1px !important;">1. Goods once sold would not be returned and cash refund.</p>
					<p style="padding:1px !important; margin:1px !important;">2. Goods may be exchangesd within a week only on presentation of bill (Timming 1 PM to 4 PM).</p>
					<p style="padding:1px !important; margin:1px !important;">3. Item should not be opened or broken.</p>
					<p style="padding:1px !important; margin:1px !important;">4. No guarantee for colours & preservatives</p>
				</td>
			</tr>
			<tr style="border-top: 1px solid black;  border-collapse: collapse;" align="center">
				<th colspan="7" style="padding:1px !important; margin:1px !important; font-style:italic; font-size:11px; font-family:Arial, Helvetica, sans-serif;">Company Address:- Bariatu District - Ranchi State - Jharkhand
 <br>Pin Code - 834009</th>
			</tr>
			<tr style="border-top: 1px solid black;  border-collapse: collapse;" align="center">
				<th colspan="8" style="padding:1px !important; margin:1px !important; font-style:italic; font-size:11px; font-family:Arial, Helvetica, sans-serif;">Thankyou For Shopping <br> Visit Again</th>
			</tr>

		</table>
			</td>
		</tr>
	</table>
	<div id="buttons" style="width:454px; margin-top:10px;">
            <input type="hidden" id="print_page" value="1">
            <center>
                <button type="button" class="btn btn-danger" onclick="window.print();" 
                    style="background-color:#F70004; height:30px; width:70px; border-radius:5px; color:#FFFFFF; font-size:14px;" >Print</button>
                <button type="button" onclick="Previous()" class="btn btn-default"
                    style="background-color:#F70004; height:30px; width:70px; border-radius:5px; color:#FFFFFF; font-size:14px;">Close</button>
            </center>
        </div>
	</div>	
        <script language="javascript">
        	function Previous() {
            window.history.back();
        }
        </script>
    </body>
</html>