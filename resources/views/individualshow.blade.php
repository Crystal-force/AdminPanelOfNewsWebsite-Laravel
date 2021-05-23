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
              <img src="http://latitudslp.com/{{$individual->avarter}}" alt="">
            </div>
						<a href="javascript:;" class="btn btn-block btn-friend"></a>
					</div>
        </div>
        <ul class="list-inline" style="text-align:center">
          <li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light" onclick="ReturnAddUsers()"><i class="mdi mdi-arrow-left" style="margin-right: 15px" ></i>To comeback</button></li>
          <button type="button" data-remodal-target="reject_user" class="btn btn-primary waves-effect waves-light" onclick="NewReject()">Reject</button>
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
											<div class="col-xs-7">{{$individual->id}}</div>
										</div>

										<div class="col-md-12">
											<div class="col-xs-5"><label>Full Name:</label></div>
											<div class="col-xs-7">{{$individual->name}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Email:</label></div>
											<div class="col-xs-7">{{$individual->email}}</div>
										</div>
										<div class="col-md-12">
											<div class="col-xs-5"><label>Date:</label></div>
											<div class="col-xs-7">{{$individual->updated_at}}</div>
                    </div>
                    <div class="col-md-12">
											<div class="col-xs-5"><label>Status:</label></div>
											<div class="col-xs-7">[ending]</div>
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
                
                  <li><a href="/"></a> <span class="date"></span></li>
                  
								</ul>
							</div>
						</div>
          </div>
          <div class="col-xs-12">
            <div class="box-content card white" id="user_comment">
              <h4 class="box-title">Send comment</h4>
              <div class="card-content">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inp-type-1" class="col-sm-3 control-label">Text</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inp-type-1" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inp-type-2" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inp-type-2" placeholder="{{$individual->email}}" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inp-type-5" class="col-sm-3 control-label">Message</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" id="inp-type-5" placeholder="Write your meassage"></textarea>
                    </div>
                  </div>
                  <div class="form-group" style="text-align:right; padding-right: 12px">
                    <button type="button" class="btn btn-info waves-effect waves-light">Sent comment</button>
                  </div>
                </form>
              </div>
              <!-- /.card-content -->
            </div>
          </div>
			</div>
		</div>
	</div>
</div>



@endsection
