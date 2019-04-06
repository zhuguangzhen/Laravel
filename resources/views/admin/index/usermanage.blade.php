<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员设置</title>


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
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>
                        编号
                    </th>
                    <th>
                        登陆名称
                    </th>
                    <th>
                        最近登陆时间
                    </th>
                    <th>
                        权限
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $v)
                <tr class="info">
                    <td>
                        {{$v->id}}
                    </td>
                    <td>
                        {{$v->userName}}
                    </td>
                    <td>
                        {{$v->loginTime}}
                    </td>
                    <td>
                        @if($v->status=='1')超级管理员@else 管理员 @endif
                    </td>
                    <td>
                        <a href="">|编辑--</a>|<a href="">--删除|</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <table class="table table-bordered" contenteditable="true">
            <thead>
            <tr>
                <th>修改当前账号密码</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="info">
                    <form class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail" contenteditable="true">原密码</label>
                            <div class="controls">
                                <input id="inputPassword" placeholder="Password"  type="text">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword" contenteditable="true">新密码</label>
                            <div class="controls">
                                <input id="inputPassword" placeholder="newPassword" type="password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <br>
                                <button type="submit" class="btn" contenteditable="true">提交</button>
                            </div>
                        </div>
                    </form>
                </td>

            </tr>


            </tbody>
        </table>


    </div>
</div>
</body>
</html>
