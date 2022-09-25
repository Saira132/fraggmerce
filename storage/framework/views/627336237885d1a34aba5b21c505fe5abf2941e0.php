<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fragmmerce</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/style.css')); ?>">
   
</head>
<body>

    <!-- start #header -->
        <header id="header">

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg bg-info" >
                <a class="navbar-brand" href="#">Fragmmerce</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="..\menCollection">Men's Collection</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="..\womenCollection">Women's Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="..\unisexCollection">Unisex's Collection</a>
                      </li>
                  </ul>
                  <form action="#" class="font-size-14 font-rale">
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo e($count = DB::table('cart')->count()); ?></span>
                      </a>
                  </form>
                </div>
              </nav>
               <!-- !Primary Navigation -->

        </header>
    <!-- !start #header -->
  

    <h1 class="display-4 section-heading form-gap mb-4 mt-4 text-center"><img src="https://www.ifragrance.pk/wp-content/uploads/2020/06/armaf_logo.jpg"></h1>
    <section id="search-card">
        <div class="card container w-75" style="background-color: #f4f9fa">
            <div class="card-body"><br>
              
          
               
            <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12 p-0 mb-3">
                            <input type="text" id="search_str" class="form-control search-slt" placeholder="Search Product">
                        </div>
            
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0 mb-3">
                            <button type="button" class="btn col-12 btn-info" id="search-btn-armaf">Search</button>
                        </div>
                    </div>
           
   
                            
           

    
            </div>
        </div>
    </section><br><br>
     
         <!-- Special Price -->
          <section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">All Perfumes</h4>

              <div class="row">
              <?php $__currentLoopData = $products_armaf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                      <a href="<?php echo e(url('product/'.$product->item_id)); ?>"><button type="submit" class="btn font-size-12 btn2 bg-info">View Details</button></a>
                    </div>
                  </div>
                </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          </section>
        <!-- !Special Price -->
    <br><br><br>
    
<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-4">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h4 class="font-rubik font-size-20">Fragmmerce</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div  class="col-12 text-center">
               <a href="https://www.facebook.com"><img id= "footer-icons" src="<?php echo e(asset('front_assets/assets/facebook.png')); ?>"></a>
               <a href="https://www.instagram.com"><img id= "footer-icons" src="<?php echo e(asset('front_assets/assets/insta.png')); ?>"></a>
               <a href="https://www.youtube.com"><img id= "footer-icons" src="<?php echo e(asset('front_assets/assets/youtube.png')); ?>"></a>
               <a href="http://www.twitter.com"><img id= "footer-icons" src="<?php echo e(asset('front_assets/assets/twitter.png')); ?>"></a>
            </div>
        </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2"><hr>
          <p class="font-rale font-size-14">&copy; Copyrights 2021 - All Rights Reserved</p>
        </div>
    <!-- !start #footer -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="<?php echo e(asset('front_assets/index.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\ecom-app\resources\views/menBrands/armaf.blade.php ENDPATH**/ ?>