<?php
  include('includes/connect.php');
  include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Best Sellers</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--calling cart function-->
        <!--?php
        cart();
      ?-->
        <!--Nav bar-->
		 <section id ="header">
            <a href="index.php"><img src="img/logoo.png" ></a>
            <div>
                <ul id ="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="buildaboxpage.php">Build a Box</a></li>
                    <li><a href="bestseller.php" class="active">Best Sellers</a></li>
					<li> <a href="user_login.php"><i class="far fa-user"></i></a></li>
                    <li> <a href="cart.php"><i class="far fa-shopping-cart"></i></a></li>
				</ul>
			</div>
            </section>
            <!--navbar end-->
            <!--best seller-->
            <section id="product1" class="section-p1">
                <h2>One Click Wonders</h2>
                <p>We get it. Sometimes it’s tricky to make all the decisions, so we’ve curated these gift boxes to make it easy peasy, featuring our favorites from women-led and small businesses. You can thank us later!</p>
                <div class="pro-container">
                    <div class="pro">
                        <img src="img/birthday.png" alt="birthday box">
                        <div class="des">
                            <span>Birthday Wishes</span>
                            <h5>Sending Birthday Cheer</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 2300</h4>
                        </div>
                        <a href="buildaboxpage.php?add_to_cart=birthday"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/coffee.png" alt="coffee box">
                        <div class="des">
                            <span>caffine time</span>
                            <h5>But First Coffee</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 3300</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/recover.png" alt="recover box">
                        <div class="des">
                            <span>take care</span>
                            <h5>Get Well Soon</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 2600</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/prettyinpink.png" alt="pink box">
                        <div class="des">
                            <span>barbie core</span>
                            <h5>Pretty in Pink</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 3200</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/baking.png" alt="baking box">
                        <div class="des">
                            <span>baking therapy</span>
                            <h5>For my Baker</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 2600</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/housewarming.png" alt="housewarming box">
                        <div class="des">
                            <span>home sweet home</span>
                            <h5>Housewarming</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 2400</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/newbaby.png" alt="baby box">
                        <div class="des">
                            <span>sweet child o mine</span>
                            <h5>New Baby</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 4100</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="img/newmom.png" alt="mom box">
                        <div class="des">
                            <span>mamaaa</span>
                            <h5>New Mom</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>NRs 2300</h4>
                        </div>
                        <a href="#"><i class ="fal fa-shopping-cart cart"></i></a>
                    </div>
                </div>
            </section>
