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
				<div class="box-content">
					<h4 class="box-title">User List</h4>
				
					<table id="example" class="table table-striped table-bordered display" style="width:100%; text-align:center; vertical-align: middle;">
						<thead>
							<tr >
                <th style="text-align:center">Image</th>
                <th style="text-align:center">Name</th>
								<th style="text-align:center">Email</th>
								<th style="text-align:center">Register Date</th>
                <th style="text-align:center">Status</th>
                <th style="text-align:center">Edit</th>
							</tr>
						</thead>
						
						<tbody>

              @foreach($users as $Users)
							<tr >
                <td class="table-content"><img src="http://latitudslp.com/{{$Users->avarter}}" alt="" data-nsfw-filter-status="sfw" ></td>
								<td class="table-content">{{$Users->email}}</td>
								<td class="table-content">{{$Users->name}}</td>
								<td class="table-content">{{$Users->created_at}}</td>
								<td class="table-content">
                  <p>accepted</p>
                </td>
								<td class="table-content">
                  <ul class="list-inline">
                    <li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-twitter" onclick="window.location.href='/user-detail?id={{$Users->id}}'"><i class="mdi mdi-eye"></i></button></li>
                    <li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-youtube" data-remodal-target="remodal_1" data-id = {{$Users->id}} id="data" onclick="UserRemove(this)"><i class="mdi mdi-delete"></i></button></li>
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

<div class="remodal user-cancel" data-remodal-id="remodal_1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div class="remodal-content">
		<h2 id="modal1Title">Remove</h2>
		<p id="modal1Desc">
      Please check all data again. are you really going to remove this user?
		</p>
	</div>
	<button data-remodal-action="cancel" class="remodal-cancel" onclick="Cancel_UsersRemove()">Cancel</button>
	<button data-remodal-action="confirm" class="remodal-confirm" onclick="Users_Remove()">OK</button>
</div>



@endsection
