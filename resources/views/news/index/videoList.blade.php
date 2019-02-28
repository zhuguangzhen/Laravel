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
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        .list-right{ width:860px}
        .list-info{border:1px solid white;height:180px;width:240px;float:left;margin-left: 30px;display: inline-block;margin-top: 50px;margin-bottom: 80px}
        .list-word{word-wrap:break-word ;width:250px;display:block;border: 1px solid white;text-align:left;}
        .list-left,.list-right,.bottom{float: left;}
        .left-inp{
            width: 140px;height:30px;
        }
        .left-submit{
            background-color: white;height:30px;width:33px;border-radius: 2px;
        }
        .search{
            margin-left: 35px;margin-top: 30px;
        }
        .hr2{
            width:200px;margin-left: 25px;margin-top: 25px;
        }
        .left-ul,.left-tj{
            margin-left: 50px;line-height: 30px;
        }
        .tj-info{
            border: 1px solid #C7C0C0;width:140px;padding: 5px;margin-left: 45px;
        }
        .list-tb,.tj-info{
            color: black;
        }
        .list-left{
            width:250px;border: 1px solid #C7C0C0;margin-left: 100px;margin-top:30px;color: black;padding-bottom: 20px;
        }
        .list-right{
            border: 1px solid #C7C0C0;margin-left: 20px;margin-top:30px;display: inline-block;height:auto;padding-left: 10px;
        }
        .page-in{
            width:800px;float: right;
        }
        .page{
            float: right;margin-right: 50px;
        }
        .list-time{
            float:left;margin-left: 10px;margin-top: 20px;margin-bottom: 20px;color:#0abbb9;
        }
        .list-show{
            margin-top: 16px;
        }
        .list-num{
            float:right;margin-top: 3px;
        }
    </style>
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
    <div class="list">
        <div class="list-left">
            <div class="search">
                <input type="text" name="" id="" class="left-inp" placeholder="搜索">
                <input type="submit" value="查询 " id="left-sub" class="left-submit">
            </div>
            <hr class="hr2">
            <div>
                <ul class="left-ul">
                    @foreach($recomme['navigation'] as $v)
                        <a href="{{$v['links']}}"><li class="list-tb">{{$v['name']}}</li></a>
                    @endforeach
                </ul>
            </div>
            <hr class="hr2">
            <div>
                <span class="left-tj">为你推荐</span>
                <div>
                    <ul>
                        @if(empty($recomme['article']))
                            <a href="/group=news&action=index&method=articlelist"><li class="tj-info">暂时没有推荐文章 <br> 点我回到文章列表</li></a>
                        @else
                            @foreach($recomme['article'] as $v)

                                <a href="/group=news&action=index&method=articleDetail?id={{$v->id}}"><li class="tj-info">{{$v->title}}</li></a>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

        </div>

        <div class="list-right">
            <div class="list-body">
                @if(count($article)<1)
                    <center>暂时没有收录相关信息</center>
                @else
                    <ul>
                        @foreach($article as $v)
                            <a href="/group=news&action=index&method=videodetail?id={{$v->id}}">
                                <li class="list-info">
                                    <image src="{{$path}}video/{{$v->image}}" width="250px" height="200px"></image>
                                    <span class="list-word">{{$v->title}}</span>
                                    <div>
                                        <ul >
                                            <li class="list-time">{{date('Y-m-d',strtotime($v->create_at))}}</li>
                                            <li class="list-time">作者:管理员</li>
                                            <li class="list-time list-show"><img src="{{$path}}setting/show.png" alt=""> <div class="list-num">{{$v->showNum}}</div></li>
                                        </ul>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                @endif

            </div>
            <div class="page-in">
                <div class="page">{{$article -> links()}}</div>
            </div>

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

