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
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">HUASTECA</h4>
					
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
             @foreach($hua as $Hua)
							<tr >
                <td class="table-content"><img src="http://latitudslp.com/{{$Hua->img}}" alt="" data-nsfw-filter-status="sfw" class="news-img"></td>
                <td class="table-content">{{$Hua->title}}</td>
                <td class="news-content">{{$Hua->content}}</td>
								<td class="table-content">{{$Hua->updated_at}}</td>
								<td class="table-content">
                  <ul class="list-inline">
                    <li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-twitter" onclick="window.location.href='/news-detail?id={{$Hua->id}}'"><i class="mdi mdi-eye"></i></button></li>
                    <li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-youtube" data-remodal-target="newsremove" data-id = {{$Hua->id}} id="data" onclick="NewsRemove(this)"><i class="mdi mdi-delete"></i></button></li>
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



<div class="remodal" data-remodal-id="newsremove" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="width:500px; border-radius: 5px;">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div class="remodal-content">
		<h3 id="modal1Title">Remove</h3>
		<p id="modal1Desc">
      Do you really remove this news list? please check again!
		</p>
	</div>
	<button data-remodal-action="cancel" class="remodal-cancel" onclick="CancelRemove()">Cancel</button>
	<button data-remodal-action="confirm" class="remodal-confirm" onclick="ConfirmRemove()">OK</button>
</div>




@endsection
