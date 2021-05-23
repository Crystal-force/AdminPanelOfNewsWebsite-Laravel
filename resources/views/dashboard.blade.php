@extends('layout.index')
@section('content')

<div class="main-menu">
  @include('component.header')

  @include('component.navigation')
</div>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Dashboard</h1>
	</div>
  @include('component.notification')
  
</div>

@include('component.top')

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">Total Users</h4>
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="/user-management">View</a></li>
							<li><a href="#">Remove</a></li>
						</ul>
					</div>
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
						<div class="right-content">
							<h2 class="counter text-info">{{$users}}</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Total News</h4>
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="/total-news">View</a></li>
							<li><a href="#">Remove</a></li>
						</ul>
					</div>
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
						<div class="right-content">
							<h2 class="counter text-success">{{$news}}</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Categories</h4>
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">View</a></li>
							<li><a href="#">Remove</a></li>
						</ul>
					</div>
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-3" class="left-content"></div>
						<div class="right-content">
							<h2 class="counter text-danger">{{$categories}} </h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
            <i class="ico small  mdi mdi-application"></i>
            <h6 class="counter">CIUDAD VALLES</h6>
            <h4 class="counter">{{$ciu}}</h4>
            <a href = "/ciudad-valles"><p class="text text-white">View</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-info text-white">
					<div class="statistics-box with-icon">
            <i class="ico small mdi mdi-blur-linear"></i>
            <h6 class="counter">SLP</h6>
            <h4 class="counter">{{$slp}}</h4>
            <a href = "/slp"><p class="text text-white">View</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-danger text-white">
					<div class="statistics-box with-icon">
            <i class="ico small mdi mdi-book-open-variant"></i>
            <h6 class="counter">HUASTECA</h6>
						<h4 class="counter">{{$hua}}</h4>
            <a href = "/huasteca"><p class="text text-white">View</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
            <i class="ico small mdi mdi-calendar-blank"></i>
            <h6 class="counter">RIO VERDE</h6>
						<h4 class="counter">{{$rio}}</h4>
            <a href = "/rio-verde"><p class="text text-white">View</p></a>
					</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box-content bg-danger text-white">
          <div class="statistics-box with-icon">
            <i class="ico small mdi mdi-cast-connected"></i>
            <h6 class="counter">TAMAZUNCHALE</h6>
            <h4 class="counter">{{$tam}}</h4>
            <a href = "/tamazunchale"><p class="text text-white">View</p></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
            <i class="ico small mdi mdi-checkbox-multiple-blank-outline"></i>
            <h6 class="counter">POLICIA</h6>
						<h4 class="counter">{{$pol}}</h4>
            <a href = "/polocia"><p class="text text-white">View</p></a>
					</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
            <i class="ico small mdi mdi-chart-pie"></i>
            <h6 class="counter">DE TODO</h6>
            <h4 class="counter">{{$det}}</h4>
            <a href = "/de-todo"><p class="text text-white">View</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
  document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

@endsection
