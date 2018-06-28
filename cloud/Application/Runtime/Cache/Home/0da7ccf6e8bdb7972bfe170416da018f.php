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
    <title>新建店面</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 店面管理 <span class="c-gray en">&gt;</span> 新建店面 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <form action="" method="post" class="form form-horizontal responsive" id="demoform">
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>品牌：</label>
            <div class="formControls col-5"> <span class="select-box">
                    <select class="select" size="1" id="com_id" name="com_id" datatype="*" nullmsg="请选择品牌！"> 
                    </select>
                    </span> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>店铺名称：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" placeholder="请输入店铺名" name="dept_name" id="dept_name" datatype="*4-16" nullmsg="店铺名不能为空">
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>店铺负责人：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" placeholder="请输入负责人姓名" name="dept_charge_name" id="dept_charge_name" datatype="*4-16" nullmsg="负责人姓名不能为空">
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>负责人联系方式：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" placeholder="请输入负责人联系方式" name="dept_charge_tel" id="dept_charge_tel" datatype="*4-16" nullmsg="负责人联系方式不能为空">
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>负责人身份证号：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" placeholder="请输入负责人身份证号" name="dept_charge_id" id="dept_charge_id" datatype="*4-16" nullmsg="负责人身份证号不能为空">
            </div>
            <div class="col-5"> </div>
        </div>

        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>店铺邮箱：</label>
            <div class="formControls col-5">
                <input type="email" class="input-text" placeholder="请输入店铺邮箱" name="dept_charge_email" id="dept_charge_email" datatype="*4-16" nullmsg="店铺邮箱不能为空">
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>所在城市：</label>
            <div id="city_4" name="dept_add">
                <select class="prov" id="prov4" data-code="220000"></select>
                <select class="city" id="city4" data-code="220100"></select>
                <select class="dist" id="area4" data-code="220104"></select>
            </div>

            <div class="col-5"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>详细地址：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" placeholder="请输入详细地址" name="dept_detail_add" id="dept_detail_add" datatype="*4-16" nullmsg="详细地址不能为空">
            </div>
            <div class="col-5"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><b class="star">*</b>营业执照：</label>
            <div class="formControls col-5">
                <input type="text" class="input-text" placeholder="请输入营业执照" name="business_license" id="business_license" datatype="*4-16" nullmsg="营业执照不能为空">
            </div>
            <div class="col-5"> </div>
        </div>

        <div class="row cl">
            <div class="col-5 col-offset-2 form-label">

                <button onClick="submitDepartment();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>&nbsp;&nbsp;
                <button onClick="location.reload();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
            <div class="col-5"> </div>
        </div>
    </form>
</body>


<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/lib/bootstrap-modal/2.2.4/bootstrap-modal.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/myCommon.js"></script> 
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/department.js"></script> 
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/H-ui.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/city2.js"></script>
<script type="text/javascript" src="/cloud/Application/Home/View/Public/js/citySelect2.js"></script>
<script>
var selectVal = new CitySelect({
    data: data,
    provId: "#prov4",
    cityId: '#city4',
    areaId: '#area4'
}); 
// var selectVa2 = new CitySelect({
//     data: data,
//     provId: "#prov5",
//     cityId: '#city5',
//     areaId: '#area5',
//     isSelect: false
// });
</script>

</html>