/*
*店铺入驻
 */
 $(document).ready(function(){
    $("#1div").show();
    $("#2div,#3div,#4div,#5div").hide();


});
$(document).ready(function() {
        uploadImage("file_upload_0", 1, "uploadify", "营业执照");
        uploadImage("file_upload_1", 1, "uploadify", "税务登记证");
        uploadImage("file_upload_2", 1, "uploadify", "织机构代码证");
        uploadImage("file_upload_3", 1, "uploadify", "开户许可证");
        uploadImage("file_upload_4", 1, "uploadify", "法人身份证");
        uploadImage("file_upload_5", 1, "uploadify", "负责人身份证");
        uploadImage("file_upload_6", 1, "uploadify", "纳税人资格证");
        $("#file_upload_0").attr("style", "float:left;");
        $("#file_upload_1").attr("style", "float:left;");
        $("#file_upload_2").attr("style", "float:left;");
        $("#file_upload_3").attr("style", "float:left;");
        $("#file_upload_4").attr("style", "float:left;");
        $("#file_upload_5").attr("style", "float:left;");
        $("#file_upload_6").attr("style", "float:left;");
    })
 

// 完成页面切换
// 下一页
 function nextSettled(id){
 	$("#"+id+"div").hide();
 	$("#"+(id+1)+"div").show();
 	$("."+(id+1)+"li").addClass("first cur ok");
 	$("."+(id+1)+"span").addClass("going");
 	$("."+id+"li").addClass("first prev ok");
 	$("."+id+"li").removeClass("cur");

 };	
 // 上一页
  function upSettled(id){
 	$("#"+id+"div").hide();
 	$("#"+(id-1)+"div").show();
 	$("."+id+"li").removeClass("first cur ok");
 	$("."+id+"span").removeClass("going");
 	$("."+(id-1)+"li").addClass("first cur ok");
 	$("."+(id-1)+"li").removeClass("prev");
 };