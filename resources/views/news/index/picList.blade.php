<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>山东鹊经堂有限公司官网</title>
<!--跳转代码--> 
 <script type="text/javascript">
        var system = {
            win: false,
            mac: false,
            xll: false,
            ipad: false
        };
        var p = navigator.platform;
        system.win = p.indexOf("Win") == 0;
        system.mac = p.indexOf("Mac") == 0;
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
        system.ipad = (navigator.userAgent.match(/iPad/i) != null) ? true : false;
        if (system.win || system.mac || system.xll || system.ipad) {} else {
            // window.location.href = "http://m.sdzsyyjt.com/";  //添加手机网站地址将m.heima58.com替换成你们的手机站地址
        }
    </script>
 <!--跳转代码-->
<meta name="keywords" content="鹊经堂,鹊经堂置业,鹊经堂医疗器械,鹊经堂,鹊经堂热疗贴,鹊经堂贴膏,嘉业堂,山东鹊经堂,鹊经堂医疗器械,济宁鹊经堂">
<meta name="description" content=" 山东鹊经堂有限公司组建于2010年7月,公司坐落于美丽的城市————————济宁。">
<link href= '/css/news/layout.css' rel="stylesheet" type="text/css">
<script type="text/javascript" src='/js/news/jquery-1.8.0.min.js'></script>
<script type="text/javascript" src='/js/news/jquery.jslides.js'></script>
<script type="text/javascript" src='/js/news/xiala.js'></script>
<script type="text/javascript" src='/js/news/a.js'></script>
<script type="text/javascript" src='/js/news/c.js'></script>
</head>

<body>
<div id="container">
	<div id="header">
		<div class="logo" style = " @if(!$logo['isshow'])display:none; @endif"><img src="{{$setting_path.$logo['image']}}"></div>
		<div class="header_2">
			<div class="header_21">
				<table border="0" cellpadding="0" cellspacing="0" style="float:right;">
					<tbody><tr>
					
						<td style="@if(!$wechat['isshow'])display:none; @endif"><img src="{{$setting_path.$wechat['image']}}"></td>
						<td style="width:120px; @if(!$wechat['isshow'])display:none; @endif"><a href="">官方微信</a></td>
			
						<td style="@if(!$sina['isshow'])display:none; @endif"><img src="{{$setting_path.$sina['image']}}"></td>
						<td style="width:130px;@if(!$sina['isshow'])display:none; @endif"><a href="">官方微博</a></td>
						<script type="text/javascript" language="javascript">
//function c() {
//  if ($("#key").val() == "")
//  {
//		 alert("搜索产品内容不能为空！");
//		  $("#key").focus();
//		  return false;
//  }
//}
</script>
					 <form id="form1" name="form1" method="get" action="index.php"></form>
<td>
<input type="text" name="key" id="key" class="xed" style="background:url(system/templates/zsyy/images/search_txt.jpg) no-repeat; border:0px; width:150px; height:24px; line-height:24px;"></td>
<td><input name="" type="submit" value="" style="background:url(system/templates/zsyy/images/search_btn.jpg) no-repeat; border:0px; width:23px; height:24px; " onclick="return c();">
 <input name="f" type="hidden" id="f" value="search">
                <input name="l" type="hidden" id="l" value="1">
                <input name="catid" type="hidden" id="catid" value="3">
</td>

                    
                    </tr>
				</tbody></table>
			</div>
            
      <div class="nav">
<ul>
<li style="width:60px;"><a class="link" href="/">首页</a></li>
 @foreach($navigation as $v)
<li class="mainmenu">
  <a class="link" href="{{$v->link}}">
        {{$v->name}}
  </a>

 <dl style="display: none;">
 	@foreach($navigationlist as $val)
 	@if($v->id == $val->pid)
    <dd><a href="{{$val->link}}">{{$val->name}}</a></dd> 
    @endif
    @endforeach
 </dl>
 </li>
 @endforeach
	</ul>
</div>      

</div>
	</div>
	<div id="banner">

    <div id="full-screen-slider">
	<ul id="slides">
     	@foreach($bannerlist as $v)
		<li style="background: url(&quot;{{$path.$v->image}}&quot;) center top no-repeat; z-index: 900; display: block;"><a href="{{$v->link}}" target="_blank"></a></li>	
		@endforeach
	</ul>

</div>
    
            
	</div>





<div class="bottom">
	<div id="footer">
      <div style=" height:30px; line-height:30px; padding-top:10px; text-align:center; font-size:13px;">
       <a href="/">首页</a>&nbsp;|&nbsp;
       <a href="">走进鹊经堂</a> &nbsp;|&nbsp;
       <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=2&amp;l=1&amp;page=1">新闻中心</a> &nbsp;|&nbsp;
       <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=3&amp;l=1&amp;page=1">主营业务</a> &nbsp;|&nbsp;
       <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=4&amp;l=1&amp;page=1">商务服务</a> &nbsp;|&nbsp;
       <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=28&amp;l=1&amp;page=1">企业文化</a> &nbsp;|&nbsp;
       <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=5&amp;l=1&amp;page=1">人才战略</a> &nbsp;|
       <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=7&amp;l=1&amp;page=1">服务交流</a> 
      </div>
      
       <div style=" height:30px; line-height:30px;  text-align:left;">
       <span style="color:#F00;">友情链接：</span>
       <a href="/" target="_blank">点击申请友情链接</a>&nbsp;
       
      </div>
      
       <div class="left" style="@if(!$bottom_left['isshow'])display:none;@endif">
      <img src="/system/templates/zsyy/images/bottom.png">
      </div>
       <div class="bcon">
       版权所有：山东鹊经堂 备ICP80005189<br>  全国统一电话：0530-4582888<br>
        公司地址：山东省济宁市
      </div>
       <div class="right" style="@if(!$bottom_right['isshow'])display:none;@endif">
      <img src="system/templates/zsyy/images/er.png">
      </div>
      
      
    </div>
</div>

</div>




</body></html>