<?php $__env->startSection('container'); ?>
<?php if(session()->has('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('message')); ?>

    </div>
<?php endif; ?>
<!-- start #main-site -->
<main id="main-site">

<!--   product  -->
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
            
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6">
                    <img src="<?php echo e($product->item_image); ?>" alt="product" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        
                        <div class="col">
                        <form action="/cart" method="POST">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type="hidden" value="<?php echo e($product->item_id); ?>" name="item_id">
                        <input type="hidden" value="<?php echo e($product->item_name); ?>" name="item_name">
                        <input type="hidden" value="<?php echo e($product->item_price); ?>" name="item_price">
                        <input type="hidden" value="<?php echo e($product->item_image); ?>"  name="item_image">
                        <input type="hidden"  value="1" name="quantity">



                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <button type="submit"  class="btn btn1 form-control">Add to Cart</button>
                        </div>
                    </div>
                </div>
                </form>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-30"><b><?php echo e($product->item_name); ?><br>For <?php echo e($product->item_category); ?></b></h5>
                    
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                        
                    </div>

                    <hr class="m-0">

                    <!---    product price       -->
                        <table class="my-3">
                            
                            <tr class="font-rale font-size-14">
                                <td>Price:</td>
                                <td class="font-size-20 text-danger">Rs.<span><?php echo e($product->item_price); ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            
                        </table>
                    <!---    !product price       -->

                     <!--    #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <p class="font-rale font-size-12">10 Days <br> Replacement</p>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <p class="font-rale font-size-12">Daily Tuition <br>Deliverd</p>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <p class="font-rale font-size-12">1 Year <br>Warranty</p>
                                </div>
                            </div>
                        </div>
                      <!--    !policy -->
                        <hr>


                            
                            
                        
                    <br><br>
                    <!-- order-details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <h6><b>Notes:</b></h6>
                            <table class="table table-sm">
                              <tbody>
                                <tr>
                                  <th scope="row">Head Notes:</th>
                                  <td>Peppermint and Lavender.</td>

                                </tr>
                                <tr>
                                  <th scope="row">Heart Notes:</th>
                                  <td>Coriander, Jasmine and Geranium.</td>
                                </tr>
                                <tr>
                                  <th scope="row">Base Notes:</th>
                                  <td >Amber and Musk.</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                     <!-- !order-details -->

                    

                </div>
                
                <div class="col-12">
                    <br><br>
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-16"><?php echo e($product->item_description); ?></p>
                    
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<!--   !product  -->


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
<!-- !Top Sale -->

</main>
<!-- !start #main-site -->
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecom-app\resources\views/products/product.blade.php ENDPATH**/ ?>