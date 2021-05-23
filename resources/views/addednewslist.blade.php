@extends('layout.index')
@section('content')

<div class="main-menu">
  @include('component.header')

  @include('component.navigation')
</div>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">News Management</h1>
	</div>
  @include('component.notification')
  
</div>

@include('component.top')

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-xs-12">
				<div class="box-content card white" id="new_newscomnet">
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
                  <input type="email" class="form-control" id="inp-type-2" placeholder="Email" readonly>
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
        </div>
      </div>
      
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Uploaded News</h4>
					
					<table id="example" class="table table-striped table-bordered display" style="width:100%;  vertical-align: middle;">
						<thead>
							<tr >
                <th class="table-index" style="width:10%">Title</th>
                <th class="table-index" style="width:20%">Image</th>
								<th class="table-index" style="width:50%">Content</th>
								<th class="table-index" style="width:10%">Register Date</th>
                <th class="table-index" style="width:10%">Delete</th>
							</tr>
						</thead>
						<tbody>
             @foreach($added_news as $Added_News)
							<tr >
                <td class="table-content"><img src="http://latitudslp.com/{{$Added_News->img}}" alt="" data-nsfw-filter-status="sfw" class="news-img"></td>
                <td class="table-content">{{$Added_News->title}}</td>
                <td class="news-content">{{$Added_News->content}}</td>
								<td class="table-content">{{$Added_News->updated_at}}</td>
								<td class="table-content">
                  <ul class="list-inline">
                    <li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-twitter" onclick="window.location.href='/news-detail?id={{$Added_News->id}}'"><i class="mdi mdi-eye"></i></button></li>
                    <li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-youtube" data-remodal-target="remodal_1" data-id = {{$Added_News->id}} id="data" onclick="AddedNewsRemove(this)"><i class="mdi mdi-delete"></i></button></li>
                  </ul>
                </td>
              </tr>
              @endforeach
						</tbody>
					</table>
				</div>
      </div>
		</div>
	</div>
</div>

<div class="remodal" id="news-cancel" data-remodal-id="remodal_1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div class="remodal-content">
		<h2 id="modal1Title">Remove</h2>
		<p id="modal1Desc">
      Please check all data again. are you really going to remove this user?
		</p>
	</div>
	<button data-remodal-action="cancel" class="remodal-cancel" onclick="Cancel_UsersRemove()">Cancel</button>
	<button data-remodal-action="confirm" class="remodal-confirm" onclick="News_Remove()">OK</button>
</div>





@endsection
