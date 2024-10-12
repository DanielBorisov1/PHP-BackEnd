 <!--product-->
 <?php

    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item):

        if ($item['item_id'] == $item_id) :

    ?>
         <section id="product" class="py-3">
             <div class="container">

                 <div class="row justify-content-center">

                     <div class="col-sm-6">

                         <img src="./assets/products/1.png" alt="product" class="img-fluid">
                     </div>


                     <div class="col-sm-6 py-5">
                         <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                         <small>by Samsung</small>
                         <div class="d-flex">
                             <div class="rating text-warning font-size-12">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="far fa-star"></i></span>
                             </div>
                             <a href="#" class="px-2 pb-2 font-rale font-size-14">20,534 ratings | 1000+ answered
                                 questions</a>
                         </div>
                         <hr class="m-0">

                         <!---product price-->
                         <table class="my-3">
                             <tr class="font-rale font-size-14">
                                 <td>M.R.P:</td>
                                 <td><strike>$162.00</strike></td>
                             </tr>
                             <tr class="font-rale font-size-14">
                                 <td>Deal Price:</td>
                                 <td class="font-size-20 text-danger">$<span>152.00</span><small
                                         class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                             </tr>
                             <tr class="font-rale font-size-14">
                                 <td>You Save:</td>
                                 <td><span class="font-size-16 text-danger">$10.00</span></td>
                             </tr>
                         </table>
                         <!---!product price-->


                         <!--#policy-->
                         <div id="policy">
                             <div class="d-flex">
                                 <div class="return text-center me-5">
                                     <div class="font-size-20 my-2 color-second">
                                         <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                     </div>
                                     <a href="#" class="font-rale font-size-12 text-decoration-none">10 Days
                                         <br>Replacement</a>
                                 </div>

                                 <div class="return text-center me-5">
                                     <div class="font-size-20 my-2 color-second">
                                         <span class="fas fa-truck border p-3 rounded-pill"></span>
                                     </div>
                                     <a href="#" class="font-rale font-size-12 text-decoration-none">Daily Tution
                                         <br>Delived</a>
                                 </div>

                                 <div class="return text-center mr-5">
                                     <div class="font-size-20 my-2 color-second">
                                         <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                     </div>
                                     <a href="#" class="font-rale font-size-12 text-decoration-none">10 Year
                                         <br>Warranty</a>
                                 </div>
                             </div>
                         </div>
                         <hr>
                         <!--!policy-->


                         <!--order-details-->
                         <div id="order-details" class="font-rale d-flex flex-column text-dark">
                             <small>Delivery by: Mar 29 -Apr1</small>
                             <small class="">Sold by <a href="#" class="text-decoration-none">Daly Electronics</a>(4.5out
                                 of 5 | 18,198ratings)</small>
                             <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -
                                 424201</small>
                         </div>
                         <!--!order-details-->

                         <!-- color -->
                         <div class="row justify-content-center aling-items-center text-center">

                             <div class="col-6">
                                 <div class="color my-3">
                                     <div class="d-flex justify-content-between">
                                         <h6 class="font-baloo">Color:</h6>
                                         <div class="p-2 color-yellow-bg rounded-circle"><button
                                                 class="btn font-size-14"></button></div>
                                         <div class="p-2 color-primary-bg rounded-circle"><button
                                                 class="btn font-size-14"></button></div>
                                         <div class="p-2 color-second-bg rounded-circle"><button
                                                 class="btn font-size-14"></button></div>
                                     </div>
                                 </div>

                             </div>
                             <!-- !color -->

                             <!-- product qty section -->
                             <div class="col-6 gx-5">
                                 <div class="qty d-flex">
                                     <h6 class="font-baloo">Qty:</h6>
                                     <div class="px-4 d-flex font-rale">
                                         <button class="qty-up border bg-light" data-id="pro1"><i
                                                 class="fas fa-angle-up"></i></button>
                                         <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"
                                             disabled value="1" placeholder="1">
                                         <button data-id="pro1" class="qty-down border bg-light"><i
                                                 class="fas fa-angle-down"></i></button>
                                     </div>
                                 </div>
                             </div>
                             <!-- !product qty section -->
                         </div>

                         <!--size-->
                         <div class="size my-3">
                             <h6 class="font-ballo">Size:</h6>
                             <div class="d-flex justify-content-between w-75">
                                 <div class="font-rubik border p-2">
                                     <button class="btn p-0 font-size-14">4GB RAM</button>
                                 </div>
                                 <div class="font-rubik border p-2">
                                     <button class="btn p-0 font-size-14">8GB RAM</button>
                                 </div>
                                 <div class="font-rubik border p-2">
                                     <button class="btn p-0 font-size-14">16GB RAM</button>
                                 </div>
                             </div>
                         </div>
                         <!--!size-->

                         <!--Buttons-->
                         <div class="form-row pt-4 font-size-16 font-ballo d-flex">

                             <div class="col pe-3">
                                 <button type="submit" class="btn btn-danger gx-3  form-control">Proceed to Buy</button>

                             </div>

                             <div class="col">
                                 <button type="submit" class="btn btn-warning gx-3  form-control">Add to Cart</button>
                             </div>
                         </div>
                         <!--!Buttons-->



                     </div>

                     <div class="col-12 padding-bottom">
                         <h6>Product Description</h6>
                         <hr>
                         <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Numquam dolorum minima dolorem totam tenetur? Earum ipsa ad obcaecati, blanditiis maiores
                             eum sequi sapiente labore iure voluptatum quibusdam recusandae in, omnis ullam consectetur
                             est assumenda, eaque reprehenderit possimus soluta corrupti illo quia quisquam. Excepturi,
                             aliquid ipsum a temporibus explicabo ipsa quidem reiciendis aperiam eius quo, possimus
                             voluptatibus inventore, suscipit fugiat adipisci.</p>
                     </div>


                 </div>
             </div>
         </section>
         <!--!product-->

 <?php
        endif;
    endforeach;
    ?>