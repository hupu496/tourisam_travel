<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation<?php echo $order['id']; ?></title>
    <style >
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Prevent breaking inside the container */
            page-break-inside: avoid;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        h3 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 34px;
        }
        .left {
            float: left;
            width: 50%;
        }
        .right {
            float: right;
            width: 50%;
            text-align: right;
        }
        .order-details, .customer-details {
            margin-bottom: 20px;
            /* Prevent breaking inside the order and customer details */
            page-break-inside: avoid;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            /* Prevent breaking inside detail rows */
            page-break-inside: avoid;
        }
        .detail-label {
            font-weight: bold;
            color: #2c3e50;
        }
        .barcode {
            text-align: center;
            margin-top: 0px;
            /* Prevent breaking inside the barcode section */
            page-break-inside: avoid;
        }
        .barcode img {
            max-width: 100%;
            height: auto;
        }
        @media (max-width: 600px) {
            .detail-row {
                flex-direction: column;
            }
            .left, .right {
                width: 100%;
                text-align: center;
            }
        }

        /* Styling the print button */
        .print-button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .print-button:hover {
            background-color: #2980b9;
        }

        /* Print styles to ensure content does not break */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            .container {
                page-break-inside: avoid;
            }
            .order-details, .customer-details, .detail-row, .barcode {
                page-break-inside: avoid;
            }
        }

    </style>
</head>
<body>
   <div class="container"  id="invoice" style="width:100%;">
        <div class="clearfix">
            <div class="left">
                <h1>Order Confirmation</h1>
            </div>
            <div class="right">
                <h3>Udaan Marketing Services</h3>
                <b>Email: udaanmarketing69@gmail.com</b><br>
                <b>Phone: (+91)9955876455</b>
            </div>
        </div>
        
        <div class="order-details">
            <h2>Order Details</h2>
            <div class="detail-row">
                <span class="detail-label">Order Number:</span>
                <span>ORD-<?php echo $order['id']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Order Date:</span>
                <span><?php echo date('d M Y', strtotime($order['added_on'])); ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Total Amount:</span>
                <span>&#8377; <?php echo $order['price']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Payment Method:</span>
                <label><img src="<?php echo base_url('assets/images/gpay_2.png'); ?>" width="50px"><img src="<?php echo base_url('assets/images/gpay.png'); ?>" width="20px"> <span style="background-color: darkgreen; padding: 5px; color: white;">UPI</span></label>
            </div>
        </div>
        <div class="customer-details">
            <h2>Customer Information</h2>
            <div class="detail-row">
                <span class="detail-label">Name:</span>
                <span><?php echo $order['firstname'].' '.$order['lastname']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span><?php echo $order['email']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Shipping Address:</span>
                <span><?php echo $order['message']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Booking From-To Date</span>
                <span>From Date: <?php echo date('d M Y', strtotime($order['from_date'])); ?> To <?php echo date('d M Y', strtotime($order['to_date'])); ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Booking Status:</span>
                <?php if($order['order_status'] == 2){ ?>
                    <button class="btn btn-sm" style="background-color: green; color: white;">Confirm</button>
                <?php } elseif($order['order_status'] == 1){ ?>
                    <button class="btn btn-sm" style="background-color:red; color:white;">Payment Failed</button>
                <?php } ?>
            </div>
        </div>
        <div class="barcode">
            <h2>Order Barcode</h2>
            <img src="<?php echo base_url($qrcode['file']); ?>" alt="Order Barcode" width="100px">
        </div>

        <!-- Print Button -->
        <button class="print-button" onclick="window.print()">Print Order</button>
    </div>
</body>
</html>
