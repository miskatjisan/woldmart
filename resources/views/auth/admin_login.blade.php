<!doctype html>
<html class="no-js" lang="">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Xmee | Login and Register Form Html Templates</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/login_style.css') }}">
</head>
<!-- {{ asset('admin/assets/') }} -->
<body>

	<section class="fxt-template-animation fxt-template-layout28" data-bg-image="{{ asset('admin/assets/img/figure/bg28-l.jpg') }}">
		
    
    
    <!-- Animation Start Here -->
		<div id="particles-js"></div>
		<!-- Animation End Here -->
		<div class="fxt-content">
			<div class="fxt-header">
				<a href="login-28.html" class="fxt-logo"><img src="{{ asset('admin/assets/img/logo-28.png') }}" alt="Logo"></a>
				<ul class="fxt-switcher-wrap">
					<li><a  class="switcher-text "></a></li>
					<li><a  class="switcher-text inline-text active">Login</a></li>
					<li><a  class="switcher-text"></a></li>
				</ul>
			</div>
			<div class="fxt-form">
				<div class="fxt-transformY-50 fxt-transition-delay-1">
					<p>Login into your account</p>
				</div>
                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
            <span>
            <x-jet-validation-errors class="mb-4 text-danger" style="line-height:0px;" />

</span>

					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input type="email" name="email" :value="old('email')" required autofocus  class="form-control"  placeholder="Email" >
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<input  type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="********" >
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<div class="fxt-checkbox-area">
								<div class="checkbox">
									<input id="checkbox1" type="checkbox">
									<label for="checkbox1" name="remember">Keep me logged in</label>
								</div>
								<button type="submit" class="fxt-btn-fill">Log in</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="fxt-style-line">
				<div class="fxt-transformY-50 fxt-transition-delay-5">
					<h3>Or Login With</h3>
				</div>
			</div>
			<ul class="fxt-socials">
				<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6">
					<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
				</li>
				<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7">
					<a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
				</li>
				<li class="fxt-google fxt-transformY-50 fxt-transition-delay-8">
					<a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
				</li>
				<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9">
					<a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
				</li>
				<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-10">
					<a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
				</li>
			</ul>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('admin/assets/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('admin/assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Particles js -->

    
	<script src="{{ asset('admin/assets/js/particles.js') }}"></script>
	<script src="{{ asset('admin/assets/js/particles-3.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('admin/assets/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('admin/assets/js/main.js') }}"></script>

</body>



</html>