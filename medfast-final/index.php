<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include("functions/functions.php");
include("includes/connect.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medfast</title>
    <link rel="stylesheet" href="styles/style.css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:ital,wght@0,300;0,400;1,300;1,400&family=Roboto:wght@100;300&family=Sacramento&display=swap" rel="stylesheet">


</head>

<body>
    <div class="main_wrapper">

        <div class="header_wrapper">
            <img id="logo" src="images/medfast-logo.png" alt="logo">
            <br>
          

            <h2>
              
                    Order your pharmeceutical essentials from us to your doorstep!
            </h2>



        

               <font color= "grey">

               <i>
                    <p>Medfast Pharmacy
                        <br>
                    No 369, Beverly Street, Colombo 10  <br>
                   081-8392749  <br>
                    
                    medfastpc@gmail.com</p>
                </i>


               </font> 

        


        </div>
        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>

                <li><a href="services.php">Our Services</a></li>
                <li><a href="help.php">Help</a></li>

                <li><a href="cart.php">Cart</a></li>

                <li><a href="customer/login.php"> Log In </a></li>
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


            <?php cart(); ?>
            
                <div id="shopping_cart">
                    <span style="float:right" ;font-size:18px; padding:5px; line-height:40px;> Welcome Guest <b style="color: yellow;"> Shopping Cart - </b> Total Items: <?php total_items ();?>
                    Total Price : <?php total_price(); ?>

                        <a href="cart.php" style="color: red;">Go to Cart</a>

                        <?php if(!isset($_SESSION['customer_email'])){

                            echo "<a href = 'checkout.php'>Login</a>";


                        }

                        else{
                            echo "<a href = 'logout.php'>Logout</a>";
                        }
                    

                        ?>

                    </span>

                </div>

                <!-- <?php echo $ip=getIp() ;?> -->



                <div id="products_box">
                    <?php getPro();


                    ?>


                </div>
            </div>

            <div id="footer">
                <p>&copy team16 MedFast</p>
            </div>
        </div>

</body>

</html>