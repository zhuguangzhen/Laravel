<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>运营后台</title>

    <link href="/css/admin/demo.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="/css/admin/index.css">
<link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <!--[if IE]>

    <style type="text/css">
        li.remove_frame a {
            padding-top: 5px;
            background-position: 0px -3px;
        }
    </style>

    <![endif]-->

    <script type="text/javascript" src="/js/admin/jquery.min.js"></script>
    <script type="text/javascript" src="/js/admin/jquery.qrcode.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function fixHeight() {
                var headerHeight = $("#switcher").height();
                $("#iframe").attr("height", $(window).height()-54+ "px");
            }
            $(window).resize(function () {
                fixHeight();
            }).resize();

            $('.icon-monitor').addClass('active');

            $(".icon-mobile-3").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width-3');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-mobile-2").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width-2');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-mobile-1").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('mobile-width');
                $('.icon-tablet,.icon-mobile,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-tablet").click(function () {
                $("#by").css("overflow-y", "auto");
                $('#iframe-wrap').removeClass().addClass('tablet-width');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });

            $(".icon-monitor").click(function () {
                $("#by").css("overflow-y", "hidden");
                $('#iframe-wrap').removeClass().addClass('full-width');
                $('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
                $(this).addClass('active');
                return false;
            });
        });
    </script>

    <script type="text/javascript">
	function Responsive($a) {
		if ($a == true) $("#Device").css("opacity", "100");
		if ($a == false) $("#Device").css("opacity", "0");
		$('#iframe-wrap').removeClass().addClass('full-width');
		$('.icon-tablet,.icon-mobile-1,.icon-monitor,.icon-mobile-2,.icon-mobile-3').removeClass('active');
		$(this).addClass('active');
		return false;
	};
    </script>
	
</head>
<body id="by">

<div id="switcher">
    <div class="center">
        <ul>
            <div id="Device">
                <li class="device-monitor"><a href="javascript:"><div class="icon-monitor"></div></a></li>1
                <li class="device-mobile"><a href="javascript:"><div class="icon-tablet"></div></a></li>2
                <li class="device-mobile"><a href="javascript:"><div class="icon-mobile-1"></div></a></li>3
                <li class="device-mobile-2"><a href="javascript:"><div class="icon-mobile-2"></div></a></li>4
                <li class="device-mobile-3"><a href="javascript:"><div class="icon-mobile-3"></div></a></li>5
            </div>
            <li class="top2">
                <a href="#"></a>
                <div class="vm">
                    <div id="output"></div>
                    <p style="color:#808080;margin:10px 0 0 0;">扫一扫，直接在手机上打开</p>
                </div>
            </li>
            <li class="logoTop">
                <a href="http://www.17sucai.com/pins/31001.html"></a>            <script type="text/javascript">
                jQuery('#output').qrcode({width:150,height: 150,text: window.location.href});
            </script>
            <li class="remove_frame"><a href="http://www.17sucai.com/preview/1257759/2018-10-11/简洁登录页面/index.html" title="移除框架"></a></li>
        </ul>
    </div>
</div>

	<div class="content">
		<div class="bidTitle">运营后台</div>
		<div class="logCon">
			<span>账号:</span>
			<input class="bt_input" type="text">
			<span>密码:</span>
			<input class="bt_input" type="text">
			<button type="button" class="logingBut">登录</button>
			</div>
		</div>
</body>
<script type="text/javascript">
	$('.logingBut').click(function(){
		$.ajax({
                        'url': '/group=waiterapp&action=payment&method=paylogajax?pull=1&urltime=' + urltime + '&time=' + time + '&start=' + start + '&end=' + end + '&payWay=' + payWay + '&payOrigin=' + payOrigin + '&status=' + status + '&cheapType=' + cheapType,
                        'dataType': 'json',
                        'method': 'POST',
                        'data': {},
                        // 'async': false,
                        'success': function (data) {

                            var upOrDown = 1;
                            if (data.info != '') {

                                // $('#paylog .payLogfristlist').removeClass('payLogfristlist');
                                payLogHtml(Html, data.info, upOrDown, $content, data.paydetail, data.memberDetail);

                                payLogInfoInnerHtml(data.info, data.infocount);


                                $(page).find(".content").attr('data-urltime', data.urltime);
                                // console.log($('.payLogWeek '))
                                for (var i = 0; i < $('.payLogWeek ').length; i++) {
                                    // console.log($('.payLogWeek ')[i]);
                                    if ($('.payLogWeek ')[i]) {
                                    }
                                }

                            } else {
                                // var html = payLogHtml(Html, data.info, upOrDown, $content);
                                $(page).find(".content").attr('data-urltime', data.urltime);

                                return
                            }
                        }
                    });
	});
</script>
</html>
