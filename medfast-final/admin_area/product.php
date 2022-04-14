<!DOCTYPE html>

<?php 
include ("includes/connect.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $barcode=$_POST['barcode'];
    $price=$_POST['price'];
    $expiry=$_POST['expiry'];

    $sql="insert into `products` (name,barcode,price,expiry)
    values('$name','$barcode','$price','$expiry')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data inserted successfully";
        header('location: display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
</head>
<body bgcolor="lightgreen">
    <h2 align="center">Insert New Product Here</h2>
        <form action="product.php" method="post" >
            <div >
                <label>Product Name</label>
                <input type="text" name="name"  placeholder="Enter name of the product" autocomplete="off" size="60" required/>
            </div>
            <br>
            <div class="form-barcode">
                <label>Barcode No</label>
                <input type="text" name="barcode"  placeholder="Enter Barcode no of the product" autocomplete="off" size="60" required/>
            </div>
            <br> 
            <div class="form-price">
                <label>Price</label>
                <input type="text" name="price"  placeholder="Enter price of the product" autocomplete="off" size="60" required/>
            </div>
            <br>
            <div class="form-expiry">
                <label>Expiry Date</label>
                <input type="text" name="expiry"  placeholder="Enter expiry date of the product" autocomplete="off" size="60" required/>
            </div>
            <br>
            <button type="submit" name="submit"  value="insert now">INSERT PRODUCT</button>
        </form>
 
</body>
</html>



