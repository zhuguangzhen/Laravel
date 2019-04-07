<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>


    <link href="/css/admin/all.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/js/admin/editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css" type="text/css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="/js/admin/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/js/admin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #e6ecf5">
<div class="container">
    <div class="row">
        <div class="span12">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        编号
                    </th>
                    <th>
                        标题
                    </th>
                    <th>
                        创建时间
                    </th>
                    <th>
                        状态
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $v)
                <tr class="info">
                    <td>
                        {{$v->id}}
                    </td>
                    <td>
                        {{$v->title}}
                    </td>
                    <td>
                        {{$v->create_at}}
                    </td>
                    <td>
                        @if($v->audtio == 1)
                            草稿
                        @else
                            正常
                        @endif
                    </td>
                    <td>
                        <a href="/group=admin&action=index&method=articlemanage?id={{$v->id}}">编辑</a> -|- 删除
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="page" style=" float: right;margin-right: 50px;">{{$list -> links()}}</div>
        </div>
    </div>
</div>
</body>
</html>