<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Request new users</h2>
	<div class="content">
		<ul class="notice-list">
      @foreach($noti_users as $key => $NewUsers)
      @if($key == 3)
      @break
      @endif
			<li>
				<a href="/newusershow?id={{$NewUsers->id}}">
					<span class="avatar"><img src="http://latitudslp.com/{{$NewUsers->avarter}}" alt=""></span>
					<span class="name">{{$NewUsers->name}}</span>
					<span class="desc">{{$NewUsers->email}}</span>
					<span class="time">{{$NewUsers->updated_at}}</span>
				</a>
      </li>
      @endforeach
		</ul>
		<a href="/newuser-show" class="notice-read-more">See more users <i class="fa fa-angle-down"></i></a>
	</div>
</div>

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Request News publish</h2>
	<div class="content">
		<ul class="notice-list">
      @foreach($noti_news as $key=>$Noti_News)
      @if($key == 3)
      @break
      @endif
			<li>
				<a href="/newnewsshow?id={{$Noti_News->id}}">
					<span class="avatar"><img src="http://latitudslp.com/{{$Noti_News->img}}" alt=""></span>
					<span class="name" style="white-space: break-spaces;">{{$Noti_News->title}}</span>
					<span class="desc">{{$Noti_News->content}}</span>
					<span class="time" style="position: initial;">{{$Noti_News->updated_at}}</span>
				</a>
      </li>
      @endforeach
		</ul>
		<a href="/newnews-show" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
</div>