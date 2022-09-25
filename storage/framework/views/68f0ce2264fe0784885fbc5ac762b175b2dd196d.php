

<?php $__env->startSection('container'); ?>


	<br>
			<br>
	            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			
            			<form action="submit" method="POST">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title" style="color:#c96">Billing Details</h2><!-- End .checkout-title -->
									<br>
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                						<input type="text" name="first_name" class="form-control" style="background-color:#F5F5F5" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		                						<input type="text" name="last_name" class="form-control" style="background-color:#F5F5F5" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
										<br>

	            						<label>Country *</label>
	            						<input type="text" name="country" class="form-control" style="background-color:#F5F5F5" required>
										<br>

	            						<label>Street address *</label>
	            						<input type="text" name="address" class="form-control" placeholder="House number and Street name" style="background-color:#F5F5F5" required>
										<br>
	            						

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" name="town" class="form-control" style="background-color:#F5F5F5" required>
		                					</div><!-- End .col-sm-6 -->
											<br>

		                					<div class="col-sm-6">
		                						<label>State / County *</label>
		                						<input type="text" name="state" class="form-control" style="background-color:#F5F5F5" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
										<br>

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input type="text" name="zip" class="form-control" style="background-color:#F5F5F5" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="tel" name="phone" class="form-control" style="background-color:#F5F5F5" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
										<br>

	                					<label>Email address *</label>
	        							<input type="email" name="email" class="form-control" style="background-color:#F5F5F5" required>
										<br>
										<br>
										<br>
										<br>

	        							
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3" style="background-color:#F5F5F5; height:672px; border-style: dotted; border-color:#c96; border-radius: 5px">
		                			<div class="summary">
		                				<h3 class="summary-title" style="color:#c96; text-align:center" >Your Order</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>
                                
		                					<tbody><?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                						<tr>
		                							<td><a href="#" style="color:#c96"><?php echo e($item->item_name); ?></a></td>
		                							<td>Rs. <?php echo e($item->item_price); ?></td>
		                						</tr>

		                						
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>Rs. <?php echo e($sum= DB::table('cart')->sum('item_price')); ?></td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>Free shipping</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>Rs. <?php echo e($sum= DB::table('cart')->sum('item_price')); ?></td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->
										
										<div class="text-center">
		                				<button type="submit" class="btn btn1 mt-3" style="background-color:#c96; color:#fff; width:200px">Place Order</button>
										</div>						
										<br>
										<br>
		                					
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
								<br>
								<br>
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->

			<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecom-app\resources\views/information.blade.php ENDPATH**/ ?>