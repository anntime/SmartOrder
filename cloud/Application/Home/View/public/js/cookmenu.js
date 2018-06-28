/*
*菜品管理相关js程序
 */
/********************************************
***菜系处理*****
*********************************************/
$(document).ready(function(){
	$("#myModal").hide();
	$("#myModal1").hide();
	getMenuStyleList();
	$("#closeModal").click(function(){
		$("#myModal").hide();
	});
		$("#closeModal1").click(function(){
		$("#myModal1").hide();
	});
	getMenuList();
	fillCompany();
	fillMenuStyle(); 
});

//请求菜系列表
function getMenuStyleList(){
	var url = "../cookmenu/menuStyleList";
	var data = "";
	var func = function(data){ 
		for(var i=0;i<data.length;i++){
			var temp=data[i];
			// console.log(temp);
			$("#menuStyle").append("<tr id="+temp.styleid+"><td>"+(i+1)+"</td><td>"+temp.stylename+"</td><td>"+temp.count+
				"</td><td><a href='javascript:;' onclick='showModifyMenuStyle(\""+ temp.styleid+
					"\")'>修改</a> |<a href='javascript:;' onclick='delMenuStyle(\""+ temp.styleid+"\")' >删除</a></td></tr>");
		} 

	};
	ajaxRequest(data,url,func); 
}
//显示修改菜系
function showModifyMenuStyle(id){
	// console.log(id);
	var style = $("#"+id).children("td");
	var styleName = style[1].innerHTML;
	$("#menuStyleName").html(styleName);
	$("#styleid").val(id);
	$("#myModal").show();
}

//修改菜系
function modifyMenuStyle(){
	var id = $("#styleid").val();
	var name = $("#stylename").val();
	var url = "../cookmenu/menuStyleModify";
	var data = {styleid:id,stylename:name};
	var func =function (data){
		$("#myModal").hide();
		alert(data);
		location.reload();
	} ;
	if(name==""){
		alert("菜系名不能为空");
		return;
	}
	ajaxRequest(data,url,func);
}

//删除菜系
function delMenuStyle(id){
	var style = $("#"+id).children("td");
	var styleName = style[1].innerHTML;
	var cookNum = style[2].innerHTML;
	if(cookNum==0){
		if(confirm("确定要删除菜系--"+styleName+"?")){
			//请求后台删除菜系
			var url = "../cookmenu/menuStyleDel";
			var data = {id:id}; 
			var func = function(data){
				alert(data);
				location.reload();
			};
			ajaxRequest(data,url,func);
		} 
	}else{
		alert("菜系"+styleName+"下菜品数量不为零，不能删除！");
	}
}
/********************************************
***菜品信息*****
*********************************************/
//请求菜品列表
function getMenuList(){
	var url = "../cookmenu/menuList";
	var data = "";
    var func = function(data){ 
    	console.log(data);
		$("#menuListTable").html(""); 
		for(var i=0;i<data.length;i++){
			var temp=data[i];
			// console.log(temp);
			$("#menuListTable").append("<tr id="+temp.id+"><td>"+(i+1)+
				"</td><td>"+temp.stylename+"</td><td>"+temp.cookname+
				"</td><td><img src=\""+temp.picture+"\" class=\"menuListImg\"/></td><td>"+temp.price+"</td><td>"+temp.standard+"</td><td>"
				+temp.recommend+"</td><td><a href='javascript:;' onclick='showModifyMenu(\""
				+ temp.id+"\")'>修改</a> |<a href='javascript:;' onclick='delMenuList(\""+ 
				temp.id+"\")' >删除</a></td></tr>");
		} 
	};
    ajaxRequest(data,url,func);
}
//删除菜品
function delMenuList(id){
	console.log(id);
	var cook = $("#"+id).children("td");
	var cookName = cook[2].innerHTML;
	if(confirm("确定要删除菜品--"+cookName+"?")){
			//请求后台删除菜品
			var url = "../cookmenu/menuDel";
			var data = {cookid:id}; 
			var func = function(data){
				alert(data);
				location.reload();
			};
			ajaxRequest(data,url,func);
		} 
}
//新增菜品
function addMenuList(){ 
	if($("#cookname").val()==""){
		alert("菜品名称不允许为空！");
		return;
	}
	if($("#price").val()==""){
		alert("单价不允许为空！");
		return;
	}
	if($("#introduce").val()==""||$("#introduce").val().length<10){
		alert("菜品介绍不规范，请输入菜品介绍至少10个字");
		return;
	} 
	$("#menuAdd").submit(); 
} 
//图片上传模拟ajax事件的回调函数
function callback(message,success){ 
	if(success==false){ 
		$("#cookname").val("");
		$("#price").val("");
		$("#introduce").val(""); 
		alert(message); 
		$("#myModal1").hide();
		getMenuList();
	}else{  
		alert(message); 
		 // location.reload();
		 $("#myModal1").hide();
		 getMenuList();
		 // location.reload();
	} 
} 
//显示修改菜品页面
function showModifyMenu(id){
	var data = {id:id};
	// console.log(data);
	var url = "../cookmenu/menuIdToInfo";
	var func = function(data){
		// console.log(data); 
		if(typeof(data)!=="object"){
			alert(data);
		}else{
			// console.log(data);
			$("#id").val(data.id);
			var option = $("#styleid").find("option");
			for(var i=0;i<option.length;i++){
				if(option[i].value==data.styleid)
					option[i].selected=true;
			}
			$("#cookname").val(data.cookname);
			$("#price").val(data.price);
			option = $("#standard").find("option");
			for(var i =0;i<option.length;i++){
				if(option[i].text==data.standard){
					option[i].selected=true;
				}
			}
			option = $("#recommend").find("option"); 
			for(var i=0;i<option.length;i++){
				if(option[i].text==data.recommend){
					option[i].selected=true;
				}
			}
			$("#picture").attr("src",data.picture);
			$("#introduce").val(data.introduce);

		}
	};
	ajaxRequest(data,url,func);
	$("#myModal1").show();
}
//修改菜品
function modifyMenuList(){
	if($("#cookname").val()==""){
		alert("菜品名称不允许为空！");
		return;
	}
	if($("#price").val()==""){
		alert("单价不允许为空！");
		return;
	}
	if($("#introduce").val()==""||$("#introduce").val().length<10){
		alert("菜品介绍不规范，请输入菜品介绍至少10个字");
		return;
	} 
	$("#menuModify").submit(); 
}
//新增菜品页面与修改菜品页面，填充品牌的下拉列表
function fillCompany(){
	var data ="";
	var url = "../company/companyList";
	var func = function(data){
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
	ajaxRequest(data,url,func);
}
//新增菜品页面与修改菜品页面，填充品牌的下拉列表
function fillMenuStyle(){
	var data ="";
	var url = "../cookmenu/menuStyleList";
	var func = function(data){
		for (var i = data.length - 1; i >= 0; i--) {
			var temp = data[i];  
			var styleName = temp.stylename;
			var styleId = temp.styleid;
			var myOption = document.createElement("option");
			myOption.value = styleId;
			myOption.text = styleName;  
			$("#styleid").append(myOption);
		};
	};
	ajaxRequest(data,url,func);
}

// 新增菜系
function submitmenuStyle(){  
	var menuStyleInfo;
	var com_id = getSelect("com_id","value"); 
	var menuStyleName = $("#menuStyleName").val();
	var data = {comid:com_id,stylename:menuStyleName};
	var url = "../cookmenu/menuStyleAdd";
	var func = function(data){
		alert(data);
		location.reload();
	};
	ajaxRequest(data,url,func);

}