<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>鹊经堂</title>
    <link href="/css/admin/all.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">

    <style>
        input{border: 0!important; background: #fff;}
        input[readonly]{background: #fff !important;}
        .uploadImages{border: 2px dotted #d9dadc;  display: block;  width: 306px;  height:96px; }
        .div1{float: left;height: 41px;background: #6FB3E0;width: 144px;position:relative;}
        .div2{text-align:center;padding-top:12px;font-size:15px;font-weight:800}
        .inputstyle{ width: 144px; height: 41px;cursor: pointer;font-size: 30px;outline: medium none; position: absolute;filter:alpha(opacity=0);-moz-opacity:0; opacity:0; left:0px; top: 0px;}
        .setting{margin-top: 25px}
        .m-20{margin-left:20px;}
.setting-bottom{margin-bottom: 100px}
    </style>
</head>

<body style="background-color: #e6ecf5">
    <div class="setting">
            <div class="setting-logo setting">
                <span>网站logo(建议306px * 96px)</span>
                    <form class="form-horizontal" method="post" action="group=admin&action=index&method=addpicture" enctype='multipart/form-data'>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8" aria-describedby="helpBlock">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="uploadImages" id="image1" src="{{$setting_path.$logo['image']}}" /><!-- 图片模板  -->
                                        </div>
                                    </div><br>
                                    <div class="div1">
                                        <div class="div2">上传图片</div>
                                        <input type="hidden" name="name" id="" value="logo">
                                        <input type="hidden" name="wid" id="" value="306">
                                        <input type="hidden" name="hei" id="" value="96">
                                        <input type="file" class="inputstyle" id="inputBox" name='file' onclick="javascript:loadImg(this,1)" onchange="Javascript:validate_img(this);">
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
            <div class="setting-div1 setting">
                <span>集团专题图一(建议263px * 84px)</span>
                <form class="form-horizontal" method="post" action="group=admin&action=index&method=addpicture" enctype='multipart/form-data'>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8" aria-describedby="helpBlock">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="" width="263px" height="84px" id="image2" src="{{$setting_path.$div1['image']}}" /><!-- 图片模板  -->
                                    </div>
                                </div><br>
                                <div class="div1">
                                    <div class="div2">上传图片</div>
                                    <input type="file" class="inputstyle" name='file' onclick="javascript:loadImg(this,2)" onchange="Javascript:validate_img(this);">
                                </div>

                                <div class="div1 m-20">
                                    <div class="div2">提交保存</div>
                                    <input type="hidden" name="name" id="" value="div1">
                                    <input type="hidden" name="wid" id="" value="263">
                                    <input type="hidden" name="hei" id="" value="84">
                                    <input type="submit" class="inputstyle" name='file'>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        <br />
        <hr class="setting">

        <div class="setting-div1 setting">
            <span>集团专题图二(建议263px * 76px)</span>
            <form class="form-horizontal" method="post" action="group=admin&action=index&method=addpicture" enctype='multipart/form-data'>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-8" aria-describedby="helpBlock">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="" id="image3" width="263px" height="76px" src="{{$setting_path.$div2['image']}}" /><!-- 图片模板  -->
                                </div>
                            </div><br>
                            <div class="div1">
                                <div class="div2">上传图片</div>
                                <input type="file" class="inputstyle" name='file' onclick="javascript:loadImg(this,3)" onchange="Javascript:validate_img(this);">
                            </div>

                            <div class="div1 m-20">
                                <div class="div2">提交保存</div>
                                <input type="hidden" name="name" id="" value="div2">
                                <input type="hidden" name="wid" id="" value="263">
                                <input type="hidden" name="hei" id="" value="84">
                                <input type="submit" class="inputstyle" name='file'>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br />
        <hr class="setting">
        <div class="setting-div1 setting">
            <span>集团专题图三(建议263px * 105px)</span>
            <form class="form-horizontal" method="post" action="group=admin&action=index&method=addpicture" enctype='multipart/form-data'>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-8" aria-describedby="helpBlock">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="" id="image4" src="{{$setting_path.$div3['image']}}" width="263px" height="105px"/><!-- 图片模板  -->
                                </div>
                            </div><br>
                            <div class="div1">
                                <div class="div2">上传图片</div>
                                <input type="file" class="inputstyle" name='file' onclick="javascript:loadImg(this,4)" onchange="Javascript:validate_img(this);">
                            </div>

                            <div class="div1 m-20">
                                <div class="div2">提交保存</div>
                                <input type="hidden" name="name" id="" value="div3">
                                <input type="hidden" name="wid" id="" value="263">
                                <input type="hidden" name="hei" id="" value="84">
                                <input type="submit" class="inputstyle" name='file'>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <br />
        <hr class="setting">

        <div class="setting-content5 setting">
            <span>视频头部图(建议1000px * 82px)</span>
            <form class="form-horizontal" method="post" action="group=admin&action=index&method=addpicture" enctype='multipart/form-data'>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-8" aria-describedby="helpBlock">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="" id="image5" src="{{$setting_path.$video_img['image']}}" width="1000px" height="90px"/><!-- 图片模板  -->
                                </div>
                            </div><br>
                            <div class="div1">
                                <div class="div2">上传图片</div>
                                <input type="file" class="inputstyle" name='file' onclick="javascript:loadImg(this,5)" onchange="Javascript:validate_img(this);">
                            </div>

                            <div class="div1 m-20">
                                <div class="div2">提交保存</div>
                                <input type="hidden" name="name" id="" value="video_img">
                                <input type="hidden" name="wid" id="" value="1000">
                                <input type="hidden" name="hei" id="" value="82">
                                <input type="submit" class="inputstyle" name='file'>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br />
        <hr class="setting">

        <div class="setting-bottom">
            <div class="setting-sina setting">
                <span>微博：</span>
                <form method="post" action="group=admin&action=index&method=addpicture">
                <input type="hidden" name="name" value="sina">
                <input name="isshow" type="radio" @if($sina['isshow']=='1')checked="checked"@endif/>显示
                <input name="isshow" type="radio"  @if($sina['isshow']!='1')checked="checked"@endif/>不显示
                ------连接地址：<input type="text" name="link" value="{{$sina['link']}}" id="" style="width: 260px;">
                    <input type="submit" name="提交" id="">
                </form>
            </div>

            <div class="setting-wechat setting">
                <span>微信：</span>
                <form method="post" action="group=admin&action=index&method=addpicture">
                <input type="hidden" name="name" value="wechat">
                <input name="isshow" type="radio" @if($wechat['isshow']=='1')checked="checked"@endif/>显示
                <input name="isshow" type="radio" @if($wechat['isshow']!='1')checked="checked"@endif/>不显示
                ------连接地址：<input type="text" name="link" value="{{$wechat['link']}}" id="" style="width: 260px;">
                <input type="submit" name="提交" id="">
                </form>
            </div>
        </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        //图片预览
//        var fileInput = document.querySelector('input[type=file]');
//                console.log(fileInput);
//            previewImg = document.querySelector('img');
//        fileInput.addEventListener('change',function(){
//            var file = this.files[0];
//            var reader = new FileReader();
//            reader.addEventListener("load", function(){
//                previewImg.src = reader.result;
//            }, false);
//            reader.readAsDataURL(file);
//        }, false);
        function loadImg($this,$n) {
//            var img = document.getElementById("img");
//            console.log($n);
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
                    alert("图片类型必须是jpg,png中的一种")
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
</body>
</html>
