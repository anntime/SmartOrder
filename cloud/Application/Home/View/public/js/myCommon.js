//ajax请求函数
function ajaxRequest(data,url,func){
	$.ajax({
		type: "POST",
		async: false, 
		url: url,
		data:data,  
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log("Error:"+XMLHttpRequest.readyState+"   "+XMLHttpRequest.responseText); 
			alert("Error:"+XMLHttpRequest.readyState+"   "+XMLHttpRequest.responseText);
		},
		success: func
	});
}
//获得select下拉列表选中的value;
function getSelect(selectId,text){
	var option = $("#"+selectId).find("option");
	var selectVal;
	var selectTex;
	for(var i=0;i<option.length;i++){
		if(option[i].selected){
			selectVal = option[i].value;
			selectTex = option[i].text;
		}
	}
	if(text=="value"){
		return selectVal;
	}else{
		return selectTex;
	}
	
}
 