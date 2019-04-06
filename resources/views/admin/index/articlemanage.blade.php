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
    </style>
</head>

<body style="background-color: #e6ecf5">
<div class="book_con01">
    <form id="form_demo"  method="post" action="group=admin&action=index&method=addpicture" enctype='multipart/form-data' >   <p class="book_p">
            <table class="book_table" border="1" cellpadding="10">
                <tr>
                    <td colspan="6"><label class="td_label"><center><h1>文章管理</h1></center></label></td>
                </tr>
                <tr>
                    <td colspan="6">
                        <label class="td_label">文章标题：</label>
                        <input type="text" name="title" id="" class="article-title">
                    </td>
                </tr>
                <tr>
                    <td colspan="6"><label class="td_label">文章简介：</label><br>
                        <textarea name="desc" id="" cols="100%" rows="5" class="article-desc"></textarea>
                    </td>
                </tr>
                <tr><td colspan="6">
                        <textarea  class="textArae" id="editor" >文章内容</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <span>是否设置侧边栏推荐：</span>
                        <input type="radio" name="recomme" id="" value="1" >是
                        <input type="radio" name="recomme" id="" value="0" checked>否
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <span>选择展示模块：</span>
                        <select name="nid" id="select-nid" onchange="javascript:ismains(this.options[this.options.selectedIndex].value)" >
                            <option value="0">不在首页展示</option>
                            <option value="1">首页展示111</option>
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
                    <td colspan="6" id="ismain">
                        <span>首页模块的首位图：</span>
                        <input type="radio" name="ismain" id="" value="1" >是
                        <input type="radio" name="ismain" id="" value="0" checked>否
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
