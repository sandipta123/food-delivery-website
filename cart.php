<?php
    session_start();
    $product_ids = array();
    //check if Add to Cart button has been sumitted
    if(filter_input(INPUT_POST,'add_to_cart'))
    {
            if(isset($_SESSION['shopping_cart']))
            {
                //keep track of the number of items in the shopping cart
                $count = count($_SESSION['shopping_cart']);

                //ceate sequestial array for matching array keys to product ids
                $product_ids=array_column($_SESSION['shopping_cart'],'id');

                if(!in_array(filter_input(INPUT_GET,'id'),$product_ids))
                {
                    $_SESSION['shopping_cart'][$count]=array
                    (
                        'id' => filter_input(INPUT_GET, 'id'),
                        'name' => filter_input(INPUT_POST, 'name'),
                        'price' => filter_input(INPUT_POST, 'price'),
                        'quantity' => filter_input(INPUT_POST, 'quantity'),
                    );  
                }
                else //if product is already there, just increase the quantity
                {
                    for($i=0;$i<count($product_ids);$i++)
                    {
                        if($product_ids[$i]==filter_input(INPUT_GET,'id'))
                        {
                            $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
                        }
                    }
                }
            }
            else
            {
                //if shopping cart doesn't exist, create first product with array key 0
                //create array using sunbmitted form data, start from key 0 and fill it withh values
                $_SESSION['shopping_cart'][0]=array
                (
                    'id' => filter_input(INPUT_GET, 'id'),
                    'name' => filter_input(INPUT_POST, 'name'),
                    'price' => filter_input(INPUT_POST, 'price'),
                    'quantity' => filter_input(INPUT_POST, 'quantity'),
                );
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .products
        {
            border: 1px solid #333;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 16px;
            margin-bottom: 20px;
        }
        .table
        {
            margin: 0px auto;
            float: none;
        }
        .row
        {
            margin: 0px auto;
            float: none;
        }
        .centered
        {
            margin: 0px auto;
            float: none;
        }
        .button
        {
            background; #6394F8;
            color: white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            display: block;
            border-radius: 3px;
            font-size: 16px;
            margin: 25px 0 15px 0;
        }
        .button: visited
        {
            text-decoration: none;
            color: white;
        }
        .button: hover
        {
            background: #7fa9ff;
            text-decoration: none;
            cooor: white;
        }
        .button: active
        {
            text-decoration: none;
            color: white;
        }
        a
        {
            text-decoration: none;
        }
        a: hover
        {
            text-decoration: none;
        }
        .btn-danger
        {
            font-size: 12px;
            padding: 3px;
        }
        .btn-danger: hover
        {
            text-decoration: none;
        }
        h3
        {
            margin-top: 0px;
        }
    </style>
</head>
<body>

<div class="container>">

<?php
$server = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($server, $username, $password, 'cart');

if(!$connect)
{
    die("connection failed".mysqli_connect_error());
}

$query = "SELECT * FROM products ORDER BY ID ASC";

$result = mysqli_query($connect, $query);

if ($result):
    if(mysqli_num_rows($result)>0):
        while($product = mysqli_fetch_assoc($result)):
        ?>
        <div class="col-sm-4 col-md-3">
            <form method="post" action="cart.php?action=add&id=<?php echo $product['ID']; ?>">
                <div class="products">
                    <img src="images/<?php  echo $product['IMAGE'];?>" class="img-responsive" /><br/>
                    <h4 class="text-info"> <?php echo $product['NAME']; ?> </h4>
                    <h4> <?php echo $product['PRICE']; ?> </h4>
                    <input type="text" name="quantity" class="form-control" value="1"/>

                    <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                    <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />

                    <input type="submit" name="add_to_cart" style="margin-top:10px;" class="btn btn-info" value="Add to Cart" />

                </div>
            </form>
        </div>
        <?php
        endwhile;
    endif;
endif;
?>

<?php
    if(isset($_POST["submit"]))
    {
    }
?>
<div style="clear:both"></div>
<br/>
<div class="table-responsive">
<table class="table">
<tr><th colspan="5"><h3>Order Details</h3></th></tr>
<tr>
<th width="40%">Product Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price</th>
<th width="15%">Total</th>
<th width="5%">Action</th>
</tr>
<?php
if(!empty($_SESSION['shopping_cart'])):
    $total=0;
    foreach($_SESSION['shopping_cart'] as $key => $product):
?>
<tr>
<td><?php echo $product['name']; ?></td>
<td><?php echo $product['quantity']; ?></td>
<td>Rs. <?php echo $product['price']; ?></td>
<td>Rs. <?php echo number_format($product['quantity']*$product['price'],2) ?></td>
<td>
<a herf="cart.php?action=delete&id=<?php echo $product['id']; ?>">
<div class="btn-danger">Remove</div>
</a>
</td>
</tr>
<?php
$total= $total + ($product['quantity'] * $product['price']);
endforeach
?>
<tr>
<td colspan="3" align="right">Total:</td>
<td align="right">Rs. <?php echo number_format($total,2); ?></td>
<td></td>
</tr>
<tr>
<!-- show checkout buttopn only if the shopping cart is not empty -->
<td colspan="5">
<?php if(isset($_SESSION['shopping_cart'])):
if((count($_SESSION['shopping_cart'])>0)):
?>
<a herf="#" class="button">Checkout</a>
<?php endif; endif; ?>
</td>
</tr>
<?php
endif;
?>
</table>
</div>
</div>
</body>
</html>








