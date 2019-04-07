<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>


    <link href="/css/admin/all.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
    <style>
        .froala-element{
            height:500px;
        }
        .article-title{
            width:80%;height:35px;font-size: 24px;outline:medium;border-width: 0;
        }
        .article-desc{
            font-size: 20px;color:#ccc;
        }
        #ismain{
            display:none;
        }
        .button{
            background-color:#6FB3E0;height:41px;width:144px;font-size:16px;border: 1px solid #6FB3E0;font-weight: bold;
        }
        input{border: 0!important; background: #fff;}
        input[readonly]{background: #fff !important;}
        .uploadImages{border: 2px dotted #d9dadc;  display: block;  width: 160px;  height:100px; }
        .div1{float: left;height: 41px;background: #6FB3E0;width: 144px;position:relative;}
        .div2{text-align:center;padding-top:12px;font-size:15px;font-weight:800}
        .inputstyle{ width: 144px; height: 41px;cursor: pointer;font-size: 30px;outline: medium none; position: absolute;filter:alpha(opacity=0);-moz-opacity:0; opacity:0; left:0px; top: 0px;}
    </style>
</head>

<body style="background-color: #e6ecf5">
<div class="book_con01">
    <form id="form_demo"  method="post" action="group=admin&action=index&method=articlein?id=@if(!empty($list)){{$list->id}}@endif" enctype='multipart/form-data' >   <p class="book_p">
            <table class="book_table" border="1" cellpadding="10">
                <tr>
                    <td colspan="6"><label class="td_label"><center><h1>文章管理</h1></center></label></td>
                </tr>
                <tr>
                    <td colspan="6">
                        <label class="td_label">文章标题：</label>
                        <input type="text" name="title" id="" class="article-title" value="@if(!empty($list)){{$list->title}} @endif">
                    </td>
                </tr>
                <tr>
                    <td colspan="6"><label class="td_label">文章简介：</label><br>
                        <textarea name="desc" id="" cols="100%" rows="5" class="article-desc">@if(!empty($list)){{$list->desc}} @endif</textarea>
                    </td>
                </tr>
                <tr><td colspan="6">
                        <textarea  class="textArae" id="editor" name="contents" >@if(!empty($list)){{$list->content}} @endif</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <span>是否设置侧边栏推荐：</span>
                        <input type="radio" name="recomme" id="" value="1" @if(!empty($list)&& $list->recomme == 1) checked @endif>是
                        <input type="radio" name="recomme" id="" value="0" @if((!empty($list)&& $list->recomme == 0) || empty($list)) checked @endif>否
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <span>选择展示模块：</span>
                        <select name="nid" id="select-nid" onchange="javascript:ismains(this.options[this.options.selectedIndex].value)" >
                            <option value="0">不展示在首页</option>
                            @foreach($info as $k=>$v)
                            <option value="{{$v->id}}">{{$v->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" id="ismain">
                        <span>是否设置为首页文章模块的首位：</span>
                        <input type="radio" name="ismain" id="" value="1" >是
                        <input type="radio" name="ismain" id="" value="0" checked>否
                    </td>
                </tr>
                <tr>
                    <td colspan="6" id="">
                        <span>文章简介图：</span>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-8" aria-describedby="helpBlock">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img class="uploadImages" id="image1" src="" /><!-- 图片模板  -->
                                            </div>
                                        </div><br>
                                        <div class="div1">
                                            <div class="div2">上传图片</div>
                                            <input type="hidden" name="name" id="" value="logo">
                                            <input type="hidden" name="wid" id="" value="89">
                                            <input type="hidden" name="hei" id="" value="66">
                                            <input type="file" class="inputstyle" id="inputBox" name='file' onclick="javascript:loadImg(this,1)" onchange="Javascript:validate_img(this);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
        </table>
        </p>
        <p class="book_foot">
            <input type="submit" class="button" value="提交保存"/>
            <input type="button" class="button" value="存为草稿"/>
            <input type="button" class="button" value="取消"/>
        </p>
    </form>
</div>
<script  src="/js/admin/jquery/jQuery-2.2.0.min.js"></script>
<script src="/js/admin/editor/js/froala_editor.min.js"></script>

<script src="/js/admin/editor/js/plugins/tables.min.js"></script>
<script src="/js/admin/editor/js/plugins/lists.min.js"></script>
<script src="/js/admin/editor/js/plugins/colors.min.js"></script>
<script src="/js/admin/editor/js/plugins/media_manager.min.js"></script>
<script src="/js/admin/editor/js/plugins/font_family.min.js"></script>
<script src="/js/admin/editor/js/plugins/font_size.min.js"></script>
<script src="/js/admin/editor/js/plugins/block_styles.min.js"></script>
<script src="/js/admin/editor/js/plugins/video.min.js"></script>
<script src="/js/admin/date/js/laydate.js"></script>
<script>
    $(function(){
        $('#editor').editable({inlineMode: false, alwaysBlank: true})
    });
    function ismains(val){
        if(val!=0){
            $('#ismain').show();
        }else{
            $('#ismain').hide();
        }
    }

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
</script>
<script>
    !function(){
        laydate.skin('danlan');//
        laydate({elem: '#demo'});
        laydate({elem: '#demo1'});//
    }();
</script>
</body>
</html>
