@extends('layout.index')
@section('content')

<div id="single-wrapper">
	<div  class="frm-single">
		<div class="inside">
			<div class="title"><strong>LATITUD </strong>Admin</div>
	
      <div class="frm-title">Register</div>
      
      <div class="alert alert-danger" role="alert" id="register_accept"> <strong>Oh snap!</strong> Please accept Terms and Conditions before register.</div>
      <div class="alert alert-danger" role="alert" id="register_error"> <strong>Oh snap!</strong> Insert a correct infomations up and try register again.</div>
      <div class="alert alert-warning" role="alert" id="register_again"> <strong>Warning!</strong> Please check password again. password is not looking same. </div>
      <div class="alert alert-warning" role="alert" id="register_exit"> <strong>Warning!</strong> The infomation already registered. please insert the other email or username. </div>
	
			<div class="frm-input"><input type="email" placeholder="Email" id="register_email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
	
			<div class="frm-input"><input type="text" placeholder="Username" id="register_name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
	
      <div class="frm-input"><input type="text" placeholder="Password" id="register_pwd" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
      
			<div class="frm-input"><input type="text" placeholder="Confirm Password" id="register_conpwd" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
	
			<div class="clearfix margin-bottom-20">
				<div class="checkbox primary"><input type="checkbox" id="accept"><label for="accept">I accept Terms and Conditions</label></div>
			</div>
	
			<button type="button" class="frm-submit" onclick="Register()">Register<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">or register with</div>
				</div>
			</div>
	
			<a href="/" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
			<div class="frm-footer">LATITUD Admin © <span id="year"></span>.</div>
	
		</div>
	
	</div>
	
</div>

<script>
   document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

@endsection
