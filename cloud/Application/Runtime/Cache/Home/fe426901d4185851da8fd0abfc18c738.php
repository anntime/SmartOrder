<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
    <title>菜品信息</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 菜单管理 <span class="c-gray en">&gt;</span> 菜品信息 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="menuList">
        <table class="table table-border table-bg">
            <thead>
                <tr>
                    <th class="">ID</th>
                    <th class="">所属菜系</th>
                    <th class="">菜名</th>
                    <th class="">菜品图片</th>
                    <th class="">单价</th>
                    <th class="">规格</th>
                    <th class="">置顶</th>
                    <th class="">操作</th>

                </tr>
            </thead>
            <tbody id="menuListTable">

            </tbody>
        </table>
    </div>
    <!-- 修改菜品 -->
    <div id="myModal1">
        <div id="myModal1" class="modal fade in myModal" style="z-index: 1060;">
            <div class="modal-header">
                <h3 id="myModalLabel">修改菜品</h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo U('menuModify','','');?>" method="post" class="form form-horizontal responsive" id="menuModify" enctype="multipart/form-data" target="hidden_frame">
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>品牌：</label>
                        <div class="formControls col-9"> <span class="select-box">
                        <select id="com_id" class="select" size="1" name="com_id" datatype="*" nullmsg="请选择菜系！">  
                        </select>
                        </span>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>菜系：</label>
                        <div class="formControls col-9"> <span class="select-box">
                        <select class="select" size="1" id="styleid" name="styleid" datatype="*" nullmsg="请选择菜系！">  
                        </select>
                        </span>
                        </div>
                    </div>
                    <div class="row cl" style="display:none">
                        <label class="form-label mlwidth1"><b class="star">*</b>ID：</label>
                        <div class="formControls col-9">
                            <input name="id" id="id">
                        </div>

                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>菜名：</label>
                        <div class="formControls col-9">
                            <input type="text" class="input-text" placeholder="前请输入菜名" name="cookname" id="cookname" datatype="*4-16" nullmsg="菜名不能为空">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>单价：</label>
                        <div class="formControls col-9">
                            <input type="text" class="input-text" placeholder="前请输入价钱" name="price" id="price" datatype="*4-16" nullmsg="价钱不能为空">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>规格：</label>
                        <div class="formControls col-9"> <span class="select-box">
                        <select class="select" size="1" name="standard" datatype="*" nullmsg="请选择菜品规格！"> 
                            <option value="盘">盘</option>
                            <option value="灌">灌</option>
                            <option value="碗">碗</option>
                        </select>
                        </span> </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>推荐：</label>
                        <div class="formControls col-9"> <span class="select-box">
                        <select class="select" size="1" name="recommend" id="recommend" datatype="*" nullmsg="请选择是否推荐！"> 
                            <option value="推荐">推荐</option>
                            <option value="普通">普通</option>
                        </select>
                        </span> </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>图片：</label>
                        <div class="formControls col-9">
                            <img id="picture" name="picture" src="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>修改图片：</label>
                        <div class="controls formControls col-9">
                            <input type="file" class="text input" name="image" id="image" value="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth"><b class="star">*</b>简介：</label>
                        <div class="formControls col-9">
                            <textarea name="introduce" id="introduce" cols="" rows="" class="textarea" placeholder="请简单介绍菜品......最少输入10个字符" datatype="*10-500" nullmsg="备注不能为空！" onKeyUp="textarealength(this,500)"></textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/500</p>
                        </div>
                    </div>
                    <div class="row cl">
                        <div class="col-5 col-offset-2 form-label">

                            <button onClick="modifyMenuList();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>&nbsp;&nbsp;
                            <button onClick="location.reload();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                        </div>
                        <div class="col-5"> </div>
                    </div>
                </form>
            </div>

        </div>
            <div class="modal-backdrop fade in" style="z-index: 1050;"></div>
            </div>

        <!-- /弹出框——修改菜品 -->


</body>


<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modal.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/myCommon.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/cookmenu.js"></script>


<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/H-ui.js"></script>

</html>