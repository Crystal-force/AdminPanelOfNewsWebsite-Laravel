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
			<div class="col-xs-12">
        <div class="box-content card">
          <h4 class="box-title"><i class="fa fa-file-text ico"></i>News Detail</h4>
          <div class="card-content">
            <div class="row">
              <div class="col-md-12" style="margin-bottom:40px">
                <h2 class="news-detail">{{$detail_news->title}}</h2>
              </div>
              <div class="col-md-12" style="margin-bottom:40px">
                <ul class="notice-list">
									<li>
										<a href="javascript:;">
											<span class="avatar"><img src="http://latitudslp.com/{{$user->avarter}}" alt=""></span>
											<span class="name">by {{$user->name}}</span>
											<span class="desc">{{$user->email}}</span>
											<span class="time">{{$user->updated_at}}</span>
										</a>
									</li>
								</ul>
              </div>
              <div class="col-md-6">
                <div class="profile-avatar">
                  <img src="http://latitudslp.com/{{$detail_news->img}}" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <p class="news-detail-content">{{$detail_news->content}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="clearfix" style="margin-bottom: 40px"></div>
                <ul class="list-inline">
                  <li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light" onclick="ReturnNews()"><i class="mdi mdi-arrow-left"></i>To comeback</button></li>
                  <li class="margin-bottom-10"><button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#boostrapModal-2"><i class="mdi mdi-comment-remove-outline" style="margin-right:15px"></i>Reject</button></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>


<div class="modal fade" id="boostrapModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
      <div class="tm-contact-formwrapper">
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
            <input type="text" class="form-control" name="email" placeholder="{{$user->email}}" value="{{$user->email}}" readonly>
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




@endsection
