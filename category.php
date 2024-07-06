<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>
   
 <!-- animation css -->
 <link rel="stylesheet" href="css/animate.css">

<!-- animation css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- siwper js -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- aos js link -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">


</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">

   <h1 class="heading">category</h1>

   <div class="box-container wow animate__zoomIn">

   <?php
     $category = $_GET['category'];
     $select_products = $conn->prepare("SELECT * FROM `products` WHERE name LIKE '%{$category}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products found!</p>';
   }
   ?>

   </div>

</section>













<?php include 'components/footer.php'; ?>

   <!-- jquery js link -->
   <script src="js/jquery.js"></script>

   <!-- swiper js -->
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- aos js -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <!-- jquery letter js-->
   <script src="js/jquery.lettering.js"></script>

   <!-- jquery text js-->
   <script src="js/jquery.textillate.js"></script>

   <!-- wow  js-->
   <script src="js/wow.min.js"></script>


   <!-- script js -->
   <script src="js/script.js"></script>




   <script>

      AOS.init({
         offset: 150,
         duration: 1000,
      });
      new WOW().init({
         loop: true,
      });

      $(function () {
         $('.tlt').textillate({
            loop: true,
            minDisplayTime: 100,
         });
      });


   </script>
</body>
</html>