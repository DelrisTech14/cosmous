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
							<li>Register</li>
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
						<h2>Customer Register</h2>
					</div>            				
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="customer-area contact-us-area">	
						<h3>Registere Now</h3>

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <p>If you Don't have an account, Register first.</p>
                            <div class="korando-form-group form-group">
								<label>Name <sup>*</sup></label>
								<input type="text" placeholder="Name" id="name" class="control-form" name="name"
                                    required autofocus>
                                    @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
							</div>

                           <!-- <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>-->

                            <div class="korando-form-group form-group">
								<label>Email <sup>*</sup></label>
								<input type="text" placeholder="Email" id="email_address" class="control-form" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
							</div>	

                           <!-- <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>-->

                            <div class="korando-form-group form-group">
								<label>Phone <sup>*</sup></label>
								<input type="number" placeholder="123456789" id="number" class="control-form" name="number" required autofocus>
                                @if ($errors->has('number'))
                                <span class="text-danger">{{ $errors->first('number') }}</span>
                                @endif
							</div>

                            <div class="korando-form-group form-group">
								<label>Password <sup>*</sup></label>
								<input type="password" placeholder="Password" id="password" class="control-form" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
							</div>	

                            <!--<div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>-->

                            <div class="korando-form-group form-group submit-button">
								<input type="submit" class="control-form" value="Register">
							</div>

                            <!--<div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection