<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <div class="container">
        <header>
            <div class="nav container">
                <a href="#" class="logo">
                    <img src="images/logo.png" alt="">
                </a>
                <div class="navbar">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="index.php" class="nav-link">Featured Items</a>
                    <a href="index.php" class="nav-link">Menu</a>
                    <a href="index.php" class="nav-link">Testimonials</a>
                    <a href="index.php" class="nav-link">Blog</a>
                    <!-- <a href="#" class="nav-link">Home</a> -->
                </div>
                <div class="nav-icons">
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    ?>
                    <a href="#"><i class='bx bxs-user-circle'></i></a>
                    <a href="mycart.php" class="cart"><i class='bx bxs-cart-alt'></i>
                        <span id="cart-total"><?php echo $count ?></span></a>

                    <div class="menu-icon">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>

                </div>
            </div>
        </header>
        <section>
            <div class="row">
                <div>
                    <br>
                    <br>
                    
                </div>
                <div class="col-lg-12 text-center border rounded bg-light my-5">

                    <h1>My Cart</h1>
                </div>
                <div class="col-lg-9">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">Serial No.</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Spicy Level</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    // print_r($value);
                                    $sr = $key + 1;
                                    echo "
                                        <tr >
                                            <td>$sr</td>
                                            <td>$value[Product_name]</td>
                                            <td>$value[Spicy_level]</td>
                                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Product_name' value='$value[Product_name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <div class='d-grid gap-2 col-6 mx-auto'>    
                                                        <button name='Remove_Item' class='remove-btn'>REMOVE</button>
                                                            <input type='hidden' name='Product_name' value='$value[Product_name]'>
                                                    <div>
                                                </form></td>
                                        </tr>
                                    ";
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="col-lg-3">
                    <div class="border bg-light rounded p-4">
                        <h4>Grand Total:</h4>
                        <h5 class="text-end" id="gtotal"> </h5>
                        <br>
                        <?php
                            if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
                        
                        ?>
                        <form action="purchase.php" method="POST" class="form-floating">
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control" placeholder="e.g:-Aunirudra Dey" required>
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="number" name="phone_no" class="form-control" placeholder="e.g:-+8801311107482" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Enter your Address:</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pay_mode" value="COD" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Cash on Delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                <label class="form-check-label" for="defaultCheck2">
                                    Online Payment
                                </label>
                            </div>
                            <br>
                            <div class="d-grid gap-2 col-7 mx-auto">
                                <button class="btn btn-primary" name="purchase">Make Purchase</button>
                            </div>
                        </form>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>


<script>
    var gt=0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for (i=0; i<iprice.length; i++) {
            
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
            
        }
        gtotal.innerText=gt;
    }

    subTotal();
</script>
</body>

</html>