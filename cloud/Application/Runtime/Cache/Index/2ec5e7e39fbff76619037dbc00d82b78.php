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
    <title>商家入驻-基本信息</title>
    <link href="/cloud/Application/Index/View/Public/css/qt_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/cloud/Application/Index/View/Public/css/h_b_c.css">
    <link href="/cloud/Application/Index/View/Public/css/WdatePicker.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/cloud/Application/Index/View/Public/css/jquery.css">
    <link rel="stylesheet" type="text/css" href="/cloud/Application/Index/View/Public/css/uploadify.css">

    <script src="/cloud/Application/Index/View/Public/js/jquery-1.js" type="text/javascript"></script>
    <script src="/cloud/Application/Index/View/Public/js/settled.js" type="text/javascript"></script>
    <script src="/cloud/Application/Index/View/Public/js/jquery.js" type="text/javascript"></script>
    <script src="/cloud/Application/Index/View/Public/js/ss.js" type="text/javascript"></script>
    <script src="/cloud/Application/Index/View/Public/js/WdatePicker.js" type="text/javascript"></script>
    <script src="/cloud/Application/Index/View/Public/js/checkIdentityCard.js" type="text/javascript"></script>
 
</head>

<body>
    <!-- <form action="" id="queryForm" name="query" method="get"> -->
        <input name="step_status" value="03" type="hidden">
        <input name="supplierApplyIntention.member_id" value="72003729522" type="hidden">
        <input id="mobileRegex" value="^(13[0-9]{9})|(14[57][0-9]{8})|(15[012356789][0-9]{8})|(170[0-9]{8})|(18[0-9]{9})$" type="hidden">
        <div class="gome-layout-area pb50 clearfix">
            <ul class="steps clearfix">
                <li  class="1li first cur ok"><b>1</b><span class="1span going" id="1red"></span><em class="f">用户注册</em>
                </li>
                <li class="2li"><b>2</b><span class="2span" id="2red"></span><em class="f">填写公司信息</em>
                </li>
                <li class="3li"><b>3</b><span class="3span" id="3red"></span><em class="f">填写店铺信息</em>
                </li>
                <li class="4li"><b>4</b><span class="4span" id="4red"></span><em class="f">资质上传</em>
                </li>
                <li class="5li last"><b>5</b><em class="f">等待审核</em>
                </li>
            </ul>

            <div class="settled-agreement-table pb50" id="1div">
                <div class="agreement-title"><span>联系方式</span>
                </div>
                <table class="information-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <th class="fw700 pr7">卖家入驻联系人信息
                            </th>
                            <td class="color01">请务必填写正确</td>
                        </tr>
                        <tr>
                            <th><em class="em-red">*</em>联系人姓名：
                            </th>
                            <td width="495">
                                <input maxlength="20" id="contacterName" name="supplierApplyIntention.contacterName" class="input260 fl" onblur="checkEmpty(this.value,'contacterName','联系人姓名','');" type="text"><span id="contacterNameSpan" style="display:none"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><em class="em-red">*</em>联系人手机：
                            </th>
                            <td>
                                <input maxlength="11" id="contacterMobile" name="supplierApplyIntention.contacterMobile" class="input260 fl" onblur="checkEmpty(this.value,'contacterMobile','联系人手机','mobile');" type="text"><span id="contacterMobileSpan" style="display:none"></span></td>
                        </tr>

                        <tr>
                            <th><em class="em-red">*</em>联系人电子邮箱：
                            </th>
                            <td>
                                <input maxlength="32" id="email" name="supplierApplyIntention.email" class="input260 fl" onblur="checkEmpty(this.value,'email','联系人电子邮箱','email');" type="text"><span id="emailSpan" style="display:none"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><em class="em-red">*</em>创建密码：
                            </th>
                            <td>
                                <input maxlength="32" id="text" name="supplierApplyIntention.password" class="input260 fl"  type="password"><span id="emailSpan" style="display:none"></span>
                            </td>
                        </tr>
                        <tr>
                            <th><em class="em-red">*</em>确认密码：
                            </th>
                            <td>
                                <input maxlength="32" id="text" name="supplierApplyIntention.password" class="input260 fl"  type="password"><span id="emailSpan" style="display:none"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="gome-btn">
                    <a href="javascript:nextStep();" onclick="nextSettled(1)" class="gome-btn-red">下一步,填写公司信息</a>
                </div>
            </div>
        <div class="settled-agreement-table pb50" id="2div">
        	<div class="agreement-title"><span>填写品牌信息</span></div>
            <div class="table-part clearfix">
            	<div class="table-part-title">品牌信息</div>
                <table class="information-table1" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <th><em class="em-red">*</em>品牌名称：</th>
                        <td><input maxlength="35" id="corpName" name="supplier.corpName" class="input260" onblur="this.value=this.value.replace(/[ ]/g,'');checkEmpty(this.value,'corpName','公司名称','');" type="text"><span id="corpNameSpan" style="display:none"></span></td>
                    </tr>
                                   <!-- 1 -->
                                        <tr>
                        <th><em class="em-red">*</em>品牌英文名称：</th>
                        <td><input maxlength="35" id="corpEnglishName" name="supplier.corpEnglishName" class="input260" onblur="this.value=this.value.replace(/[ ]/g,'');checkEmpty(this.value,'corpName','公司名称','');" type="text"><span id="corpNameSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>法人代表姓名：</th>
                        <td><input maxlength="20" id="contacterName" name="supplier.contacterName" class="input260" onblur="checkEmpty(this.value,'contacterName','法人代表姓名','');" type="text"><span id="contacterNameSpan" style="display:none"></span></td>
<!--                     </tr>
                    <tr>
                        <th>公司官网地址：</th>
                        <td><input maxlength="30" name="supplier.website" class="input260" type="text"></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司性质：</th>
                        <td>
                        	<select id="supplier" name="supplier.corpType" class="input145">
                        		<option selected="selected" value="">请选择</option>
                        		<option value="4">外资</option>
                        		<option value="5">中外合资</option>
                        		<option value="6">国企</option>
                        		<option value="7">合伙制企业</option>
                        		<option value="2">个人独立企业</option>
                        		<option value="0">有限责任公司</option>
                        		<option value="1">股份有限公司</option>
                        		<option value="3">其它</option>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司荣誉：</th>
                        <td>
                        	<select id="honor" name="supplier.honor" class="input200">
                        		<option selected="selected" value="">请选择</option>
                        		<option value="1">国家重合同守信用单位</option>
                        		<option value="2">省级重合同守信用单位</option>
                        		<option value="3">市级重合同守信用单位</option>
                        		<option value="8">暂无</option>
                        		<option value="9">其他</option>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司主品类：</th>
                        <td>
                        	<select id="supplier_ctgy_id" name="supplier.supplier_ctgy_id" class="input145 mr10">
                        	<option value="">请选择</option>
                        	 
							 		
							 		<option value="207">文化艺术</option> 	
							 
							 		
							 		<option value="119">建材</option> 	
							 
							 		
							 		<option value="204">数码</option> 	
							 
							 		
							 		<option value="101">服饰鞋帽</option> 	
							 
							 		
							 		<option value="102">箱包奢品</option> 	
							 
							 		
							 		<option value="103">运动户外</option> 	
							 
							 		
							 		<option value="104">钟表首饰</option> 	
							 
							 		
							 		<option value="105">汽车用品</option> 	
							 
							 		<option value="106" selected="selected">家具</option> 
							 			
							 
							 		
							 		<option value="107">家居日用</option> 	
							 
							 		
							 		<option value="108">家纺寝居</option> 	
							 
							 		
							 		<option value="109">美妆个护</option> 	
							 
							 		
							 		<option value="110">母婴玩具</option> 	
							 
							 		
							 		<option value="111">食品</option> 	
							 
							 		
							 		<option value="112">保健健康</option> 	
							 
							 		
							 		<option value="114">大家电</option> 	
							 
							 		
							 		<option value="115">厨卫生活</option> 	
							 
							 		
							 		<option value="116">手机</option> 	
							 
							 		
							 		<option value="117">电脑办公</option> 	
							 
							 		
							 		<option value="118">酒水(茶饮)</option> 	
							
                        	</select>
                        </td>
                    </tr> -->
                    <tr>
                        <th><em class="em-red">*</em>法人有效身份证号：</th>
                        <td><input maxlength="20" id="contacterId" name="supplier.contacterId" class="input260" onblur="checkEmpty(this.value,'contacterId','法人有效身份证','Id');" type="text"><span id="contacterIdSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>法人联系方式：</th>
                        <td><input maxlength="11" id="contacterMobilePhoneNumber" name="supplier.contacterMobilePhoneNumber" class="input260" onblur="checkEmpty(this.value,'contacterMobilePhoneNumber','法人联系方式','mobile');" type="text"><span id="contacterMobilePhoneNumberSpan" style="display:none"></span></td>
<!--                     </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司负责人电子邮箱：</th>
                        <td><input maxlength="32" id="contacterEmail" name="supplier.contacter_email" autocomplete="off" class="input260" onblur="checkEmpty(this.value,'contacterEmail','公司负责人电子邮箱','email');" type="text"><span id="contacterEmailSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司负责人职位：</th>
                        <td><input maxlength="20" id="position" name="supplier.position" class="input260" onblur="checkEmpty(this.value,'position','公司负责人职位','');" type="text"><span id="positionSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司所在地：</th>
                        <td>
                        	<select id="provinces" name="supplier.provinces" onchange="getCities('provinces','city');" class="input145 mr10">
								<option selected="selected" value="">请选择</option>
								
									<option value="010">北京</option>
								
									<option value="020">上海</option>
								
									<option value="030">天津</option>
								
									<option value="040">内蒙古</option>
								
									<option value="050">山西</option>
								
									<option value="060">河北</option>
								
									<option value="070">辽宁</option>
								
									<option value="080">吉林</option>
								
									<option value="090">黑龙江</option>
								
									<option value="100">江苏</option>
								
									<option value="110">安徽</option>
								
									<option value="120">山东</option>
								
									<option value="130">浙江</option>
								
									<option value="140">江西</option>
								
									<option value="150">福建</option>
								
									<option value="160">湖南</option>
								
									<option value="170">湖北</option>
								
									<option value="180">河南</option>
								
									<option value="190">广东</option>
								
									<option value="200">海南</option>
								
									<option value="210">广西</option>
								
									<option value="220">贵州</option>
								
									<option value="230">四川</option>
								
									<option value="240">云南</option>
								
									<option value="250">陕西</option>
								
									<option value="260">甘肃</option>
								
									<option value="270">宁夏</option>
								
									<option value="280">青海</option>
								
									<option value="290">新疆</option>
								
									<option value="300">西藏</option>
								
									<option value="320">重庆</option>
								
									<option value="330">中国台湾</option>
								
									<option value="340">中国香港</option>
								
									<option value="350">中国澳门</option>
								
							</select>
							<select id="city" name="supplier.city" class="input145 mr10"><option selected="selected" value="">请选择</option></select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司详细地址：</th>
                        <td><input maxlength="35" id="corpAddress" name="supplier.corpAddress" class="input453" onblur="checkEmpty(this.value,'corpAddress','公司详细地址','');" type="text"><span id="corpAddressSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>固定电话：</th>
                        <td><input maxlength="32" id="contacterPhoneNumber" name="supplier.contacterPhoneNumber" class="input260" onblur="checkEmpty(this.value,'contacterPhoneNumber','固定电话','phone');" type="text"><span id="contacterPhoneNumberSpan" style="display:none"></span></td>
                    </tr> -->
                    <tr>
                        <th><em class="em-red">*</em>电子邮箱：</th>
                        <td><input maxlength="32" id="email" name="supplier.email" class="input260" onblur="checkEmpty(this.value,'email','电子邮箱','email');" type="text"><span id="emailSpan" style="display:none"></span></td>
                    </tr>
<!--                     <tr>
                        <th><em class="em-red">*</em>传真：</th>
                        <td><input maxlength="16" id="fax" name="supplier.fax" class="input260" onblur="checkEmpty(this.value,'fax','传真','phone');" type="text"><span id="faxSpan" style="display:none"></span></td>
                    </tr> -->
                    <tr>
                        <th><em class="em-red">*</em>成立日期：</th>
                        <td><input maxlength="30" id="timeCode" name="supplier.zipCode" class="input260" onblur="checkEmpty(this.value,'timeCode','成立日期','zip');" type="text"><span id="zipCodeSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照编码：</th>
                        <td><input maxlength="32" id="orgnizationCode" name="supplier.orgnizationCode" class="input260" onblur="checkEmpty(this.value,'orgnizationCode','营业执照编码','');" type="text"><span id="orgnizationCodeSpan" style="display:none"></span></td>
                    </tr>
                </tbody></table>
			</div>
<!--             <div class="table-part clearfix">
            	<div class="table-part-title bt pt30 j-tabclick"><span>营业执照信息<b class="micon-down"></b></span></div>
                <table class="information-table1 j-information-table" border="0" cellpadding="0" cellspacing="0">
                	<tbody><tr>
                        <th><em class="em-red">*</em>注册资本：</th>
                        <td><input maxlength="13" id="regCapital" name="supplier.regCapital" class="input260" onblur="checkEmpty(this.value,'regCapital','注册资本','money1');" type="text"><span style="float:left;line-height:24px;padding-left:5px;">万元(人民币)</span><span id="regCapitalSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照注册号：</th>
                        <td><input maxlength="32" id="corpLicenceNumber" name="supplier.corpLicenceNumber" class="input260" onblur="checkEmpty(this.value,'corpLicenceNumber','营业执照注册号','corpLicence');" type="text"><span id="corpLicenceNumberSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>法定代表人姓名：</th>
                        <td><input maxlength="20" id="legal_person" name="supplier.legal_person" class="input260" onblur="checkEmpty(this.value,'legal_person','法定代表人姓名','');" type="text"><span id="legal_personSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照所在地：</th>
                        <td>
                        	<select id="business_province" name="supplier.business_province" onchange="getCities('business_province','business_city');" class="input145 mr10">
								<option selected="selected" value="">请选择</option>
								
									<option value="010">北京</option>
								
									<option value="020">上海</option>
								
									<option value="030">天津</option>
								
									<option value="040">内蒙古</option>
								
									<option value="050">山西</option>
								
									<option value="060">河北</option>
								
									<option value="070">辽宁</option>
								
									<option value="080">吉林</option>
								
									<option value="090">黑龙江</option>
								
									<option value="100">江苏</option>
								
									<option value="110">安徽</option>
								
									<option value="120">山东</option>
								
									<option value="130">浙江</option>
								
									<option value="140">江西</option>
								
									<option value="150">福建</option>
								
									<option value="160">湖南</option>
								
									<option value="170">湖北</option>
								
									<option value="180">河南</option>
								
									<option value="190">广东</option>
								
									<option value="200">海南</option>
								
									<option value="210">广西</option>
								
									<option value="220">贵州</option>
								
									<option value="230">四川</option>
								
									<option value="240">云南</option>
								
									<option value="250">陕西</option>
								
									<option value="260">甘肃</option>
								
									<option value="270">宁夏</option>
								
									<option value="280">青海</option>
								
									<option value="290">新疆</option>
								
									<option value="300">西藏</option>
								
									<option value="320">重庆</option>
								
									<option value="330">中国台湾</option>
								
									<option value="340">中国香港</option>
								
									<option value="350">中国澳门</option>
								
							</select>
							<select id="business_city" name="supplier.business_city" class="input145 mr10"><option selected="selected" value="">请选择</option></select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照详细地址：</th>
                        <td><input maxlength="35" id="address" name="supplier.address" class="input453" onblur="checkEmpty(this.value,'address','营业执照详细地址','');" type="text"><span id="addressSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>成立日期：</th>
                        <td><input id="createdTime" name="supplier.createdTime" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})" class="input-time145 fl" onchange="checkEmpty(this.value,'createdTime','成立日期','');" type="text"><span id="createdTimeSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照有效期：</th>
                        <td>
                        	<input id="supplier.business_date_start" name="supplier.business_date_start" onclick="WdatePicker({maxDate:'#F<?php echo ($dp["$D('supplier"]["business_date_end');"]); ?>'})" class="input-time145 fl" type="text">
                        	<label class="fl label_line ml10 mr10">-</label>
                        	<input id="supplier.business_date_end" name="supplier.business_date_end" onclick="WdatePicker({minDate:'#F<?php echo ($dp["$D('supplier"]["business_date_start');"]); ?>'})" class="input-time145 fl" type="text">
                    		<label class="fl label_line ml10 mr10" for="3"><input hidefocus="ture" name="supplier.business_permanent" value="" class="inputcheck" id="3" onclick="changeBusinessDate();" type="checkbox">长期</label>
                        </td>
                    </tr>
                    <tr>
                        <th class="ver-t"><em class="em-red">*</em>营业执照经营范围：</th>
                        <td><textarea maxlength="100" id="busine_scope" name="supplier.busine_scope" autocomplete="off" class="input370" onblur="checkEmpty(this.value,'busine_scope','营业执照经营范围','');"></textarea><span id="busine_scopeSpan" style="display:none"></span></td>
                    </tr>
                </tbody></table>
            </div>
            <div class="table-part clearfix">
            	<div class="table-part-title bt pt30 j-tabclick"><span>税务登记信息<b class="micon-down"></b></span></div>
                <table class="information-table1 j-information-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <th><em class="em-red">*</em>纳税人识别号：</th>
                        <td><input maxlength="18" id="attachedTaxNumber" name="supplier.attachedTaxNumber" class="input260" onblur="checkEmpty(this.value,'attachedTaxNumber','纳税人识别号','');" type="text"><span id="attachedTaxNumberSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>纳税人类型：</th>
                        <td>
                        	<select id="taxpayer" name="supplier.taxpayer" class="input145 mr10">
                        		<option selected="selected" value="">请选择</option>
                        		<option value="1">一般纳税人</option>
                        		<option value="2">小规模纳税人</option>
                        		<option value="3">非增值税纳税人</option>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>纳税类型税码：</th>
                        <td>
                        	<select id="tax_rate" name="supplier.tax_rate" class="input145 mr10">
                        		<option selected="selected" value="">请选择</option>
                        		<option value="0">0%</option>
                        		<option value="3">3%</option>
                        		<option value="6">6%</option>
                        		<option value="7">7%</option>
                        		<option value="11">11%</option>
                        		<option value="13">13%</option>
                        		<option value="T13">图书13%免税</option>
                        		<option value="17">17%</option>
                        	</select>
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div class="table-part clearfix">
            	<div class="table-part-title bt pt30 j-tabclick"><span>开户银行信息<b class="micon-down"></b></span></div>
                <table class="information-table1 j-information-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <th><em class="em-red">*</em>银行开户名：</th>
                        <td><input maxlength="20" id="bankAccountName" name="supplier.bankAccountName" class="input260" onblur="checkEmpty(this.value,'bankAccountName','银行开户名','');" type="text"><span id="bankAccountNameSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司银行账号：</th>
                        <td><input maxlength="32" id="bankAccount" name="supplier.bankAccount" class="input260" onblur="checkEmpty(this.value,'bankAccount','公司银行账号','positiveInteger');" type="text"><span id="bankAccountSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>开户银行支行名称：</th>
                        <td>
	                        <input id="bankBranchName" name="supplier.bank_branch_name" class="input260 ac_input" autocomplete="off" onblur="checkEmpty(this.value,'bankBranchName','开户银行支行名称','');" type="text">
	                        <input id="bankCode" name="bankCode" type="hidden"><input id="f_shopBank" name="bankName" value="" type="hidden">
	                        <span id="bankBranchNameSpan" style="display:none"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>开户银行支行联行号：</th>
                        <td>
                        <input id="bankBranchCode" name="supplier.bank_branch_code" class="input260" readonly="readonly" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>开户银行支行所在地：</th>
                        <td>
                        	<select id="bank_province" name="supplier.bank_province" onchange="getCities('bank_province','bank_city');" class="input145 mr10">
								<option selected="selected" value="">请选择</option>
								
									<option value="010">北京</option>
								
									<option value="020">上海</option>
								
									<option value="030">天津</option>
								
									<option value="040">内蒙古</option>
								
									<option value="050">山西</option>
								
									<option value="060">河北</option>
								
									<option value="070">辽宁</option>
								
									<option value="080">吉林</option>
								
									<option value="090">黑龙江</option>
								
									<option value="100">江苏</option>
								
									<option value="110">安徽</option>
								
									<option value="120">山东</option>
								
									<option value="130">浙江</option>
								
									<option value="140">江西</option>
								
									<option value="150">福建</option>
								
									<option value="160">湖南</option>
								
									<option value="170">湖北</option>
								
									<option value="180">河南</option>
								
									<option value="190">广东</option>
								
									<option value="200">海南</option>
								
									<option value="210">广西</option>
								
									<option value="220">贵州</option>
								
									<option value="230">四川</option>
								
									<option value="240">云南</option>
								
									<option value="250">陕西</option>
								
									<option value="260">甘肃</option>
								
									<option value="270">宁夏</option>
								
									<option value="280">青海</option>
								
									<option value="290">新疆</option>
								
									<option value="300">西藏</option>
								
									<option value="320">重庆</option>
								
									<option value="330">中国台湾</option>
								
									<option value="340">中国香港</option>
								
									<option value="350">中国澳门</option>
								
							</select>
							<select id="bank_city" name="supplier.bank_city" class="input145 mr10"><option selected="selected" value="">请选择</option></select>
                        </td>
                    </tr>
                </tbody></table>
            </div> -->
            <div class="gome-btn pt30">
                <a href="javascript:preStep();" onclick="upSettled(2)" class="gome-btn-gray">上一步</a>
                <a href="javascript:nextStep();"  onclick="nextSettled(2)" class="gome-btn-red">下一步,店铺信息</a>
            </div>
        </div>
        <div class="settled-agreement-table pb50" id="3div">
                <div class="agreement-title"><span>填写店铺信息</span>
                </div>
                <div class="table-part clearfix">
                    <div class="table-part-title">店铺信息</div>
                    <table class="information-table1" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <th><em class="em-red">*</em>店铺名称：</th>
                                <td>
                                    <input maxlength="40" id="shopName" name="shopApply.shopName" class="input260" onblur="this.value=this.value.replace(/[ ]/g,'');checkEmpty(this.value,'shopName','店铺名称','');" type="text"><span style="display: block;" class="help-text1" id="shopNameSpan">点击查看店铺命名规则</span>
                                </td>
                            </tr>
<!--                             <tr>
                                <th><em class="em-red">*</em>店铺性质：</th>
                                <td>
                                    <select id="shopType" name="shopApply.shopType" value="" class="input200">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="3">专营店</option>
                                        <option value="1">品牌旗舰店</option>
                                        <option value="2">专卖店</option>
                                    </select>
                                </td>
                            </tr> -->

<!--                             <tr>
                                <th><em class="em-red">*</em>店铺入驻形式：</th>
                                <td>
                                    <select id="shop_flag" name="shopApply.shop_flag" value="" class="input200" style="float:left">
                                        <option selected="selected" value="1">普通店铺</option>
                                        <option value="2">海外购店铺</option>
                                     

                                    </select>
                                    <span style="display: block;" class="help-text1" id="shop_flagSpan">入驻海外购店铺请与我们联系后再选择</span>
                                </td>

                            </tr> -->

<!--                             <tr>
                                <th><em class="em-red">*</em>店铺登录主账号：gm_</th>
                                <td>
                                    <input maxlength="20" id="mainAccount" name="shopApply.main_account" autocomplete="off" class="input260" onblur="this.value=this.value.replace(/[ ]/g,'');checkExist('gm_'+this.value,'mainAccount','店铺登录主账号');" type="text"><span style="display: block;" class="help-text1" id="mainAccountSpan">自定义填写，可以是数字、字母、汉字或者组合</span>
                                </td>
                            </tr> -->
                            <tr>
                                <th><em class="em-red">*</em>店铺负责人姓名：</th>
                                <td>
                                    <input maxlength="64" id="contactPersonName" name="shopApply.contactPersonName" class="input260" onblur="checkEmpty(this.value,'contactPersonName','店铺负责人姓名','');" type="text"><span id="contactPersonNameSpan" style="display:none"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>负责人身份证号：</th>
                                <td>
                                    <input maxlength="11" id="contactPersonPhone" name="shopApply.contactPersonId" class="input260" onblur="checkEmpty(this.value,'contactPersonPhone','负责人身份证号','Id');" type="text"><span id="contactPersonPhoneSpan" style="display:none"></span>
                                </td>
                            </tr>
                                                        <tr>
                                <th><em class="em-red">*</em>手机号码：</th>
                                <td>
                                    <input maxlength="11" id="contactPersonPhone" name="shopApply.contactPersonPhone" class="input260" onblur="checkEmpty(this.value,'contactPersonPhone','手机号码','mobile');" type="text"><span id="contactPersonPhoneSpan" style="display:none"></span>
                                </td>
                            </tr>
<!--                             <tr>
                                <th><em class="em-red">*</em>固定电话：</th>
                                <td>
                                    <input maxlength="20" id="contactPersonPhoneNational" name="shopApply.contactPersonPhoneNational" class="input260" onblur="checkEmpty(this.value,'contactPersonPhoneNational','固定电话','phone');" type="text"><span id="contactPersonPhoneNationalSpan" style="display:none"></span>
                                </td>
                            </tr> -->
                            <tr>
                                <th><em class="em-red">*</em>电子邮箱：</th>
                                <td>
                                    <input maxlength="32" id="email" name="shopApply.email" class="input260" onblur="checkEmpty(this.value,'email','电子邮箱','email');" type="text"><span id="emailSpan" style="display:none"></span>
                                </td>
                            </tr>
<!--                             <tr>
                                <th><em class="em-red">*</em>传真：</th>
                                <td>
                                    <input maxlength="16" id="fax" name="shopApply.fax" class="input260" onblur="checkEmpty(this.value,'fax','传真','phone');" type="text"><span id="faxSpan" style="display:none"></span>
                                </td>
                            </tr> -->
                            <tr>
                                <th><em class="em-red">*</em>店铺所在地：</th>
                                <td>
                                    <select id="provinces" name="shopApply.province" onchange="getCities('provinces','city');" class="input145 mr10">
                                        <option value="">请选择</option>

                                        <option value="010">北京</option>

                                        <option value="020">上海</option>

                                        <option value="030">天津</option>

                                        <option value="040" selected="selected">内蒙古</option>

                                        <option value="050">山西</option>

                                        <option value="060">河北</option>

                                        <option value="070">辽宁</option>

                                        <option value="080">吉林</option>

                                        <option value="090">黑龙江</option>

                                        <option value="100">江苏</option>

                                        <option value="110">安徽</option>

                                        <option value="120">山东</option>

                                        <option value="130">浙江</option>

                                        <option value="140">江西</option>

                                        <option value="150">福建</option>

                                        <option value="160">湖南</option>

                                        <option value="170">湖北</option>

                                        <option value="180">河南</option>

                                        <option value="190">广东</option>

                                        <option value="200">海南</option>

                                        <option value="210">广西</option>

                                        <option value="220">贵州</option>

                                        <option value="230">四川</option>

                                        <option value="240">云南</option>

                                        <option value="250">陕西</option>

                                        <option value="260">甘肃</option>

                                        <option value="270">宁夏</option>

                                        <option value="280">青海</option>

                                        <option value="290">新疆</option>

                                        <option value="300">西藏</option>

                                        <option value="320">重庆</option>

                                        <option value="330">中国台湾</option>

                                        <option value="340">中国香港</option>

                                        <option value="350">中国澳门</option>

                                    </select>
                                    <select id="city" name="shopApply.city" class="input145 mr10">

                                        <option selected="selected" value="包头市">包头市</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>店铺详细地址：</th>
                                <td>
                                    <input maxlength="35" id="corpAddress" name="shopApply.corpAddress" class="input260" value="vw" onblur="checkEmpty(this.value,'corpAddress','店铺详细地址','');" type="text"><span id="corpAddressSpan" style="display:none"></span>
                                </td>
                            </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照编码：</th>
                        <td><input maxlength="32" id="orgnizationCode" name="supplier.corpCode" class="input260" onblur="checkEmpty(this.value,'corpCode','营业执照编码','');" type="text"><span id="corpCodeSpan" style="display:none"></span></td>
                    </tr>
                            
                        </tbody>
                    </table>
                </div>
<!--                 <div class="table-part clearfix">
                    <div class="table-part-title bt pt30">运营信息</div>
                    <table class="information-table1" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <th><em class="em-red">*</em>近一年主营渠道：</th>
                                <td width="550">
                                    <select id="main_channel" name="shopApply.main_channel" value="" class="input200">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="01">一级商场/大卖场</option>
                                        <option value="02">专业批发市场</option>
                                        <option value="03">超市/连锁店/商业中心</option>
                                        <option value="04">天猫</option>
                                        <option value="05">京东</option>
                                        <option value="06">亚马逊</option>
                                        <option value="07">苏宁易购</option>
                                        <option value="08">一号店</option>
                                        <option value="09">当当网</option>
                                        <option value="99">其他</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>近一年销售产品来源：</th>
                                <td>
                                    <select id="product_src" name="shopApply.product_src" value="" class="input200">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="01">自有品牌委托加工</option>
                                        <option value="02">自有品牌自产</option>
                                        <option value="03">品牌直接授权</option>
                                        <option value="04">国代授权</option>
                                        <option value="05">省代授权</option>
                                        <option value="99">其他授权</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>近一年销售额：</th>
                                <td>
                                    <input maxlength="17" id="sales" name="shopApply.sales" class="input260" onblur="checkEmpty(this.value,'sales','近一年销售额','money');" type="text"><span class="pl7 pt5 fl">万元</span><span id="salesSpan" style="display:none"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>同类电子商务网站经验：</th>
                                <td>
                                    <label class="nLabel mr5" for="Y">
                                        <input name="shopApply.ec_experience" value="Y" checked="checked" class="inputradio" hidefocus="true" type="radio">有</label>
                                    <label class="nLabel" for="N">
                                        <input name="shopApply.ec_experience" value="N" class="inputradio" hidefocus="true" type="radio">无</label>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>可网售商品数量：</th>
                                <td>
                                    <input maxlength="10" id="skuNum" name="shopApply.sku_num" class="input260" onblur="checkEmpty(this.value,'skuNum','可网售商品数量','positiveInteger');" type="text"><span id="skuNumSpan" style="display:none"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>预计平均客单价：</th>
                                <td>
                                    <input maxlength="15" id="avgPrice" name="shopApply.avg_price" class="input260" onblur="checkEmpty(this.value,'avgPrice','预计平均客单价','money');" type="text"><span id="avgPriceSpan" style="display:none"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>仓库情况：</th>
                                <td>
                                    <select id="warehouse" name="shopApply.warehouse" value="" class="input145">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="1">自有仓库</option>
                                        <option value="2">第三方仓库</option>
                                        <option value="3">无仓库</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>常用物流公司：</th>
                                <td>
                                    <input maxlength="100" id="logistics" name="shopApply.logistics" class="input260" onblur="checkEmpty(this.value,'logistics','常用物流公司','');" type="text"><span id="logisticsSpan" style="display:none"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>ERP类型：</th>
                                <td>
                                    <select id="erp_type" name="shopApply.erp_type" value="" class="input145">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="1">自有ERP</option>
                                        <option value="2">第三方ERP</option>
                                        <option value="3">无</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>代运营公司名称：</th>
                                <td>
                                    <input maxlength="40" id="insteadOperationCompany" name="shopApply.instead_operation_company" class="input260" onblur="checkEmpty(this.value,'insteadOperationCompany','代运营公司名称','');" type="text"><span id="insteadOperationCompanySpan" style="display:none"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>是否会选择国美仓储：</th>
                                <td>
                                    <select id="gome_warehouse" name="shopApply.gome_warehouse" class="input145">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="1">希望使用</option>
                                        <option value="2">可以考虑</option>
                                        <option value="3">不考虑</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><em class="em-red">*</em>是否会选择国美代运物流：</th>
                                <td>
                                    <select id="gome_logistics" name="shopApply.gome_logistics" class="input145">
                                        <option selected="selected" value="">请选择</option>
                                        <option value="1">希望使用</option>
                                        <option value="2">可以考虑</option>
                                        <option value="3">不考虑</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <label class="nLabel" for="3">
                                        <input value="N" hidefocus="ture" name="shopApply.entity_shop" class="inputcheck" id="3" onclick="showEntityShopInfo();" type="checkbox">有实体店</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div style="display: none;" id="hiddenDiv">
                                        <div class="shop-massege clearfix">
                                            <span class="fl"><em class="em-red">*</em>公司所在地：</span>
                                            <select id="business_province" name="shopApply.business_province" class="input145" onchange="getCities('business_province','business_city');">
                                                <option selected="selected" value="">请选择</option>

                                                <option value="010">北京</option>

                                                <option value="020">上海</option>

                                                <option value="030">天津</option>

                                                <option value="040">内蒙古</option>

                                                <option value="050">山西</option>

                                                <option value="060">河北</option>

                                                <option value="070">辽宁</option>

                                                <option value="080">吉林</option>

                                                <option value="090">黑龙江</option>

                                                <option value="100">江苏</option>

                                                <option value="110">安徽</option>

                                                <option value="120">山东</option>

                                                <option value="130">浙江</option>

                                                <option value="140">江西</option>

                                                <option value="150">福建</option>

                                                <option value="160">湖南</option>

                                                <option value="170">湖北</option>

                                                <option value="180">河南</option>

                                                <option value="190">广东</option>

                                                <option value="200">海南</option>

                                                <option value="210">广西</option>

                                                <option value="220">贵州</option>

                                                <option value="230">四川</option>

                                                <option value="240">云南</option>

                                                <option value="250">陕西</option>

                                                <option value="260">甘肃</option>

                                                <option value="270">宁夏</option>

                                                <option value="280">青海</option>

                                                <option value="290">新疆</option>

                                                <option value="300">西藏</option>

                                                <option value="320">重庆</option>

                                                <option value="330">中国台湾</option>

                                                <option value="340">中国香港</option>

                                                <option value="350">中国澳门</option>

                                            </select>
                                            <select id="business_city" name="shopApply.business_city" class="input145 mr10">
                                                <option selected="selected" value="">请选择</option>
                                            </select>
                                            <input id="businessCity" value="" type="hidden">
                                        </div>
                                        <div class="shop-massege clearfix"><span class="fl"><em class="em-red">*</em>公司详细地址：</span>
                                            <input maxlength="125" id="business_address" name="shopApply.business_address" class="input260" onblur="checkEmpty(this.value,'business_address','公司详细地址','');" type="text"><span id="business_addressSpan" style="display:none"></span>
                                        </div>
                                        <div class="shop-massege clearfix"><span class="fl"><em class="em-red">*</em>实体店数量：</span>
                                            <input maxlength="8" id="entityShopNum" name="shopApply.entity_shop_num" class="input260" onblur="checkEmpty(this.value,'entityShopNum','实体店数量','positiveInteger');" type="text"><span id="entityShopNumSpan" style="display:none"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                <div class="gome-btn pt30">
                    <a href="javascript:preStep();" onclick="upSettled(3)" class="gome-btn-gray">上一步</a>
                    <a href="javascript:nextStep();" onclick="nextSettled(3)"  class="gome-btn-red">下一步,上传基本资质</a>
                </div>
            </div>
        <div class="settled-agreement-table pb50" id="4div">
        	<div class="agreement-title"><span>资质上传</span></div>
            <div class="tips">
            	<p><img src="/cloud/Application/Index/View/Public/image/icon01.gif">所有资质必须清晰可辨并加盖贵司红章/彩章（即在资质复印件上加盖贵司自己的红章，再扫描或拍照上传）</p>
                <p><img src="/cloud/Application/Index/View/Public/image/icon02.gif">以下所需要上传电子版资质仅支持JPG、JPEG、GIF、PNG格式的图片，大小不超过1M，且必须加盖企业彩色公章。</p>
            </div>
            <div class="table-part pb50 clearfix">
            	<div class="table-part-title">基本资质</div>
                <div class="update-part clearfix width985">
                	<div class="update-til width985">
                		<p class="fl">企业营业执照副本复印件（需加盖红章）</p>
                		<a href="/cloud/Application/Index/View/Public/image/yyzz.jpg" target="_blank" class="blue fl mr10">查看范本</a>
                		<div class="update-btn width-170 fl">
                			<div style="float:left;" class="uploadify" id="file_upload_0"><object style="position: absolute; z-index: 1;" id="SWFUpload_0" type="application/x-shockwave-flash" data="/cloud/Application/Index/View/Public/image/uploadify_006.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753619"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_0&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E8%2590%25A5%25E4%25B8%259A%25E6%2589%25A7%25E7%2585%25A7&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_0-button"><span class="uploadify-button-text">上 传</span></div></div>
                		</div>
                    </div>
                    
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                </div>
                <div class="update-part width985">
                	<div class="update-til width985">
                		<p class="fl">税务登记证复印件（国税、地税）（需加盖红章）</p>
                		<a href="/cloud/Application/Index/View/Public/image/swdjz.jpg" target="_blank" class="blue fl mr10">查看范本</a><div class="update-btn width-170 fl"><div style="float:left;" class="uploadify" id="file_upload_1"><object style="position: absolute; z-index: 1;" id="SWFUpload_1" type="application/x-shockwave-flash" data="%E6%88%91%E8%A6%81%E5%85%A5%E9%A9%BB-%E8%B5%84%E8%B4%A8%E4%B8%8A%E4%BC%A0-%E5%9F%BA%E6%9C%AC%E8%B5%84%E8%B4%A8_files/uploadify_007.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753627"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_1&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E7%25A8%258E%25E5%258A%25A1%25E7%2599%25BB%25E8%25AE%25B0%25E8%25AF%2581&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_1-button"><span class="uploadify-button-text">上 传</span></div></div></div>
                    </div>
                    
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                </div>
                <div class="update-part width985">
                	<div class="update-til width985">
                		<p class="fl">织机构代码证复印件（需加盖红章）</p>
                		<a href="/cloud/Application/Index/View/Public/image/zzjgdmz.jpg" target="_blank" class="blue fl mr10">查看范本</a><div class="update-btn width-170 fl"><div style="float:left;" class="uploadify" id="file_upload_2"><object style="position: absolute; z-index: 1;" id="SWFUpload_2" type="application/x-shockwave-flash" data="%E6%88%91%E8%A6%81%E5%85%A5%E9%A9%BB-%E8%B5%84%E8%B4%A8%E4%B8%8A%E4%BC%A0-%E5%9F%BA%E6%9C%AC%E8%B5%84%E8%B4%A8_files/uploadify.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753633"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_2&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E7%25BB%2587%25E6%259C%25BA%25E6%259E%2584%25E4%25BB%25A3%25E7%25A0%2581%25E8%25AF%2581&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_2-button"><span class="uploadify-button-text">上 传</span></div></div></div>
                    </div>
                    
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                </div>
                <div class="update-part width985">
                	<div class="update-til width985">
                		<p class="fl">基本户开户许可证复印件、一般户开户许可证复印件（需加盖红章）</p>
                		<a href="http://img6.gomein.net.cn/image/bbcimg/qualify_demo/khxkz.jpg" target="_blank" class="blue fl mr10">查看范本</a><div class="update-btn width-170 fl"><div style="float:left;" class="uploadify" id="file_upload_3"><object style="position: absolute; z-index: 1;" id="SWFUpload_3" type="application/x-shockwave-flash" data="%E6%88%91%E8%A6%81%E5%85%A5%E9%A9%BB-%E8%B5%84%E8%B4%A8%E4%B8%8A%E4%BC%A0-%E5%9F%BA%E6%9C%AC%E8%B5%84%E8%B4%A8_files/uploadify_005.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753638"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_3&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E5%25BC%2580%25E6%2588%25B7%25E8%25AE%25B8%25E5%258F%25AF%25E8%25AF%2581&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_3-button"><span class="uploadify-button-text">上 传</span></div></div></div>
                    </div>
                    
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                </div>
                <div class="update-part width985">
                	<div class="update-til width985">
                		<p class="fl">法人身份证正反面复印件或护照（需加盖红章）</p>
                		<a href="/cloud/Application/Index/View/Public/image/sfz.jpg" target="_blank" class="blue fl mr10">查看范本</a><p class="fl">身份证/护照号码：</p><input maxlength="18" name="supplier.identity_card" class="input145 fl mr10" type="text"><div class="update-btn width-170 fl"><div style="float:left;" class="uploadify" id="file_upload_4"><object style="position: absolute; z-index: 1;" id="SWFUpload_4" type="application/x-shockwave-flash" data="%E6%88%91%E8%A6%81%E5%85%A5%E9%A9%BB-%E8%B5%84%E8%B4%A8%E4%B8%8A%E4%BC%A0-%E5%9F%BA%E6%9C%AC%E8%B5%84%E8%B4%A8_files/uploadify_002.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753642"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_4&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E6%25B3%2595%25E4%25BA%25BA%25E8%25BA%25AB%25E4%25BB%25BD%25E8%25AF%2581&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_4-button"><span class="uploadify-button-text">上 传</span></div></div></div>
                    </div>
                    
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                </div>
                <div class="update-part width985">
                	<div class="update-til width985">
                		<p class="fl">店铺负责人身份证正反面复印件（需加盖红章）</p>
                		<a href="/cloud/Application/Index/View/Public/image/sfz.jpg" target="_blank" class="blue fl mr10 ">查看范本</a><p class="fl">身份证号码：</p><input maxlength="18" name="supplier.shop_identity_card" class="input145 fl mr10" type="text"><div class="update-btn width-170 fl"><div style="float:left;" class="uploadify" id="file_upload_5"><object style="position: absolute; z-index: 1;" id="SWFUpload_5" type="application/x-shockwave-flash" data="%E6%88%91%E8%A6%81%E5%85%A5%E9%A9%BB-%E8%B5%84%E8%B4%A8%E4%B8%8A%E4%BC%A0-%E5%9F%BA%E6%9C%AC%E8%B5%84%E8%B4%A8_files/uploadify_004.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753646"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_5&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E8%25B4%259F%25E8%25B4%25A3%25E4%25BA%25BA%25E8%25BA%25AB%25E4%25BB%25BD%25E8%25AF%2581&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_5-button"><span class="uploadify-button-text">上 传</span></div></div></div>
                    </div>
                    
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                </div>
                
                	<div class="update-part width985">
                		<div class="update-til width985">
                			<p class="fl">一般纳税人，请提供增值税一般纳税人资格证书或增值税一般纳税申请认定表（需加盖店主体红章）</p>
                			<a href="/cloud/Application/Index/View/Public/image/zzsybnsr.jpg" target="_blank" class="blue fl mr10">查看范本</a><div class="update-btn width-170 fl"><div style="float:left;" class="uploadify" id="file_upload_6"><object style="position: absolute; z-index: 1;" id="SWFUpload_6" type="application/x-shockwave-flash" data="%E6%88%91%E8%A6%81%E5%85%A5%E9%A9%BB-%E8%B5%84%E8%B4%A8%E4%B8%8A%E4%BC%A0-%E5%9F%BA%E6%9C%AC%E8%B5%84%E8%B4%A8_files/uploadify_003.swf" class="swfupload" height="25" width="170"><param name="wmode" value="transparent"><param name="movie" value="http://pop.gome.com.cn:80/js/uploadify.swf?preventswfcaching=1444204753651"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_6&amp;uploadURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2FnewApply%2FapplyShop_uploadify.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=fileName%3D%25E7%25BA%25B3%25E7%25A8%258E%25E4%25BA%25BA%25E8%25B5%2584%25E6%25A0%25BC%25E8%25AF%2581&amp;filePostName=uploadify&amp;fileTypes=*.jpg%3B%20*.jpeg%3B%20*.gif%3B%20*.png&amp;fileTypesDescription=All%20Files&amp;fileSizeLimit=1024&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fpop.gome.com.cn%3A80%2Fimages%2Fblank.png&amp;buttonWidth=170&amp;buttonHeight=25&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div style="height: 25px; line-height: 25px; width: 170px;" class="uploadify-button " id="file_upload_6-button"><span class="uploadify-button-text">上 传</span></div></div></div>
                    	</div>
                	</div>
                	
                    	<ul class="update-con ml30 mt4 clearfix">
	                    	
	                    </ul>
                    
                
            </div>
            <div class="gome-btn">
                <a href="javascript:preStep();" onclick="upSettled(4)" class="gome-btn-gray">上一步</a>
                <a href="javascript:nextStep();" onclick="nextSettled(4)"  class="gome-btn-red">下一步,添加品牌</a>
            </div>
        </div>
<div class="settled-agreement-table pb50" id="5div">
    <div class="agreement-title"><span>等待审核</span>
    </div>
    <div class="access">
         <img src="/cloud/Application/Index/View/Public/image/dg.png" />&nbsp;提交成功，等待审核
    </div>

</div>

 </div>

    </form>
    <!--# include virtual="/footer.html" -->
    <script language="javascript">
    /**
     * 检测非空
     */
    // function checkEmpty(value, id, msg, type) {
    //     var _email = /^([a-zA-Z0-9]+[_|\_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    //     var _phone = /^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)|([0-9]{3,4}\-))?([0-9]{7,8})(\-[0-9]+)?$/;
    //     var _mobile = new RegExp(document.getElementById("mobileRegex").value);
    //     var _zip = /^[0-9][0-9]{5}$/;
    //     var _positiveInteger = /^[0-9]*[1-9][0-9]*$/;
    //     if (value == "" || ($.trim(value)).length == 0) {
    //         var v = document.getElementById(id + "Span");
    //         v.innerHTML = "请填写" + msg;
    //         v.className = "warning-text1";
    //         v.style.display = "block";
            //输入框样式添加warning
    //         $("#" + id).addClass("warning");
    //     } else {
    //         if ((type == "email" && !(_email.test(value))) || (type == "phone" && !(_phone.test(value))) || (type == "mobile" && !(_mobile.test(value))) || (type == "zip" && !(_zip.test(value))) || (type == "positiveInteger" && !(_positiveInteger.test(value)))) {
    //             var v = document.getElementById(id + "Span");
    //             if (type == "positiveInteger") {
    //                 msg = msg + "(正整数)"
    //             }
    //             v.innerHTML = "格式错误，请正确填写" + msg;
    //             v.className = "warning-text2";
    //             v.style.display = "block";
    //             $("#" + id).addClass("warning");
    //             return;
    //         } else {
    //             document.getElementById(id + "Span").className = "";
    //             document.getElementById(id + "Span").innerHTML = "";
    //             document.getElementById(id + "Span").style.display = "none";
    //             $("#" + id).removeClass("warning");
    //             return 1;
    //         }
    //     }
    // }

    // function nextStep() {
    //     // 对联系人姓名、联系人手机、联系人邮箱做验证
    //     if (checkEmpty($("#contacterName").val(), 'contacterName', '联系人姓名', '') != 1) {
    //         alert("联系人姓名，填写有误");
    //         $("#contacterName").focus();
    //         return;
    //     }
    //     if (checkEmpty($("#contacterMobile").val(), 'contacterMobile', '联系人手机', 'mobile') != 1) {
    //         alert("联系人手机，填写有误");
    //         $("#contacterMobile").focus();
    //         return;
    //     }
    //     if (checkEmpty($("#email").val(), 'email', '联系人电子邮箱', 'email') != 1) {
    //         alert("联系人电子邮箱，填写有误");
    //         $("#email").focus();
    //         return;
    //     }
    //     if ($("#supplier_ctgy_id").val() == "") {
    //         alert("请选择 经营主品类");
    //         $("#supplier_ctgy_id").focus();
    //         return;
    //     }
    //     document.getElementById('queryForm').action = "/newApply/applyShop_updateSupAppIntention.action";
    //     document.getElementById('queryForm').submit();
    // }
    </script>
    <script language="javascript">
    /**
     * 上一步
     */
    // function preStep() {
    //         document.getElementById('queryForm').action = "/newApply/applyShop_intentionShop.action";
    //         document.getElementById('queryForm').submit();
    //     }
        /**
         * 下一步
         */
    // function nextStep() {
    //     // 检测上传框是否上传
    //     if ($("input[name='logoName_0']") == null || $("input[name='logoName_0']").length == 0) {
    //         alert("请上传 营业执照");
    //         return;
    //     }
    //     if ($("input[name='logoName_1']") == null || $("input[name='logoName_1']").length == 0) {
    //         alert("请上传 税务登记证");
    //         return;
    //     }
    //     if ($("input[name='logoName_2']") == null || $("input[name='logoName_2']").length == 0) {
    //         alert("请上传 织机构代码证");
    //         return;
    //     }
    //     if ($("input[name='logoName_3']") == null || $("input[name='logoName_3']").length == 0) {
    //         alert("请上传 开户许可证");
    //         return;
    //     }
    //     // 检测输入框是否有值
    //     if ($("input[name='supplier.identity_card']").val() == null || $("input[name='supplier.identity_card']").val().length == 0) {
    //         alert("请填写 法定代表人身份证号");
    //         $("input[name='supplier.identity_card']").focus();
    //         return;
    //     } else if (!checkIdentityCard($("input[name='supplier.identity_card']").val())) {
    //         alert("法定代表人身份证号不正确，请重新输入");
    //         $("input[name='supplier.identity_card']").focus();
    //         return;
    //     }
    //     if ($("input[name='logoName_4']") == null || $("input[name='logoName_4']").length == 0) {
    //         alert("请上传 法人身份证");
    //         return;
    //     }
    //     if ($("input[name='supplier.shop_identity_card']").val() == null || $("input[name='supplier.shop_identity_card']").val().length == 0) {
    //         alert("请填写 店铺负责人身份证号");
    //         $("input[name='supplier.shop_identity_card']").focus();
    //         return;
    //     } else if (!checkIdentityCard($("input[name='supplier.shop_identity_card']").val())) {
    //         alert("店铺负责人身份证号不正确，请重新输入");
    //         $("input[name='supplier.shop_identity_card']").focus();
    //         return;
    //     }
    //     if ($("input[name='logoName_5']") == null || $("input[name='logoName_5']").length == 0) {
    //         alert("请上传 店铺负责人身份证");
    //         return;
    //     }
    //     if ($("input[name='supplier.taxpayer']").val() == "1" && ($("input[name='logoName_6']") == null || $("input[name='logoName_6']").length == 0)) {
    //         alert("请上传 纳税人资格证");
    //         return;
    //     }
    //     document.getElementById('queryForm').action = "/newApply/applyShop_updateSupAppIntention.action";
    //     document.getElementById('queryForm').submit();
    // }
    </script>

</body>

</html>