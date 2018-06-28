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
    <title>店面信息</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 店面管理 <span class="c-gray en">&gt;</span> 店面信息 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="departmentList">
        <table class="table table-border table-bg">
            <thead>
                <tr>
                    <th class="">ID</th>
                    <th class="">品牌</th>
                    <th class="">店铺名</th>
                    <th class="">负责人</th>
                    <th class="">负责人联系方式</th>
                    <th class="">负责人身份证</th>
                    <th class="">店铺邮箱</th>
                    <th class="">地址</th>
                    <th class="">营业执照</th>
                    <th class="">编辑</th>
                </tr>
            </thead>
            <tbody id="departmentList">
            </tbody>
        </table>
    </div>


    <!-- 修改-店面信息 -->
    <div id="myModal">
        <div id="myModal2" class="modal fade in myModal" style="z-index: 1060;">
            <div class="modal-header">
                <h3 id="myModalLabel">修改店面信息</h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo U('departmentModify','','');?>" method="post" class="form form-horizontal responsive" id="demoform">
                    <input id="deptId" type="text" style="display:none">
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>品牌：</label>
                        <div class="formControls col-8"> <span class="select-box">
                    <select class="select" size="1" id="com_id" name="com_id" datatype="*" nullmsg="请选择品牌！"> 
                    </select>
                    </span> </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>店铺名称：</label>
                        <div class="formControls col-8">
                            <input type="text" class="input-text" placeholder="请输入店铺名" name="dept_name" id="dept_name" datatype="*4-16" nullmsg="店铺名不能为空">
                        </div>

                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>店铺负责人：</label>
                        <div class="formControls col-8">
                            <input type="text" class="input-text" placeholder="请输入负责人姓名" name="dept_charge_name" id="dept_charge_name" datatype="*4-16" nullmsg="负责人姓名不能为空">
                        </div>

                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>负责人联系方式：</label>
                        <div class="formControls col-8">
                            <input type="text" class="input-text" placeholder="请输入负责人联系方式" name="dept_charge_tel" id="dept_charge_tel" datatype="*4-16" nullmsg="负责人联系方式不能为空">
                        </div>

                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>负责人身份证号：</label>
                        <div class="formControls col-8">
                            <input type="text" class="input-text" placeholder="请输入负责人身份证号" name="dept_charge_id" id="dept_charge_id" datatype="*4-16" nullmsg="负责人身份证号不能为空">
                        </div>

                    </div>

                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>店铺邮箱：</label>
                        <div class="formControls col-8">
                            <input type="email" class="input-text" placeholder="请输入店铺邮箱" name="dept_charge_email" id="dept_charge_email" datatype="*4-16" nullmsg="店铺邮箱不能为空">
                        </div>

                    </div>
                    <div class="row cl" id="oldCity">
                        <label class="form-label mlwidth1"><b class="star">*</b>所在城市：</label>
                        <div class="formControls col-7">
                            <input type="text" class="input-text" placeholder="请输入所在城市" name="dept_add" id="dept_add" datatype="*4-16" nullmsg="所在城市不能为空" disabled="true">
                        </div>
                        <input type="button" value="编辑" onclick="cityModify()">
                    </div>
                    
                    <div class="row cl" id="newCity" >
                        <label class="form-label mlwidth1"></label>
                        <div id="city_4" name="dept_add">
                            <select class="prov marRight" id="prov4" data-code="220000"></select>
                            <select class="city marRight" id="city4" data-code="220100"></select>
                            <select class="dist marRight" id="area4" data-code="220104"></select>
                        </div>


                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>详细地址：</label>
                        <div class="formControls col-8">
                            <input type="text" class="input-text" placeholder="请输入详细地址" name="dept_detail_add" id="dept_detail_add" datatype="*4-16" nullmsg="详细地址不能为空">
                        </div>

                    </div>
                    <div class="row cl">
                        <label class="form-label mlwidth1"><b class="star">*</b>营业执照：</label>
                        <div class="formControls col-8">
                            <input type="text" class="input-text" placeholder="请输入营业执照" name="business_license" id="business_license" datatype="*4-16" nullmsg="营业执照不能为空">
                        </div>

                    </div>

                    <div class="row cl">
                        <div class="col-5 col-offset-4 form-label">

                            <button onClick="modifyDepartmentList();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>&nbsp;&nbsp;
                            <button onClick="location.reload();" class="btn btn-default radius" type="button" onClick="location.reload();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="modal-backdrop fade in" style="z-index: 1050;"></div>
    </div>

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