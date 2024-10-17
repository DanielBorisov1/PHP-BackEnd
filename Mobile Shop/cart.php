<?php
ob_start();
include('./includes/header.php');
?>


<?php


/* include car items if it is not empty*/
count($product->getData('cart')) ? include('./Template/_cart-tamplate.php') : include('./Template/notFound/_cart_notFound.php');

/* include car-tamplate */


/* include car-tamplate */
count($product->getData('wishlist')) ? include('./Template/_whishlist_tamplate.php') : include('./Template/notFound/_whishlist_notFound.php');
/* include car-tamplate */


/* include new-phones */
include('./Template/_new-phones.php');
/* include new-phones */

?>


<?php
include('./includes/footer.php');
?>