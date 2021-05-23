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
          <div class="alert alert-success " id="accept-news" role="alert"> <strong>Well done!</strong> You successfully  published this news. </div>
        </div>
        <div class="col-md-3"></div>
      </div>
			<div class="col-xs-12">
        <div class="box-content card">
          <h4 class="box-title"><i class="fa fa-file-text ico"></i>News Detail</h4>
          <div class="card-content">
            <div class="row">
              <div class="col-md-12" style="margin-bottom:40px">
                <input class="editable-title" value="{{$n_news->title}}" style="width: 100%; text-align:center; font-size: 14px; padding:15px; border:none" id="edited_title"/>
              </div>
              <div class="col-md-12" style="margin-bottom:40px">
                <ul class="notice-list">
									<li>
										<a href="javascript:;">
											<span class="avatar"><img src="http://latitudslp.com/{{$news_user->avarter}}" alt=""></span>
											<span class="name">by {{$news_user->name}}</span>
											<span class="desc">{{$news_user->email}}</span>
											<span class="time">{{$news_user->updated_at}}</span>
										</a>
									</li>
								</ul>
              </div>
              
              <div class="col-md-8">
                <textarea class="editable-news" rows="15" style="width:100%; padding:15px; border:1px #ccc" id="edited_content" value={{$n_news->content}}>{{$n_news->content}}</textarea>
              </div>
              <div class="col-md-4">
                <div class="profile-avatar">
                  <img src="http://latitudslp.com/{{$n_news->img}}" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="clearfix" style="margin-bottom: 40px"></div>
                <ul class="list-inline">
                  <li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light" onclick="ReturnAcceptNews()"><i class="mdi mdi-arrow-left"></i>To comeback</button></li>
                  <li class="margin-bottom-10"><button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#boostrapModal-2"><i class="mdi mdi-comment-remove-outline" style="margin-right:15px"></i>Reject</button></li>
                  <li class="margin-bottom-10"><button type="button" class="btn btn-success waves-effect waves-light" onclick="NewsPublish(this)" data-id="{{$n_news->id}}"><i class="ico ico-left fa fa-check"></i>Accept</button></li>
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
            <input type="text" class="form-control" name="email" placeholder="{{$news_user->email}}" value="{{$news_user->email}}" readonly>
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
