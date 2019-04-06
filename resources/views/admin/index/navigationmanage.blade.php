<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>导航列表</title>


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
<div class="container-fluid">
    <div class="row">
        <div class="span12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>
                        编号
                    </th>
                    <th>
                        导航名称
                    </th>
                    <th>
                        创建时间
                    </th>
                    <th>
                        修改时间
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $k=>$v)
                <tr class="info">
                    <td>
                        {{$v['order']}}
                    </td>
                    <td>
                        {{$v['name']}}
                    </td>
                    <td>
                        {{$v['create_at']}}
                    </td>
                    <td>
                        {{$v['update_at']}}
                    </td>
                    <td>
                        |<a href="">新增子导航</a>|——|<a href="">编辑</a>|——|<a href="group=admin&action=index&method=navigatdel?id={{$v['id']}}&type=one">删除</a>|
                    </td>
                </tr>
                @if(!empty($v['child']))
                    @foreach($v['child'] as $vel)
                        <tr class="success">
                            <td>
                                &nbsp;&nbsp;|---{{$vel['order']}}
                            </td>
                            <td>
                                &nbsp;&nbsp;|---{{$vel['name']}}
                            </td>
                            <td>
                                {{$vel['create_at']}}
                            </td>
                            <td>
                                {{$vel['update_at']}}
                            </td>
                            <td>
                                |<a href="">编辑</a>|——|<a href="group=admin&action=index&method=navigatdel?id={{$vel['id']}}&type=two">删除</a>|
                            </td>
                        </tr>
                    @endforeach
                @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>