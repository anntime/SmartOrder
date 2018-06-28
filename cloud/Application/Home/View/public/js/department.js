$(document).ready(function() {
    $("#myModal").hide();
    // $("#myModal2").hide();
    fillCompany();
    getDepartmentList();


    $("#closeModal").click(function() {
        $("#myModal").hide();

    });
});
//提交店铺新增表单
function submitDepartment() {
    var departmentInfo;
    var com_id = getSelect("com_id", "value");
    var dept_name = $("#dept_name").val();
    var dept_charge_name = $("#dept_charge_name").val();

    var dept_charge_tel = $("#dept_charge_tel").val();
    var dept_charge_email = $("#dept_charge_email").val();
    var dept_add = getSelect("prov4", "text") + getSelect("city4", "text") + getSelect("area4", "text");
    var dept_detail = $("#dept_detail_add").val();
    var business_license = $("#business_license").val();
    var dept_charge_id = $("#dept_charge_id").val();

    departmentInfo = {
        com_id: com_id,
        dept_name: dept_name,
        dept_charge_name: dept_charge_name,
        dept_charge_tel: dept_charge_tel,
        dept_charge_id: dept_charge_id,
        dept_charge_email: dept_charge_email,
        dept_add: dept_add,
        dept_detail_add: dept_detail,
        business_license: business_license
    };
    var data = {
        departmentInfo: departmentInfo
    };
    var url = "../department/departmentAdd";
    var func = function(data) {
        alert(data);
        location.reload();
    };
    ajaxRequest(data, url, func);

}

//填充品牌的下拉列表
function fillCompany() {
    var data = "";
    var url = "../company/companyList";
    var func = function(data) {
        for (var i = data.length - 1; i >= 0; i--) {
            var temp = data[i];
            var comName = temp.com_name;
            var comId = temp.id;
            var myOption = document.createElement("option");
            myOption.value = comId;
            myOption.text = comName;
            $("#com_id").append(myOption);
        };
    };
    ajaxRequest(data, url, func);
}


//店面信息
function getDepartmentList() {
        var url = "../department/departmentList";
        var data = "";
        var func = function(data) {
            for (var i = 0; i < data.length; i++) {
                var temp = data[i];
                console.log(temp);
                $("#departmentList").append("<tr id=" + temp.id + "><td>" + (i + 1) +
                    "</td><td>" + temp.com_name + "</td><td>" + temp.dept_name +
                    "</td><td>" + temp.dept_charge_name + "</td><td>" + temp.dept_charge_tel + "</td><td>" + temp.dept_charge_id +
                    "</td><td>" + temp.dept_charge_email + "</td><td>" + temp.dept_add + temp.dept_detail_add + "</td><td>" + temp.business_license +
                    "</td><td><a href='javascript:;' onclick='showModifyDepartmentList(\"" + temp.id +
                    "\")' >修改</a> |<a href='javascript:;'onclick='delDepartmentList(\""+ temp.id+"\")'>删除</a></td></tr>");
            }

        };
        ajaxRequest(data, url, func);
    }
    //删除店铺
function delDepartmentList(id){
    var department = $("#"+id).children("td");
    var departmentName = department[1].innerHTML;
    if(confirm("确定要删除店铺--"+id+"?")){
            //请求后台删除菜系
            var url = "../department/departmentDel";
            var data = {departmentId:id}; 
            var func = function(data){
                alert(data);
                location.reload();
            };
            ajaxRequest(data,url,func);
        } 
}
//显示修改店铺
function showModifyDepartmentList(id) {

    console.log(id);
    var url = "../department/departmentList";
    var func = function(data) {

        for (var i = 0; i < data.length; i++) {
            //  console.log(data[i]);

            if (data[i].id == id) {
                //console.log(id);
                $("#deptId").val(data[i].id);
                $("#dept_name").val(data[i].dept_name);
                $("#dept_charge_name").val(data[i].dept_charge_name);
                $("#dept_charge_tel").val(data[i].dept_charge_tel);
                $("#dept_charge_id").val(data[i].dept_charge_id);
                $("#dept_charge_email").val(data[i].dept_charge_email);
                $("#dept_add").val(data[i].dept_add);
                $("#dept_detail_add").val(data[i].dept_detail_add);
                $("#business_license").val(data[i].business_license);
            }
        }


    };
    ajaxRequest("", url, func);

    $("#myModal").show();
}
function cityModify(){

	$("#newCity").attr("style","display:block");   
}
//修改店铺信息
function modifyDepartmentList(){
	var dept_name=$("#dept_name").val();
    var dept_charge_name=$("#dept_charge_name").val();
    var dept_charge_tel=$("#dept_charge_tel").val();
    var dept_charge_id=$("#dept_charge_id").val();
    var dept_charge_email=$("#dept_charge_email").val();
  
    var dept_add=getSelect("prov4", "text") + getSelect("city4", "text") + getSelect("area4", "text");

    var dept_detail_add=$("#dept_detail_add").val();
    var business_license=$("#business_license").val();
    var id=$("#deptId").val();

    var url = "../department/departmentModify";
    //console.log(id);
	var departmentInfo = {
        id:id,dept_name:dept_name,
        dept_charge_name:dept_charge_name,
        dept_charge_tel:dept_charge_tel,dept_charge_id:dept_charge_id,
        dept_charge_email:dept_charge_email,dept_add:dept_add,
        dept_detail_add:dept_detail_add,business_license:business_license};
	var data={departmentInfo:departmentInfo};
    
    var func =function (data){
        //console.log(id);
        $("#myModal").hide();
		alert(data);
		location.reload();
	} ;
    if($("#dept_name").val()==""){
        alert("店铺名称不允许为空！");
        return;
    }
    if($("#dept_charge_name").val()==""){
        alert("店铺负责人不允许为空！");
        return;
    }
    if($("#dept_charge_tel").val()==""){
        alert("店铺负责人电话不允许为空！");
        return;
    } 
    if($("#dept_charge_id").val()==""){
        alert("店铺负责人身份证号不允许为空！");
        return;
    }
    if($("#dept_charge_email").val()==""){
        alert("店铺邮箱不允许为空！");
        return;
    }
    if($("#dept_detail_add").val()==""){
        alert("店铺地址不允许为空！");
        return;
    }
    if($("#business_license").val()==""){
        alert("营业执照不允许为空！");
        return;
    }
	ajaxRequest(data,url,func);
}
