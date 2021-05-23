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
					<h4 class="box-title">All News</h4>
					<table id="example" class="table table-striped table-bordered display" style="width:100%;  vertical-align: middle;">
						<thead>
							<tr >
                <th class="table-index" style="width:10%">Title</th>
                <th class="table-index" style="width:20%">Image</th>
								<th class="table-index" style="width:60%">Content</th>
								<th class="table-index" style="width:10%">Register Date</th>
							</tr>
						</thead>
						<tbody>
             @foreach($total_news as $News)
							<tr >
                <td class="table-content"><img src="http://latitudslp.com/{{$News->img}}" alt="" data-nsfw-filter-status="sfw" class="news-img"></td>
                <td class="table-content">{{$News->title}}</td>
                <td class="news-content">{{$News->content}}</td>
								<td class="table-content">{{$News->updated_at}}</td>
              </tr>
              @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection
