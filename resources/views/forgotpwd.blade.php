@extends('layout.index')
@section('content')

<div id="single-wrapper">
	<div  class="frm-single">
		<div class="inside">
	
      <div class="frm-title">Reset password</div>
      
      <div class="alert alert-warning" role="alert" id="forgot_again"> <strong>Warning!</strong> Please check email and name again. this infomation is not exist. </div>
      <div class="alert alert-danger" role="alert" id="forgot_error"> <strong>Oh snap!</strong> Insert a correct infomations up and try register again.</div>
      <div class="alert alert-warning" role="alert" id="forgot_confirm"> <strong>Warning!</strong> Please check password again. password is not looking same. </div>


      <p class="text-center">Enter your email address and we'll send you an email with instructions to reset your password.</p>
			<div class="frm-input"><input type="email" placeholder="Email" id="forgot_email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
	
			<div class="frm-input"><input type="text" placeholder="Username" id="forgot_name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
	
      <div class="frm-input"><input type="text" placeholder="Password" id="forgot_pwd" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
      
			<div class="frm-input"><input type="text" placeholder="Confirm Password" id="forgot_conpwd" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
	
			<button type="button" class="frm-submit" onclick="ForgotPassword()">Reset<i class="fa fa-arrow-circle-right"></i></button>
	
			<a href="/" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
			<div class="frm-footer">LATITUD Admin © <span id="year"></span>.</div>
		</div>
	</div>
</div>

<script>
   document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

@endsection
