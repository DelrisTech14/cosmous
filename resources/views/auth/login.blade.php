@extends('layouts.apps')
@section('content')
<!-- Start Breadcrumb  -->
<div class="breadcrump-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="korando-breadcrump">
						<ul>
							<li><a href="index.php" title="Go to Home Page">Home</a></li>
							<li>Login</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Breadcrumb  -->            

	<!-- Start Maincontent  -->
	<section class="main-content-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="section-title section-title-style1 text-start">
						<h2>Customer Login</h2>
					</div>            				
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="customer-area contact-us-area">	
						<h3>Registered Customers</h3>
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <p>If you have an account, sign in with your email address.</p>
                            <div class="korando-form-group form-group">
								<label>Email <sup>*</sup></label>
								<input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
							</div>
                            <!--<div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                            </div>-->

                            <div class="korando-form-group form-group">
								<label>Password <sup>*</sup></label>
								<input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('emailPassword'))
                                <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                                @endif
							</div>	

                            <!--<div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('emailPassword'))
                                <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                                @endif
                            </div>-->

                            <!--<div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>-->

                            <div class="korando-form-group form-group submit-button">
								<input type="submit" class="control-form" value="Login">
							</div>

                            <!--<div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>-->
                        </form>

                    </div>
                </div>
                <div class="col-12 col-md-6">
					<div class="customer-area contact-us-area">	
						<h3>New Customers</h3>
						<form action="#">
							<p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>									
							<div class="primary-btn default-button">
								<a href="{{route('register-user')}}">Create an Account</a>
							</div>
						</form>							
					</div>
				</div>            		
            </div>
        </div>
    </div>
</main>
@endsection