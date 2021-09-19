<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website - Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="navbar">
        <div class="container">
            <div class="logo">
              <img src="images_food/logo.png" alt="" class="img-responsive">
            </div>
            <div class="menu text-right">
            <ul>
           <li>
             <a href="index.php">Home</a>
           </li>
           <li>
             <a href="categories.php">Categories</a>
           </li>
           <li>
             <a href="food.php">Foods</a>
           </li>
           <li>
             <a href="#footer">Contact</a>
           </li>
        </ul>
            </div>
        <div class="clearfix"></div>
        </div>
    </section>
</section>
<section id="form-oder">
        <section class="form-content">
            <h1>Fill this form to confirm your oder.</h1>
            <fieldset class="border-form select-food">
                <legend>Selected Food</legend>
                <div class="food-infor order">
                    <div class="food-img">
                       <img src="images_food/menu-pizza.jpg" alt="pizza" >
                    </div>
                    <div class="description">
                        <h3>Food Title</h3>
                        <p class="price">$2.3</p>
                        <h4 class="quantity">Quantity</h4>
                        <input type="number" value="1">
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>

            <fieldset class="border-form delivery-details">
                <legend>Delivery Details</legend>
                <form>
                    <h4>Full Name</h4>
                    <input type="text" placeholder="E.g. Vijay Thapa">
                    <h4>Phone Number</h4>
                    <input type="text" placeholder="E.g. 0986xxxxxxxx">
                    <h4>Email</h4>
                    <input type="text" placeholder="E.g. hi@gmail.com">
                    <h4>Address</h4>
                    
                    <textarea rows="10" placeholder="E.g. Street, City, Country"></textarea>
                    
                    <br>
                    <input type="button" value="Confirm Oder" id="order-btt">
                </form>

            </fieldset>
</section>

</section>
    <section class="social">
        <section class="container text-center">
         <ul>
           <li>
             <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook.png"/></a>
           </li>
           <li>
             <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png"/></a>
</li>
           <li>
             <a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png"/></a>
           </li>
        </ul>
    </section>
    </section>
    <section id="footer">
    <section class="footer text-center">
        <div class="container">
          <p>All rights reserved.Designed By <a href="#">Vijay thapa</a></p>
        </div>
    </section> 
    </section>
    
</body>
</html>