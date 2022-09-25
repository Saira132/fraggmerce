  
@extends('front/layout')

@section('container')

     <h1 class="display-4 section-heading form-gap mb-5 mt-5 text-center"><b>Order Placed Successfully</b></h1>
	 <br>
	 <div class="text-center">
	 <img src="{{asset('front_assets/assets/shopping.png')}}" alt="Shopping" >
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
	 
  @endsection