<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "pesto_db");

if (mysqli_connect_error()) {
    echo "<script>
        alert('Database Connected na!');
        window.location.href='mycart.php'; 
    </script>";
    exit();
}
// session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['purchase'])) {

        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]', '$_POST[phone_no]', '$_POST[address]', '$_POST[pay_mode]')";
        if (mysqli_query($con, $query1)) {
            $Order_Id = mysqli_insert_id($con);
            $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Product_Name`, `Spicy_Level`, `Price`, `Quantity`) VALUES (?,?,?,?,?)";
            $stmt = mysqli_prepare($con, $query2);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "issii", $Order_Id, $Product_Name, $Spicy_Level, $Price, $Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Product_Name=$values['Product_name'];
                    $Spicy_Level=$values['Spicy_level'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script>
                    alert('Order Placed!');
                    window.location.href='index.php'; 
                </script>";
            }
        } else {
            echo "<script>
                alert('SQL error');
                window.location.href='mycart.php'; 
            </script>";
        }
    }
}
