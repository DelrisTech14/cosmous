@extends('layouts.apps')
@section('content')
<!-- Start Breadcrumb  -->
<div class="breadcrump-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="korando-breadcrump">
						<ul>
							<li><a href="{{url('/dashboard')}}" title="Go to Home Page">Home</a></li>
							<li>Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Breadcrumb  -->   
    <section class="main-content-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="section-title section-title-style1 text-start">
						<h2>Shopping Cart</h2>
					</div>            				
				</div>
			</div>	
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    
    <div class="row">
				<div class="col-12 col-sm-12">
					<!-- cart table start -->
					<div class="korando-table-area">
						<div class="cart-table table-responsive">
							<table class="table">
                            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $details)
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ $details['price'] }}</td>
                        <td><img src="{{ $details['image'] }}" width="50" height="50" /></td>
                        <td>
                            <form action="{{ route('cart.destroy', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="cartpage-button">
							<div class="primary-btn default-button">
								<a href="shop.php">Continue Shopping</a>
							</div>
							<div class="primary-btn default-button">
								<a href="#">Clear Cart</a>
								<a href="#">Update Cart</a>
							</div>	
						</div>							
					</div>
					<!-- cart table end -->
				</div>
			</div>
    

    <div class="row">
				<div class="col-12 col-sm-12 col-md-4">
					<!-- estimate-shiping start -->
					<div class="cart-page-single-area estimate-shiping">
						<h2 class="cartpage-title">Estimate Shipping And Tax</h2>
						<p>Enter your destination to get a shipping estimate.</p>
						<div class="form-group">
							<div class="country-select clearfix">
								<label>Country <sup>*</sup></label>
								<select class="nice-select wide">
									<option value="1">United State</option>
									<option value="2">Azerbaijan</option>
									<option value="3">Bahamas</option>
									<option value="4">Bahrain</option>
									<option value="5">Bangladesh</option>
									<option value="6">Barbados</option>
									<option value="7">Belarus</option>
									<option value="8">Belgium</option>
									<option value="9">Belize</option>
									<option value="10">Benin</option>
									<option value="11">Bermuda</option>
									<option value="12">Bhutan</option>
									<option value="13">Bolivia</option>
									<option value="14">Bosnia and Herzegovina</option>
									<option value="15">Botswana</option>
									<option value="16">Bouvet Island</option>
									<option value="17">Brazil</option>
									<option value="18">British Indian Ocean Territory</option>
									<option value="19">British Virgin Islands</option>
									<option value="20">Brunei</option>
									<option value="21">Bulgaria</option>
									<option value="22">Burkina Faso</option>
									<option value="23">Burundi</option>
									<option value="24">Cambodia</option>
									<option value="25">Cameroon</option>
									<option value="26">Canada</option>
									<option value="27">Cape Verde</option>
									<option value="28">Cayman Islands</option>
									<option value="29">Central African Republic</option>
									<option value="30">Chad</option>
									<option value="31">Chile</option>
									<option value="32">China</option>
									<option value="33">Christmas Island</option>
									<option value="34">Cocos (Keeling) Islands</option>
									<option value="35">Colombia</option>
									<option value="36">Comoros</option>
									<option value="37">Congo - Brazzaville</option>
									<option value="38">Congo - Kinshasa</option>
									<option value="39">Cook Islands</option>
									<option value="40">Costa Rica</option>
									<option value="41">Côte d’Ivoire</option>
									<option value="42">Croatia</option>
									<option value="43">Cuba</option>
									<option value="44">Cyprus</option>
									<option value="45">Czech Republic</option>
									<option value="46">Denmark</option>
									<option value="47">Djibouti</option>
									<option value="48">Dominica</option>
									<option value="49">Dominican Republic</option>
									<option value="50">Ecuador</option>
									<option value="41">Egypt</option>
									<option value="42">El Salvador</option>
									<option value="43">Equatorial Guinea</option>
									<option value="44">Eritrea</option>
									<option value="45">Estonia</option>
									<option value="46">Ethiopia</option>
									<option value="47">Falkland Islands</option>
									<option value="48">Faroe Islands</option>
									<option value="49">United State</option>
								</select>
							</div>								
						</div>
						<div class="form-group">
							<label>State/Province</label>
							<input type="text" class="form-control" />								
						</div>
						<div class="form-group">
							<label>Zip/Postal Code</label>
							<input type="text" class="form-control" />								
						</div>
						<div class="primary-btn default-button">
							<a href="#" class="add-tag-btn">GET A QUOTE</a>
						</div>
					</div>
					<!-- estimate-shiping end -->						
				</div>
				<div class="col-12 col-sm-12 col-md-4">
					<!-- Discount start -->
					<div class="cart-page-single-area cartpage-descount">
						<h2 class="cartpage-title">Discount Codes</h2>
						<div class="form-group">
							<label>Enter your coupon code if you have one.</label>
							<input type="text" class="form-control" />
						</div>	
						<div class="primary-btn default-button">
							<a href="#">APPLY COUPON</a>
						</div>														
					</div>	
					<!-- Discount end -->						
				</div>
				<div class="col-12 col-sm-12 col-md-4">
					<!-- total-amount start -->
					<div class="cart-page-single-area cartpage-total-amount">
						<div class="cartpage-total-price">
							<div class="total-price-box">
								<p><span class="sub-t">Subtotal <span class="sub-t-p">₹0</span></span></p>
								<p><span class="grand-t">Grand Total <span class="grand-t-p">₹0</span></span></p>	
							</div>
							
							<div class="primary-btn default-button">
								<a href="{{route('checkout.index')}}">Proceed to Checkout</a>								
							</div>
						</div>
					</div>
					<!-- total-amount end -->					
				</div>
			</div>
		</div>            	
	</section>			
	<!-- End Maincontent  -->
<style>
	.cartpage-image a img {
    width: 100px;
    height: 100px;
    object-fit: contain;
}
</style>

</body>
</html>
@endsection