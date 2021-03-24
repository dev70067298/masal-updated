<!DOCTYPE html>
<html lang="en">

<head>

	<!-- vendor css -->
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
					@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show {{ Session::get('alert-class', 'alert-success') }}" role="alert">
    {{ Session::get('success') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-primary alert-dismissible fade show  {{ Session::get('alert-class', 'alert-danger') }}" role="alert">
		{{ Session::get('error') }}					
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
    @endif
						<img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<form action="{{route('signup')}}" enctype="multipart/form-data" method="POST" class="form">
            @csrf
						
						<div class="form-group mb-3">
							<label class="floating-label" for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="" name="name">
							@if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
 
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Username">Username</label>
							<input type="text" class="form-control" id="Username" placeholder="" name="user">
							@if ($errors->has('user')) <p style="color:red;">{{ $errors->first('user') }}</p> @endif
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input type="text" class="form-control" id="Email" placeholder="" name="email">
							@if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="address">Address</label>
							<input type="text" class="form-control" id="address" placeholder="" name="address">
							@if ($errors->has('address')) <p style="color:red;">{{ $errors->first('address') }}</p> @endif
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="CNIC">CNIC</label>
							<input type="text" class="form-control" id="CNIC" placeholder="" name="cnic">
							@if ($errors->has('cnic')) <p style="color:red;">{{ $errors->first('cnic') }}</p> @endif
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password" placeholder="" name="password">
							@if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="re-Password">Repeat Password</label>
							<input type="password" class="form-control" id="re-Password" placeholder="" name="Repeat-password">
						    @if ($errors->has('Repeat-Password')) <p style="color:red;">{{ $errors->first('Repeat-Password') }}</p> @endif
						</div>
						<div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden"  value="3"  name="type" id="yesCheck">

                </div>

						@if ($errors->has('type')) <p style="color:red;">{{ $errors->first('type') }}</p> @endif

						<div class="custom-control custom-checkbox  text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" name="term" id="customCheck1" required>
							<label class="custom-control-label" for="customCheck1">Agree Terms and Conditions</label>
						</div>
						<input type="submit" value=" Sign Up" name="submit"class="btn btn-primary btn-block mb-4">
						<!-- <a href="{{ route('login.google') }}">
							<button type="button" class="btn btn-block btn-google">
								<i class="f"></i>Google
							</button>
						</a>						  <a class="btn" href="{{ url('auth/facebook') }}"
                    style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                    signup with Facebook
                </a> -->
				<br>
				<a class="btn" href="{{ url('login/google') }}"
                    style="background-color: #B72D10; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                    Login with Google
                </a>
                <br>

                <a class="btn" href="{{ url('facebook') }}"
                    style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                    Login with Facebook
                </a>
            
						</form>
						
						<p class="mb-2">Already have an account? <a href="{{ url('login') }}" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
