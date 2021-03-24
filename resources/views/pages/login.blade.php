@extends('layout.page')

@section('content')

<h1 class="text-center text-white mt-5"> Welcome to Awesome Travellers </h1>

<div class="container">

    @if(Session::has('success'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
@endif
@if(Session::has('error'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif
    <div class="row">
        <div class="lagend offset-lg-3 offset-md-3 col-lg-6 col-md-6 col-sm-10 col-xs-10 rounded">
        <form action="{{route('signin')}}" method="POST" class="form">
            @csrf
                  <div class="form-group mt-3">
                    <input type="text" value="{{ old('user') }}" class="form-control border-top-0 border-right-0 border-left-0" placeholder="UserName" name="user" required>
                    @if ($errors->has('user')) <p style="color:red;">{{ $errors->first('user') }}</p> @endif
                </div>

                  <div class="form-group">
                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Password" name="password" required>
                    @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
                </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden"  value="3"  name="type">
                </div>
                @if ($errors->has('type')) <p style="color:red;">{{ $errors->first('type') }}</p> @endif
                    <br>
                    <center>
                  <input type="submit" name="submit" value="Login" class="btn-theme">
                </center>
                <!-- <a href="{{ route('login.google') }}">
                    <button type="button" class="btn btn-block btn-google">
                        <i class="f"></i>login with Google
                    </button>
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
            <p class="text-dark text-center mt-2 mb-2"> If New User then/<a href="{{route('hello')}}" class="btn">Register</a> </p>
            </form>
        </div>
    </div>
</div>


<script>
    $('#body').attr('class','register_body')
</script>

@endsection
