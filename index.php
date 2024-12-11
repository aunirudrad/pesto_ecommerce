<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo">
                <img src="images/logo.png" alt="">
            </a>
            <div class="navbar">
                <a href="#" class="nav-link">Home</a>
                <a href="#items" class="nav-link">Featured Items</a>
                <a href="#menu-container" class="nav-link">Menu</a>
                <a href="#testimonials" class="nav-link">Testimonials</a>
                <a href="#" class="nav-link">Blog</a>
                <!-- <a href="#" class="nav-link">Home</a> -->
            </div>
            <div class="nav-icons">
                <?php 
                    $count=0;
                    if (isset($_SESSION['cart'])) {
                        $count=count($_SESSION['cart']);
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

    <!--Home-->
    <section class="home" id="home">
        <div class="home-content container">
            <div class="home-text">
                <h1>
                    Grilled Beef <br>
                    Burger
                </h1>
                <p>Special Deal only on TUESDAY every week</p>
                <h3>Buy 1 Get One FREE!</h3>
                <a href="#items" class="btn">Order Now</a>
            </div>
            <!--Home Image-->
            <img src="images/home.png" alt="" class="home-img">

        </div>
        <!--home mask image-->
        <img src="images/home-mask.png" alt="" class="home-mask">
    </section>
    <!--features-->
    <div class="features container">
        <div class="feature-box">
            <img src="images/feature-1.svg" alt="" class="feature-img">
            <div class="feature-text">
                <h3>Premium Material</h3>
                <p>Made from premium materials</p>
            </div>
        </div>
        <div class="feature-box">
            <img src="images/feature-2.svg" alt="" class="feature-img">
            <div class="feature-text">
                <h3>Fast Delivery</h3>
                <p>We are faster than your nearby DOMINOS</p>
            </div>
        </div>
        <div class="feature-box">
            <img src="images/feature-3.svg" alt="" class="feature-img">
            <div class="feature-text">
                <h3>Timely Delivery</h3>
                <p>Professional and friendly service</p>
            </div>
        </div>
        <div class="feature-box">
            <img src="images/feature-4.svg" alt="" class="feature-img">
            <div class="feature-text">
                <h3>Secure Payments</h3>
                <p>Car Parking</p>
            </div>
        </div>

    </div>
    <!--feature menu-->
    <section class="feature-menu container" id="feature-menu">
        <h2 class="heading">
            Presto's Featured menu
        </h2>
        <div class="feature-menu-content">
            <div class="feature-menu-box">
                <img src="images/feature-menu-1.png" alt="">
                <h3>BBQ</h3>
                <p>(4 items)</p>
            </div>
            <div class="feature-menu-box">
                <img src="images/feature-menu-2.png" alt="">
                <h3>Burgers</h3>
                <p>(8 items)</p>
            </div>
            <div class="feature-menu-box">
                <img src="images/feature-menu-3.png" alt="">
                <h3>Chickens</h3>
                <p>(4 items)</p>
            </div>
            <div class="feature-menu-box">
                <img src="images/feature-menu-4.png" alt="">
                <h3>Drinks</h3>
                <p>(4 items)</p>
            </div>
            <div class="feature-menu-box">
                <img src="images/feature-menu-5.png" alt="">
                <h3>Fish</h3>
                <p>(4 items)</p>
            </div>
            <div class="feature-menu-box">
                <img src="images/feature-menu-6.png" alt="">
                <h3>Pizza</h3>
                <p>(4 items)</p>
            </div>
        </div>
    </section>
    <!--items-->
    <section class="items" id="items">
        <h2 class="heading container">Our Featured Items</h2>
        <div class="item-content container">
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-1.png" alt="">
                <h2>Spicy Burger</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn">View Product</a>
            </div>

            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-2.png" alt="">
                <h2>Mutton BBQ</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn2">View Product</a>
            </div>
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-3.png" alt="">
                <h2>Beef Burger</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn3">View Product</a>
            </div>
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-4.png" alt="">
                <h2>Chicken with Bacon</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn">View Product</a>
            </div>
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-5.png" alt="">
                <h2>Tiny Quies Fish</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn">View Product</a>
            </div>
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-6.png" alt="">
                <h2>Mixed Pizza</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn">View Product</a>
            </div>
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-7.png" alt="">
                <h2>Meta Burger</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn">View Product</a>
            </div>
            <div class="item-box">
                <span class="sale">Sale</span>
                <img src="images/item-8.png" alt="">
                <h2>Chicken Tiny</h2>
                <div class="price">
                    <h3>From $220.000</h3>
                    <p>$300.00</p>
                </div>
                <a href="#" class="view-product-btn">View Product</a>
            </div>
        </div>
        <!-- Pop-Up Modal: Spicy Burger -->
        <div id="product-modal" class="modal" data-product-id="1">
            <form action="manage_cart.php" id="add-to-cart-form" class="modal-content" method="post">
                <span class="close-btn">&times;</span>
                <img id="modal-img" src="images/item-1.png" alt="Spicy Burger">
                <h2 id="modal-title">Spicy Burger</h2>
                <p id="modal-price" data-price="220.00">From $220.00</p>
                <label for="spicy-level">
                    <p>Spicy Level:</p>
                </label>
                <select id="spicy-level" name="spicy_level" required>
                    <option value="Mild">Mild</option>
                    <option value="Medium">Medium</option>
                    <option value="Hot">Hot</option>
                </select>
                <div class="quantity-selector">
                    <label for="quantity">Quantity:</label>
                    <button type="button" id="decrease-btn">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" required>
                    <button type="button" id="increase-btn">+</button>
                </div>
                <input type="hidden" name="product_id" value="1"> <!-- Hidden field for product ID -->
                <input type="hidden" name="product_name" value="Spicy Burger"> <!-- Hidden field for product name -->
                <input type="hidden" name="price" value="220.00"> <!-- Hidden field for price -->
                <button type="submit" name="Add_To_Cart" id="add-to-cart-btn">Add to Cart</button>
            </form>
        </div>
        <!-- Pop-Up Modal: Mutton BBQ -->
        <div id="product-modal2" class="modal" data-product-id="1">
            <form action="manage_cart.php" id="add-to-cart-form" class="modal-content" method="post">
                <span class="close-btn2">&times;</span>
                <img id="modal-img2" src="images/item-2.png" alt="Mutton BBQ">
                <h2 id="modal-title2">Mutton BBQ</h2>
                <p id="modal-price2" data-price="220.00">From $220.00</p>
                <label for="spicy-level">
                    <p>Spicy Level:</p>
                </label>
                <select id="spicy-level2" name="spicy_level" required>
                    <option value="Mild">Mild</option>
                    <option value="Medium">Medium</option>
                    <option value="Hot">Hot</option>
                </select>
                <div class="quantity-selector2">
                    <label for="quantity">Quantity:</label>
                    <button type="button" id="decrease-btn2">-</button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" required>
                    <button type="button" id="increase-btn2">+</button>
                </div>
                <input type="hidden" name="product_id" value="1"> <!-- Hidden field for product ID -->
                <input type="hidden" name="product_name" value="Mutton BBQ"> <!-- Hidden field for product name -->
                <input type="hidden" name="price" value="220.00"> <!-- Hidden field for price -->
                <button type="submit" name="Add_To_Cart" id="add-to-cart-btn2">Add to Cart</button>
            </form>
        </div>

        <!-- Pop-Up Modal: Beef Burger -->
        <div id="product-modal3" class="modal" data-product-id="1">
            <form action="manage_cart.php" id="add-to-cart-form" class="modal-content" method="post">
                <span class="close-btn3">&times;</span>
                <img id="modal-img3" src="images/item-3.png" alt="Beef Burger">
                <h2 id="modal-title3">Beef Burger</h2>
                <p id="modal-price3" data-price="220.00">From $220.00</p>
                <label for="spicy-level">
                    <p>Spicy Level:</p>
                </label>
                <select id="spicy-level3" name="spicy_level" required>
                    <option value="Mild">Mild</option>
                    <option value="Medium">Medium</option>
                    <option value="Hot">Hot</option>
                </select>
                <div class="quantity-selector3">
                    <label for="quantity">Quantity:</label>
                    <button type="button" id="decrease-btn3">-</button>
                    <input type="number" id="quantity3" name="quantity" value="1" min="1" required>
                    <button type="button" id="increase-btn3">+</button>
                </div>
                <input type="hidden" name="product_id" value="1"> <!-- Hidden field for product ID -->
                <input type="hidden" name="product_name" value="Beef Burger"> <!-- Hidden field for product name -->
                <input type="hidden" name="price" value="220.00"> <!-- Hidden field for price -->
                <button type="submit" name="Add_To_Cart" id="add-to-cart-btn3">Add to Cart</button>
            </form>
        </div>


    </section>
    <!-- Menu -->
    <section class="menu-container" id="menu-container">
        <h2 class="heading container">Pesto's Featured Menu Board</h2>
        <img src="images/menu-mask.png" alt="" class="menu-mask">
        <div class="menu-content container">
            <div class="menu-box">
                <h2>Burgers</h2>
                <div class="burgers-content">
                    <div class="m-item-box">
                        <img src="images/burger-1.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Meta Burger</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-item-box">
                        <img src="images/burger-2.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Spicy Meta Burger</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-item-box">
                        <img src="images/burger-3.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Spicy Burger</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-item-box">
                        <img src="images/burger-4.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Beef Burger</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <h2>BBQ</h2>
                <div class="bbq-content">
                    <div class="m-item-box">
                        <img src="images/bbq-1.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Mutton BBQ</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-item-box">
                        <img src="images/bbq-2.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Prawn Sizzling</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-item-box">
                        <img src="images/bbq-3.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Kachi BBQ</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-item-box">
                        <img src="images/bbq-4.png" alt="">
                        <div class="m-item-right">
                            <div class="m-item-des">
                                <h3>Beef Burger</h3>
                                <p>Size: Medium Small Large Spices: Regular Spicy Medium</p>
                            </div>
                            <div class="m-item-price">
                                <h3>From $220.00</h3>
                                <p>$300.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials-->
    <section class="testimonials" id="testimonials">
        <h2 class="heading container">Testimonials</h2>
        <div class="testimonials-content container">
            <div class="t-box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quibusdam voluptas delectus voluptates
                    iusto consequuntur vitae dolorem, dolores esse dicta officiis nihil magni quam modi quo adipisci
                    neque et dolor!</p>
                <div class="profile">
                    <img src="images/profile-1.png" alt="">
                    <div class="profile-data">
                        <h3>Alfredo Bator</h3>
                        <span>Hair Stylist</span>
                    </div>
                </div>
            </div>
            <div class="t-box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam impedit corrupti ipsa maxime
                    consequatur assumenda, cupiditate itaque, dolores error blanditiis veniam deserunt est accusantium
                    iusto!</p>
                <div class="profile">
                    <img src="images/profile-2.png" alt="">
                    <div class="profile-data">
                        <h3>Sadiq Parker</h3>
                        <span>Art Director</span>
                    </div>
                </div>
            </div>
            <div class="t-box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, facilis!</p>
                <div class="profile">
                    <img src="images/profile-3.png" alt="">
                    <div class="profile-data">
                        <h3>Shuvo Chakraborty</h3>
                        <span>CA</span>
                    </div>
                </div>
            </div>
            <div class="t-box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur aspernatur qui iusto optio id
                    necessitatibus eaque! Aliquid, deserunt? Libero reprehenderit pariatur, praesentium numquam
                    obcaecati officiis sequi sed repudiandae sint amet, nihil veniam distinctio. Nobis reprehenderit
                    voluptas quis iure ea laudantium quasi nam itaque blanditiis labore.</p>
                <div class="profile">
                    <img src="images/profile-4.png" alt="">
                    <div class="profile-data">
                        <h3>Aditya Chowdhury</h3>
                        <span>Businessman</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Newsletter-->
    <section class="newsletter container" id="newsletter">
        <h2>Subscribe and Get 10% Discount</h2>
        <p>Be the first to get the latest news, promotions and much more!</p>
        <form action="">
            <input type="email" name="" id="" class="email" placeholder="Email" required>
            <input type="submit" value="Subscribe" class="s-btn">
        </form>
    </section>
    <!--footer-->
    <div class="footer">
        <div class="footer-content container">
            <div class="footer-box">
                <a href="#" class="footer-logo">
                    <img src="images/logo.png" alt="">
                </a>
                <p>222no. Park Hill Road, Lanka, Varanasi - 221011</p>
                <div class="social">
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp-square'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Opening Hours</h3>
                <p><Span>Tue</Span>: 9.00 - 22:30</p>
                <p><Span>Wed</Span>: 9.00 - 22:30</p>
                <p><Span>Thu</Span>: 9.00 - 22:30</p>
                <p><Span>Fri</Span>: 9.00 - 22:30</p>
                <p><Span>Sat</Span>: 9.00 - 22:30</p>
                <p><Span>Sun</Span>: 9.00 - 22:30</p>
                <p><Span>Mon</Span>: Closed</p>
            </div>
            <div class="footer-box">
                <h3>Information</h3>
                <a href="#">About Us</a>
                <a href="#">Blog</a>
                <a href="#">Pesto's Gallery</a>
                <a href="#">Pesto's Talent Chefs</a>
                <a href="#">Testimonials</a>
            </div>
            <div class="footer-box">
                <h3>Contact Us</h3>
                <p>+91 0011334567</p>
                <p>support@admin.com <br>
                    support@admin.com
                </p>
                <p>Address: Park Hill Road, Lanka, <br>Varanasi - 221011</p>

            </div>
        </div>
        <p class="copyright">&#169; 2024, Pesto Restaurant</p>
    </div>


    <!-- scrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- link to js -->
    <script src="js/main.js"></script>


</body>

</html>