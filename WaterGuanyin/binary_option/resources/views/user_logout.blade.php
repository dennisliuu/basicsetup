@extends("front_layouts")
@section("content")
<div class="content-container"><div class="page"><nav class="tabs"><a class="tab" href="/user-info">個人資料</a><a class="tab" href="/user/deals">交易日誌</a><a class="tab" href="/user/edit">編輯個人資料</a><a class="tab active" href="/user/session">可用時段</a></nav><div class="active-session-page"><div class="vertical-scroll" style="height: calc(100% - 55px);"><div class="custom-scrollbar"><div class="custom-scroll-handle" style="height: 1720.26px; transform: translateY(0px);"><div class="inner-handle"></div></div></div><div class="inner-scroll-container"><div><div class="table-view"><div class="progressbar"></div><div class="active-sessions"><div class="terminate-session-block"><div class="btn btn-primary">終止</div><div>登出本裝置以外的所有裝置</div></div><div class="cards-table-flex"><div class="item-block animated-item-fast success"><div class="images-items-block"><img src="https://static.expertoption.com/devices/desktop.png"></div><div class="info-items-block"><div>Mac OS X 10.14 Chrome</div><div class="time time-current">當前時段</div></div></div><div class="item-block animated-item-fast"><div class="images-items-block"><img src="https://static.expertoption.com/devices/desktop.png"></div><div class="info-items-block"><div>Mac OS X 10.14 Chrome</div><div class="time">大约 4 小时</div></div></div></div></div></div></div></div></div></div></div></div>
@endsection