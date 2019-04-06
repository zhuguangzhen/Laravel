<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>轮播图管理</title>
    <link href="/css/admin/all.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    {{--<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" >--}}
    {{--<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->--}}
    {{--<script  type=”text/javascript” src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js" ></script>--}}
    {{--<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->--}}
    {{--<script type=”text/javascript” src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"  ></script>--}}

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css" type="text/css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="js/admin/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/js/admin/bootstrap/js/bootstrap.min.js"></script>
    <style>
        input{border: 0!important; background: #fff;}
        input[readonly]{background: #fff !important;}
        .uploadImages{border: 2px dotted #d9dadc;  display: block;  width: 800px;  height:200px;margin-left: 12px; }
        .div1{float: left;height: 41px;background: #6FB3E0;width: 144px;position:relative;margin-left: 12px}
        .div2{text-align:center;padding-top:12px;font-size:15px;font-weight:800}
        .inputstyle{ width: 144px; height: 41px;cursor: pointer;font-size: 30px;outline: medium none; position: absolute;filter:alpha(opacity=0);-moz-opacity:0; opacity:0; left:0px; top: 0px;margin-left: 10px}
        .setting{margin-top: 25px}
        .m-20{margin-left:20px;}
        .show-title{
            display: block;height:40px;border: 1px solid #ccc;background-color: #ccc;font-size: 25px;width:100%;
        }

    </style>
</head>
<body style="background-color: #e6ecf5">
<div class="container">
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <span class="show-title">首页头部banner</span>
            <div class="tabbable" id="tabs-832847">
                <ul class="nav nav-tabs">
                    @foreach($banner1 as $k=>$v)
                    <li class="@if($k==0) active @endif">
                        <a href="#panel-462364{{$k}}" data-toggle="tab">第{{$k+1}}张</a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($banner1 as $k=>$v)
                    <div class="tab-pane @if($k==0) active @endif" id="panel-462364{{$k}}">
                        <div class="setting-logo setting">
                            <span>网站banner(建议1920px * 405px)</span>
                            <form class="form-horizontal" method="post" action="group=admin&action=index&method=bannerOne" enctype='multipart/form-data'>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-8" aria-describedby="helpBlock">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img class="uploadImages" id="image{{$k+1}}" src="{{$path}}{{$v->image}}" /><!-- 图片模板  -->
                                                </div>
                                            </div><br>
                                            <div class="div1">
                                                <div class="div2">上传图片</div>
                                                <input type="hidden" name="name" id="" value="banner">
                                                <input type="hidden" name="wid" id="" value="1920">
                                                <input type="hidden" name="hei" id="" value="405">
                                                <input type="file" class="inputstyle" id="inputBox" name='file' onclick="javascript:loadImg(this,{{$k+1}})" onchange="Javascript:validate_img(this);">
                                            </div>

                                            <div class="div1 m-20">
                                                <div class="div2">提交保存</div>
                                                <input type="submit" class="inputstyle" name='file'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br />

                        <hr class="setting">
                    </div>
                    @endforeach
                </div>
            </div>

            <hr>
            <br>
            <div class="accordion" id="accordion-797683">
                <span class="show-title">首页中部展示图</span>
                @foreach($banner2 as $k=>$v)
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-797683" href="#accordion-element-255055{{$k}}">第{{$k+1}}张</a>
                    </div>
                    <div id="accordion-element-255055{{$k}}" class="accordion-body collapse">
                        <div class="accordion-inner">
                                    <div class="setting-logo setting">
                                        <span>网站banner(建议1000px * 379px)</span>
                                        <form class="form-horizontal" method="post" action="group=admin&action=index&method=bannerTwo" enctype='multipart/form-data'>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-8" aria-describedby="helpBlock">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <img class="uploadImages" id="image{{$k+$countbanenr1}}" src="{{$path}}{{$v->image}}" /><!-- 图片模板  -->
                                                            </div>
                                                        </div><br>
                                                        <div class="div1">
                                                            <div class="div2">上传图片</div>
                                                            <input type="hidden" name="name" id="" value="banner">
                                                            <input type="hidden" name="wid" id="" value="1000">
                                                            <input type="hidden" name="hei" id="" value="379">
                                                            <input type="file" class="inputstyle" id="inputBox" name='file' onclick="javascript:loadImg(this,{{$k+$countbanenr1}})" onchange="Javascript:validate_img(this);">
                                                        </div>

                                                        <div class="div1 m-20">
                                                            <div class="div2">提交保存</div>
                                                            <input type="submit" class="inputstyle" name='file'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    function loadImg($this,$n) {
        var name = 'image'+$n;
        var img = document.getElementById(name);
        $this.addEventListener("change",function(){
            var reader = new FileReader();
            reader.readAsDataURL($this.files[0]);//发起异步请求
            reader.onload = function(){
                //读取完成后，将结果赋值给img的src
                img.src = this.result
            }
        })
    }

    //判断图片类型
    $('button:eq(0)').click(function(){
        var f=$(".inputstyle").val();
        if (f=="") {
            alert("请上传图片");return false;
        } else {
            if (!/\.(jpg|png|JPG|PNG)$/.test(f)) {
                alert("图片类型必须是jpg,png中的一种");
                return false;
            }
        }

    });

    function validate_img(ele) {
        if (((ele.files[0].size).toFixed(2)) >= (2 * 1024 * 1024)) {
            alert("请上传小于2M的图片");
            var f=$(".inputstyle").val('');

            return false;
        }
    }

    $('.main-content').click(function(){
        $('.add_alert').css('display','none');
    });

    setInterval("myInterval()",2500);
    function myInterval(){
        $('.add_alert').css('display','none');
    }

</script>
    </div>
</body>
</html>