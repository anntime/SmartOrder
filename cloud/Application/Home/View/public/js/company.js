$(document).ready(function() {
   showCompany();
});

//显示品牌信息
function showCompany() {

    console.log();
    var url = "../company/companyList";
    var func = function(data) {
        //console.log(data);
        $("#com_name").val(data[0].com_name);
        $("#companyId").val(data[0].id);

        $("#com_eng_name").val(data[0].com_eng_name);
        $("#Leg_rep_name").val(data[0].Leg_rep_name);
        $("#Leg_rep_id").val(data[0].Leg_rep_id);
        $("#Leg_rep_tel").val(data[0].Leg_rep_tel);
        $("#Leg_rep_email").val(data[0].Leg_rep_email);
        $("#established_data").val(data[0].established_data);
        $("#bus_lic_num").val(data[0].bus_lic_num);

    };
    ajaxRequest("", url, func);
}
//编辑按钮-显示保存按钮，隐藏编辑按钮；所有信息disable改为false
function editButton(){
	$("#edit").addClass("hide");
	$("#save").removeClass("hide");
	$("#com_name,#com_eng_name,#bus_lic_num,#established_data,#Leg_rep_email,#Leg_rep_tel,#Leg_rep_id,#Leg_rep_name").attr("disabled",false);

}
//保存按钮-显示编辑按钮，隐藏保存按钮；所有信息disable改为true
function saveButton(){
	$("#save").addClass("hide");
	$("#edit").removeClass("hide");
	$("#com_name,#com_eng_name,#bus_lic_num,#established_data,#Leg_rep_email,#Leg_rep_tel,#Leg_rep_id,#Leg_rep_name").attr("disabled",true);
	modifyCompany();
}
//传输修改数据
function modifyCompany(){
	var id=$("#companyId").val();
	var com_name=$("#com_name").val();
    var com_eng_name=$("#com_eng_name").val();
    var bus_lic_num=$("#bus_lic_num").val();
    var established_data=$("#established_data").val();
    var Leg_rep_tel=$("#Leg_rep_tel").val();
    var Leg_rep_id=$("#Leg_rep_id").val();
    var Leg_rep_email=$("#Leg_rep_email").val();
    var Leg_rep_name=$("#Leg_rep_name").val();
    
	var url="../company/companyModify";
     console.log(id);
	var companyInfo = {
        id:id,com_name:com_name,
        com_eng_name:com_eng_name,
        Leg_rep_name:Leg_rep_name,
        Leg_rep_id:Leg_rep_id,
        Leg_rep_tel:Leg_rep_tel,
        Leg_rep_email:Leg_rep_email,
        established_data:established_data,
        bus_lic_num:bus_lic_num     
        };
	var data={companyInfo:companyInfo};
	var func=function (data){
	    alert(data);
		location.reload();

	};

    if($("#com_name").val()==""){
        alert("品牌名称不允许为空！");
        return;
    }
    if($("#com_eng_name").val()==""){
        alert("品牌英文名称不允许为空！");
        return;
    }
 
    if($("#bus_lic_num").val()==""){
        alert("营业执照编码不允许为空！");
        return;
    }
    if($("#established_data").val()==""){
        alert("成立日期不允许为空！");
        return;
    }
    if($("#Leg_rep_tel").val()==""){
        alert("法人联系方式不允许为空！");
        return;
    }
    if($("#Leg_rep_id").val()==""){
        alert("法人有效身份证号不允许为空！");
        return;
    }
    if($("#Leg_rep_name").val()==""){
        alert("法人姓名不允许为空！");
        return;
    }
    if($("#Leg_rep_email").val()==""){
        alert("电子邮箱不许为空！");
        return;
    }

    ajaxRequest(data,url,func);

}


