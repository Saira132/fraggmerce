@extends('front/layout')

@section('container')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<!-- start #main-site -->
<main id="main-site">

<!--   product  -->
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
            
            @foreach ($products as $product)
                <div class="col-sm-6">
                    <img src="{{ $product->item_image }}" alt="product" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        
                        <div class="col">
                        <form action="/cart" method="POST">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type="hidden" value="{{ $product->item_id }}" name="item_id">
                        <input type="hidden" value="{{ $product->item_name }}" name="item_name">
                        <input type="hidden" value="{{ $product->item_price }}" name="item_price">
                        <input type="hidden" value="{{ $product->item_image }}"  name="item_image">
                        <input type="hidden"  value="1" name="quantity">



                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <button type="submit"  class="btn btn1 form-control">Add to Cart</button>
                        </div>
                    </div>
                </div>
                </form>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-30"><b>{{ $product->item_name }}<br>For {{ $product->item_category }}</b></h5>
                    
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
                                <td class="font-size-20 text-danger">Rs.<span>{{ $product->item_price }}</span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
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
                    <p class="font-rale font-size-16">{{ $product->item_description }}</p>
                    
                </div>
            </div>
            @endforeach
        </div>
    </section>
<!--   !product  -->


 <section class="special-price">
    <div class="container">
      <h4 class="font-rubik font-size-20">New Arrivals</h4>

      <div class="row">
      @foreach ($related_products as $product)
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                 <div class="item py-2 Apple border mt-5" id="left" style="width: 250px;">
                  <div class="product font-rale">
                    <a href="{{url('product/'.$product->item_id)}}"><img src="{{ $product->item_image }}" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6>{{ $product->item_name }}</h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <span>Rs. {{ $product->item_price }}</span>
                      </div>
                      <a href="{{url('product/'.$product->item_id)}}"><button type="submit" class="btn font-size-12 btn1">View Details</button></a>
                    </div>
                  </div>
                </div>
                </div>
                
                @endforeach
         
        
    </div>
  </div>
  </section><br><br>
<!-- !Top Sale -->

</main>
<!-- !start #main-site -->
		
@endsection