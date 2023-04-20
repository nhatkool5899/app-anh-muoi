<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{asset('back-end/login/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{asset('back-end/login/img/wave.png')}}">
	<div class="container">
		<div class="img">
			<img src="{{asset('back-end/login/img/bg.svg')}}">
		</div>
		<div class="login-content">
			<form action="{{url('/login')}}" method="POST">
				@csrf
				<img src="{{asset('back-end/login/img/avatar.svg')}}">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="email" value="{{old('email')}}">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
				@if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        <i class="fas fa-exclamation"></i> {{$err}}<br>
                        @endforeach
                    </div>
				@endif
				@if(session('message'))
					<div class="alert alert-danger">
						{{session('message')}}<br>
					</div>
				@endif
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('back-end/login/js/main.js')}}"></script>
</body>
</html>
