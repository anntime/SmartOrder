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
<title>新增菜品</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 菜单管理 <span class="c-gray en">&gt;</span> 新增菜品 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>

		<form action="<?php echo U('menuAdd','','');?>" method="post" class="form form-horizontal responsive" id="menuAdd" enctype="multipart/form-data"target="hidden_frame">
			<div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>品牌：</label>
				<div class="formControls col-5"> <span class="select-box">
					<select id="com_id" class="select" size="1" name="com_id" datatype="*" nullmsg="请选择菜系！">  
					</select>
					</span> </div> 
			</div>
			<div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>菜系：</label>
				<div class="formControls col-5"> <span class="select-box">
					<select class="select" size="1" id="styleid" name="styleid" datatype="*" nullmsg="请选择菜系！">  
					</select>
					 
				</div> 
			</div>
            <div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>菜名：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" placeholder="前请输入菜名" name="cookname" id="cookname" datatype="*4-16" nullmsg="菜名不能为空">
				</div>
				<div class="col-5"> </div>
			</div>
            <div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>单价：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" placeholder="前请输入价钱" name="price" id="price" datatype="*4-16" nullmsg="价钱不能为空">
				</div>
				<div class="col-5"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>规格：</label>
				<div class="formControls col-5"> <span class="select-box">
					<select class="select" size="1" name="standard" datatype="*" nullmsg="请选择菜品规格！"> 
						<option value="盘"selected>盘</option>
						<option value="灌">灌</option>
						<option value="碗">碗</option>
					</select>
					</span> </div>
				<div class="col-5"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>推荐：</label>
				<div class="formControls col-5"> <span class="select-box">
					<select class="select" size="1" name="recommend" datatype="*" nullmsg="请选择是否推荐！"> 
						<option value="推荐"selected>推荐</option>
						<option value="普通">普通</option>
					</select>
					</span> </div>
				<div class="col-5"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>上传图片</label>
                    <div class="controls formControls col-5">
                        <input type="file" class="text input" name="image" id="image" value="">
                    </div>
				<div class="col-5"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2"><b class="star">*</b>简介：</label>
				<div class="formControls col-5">
					<textarea name="introduce" id="introduce" cols="" rows="" class="textarea"  placeholder="请简单介绍菜品......最少输入10个字符" datatype="*10-500" nullmsg="备注不能为空！" onKeyUp="textarealength(this,500)"></textarea>
					<p class="textarea-numberbar"><em class="textarea-length">0</em>/500</p>
				</div>
				<div class="col-5"> </div>
			</div>
			<div class="row cl">
				<div class="col-5 col-offset-2 form-label">
					
					<button onClick="addMenuList();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>&nbsp;&nbsp;
					<button onClick="location.reload();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
				</div>
				
			</div>
		</form>
		<!--隐藏刷新域-->
		<iframe style="display:none" name='hidden_frame' id="hidden_frame"></iframe> 
		</div>
		</span>
 
</body>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modal.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/H-ui.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/myCommon.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/cookmenu.js"></script>
</html>