@extends('layout.index')
@section('content')

<div class="main-menu">
  @include('component.header')

  @include('component.navigation')
</div>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">User Management</h1>
	</div>
  @include('component.notification')
  
</div>

@include('component.top')

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="alert alert-success " id="accept-success" role="alert"> <strong>Well done!</strong> You successfully  registered new user. </div>
        </div>
        <div class="col-md-3"></div>
      </div>
			<div class="col-md-3 col-xs-12">
				<div class="box-content bordered primary margin-bottom-20">
					<div class="profile-avatar">
            <div class="profile-img">
              <img src="http://latitudslp.com/{{$n_user->avarter}}" alt="">
            </div>
						<a href="javascript:;" class="btn btn-block btn-friend"></a>
					</div>
        </div>
        <div class="clearfix"></div>
          <ul class="list-inline" style="text-align:center">
            <li class="margin-bottom-10"><button type="button" class="btn btn-success btn-rounded btn-bordered waves-effect waves-light" onclick="NewUserAdd(this)" data-id="{{$n_user->id}}">Accept</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-rounded btn-bordered waves-effect waves-light" onclick="NewUserReject(this)" data-id="{{$n_user->id}}">Reject</button></li>
          </ul>
      </div>
      <div class="col-md-9 col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-user ico"></i>About</h4>
              <div class="card-content">
								<div class="row">

										<div class="col-md-12">
											<div class="col-xs-5"><label>Full Name:</label></div>
											<div class="col-xs-7">{{$n_user->name}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Email:</label></div>
											<div class="col-xs-7">{{$n_user->email}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Date:</label></div>
											<div class="col-xs-7">{{$n_user->updated_at}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Status:</label></div>
											<div class="col-xs-7">unactive</div>
										</div>
								</div>
							</div>
						</div>
					</div>

          <div class="col-md-12 col-xs-12">
						<div class="box-content card">
							<h4 class="box-title"><i class="fa fa-file-text ico"></i> Experience</h4>
							<div class="card-content">
								<ul class="dot-list">
                  
                 New account
                
								</ul>
							</div>
						</div>
					</div>
      </div>
      <div class="col-md-12 col-xs-12" id="send-comment">
				<div class="box-content card white">
          <h4 class="box-title">Reject Comment</h4>
          <div class="tm-contact-formwrapper" style="padding: 20px">
            <h5>Send comment</h5>
            @if(Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
            @endif
            <form method="post" action="/contact">
              {{ csrf_field() }}
    
              <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" name="title">
                @if($errors->has('title'))
                <small class="form-text invalid-feedback">{{$errors->first('title')}}</small>
                @endif
              </div>
    
              <div class="form-group">
                <label>Email Adddress:</label>
                <input type="text" class="form-control" name="email" placeholder="{{$n_user->email}}" value="{{$n_user->email}}" readonly>
                @if($errors->has('email'))
                <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                @endif
              </div>
    
              <div class="form-group">
                <label>Message:</label>
                <textarea name="message" class="form-control" rows="7"></textarea>
                @if($errors->has('message'))
                <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                @endif
              </div>
    
              <button class="btn btn-primary" style="margin-bottom: 20px">Send Comment</button>
            </form>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>



</div>
@endsection
