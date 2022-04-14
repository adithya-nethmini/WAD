<!DOCTYPE html>
<html lang="en">
<?php
include("functions/functions.php");
include("includes/connect.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="styles/ourservices.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:ital,wght@0,300;0,400;1,300;1,400&family=Roboto:wght@100;300&family=Sacramento&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="styles/style.css" media="all" />

</head>

<body>
    <div class="main_wrapper">

        <div class="header_wrapper">
            <img id="logo" src="images/logo.png" alt="logo">
            <br>


            <h2>



                Order your pharmeceutical essentials from us to your doorstep!
            </h2>




            <font color="grey">

                <i>
                    <p>Medfast Pharmacy
                        <br>
                        No 369, Beverly Street, Colombo 10 <br>
                        081-8392749 <br>

                        medfastpc@gmail.com
                    </p>
                </i>


            </font>





        </div>
        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>

                <li><a href="services.php">Our Services</a></li>
                <li><a href="help.php">Help</a></li>

                <li><a href="cart.php">Cart</a></li>

                <li><a href="customer_login.php">Log In</a></li>
                <li><a href="customer_register.php">Sign Up</a></li>
            </ul>



        </div>

        <div class="content_wrapper">
            <!-- <div id="sidebar">
                <div id="sidebar_title"> Categories</div>

                <ul id="medicine">
                    <li><a href="#">Med 1</a></li>
                    <li><a href="#">Med 2</a></li>
                    <li><a href="#">Med 3</a></li>
                </ul>
            </div> -->


            <div id="content_area">
                <div id="shopping_cart">
                    <span style="float:right" ;font-size:18px; padding:5px; line-height:40px;> Welcome Guest <b style="color: yellow;"> Shopping Cart - </b> Total Items: Total Price

                        <a href="cart.php" style="color: red;">Go to Cart</a>
                    </span>

                </div>

                <form action="" method="POST" enctype="multipart/form-data">
            
            <table align="center" width="700" bgcolor = "grey">
                <tr>
                    <td colspan ="5">
                        <h2>Update your cart or checkout</h2>
                    </td >
                </tr>

               <tr>
                   <th>Remove</th>
                   <th>Product</th>
                   <th>Quantity</th>
                   <th>Total Price </th>
               </tr>
    <?php 
        function total_price(){
            $total = 0;
            global $con;
            $ip = getIp();

            $sel_price = "select * from cart where ip_add = '$ip'";

            $run_price = mysqli_query($con, $sel_price);

            while($p_price =mysqli_fetch_array($run_price)){

                $pro_id = $p_price['p_id'];

                $pro_price = " select * from products where id = '$pro_id";

                $run_pro_price = mysqli_query($con, $pro_price);

                while($pp_price = mysqli_fetch_array($run_pro_price)){

                    $product_price = array($pp_price['price']);

                    $pro_title = $pp_price['name'];

                    $single_price = $pp_price['price'];

                    $values = array_sum($product_price);

                    $total += $values;

                }
            }
    ?>


                <tr align ="center">
                    <td type = "checkbox" name="remove[]" ></td>
                    <td> <?php echo $product_title;?></td>
                    <td><input type="text" size="4" name="qty" /></td>
                    <td><?php echo $single_price;?></td>
                </tr>

              

                

                <tr>
                    <td colspan="4"><b>Sub total:</b></td>
                    <td><?php echo $total?> </td>
                </tr>
               
            </table>
            
            
            </form>
        </div>

    </div>

    </body>
</html>