  


<?php $__env->startSection('container'); ?>

     <h1 class="display-4 section-heading form-gap mb-5 mt-5 text-center"><b>Order Placed Successfully</b></h1>
	 <br>
	 <div class="text-center">
	 <img src="<?php echo e(asset('front_assets/assets/shopping.png')); ?>" alt="Shopping" >
	 </div>
	 <br>
	 <br>
	 <br>
	 <h4 class="font-rubik font-size-20 text-center" style="color:#c96">Thank you for your purchase</h4>
	 <br>
	 <br>
	 <br>
	 <div class="text-center">
     <a href="\"><button type="submit" class="btn btn1 mt-3" style="background-color:#c96; color:#fff; width:200px;">Back to Home</button></a>	
	 </div>
     <br>
	<br>
	<br>
	 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecom-app\resources\views/confirmation.blade.php ENDPATH**/ ?>