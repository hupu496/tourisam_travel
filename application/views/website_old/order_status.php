<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        h1 {
            text-align: center;
            color: #f43397;
            font-size: 24px;
        }

        .order-list {
            margin-top: 20px;
        }

        .order-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .order-header {
            background-color: #f5f5f5;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .order-id {
            font-weight: bold;
        }

        .order-date {
            color: #666;
            font-size: 14px;
        }

        .order-content {
            padding: 15px;
            display: flex;
            align-items: center;
        }

        .order-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
        }

        .order-details {
            flex-grow: 1;
        }

        .product-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .order-quantity, .order-price {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .order-status {
            font-weight: bold;
            color: #f43397;
            margin-bottom: 10px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #f43397;
            color: #fff;
        }

        .btn-secondary {
            background-color: #e0e0e0;
            color: #333;
        }

        .btn:hover {
            opacity: 0.9;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .order-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .order-image {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .action-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
            }
        }
        /*model*/
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
            max-width: 500px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal h2 {
            margin-bottom: 15px;
            color: #f43397;
        }

        .rating {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 30px;
            color: #ddd;
        }

        .rating label:before {
            content: '\2605';
        }

        .rating input:checked ~ label {
            color: #ffc107;
        }

        .review-text {
            width: 100%;
            height: 100px;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
        }

        .submit-review {
            background-color: #f43397;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-review:hover {
            opacity: 0.9;
        }
        .glow-button {
    position: relative;
    padding: 10px 20px;
    color: white;
    background-color: #f0ad4e;
    border: none;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    box-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
    animation: glow 0.5s infinite alternate;
}

@keyframes glow {
    from {
        box-shadow: 0 0 10px rgba(255, 193, 7, 0.5), 0 0 20px rgba(255, 193, 7, 0.5), 0 0 30px rgba(255, 193, 7, 0.5);
    }
    to {
        box-shadow: 0 0 20px rgba(255, 193, 7, 1), 0 0 30px rgba(255, 193, 7, 1), 0 0 40px rgba(255, 193, 7, 1);
    }
}

    </style>
</head>
<body>
    <header>
        <h1>My Orders</h1>
    </header>
    <div class="container">
        <div class="order-list">
            <?php if(!empty($order)){
                foreach ($order as $key => $value) {  ?>
                    <div class="order-item">
                <div class="order-header">
                    <span class="order-id">Order #<?php echo $value['id']; ?></span>
                    <span class="order-date">Placed on: <?php echo date('d M Y',strtotime($value['added_on'])); ?></span>
                </div>
                <div class="order-content">
                   <!--  <img src="/placeholder.svg?height=80&width=80&text=Product" alt="Product Image" class="order-image"> -->
                    <div class="order-details">
                        <div class="product-name"><?php echo $value['sub_service']; ?></div>
                        <div class="order-quantity">Book From:<?php echo date('d M Y',strtotime($value['from_date'])); ?> To:<?php echo date('d M Y',strtotime($value['to_date'])); ?> </div>
                        <div class="order-price">₹<?php echo $value['price']; ?></div>
                        <div class="order-status">Booking Status on <?php echo date('d M Y',strtotime($value['added_on'])); ?>:
                            <?php if($value['order_status'] == 1){
                                echo "<button class='btn btn-sm btn-warning glow-button'>Pending</button>";
                            }elseif ($value['order_status'] == 2) {
                                echo "<button class='btn btn-sm btn-success'>Confirm</button>";  ?>
                                 <a href="<?php echo base_url('homeservice/orderpdf/'.$value['id']); ?>" class='btn btn-sm btn-primary'>PDF</a>

                          <?php  }elseif($value['order_status'] == 0){
                                echo "<span style='color:red; font-weight:800'>Payment Failed<span>";
                            }elseif($value['order_status'] == 3){
                                 echo "<span style='color:orange; font-weight:800'>Wrong UTR No<span>";
                            }
                            else{
                                 echo "<button class='btn btn-sm btn-danger'>Not Confirm</button>";
                            }  ?>


                        </div>
                        <div class="action-buttons">
                          <button class="btn btn-primary review" type="button" onclick="openModal('<?php echo $value['id']; ?>')" >Rate & Review Product</button>
                           
                        </div>
                    </div>
                </div>
            </div>
                 
      <?php          }
            }  ?>
            
            
        </div>
    </div>
<!-- Modal -->
    <div id="reviewModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Rate & Review</h2>
            <form method="post" action="<?php echo base_url('/review') ?>">
                <input type="hidden" id="orderid" name="order_id">
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1"></label>
                </div>
                <textarea class="review-text" name="review" placeholder="Write your review here..."></textarea>
                <button type="submit" class="submit-review">Submit Review</button>
            </form>
        </div>
    </div>
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

    <script>
        // Get the modal
        var modal = document.getElementById("reviewModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Function to open the modal
        function openModal(orderid) {
            modal.style.display = "block";
            document.getElementById("orderid").value = orderid;
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Handle form submission
        document.getElementById("reviewForm").onsubmit = function(e) {
            e.preventDefault();
            var productName = document.getElementById("productName").value;
            var rating = document.querySelector('input[name="rating"]:checked').value;
            var review = document.querySelector('.review-text').value;
            
            // Here you would typically send this data to your server
            console.log("Product:", productName);
            console.log("Rating:", rating);
            console.log("Review:", review);

            // Close the modal after submission
            modal.style.display = "none";
        }
    </script>
    <script type="text/javascript">
   $(document).ready(function(){
      $('body').on('click','.review',function(){
        // debugger;
        $('#orderid').val($(this).data('orderid'));

       
       
      });
      
   
   });
 </script>