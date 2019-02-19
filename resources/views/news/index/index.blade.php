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

	<div id="tiao"  style="@if(!$important_image['isshow'])display:none;@endif" >
		<div id="gundong">
			<div class="gundong_1">
				<table border="0" cellpadding="0" cellspacing="0">
						<tbody><tr>
							<td style="height:38px;"><img src="system/templates/zsyy/images/zdgz.jpg"></td>
							<td><div style="margin-left:10px;">
							<script>
								var marqueeContent=new Array();   //滚动主题
													
								marqueeContent[0]='<a href="#" target="_blank">鹊经堂</a>';
								marqueeContent[1]='<a href="#" target="_blank">鹊经堂</a>';
								marqueeContent[2]='<a href="#" target="_blank">鹊经堂</a>';
								marqueeContent[3]='<a href="#" target="_blank">鹊经堂</a>';
								marqueeContent[4]='<a href="#" target="_blank">鹊经堂</a>';
								
								var marqueeInterval=new Array();  //定义一些常用而且要经常用到的变量
								var marqueeId=0;
								var marqueeDelay=4000;
								var marqueeHeight=38;
								function initMarquee() {
								 var str=marqueeContent[0];
								 document.write('<div id=marqueeBox style="overflow:hidden;height:'+marqueeHeight+'px" onmouseover="clearInterval(marqueeInterval[0])" onmouseout="marqueeInterval[0]=setInterval('startMarquee()',marqueeDelay)"><div>'+str+'</div></div>');
								 marqueeId++;
								 marqueeInterval[0]=setInterval("startMarquee()",marqueeDelay);
								 }
								function startMarquee() {
								 var str=marqueeContent[marqueeId];
								  marqueeId++;
								 if(marqueeId>=marqueeContent.length) marqueeId=0;
								 if(marqueeBox.childNodes.length==1) {
								  var nextLine=document.createElement('DIV');
								  nextLine.innerHTML=str;
								  marqueeBox.appendChild(nextLine);
								  }
								 else {
								  marqueeBox.childNodes[0].innerHTML=str;
								  marqueeBox.appendChild(marqueeBox.childNodes[0]);
								  marqueeBox.scrollTop=0;
								  }
								 clearInterval(marqueeInterval[1]);
								 marqueeInterval[1]=setInterval("scrollMarquee()",10);
								 }
								function scrollMarquee() {
								 marqueeBox.scrollTop++;
								 if(marqueeBox.scrollTop%marqueeHeight==marqueeHeight){
								  clearInterval(marqueeInterval[1]);
								  }
								 }
								initMarquee();
							</script>
		
						  </div></td>
						</tr>
				</tbody></table>
			</div>
		</div>
	</div>
    <br>
    <!--  -->
<div id="content_1" style="@if(!$content_1['isshow'])display:none;@endif">
  <div class="shnew">
	<div >
       <div class="shoutitle">
         <div class="shoutuan">新闻</div>
         <div class="right"><a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=2&amp;l=1&amp;page=1">浏览更多新闻 &gt;</a> </div>
       </div>
       
        <div class="shoutxuan">
           <ul>
           @foreach($newslist as $k=>$nv)
           <li><a href="#" onmouseover="easytabs('1', {{$k+1}});" onfocus="easytabs('1', {{$k+1}});" onclick="return false;" title="" id="tablink{{$k+1}}" class="tab{{$k+1}} tabactive">{{$nv->title}}</a></li>
           @endforeach
           </ul>
       </div>

@foreach($ismin as $k=>$v)
<div id="tabcontent{{$k+1}}" style=" @if($k== 0) display: block; @else display: none; @endif">
        <div class="tujian">
        
          <div class="tu"><img src="{{$path}}article/{{$v->image}}"></div>
          <div class="turight">
            <div class="turtitle">{{$v->title}}</div>
            
            <div class="tucontent">
            <span>&nbsp;<a href="">更多&gt;&gt;</a></span> 
            </div>
          </div>
           
        </div>      
     <div class="newl">
     <ul>
     @foreach($notmain as $ks=>$vs)
     @if($ks == $v->nid)
     	@foreach($vs as $m)
       <li><div class="lititle"><a href="">{{$m->title}}</a></div><div class="times">{{$m->create}}</div></li> 
     	@endforeach
     @endif
	@endforeach
     </ul>
    </div>
</div>

@endforeach
</div>


</div>        
    <div class="shzhuan" style="@if(!$content_1['isshow'])display:none;@endif">
    <div class="sz">&nbsp;</div>
      <div>
      <div class="div1">
      <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=28&amp;l=1&amp;page=1"><img src="system/templates/zsyy/images/xx1.jpg" width="263" height="84"></a>
      </div>
      <div class="div2">
      <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=41&amp;l=1&amp;page=1"><img src="system/templates/zsyy/images/xx2.jpg" width="263" height="76"></a>
      </div>
      <div class="div3">
      <a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=9&amp;l=1&amp;page=1"><img src="system/templates/zsyy/images/xx3.jpg" width="263" height="105"></a>
      </div>
      </div>
    </div>  



    </div> 
	<div id="content_2" style="@if(!$content_2['isshow'])display:none;@endif"><img src="{{$path}}setting/{{$content_2['image']}}"></div>

	<div id="content_3" style="@if(!$content_3['isshow'])display:none;@endif">
		<div class="content_3_left">
			@foreach($product as $v)
			<ul>
				<dt>
					<div class="content_3_icon">
						<img src="{{$path}}setting/{{$v->icon}}">
					</div>
					<div class="content_3_title">
						<a href="">{{$v->title}}</a>
					</div>
				</dt>
				<dd>
					<div class="content_3_pic">
						<a href=""><img src="{{$path}}article/{{$v->image}}"></a>
					</div>
					<div class="content_3_txt">
						<p><a href="" target="_blank">{{$v->description}}</a>...</p>
					</div>				</dd>
			</ul>
			@endforeach

		</div> 
		<div class="content_3_right">
			<div class="content_3_1">
				<div class="content_3_right_1">
					<div class="content_3_icon">
						<img src="system/templates/zsyy/images/content_3_icon5.jpg">
					</div>
					<div class="content_3_title">
						<a href="index.php?m=content&amp;c=index&amp;f=lists&amp;catid=63&amp;l=1&amp;page=1">视频</a>
					</div>				
				</div>
                
				<div class="content_3_right_2">
					<embed width="254" height="150" type="application/x-shockwave-flash" src="http://player.youku.com/player.php/sid/XOTA2MTIxMDgw/v.swf" autoplay="autoplay" allowfullscreen="true" allownetworking="all" allowscriptaccess="always">
				</div>
            
                <div class="content_3_right_2">
                	<br>
                <img src="{{$path}}setting/niebei.png" alt="">
                </div>
                  <div class="clear"></div>
			</div>
          
			<div class="content_3_2">
				<a href=""><img src="{{$path}}setting/qjt.png"></a>
			</div>
		</div>
	</div>
    <div class="clear"></div>
    
    
    
    
    <div id="content_4"  style="@if(!$content_4['isshow'])display:none;@endif">
    <div class="content_4_1">
     <img src="system/templates/zsyy/images/he1.jpg">
    </div>
     <div class="content_4_2">
     山东鹊经堂品牌核心产业
    </div>
     <div class="content_4_3">
     &nbsp;
    </div>
    <div class="clear"></div>
    
    



    
      <div class="content4">
     

      
    <div class="TabContent">

<!-- 	<div id="myTab_Content0" style="display: none;"><a href="http://www.sdzsyyjt.com/index.php?m=content&amp;c=index&amp;f=lists&amp;catid=12&amp;l=1&amp;page=1}" target="_blank"><img src="/uploadfile/image/20190211/20160313150020_74356.jpg" alt="" height="380" width="1000"></a></div>
	<div id="myTab_Content1" class="none" style="display: none;"><img src="/uploadfile/image/20170904/20170904150955_77489.jpg" alt=""><br></div>
    <div id="myTab_Content2" class="none" style="display: none;"><p align="center"><img src="/uploadfile/image/20190211/20190111165633_46592.jpg" alt=""></p></div>
	 -->
	 @foreach($Bbanner as $k=>$v)
	 <div id="myTab_Content{{$k}}" class="none" style="@if($k==0)display: block;@else display: none; @endif">
	 	<div style="text-align:center;">
	 		<a href="" target="_blank"><img src="{{$path}}{{$v->image}}" width="1000" height="379" alt=""></a> 
	 	</div>
	 </div>
	 @endforeach
	</div>	

      <div class="nTab">
		<div class="TabTitle">
		<ul id="myTab">
			@foreach($Bbanner as $k=>$v)
			<li class="@if($k==0)active @else normal @endif" onmouseover="nTabs(this,{{$k}});">{{$v->title}}</li>
			@endforeach	
		</ul>
		</div>
  </div>
</div>
    </div>

	<div id="content_5" style=" @if(!$content_5['isshow'])display:none;@endif  @if($videolenth > 4 ) height:{{ceil($videolenth/4)*250}}px; @endif ">
		<div class="content_5_2" >
         <div class="video_image">
          <a href=""><img src="{{$setting_path.$video_img['image']}}"></a>
         </div>
         <div class="honorlest">
     <ul>
         <li>
            <div class="honorz">
             <div class="honorpic"><img src="uploadfile/image/20190211/201610150937060.png"></div>
             <div>五四共青团证书</div>
            </div>
            <div class="clear"></div>
           </li>
                          
         <li>
            <div class="honorz">
             <div class="honorpic"><img src="uploadfile/image/20190211/201603050528400.jpg"></div>
             <div>菏泽市市长质量奖</div>
            </div>
            <div class="clear"></div>
           </li>
                          
         <li>
            <div class="honorz">
             <div class="honorpic"><img src="uploadfile/image/20190211/201505110955510.png"></div>
             <div>企业信用级评价AAA级信用企业</div>
            </div>
            <div class="clear"></div>
           </li>
                          
         <li>
            <div class="honorz">
             <div class="honorpic"><img src="uploadfile/image/20190211/201505111020190.png"></div>
             <div>高新技术企业</div>
            </div>
            <div class="clear"></div>
           </li>
               <li>
                   <div class="honorz">
                       <div class="honorpic"><img src="uploadfile/image/20190211/201505111020190.png"></div>
                       <div>高新技术企业</div>
                   </div>
                   <div class="clear"></div>
               </li>

               <li>
                   <div class="honorz">
                       <div class="honorpic"><img src="uploadfile/image/20190211/201505111020190.png"></div>
                       <div>高新技术企业</div>
                   </div>
                   <div class="clear"></div>
               </li>
         </ul>

         </div>
    </div>
</div>
    
       <div class="clear"></div>
	
	<div id="content_6" style="@if(!$content_6['isshow'])display:none;@endif">
    
       <div class="content_6_1">
         <div class="yuanlr">
               <div class="yuanspic">
                 {{--<img src="/uploadfile/image/20190211/20180228101010_66848.jpg" width="294" height="164" alt="">--}}
                   <img src="{{$path}}store/{{$store['0']->image}}" alt="" height="160" width="295">
               </div>
                <div class="yuanxpic">
                <p align="center">
	{{--<img src="/uploadfile/image/20190211/20150830101805_36745.jpg" width="293" height="173" alt=""> --}}
                    <img src="{{$path}}store/{{$store['1']->image}}" alt="" height="160" width="295">
</p>
                </div>
         </div>
        
         <div class="yuanm">
         
               <div class="yuanspic5">
                   <img src="{{$path}}store/{{$store['2']->image}}" alt="" height="160" width="295">
               </div>

               <div class="yuanpic6">
               <a href=""><img src="{{$setting_path.$yuanpic6['image']}}"></a>
               </div>

                <div class="yuanspic7">
                <img src="{{$path}}store/{{$store['3']->image}}" alt="" height="160" width="295">
                </div>
         
         </div>
         
         <div class="yuanlrr">
               <div class="yuanspic">
                <p align="center">
                    <img src="{{$path}}store/{{$store['4']->image}}" alt="" height="160" width="295">
</p>
               </div>
                <div class="yuanxpic">
               <div style="text-align:center;">
                   <img src="{{$path}}store/{{$store['5']->image}}" alt="" height="160" width="295">
</div>
                </div>
         </div>
         
          
       
       </div>
       
       
       {{--<div class="content_7">--}}
         {{--<ul>--}}
         {{--<img src="/uploadfile/image/20190211/20141111091018_74432.jpg" alt="">--}}
             {{--<img src="/uploadfile/image/20190211/20141111091040_53324.jpg" alt="">--}}
             {{--<img src="/uploadfile/image/20190211/20141111091055_80878.jpg" alt="">--}}
             {{--<img src="/uploadfile/image/20190211/20141111091128_27001.jpg" alt="">--}}
             {{--<img src="/uploadfile/image/20190211/20141111091145_38487.jpg" alt="">--}}
         {{--</ul>--}}
         
         {{--<div class="he">--}}
          {{--<img src="system/templates/zsyy/images/he.png">--}}
         {{--</div>--}}
       {{--</div>--}}
     
       
       
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