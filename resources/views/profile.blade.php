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
			<div class="col-md-3 col-xs-12">
				<div class="box-content bordered primary margin-bottom-20">
					<div class="profile-avatar">
            <div class="profile-img">
              <img src="http://latitudslp.com/{{$user->avarter}}" alt="">
            </div>
						<a href="javascript:;" class="btn btn-block btn-friend"></a>
					</div>
        </div>
        <ul class="list-inline" style="text-align:center">
          <li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light" onclick="ReturnUsers()"><i class="mdi mdi-arrow-left" style="margin-right: 15px" ></i>To comeback</button></li>
          <button type="button" data-remodal-target="reject_user" class="btn btn-primary waves-effect waves-light" onclick="UserReject(this)" data-id={{$user->id}}>Remove</button>
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
											<div class="col-xs-5"><label>Id:</label></div>
											<div class="col-xs-7">{{$user->id}}</div>
										</div>

										<div class="col-md-12">
											<div class="col-xs-5"><label>Full Name:</label></div>
											<div class="col-xs-7">{{$user->name}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Email:</label></div>
											<div class="col-xs-7">{{$user->email}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Date:</label></div>
											<div class="col-xs-7">{{$user->updated_at}}</div>
                    </div>
                    <div class="col-md-12">
											<div class="col-xs-5"><label>Status:</label></div>
											<div class="col-xs-7">actived</div>
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
                  @foreach($news_data as $key=>$News)
                  <li><a href="/news-detail?id={{$News->id}}">{{$News->title}}</a> <span class="date">{{$News->updated_at}}</span></li>
                  @endforeach
								</ul>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>


<div class="remodal reject-user" data-remodal-id="reject_user" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div class="remodal-content">
		<h2 id="modal1Title">User remove</h2>
		<p id="modal1Desc">
      Do you really remove this user? Please check again.
		</p>
	</div>
	<button data-remodal-action="cancel" class="remodal-cancel" onclick="CancelReject()">Cancel</button>
	<button data-remodal-action="confirm" class="remodal-confirm" onclick="RejectConfirm()">OK</button>
</div>
@endsection
