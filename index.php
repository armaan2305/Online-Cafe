<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// put your code here
include('header.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Cafe</title>
    <meta charset="utf-8">
    </head><!-- comment -->
    <body>
      <!--carousel start -->
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/banner1.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner2.jpeg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner3.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <section class='my-5'>
        <div class="container">
          <div class="section-header text-center">
            <h1>Good food is Good mood</h1>
           
          </div>
        </div>
      </section>
    
      <section class="my-5 mx-5">
        <div class="">
          <h2 class="text-center"></h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="row">
              <?PHP
              $con = mysqli_connect('localhost','root','','rentacar');
              mysqli_select_db($con,'rentacar');
              /*if($con){
              echo "connection successful";
              }else{
              echo "no connection";
              }*/
              $query = " SELECT `car_id`, `car_name`, `car_type` , `image`, `cost`,`capacity` FROM `food` order by car_id ASC ";
              $queryfire = mysqli_query($con, $query);
              $num = mysqli_num_rows($queryfire);
              if($num > 0){
              while($product = mysqli_fetch_array($queryfire)){
              ?>
              
              <div class="col-lg-4 col-md-4 col-12">
                <form>
                  <div class="card">
                    <img class="card-img-top" src=" images/food/<?php echo $product['image'];  ?>" alt="Card image">
                    <div class="card-body" style="text-align: center;">
                      <h4 class="card-title" ><?php echo
                      $product['car_name'];  ?></h4>
                      <h6> &#8377; <?php echo $product['cost'];  ?> <br> 
                        
                        <h5 class="text">Quantity:</h5>
                        <div style=" padding-left: 160px;"> <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 90px;"> </h5></div>
                      <a href="cart_add.php?id=<?php echo $product['car_id'];?>" class="btn btn-primary">Add To Cart</a>
                    </div>
                  </div>
                </div>
                <?php
                }
                }
                ?>
                
              </div>
            </div>
          </div>
        </section>
      </body>
    </html>
    <!--SCRIPT-->
  </body>
</html>
<?php
include ('footer.php');
?>