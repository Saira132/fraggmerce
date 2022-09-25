

<?php $__env->startSection('container'); ?>


    <!-- start #main-site -->
        <main id="main-site">

            <!-- Shopping cart section  -->
                <section id="cart" class="py-3">
                    <div class="container">
                        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                        <!--  shopping cart items   -->
                            <div class="row">
                            
                           
                                <div class="col-md-7 col-lg-9">           
                                    <!-- !cart item -->
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <div class="row border-top py-3 mt-3">
                                            <div class="col-lg-4 text-center">
                                                <img src="<?php echo e($item->item_image); ?>" style="height: 180px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-lg-8">
                                              <br><br>
                                                <h5 class="font-baloo font-size-20"><?php echo e($item->item_name); ?></h5>
                                                <div class="font-size-20 text-danger font-baloo">
                                                    Rs. <span class="product_price"><?php echo e($item->item_price); ?></span>
                                                </div>
                                                <br>
                                                <!-- product rating -->
                                                <div class="d-flex">
                                                    <div class="rating text-warning font-size-12">
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>
                                                      <p class="px-2 font-rale font-size-14">20,534 ratings</p>
                                                </div>
                                                <!--  !product rating-->


                                            </div>

                                            
                                        </div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <!-- !cart item -->
                                
                                </div> 
                                
                                <!-- subtotal section-->
                                <div class="col-sm-3 col-md-4 col-lg-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                        <div class="border-top py-4">
                                            <h5 class="font-baloo font-size-20">Subtotal (<?php echo e($count = DB::table('cart')->count()); ?> item):&nbsp; <span class="text-danger">Rs. <span class="text-danger" id="deal-price"><?php echo e($sum= DB::table('cart')->sum('item_price')); ?></span> </span> </h5>
                                            <a href="..\information"><button type="submit" class="btn btn1 mt-3">Proceed to Buy</button></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- !subtotal section-->
                               
                            </div>
                            
                        <!--  !shopping cart items   -->
                      
        
                    </div>
                </section>
            <!-- !Shopping cart section  -->

             
         
 <section class="special-price">
    <div class="container">
      <h4 class="font-rubik font-size-20">New Arrivals</h4>

      <div class="row">
      <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                 <div class="item py-2 Apple border mt-5" id="left" style="width: 250px;">
                  <div class="product font-rale">
                    <a href="<?php echo e(url('product/'.$product->item_id)); ?>"><img src="<?php echo e($product->item_image); ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><?php echo e($product->item_name); ?></h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <span>Rs. <?php echo e($product->item_price); ?></span>
                      </div>
                      <a href="<?php echo e(url('product/'.$product->item_id)); ?>"><button type="submit" class="btn font-size-12 btn1">View Details</button></a>
                    </div>
                  </div>
                </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        
    </div>
  </div>
  </section><br><br>

        </main>
    <!-- !start #main-site -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecom-app\resources\views/cart.blade.php ENDPATH**/ ?>