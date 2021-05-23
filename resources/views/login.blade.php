@extends('layout.index')
@section('content')

<div id="single-wrapper">
	<div class="frm-single">
		<div class="inside">
			<div class="title"><strong>LATITUD </strong>Admin</div>
      <div class="frm-title">Login</div>
      
      <div class="alert alert-danger" role="alert" id="login_error"> <strong>Oh snap!</strong> Insert a correct infomations up and try login again.</div>
      <div class="alert alert-warning" role="alert" id="login_null"> <strong>Warning!</strong> The infomation didn't registered. please register first.</div>

			<div class="frm-input"><input type="text" placeholder="Username" id="loing_name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
      <div class="frm-input"><input type="password" placeholder="Password" id="loing_pwd" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
      
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
				</div>
				<div class="pull-right"><a href="/forgotpassword" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
      </div>
      
      <button type="buttom" class="frm-submit" onclick="Login()">Login<i class="fa fa-arrow-circle-right"></i></button>
      
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">or login with</div>
				</div>
      </div>
      
			<a href="/register" class="a-link"><i class="fa fa-key"></i>New to LATITUD Admin? Register.</a>
			<div class="frm-footer">LATITUD Admin © <span id="year"></span>.</div>
		</div>
	</div>
</div>

<script>
  document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

@endsection
