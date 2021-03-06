<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
    <link href="/cloud/Application/Home/View/Public/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/cloud/Application/Home/View/Public/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
    <link href="/cloud/Application/Home/View/Public/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <link href="/cloud/Application/Home/View/Public/css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <title>新增菜系</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 菜单管理 <span class="c-gray en">&gt;</span> 新增菜系 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>

    <form action="" method="post" class="form form-horizontal responsive" id="demoform">
        <div class="row cl"></div>
        <div class="row cl"></div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>品牌：</label>
            <div class="formControls col-5">
             <span class="select-box">
					<select id="com_id" class="select" size="1" name="demo1" datatype="*" nullmsg="请选择品牌！">
					</select>
			 </span>
		    </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>菜系名：</label>
            <div class="formControls col-5">
                <input id="menuStyleName" type="text" class="input-text" placeholder="请填写菜系名" name="username" id="username" datatype="*4-16" nullmsg="菜系不能为空">
            </div>
            <div class="row cl"></div>
            <div class="row cl"></div>
            <div class="row cl">
                <div class="col-5 col-offset-2 form-label">

                    <button onClick="submitmenuStyle();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>&nbsp;&nbsp;
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
                <div class="col-5"> </div>
            </div>
    </form>

</body>


<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modal.js"></script>

<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/H-ui.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/myCommon.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/cookmenu.js"></script>

</html>