<div class="pull-right">
  {{-- <div class="ico-item">
    <a href="#" class="ico-item mdi mdi-magnify js__toggle_open search-btn" data-target="#searchform-header"></a>
    <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
  </div> --}}
  <a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open mobile-message-icon" data-target="#message-popup" style="font-size:12px"><span >{{$count_news}}</span></a>
  <a href="#" class="ico-item" style="font-size:12px"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span><span class="mobile-alert-icon" >{{$count}}</span></a>
  <a href="#" class="ico-item mdi mdi-logout " data-remodal-target="remodal"></a>
</div>

<div class="remodal" data-remodal-id="remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="width:500px; border-radius: 5px">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<div class="remodal-content">
		<h2 id="modal1Title">Log out</h2>
		<p id="modal1Desc">
      <img src="assets/images/alert_1.png" alt="" data-nsfw-filter-status="sfw" class="notificaion-icon" style="visibility: visible;">
		</p>
	</div>
	<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
	<button data-remodal-action="confirm" class="remodal-confirm" onclick = "Logout()">OK</button>
</div>