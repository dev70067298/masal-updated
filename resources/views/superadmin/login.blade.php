<!DOCTYPE html>
<html lang="en">

<head>

	<title>Awesome Travellers</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">

	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
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

                	<div class="card-body">
						<img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Signin</h4>
                        <form action="{{route('admin_login')}}" method="POST" class="" >
                        @csrf
                        <div class="form-group mb-3">
							<label class="floating-label" for="Email">UserName</label>
							<input type="text" class="form-control" id="Email" value="{{ old('user') }}" placeholder="" name="user" required>
                            @if ($errors->has('user')) <p style="color:red;">{{ $errors->first('user') }}</p> @endif
    					</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password" placeholder="" required name="password">
                            @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
						</div>
						
						<input type="submit" class="btn btn-block btn-primary mb-4" value="Sign in">
					</form>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
