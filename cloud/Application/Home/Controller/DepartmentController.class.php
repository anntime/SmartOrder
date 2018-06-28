<?php
namespace Home\Controller;
use Think\Controller;

/*
*店面管理控制器，主要实现店面的增删改查
 */
class DepartmentController extends CommonController{
	public function department_list(){
    	$this->display(); 

	}
	Public function department_add(){
		$this->display();
	}
	/*
	*显示所有店面列表
	 */
	public function departmentList(){
		$user_id = $_SESSION['uid'];
		$user_id = 1; 
		$list = D("department")->getDepartment($user_id);
		// dump($list);
		if($list){ 
            $this->ajaxReturn ($list,'JSON');
        }else{
            $this->ajaxReturn("您还没有任何店面信息,请新建之后查看。");
        }
	}
	/*
	*新增店面信息(需要一个函数将company的信息发到前台进行选择)
	 */
	Public function departmentAdd(){
		$departmentInfo = I("departmentInfo");
		// dump($departmentInfo);
		//$departmentInfoArr = json_decode($departmentInfo);
		// dump($departmentInfoArr);
		$result = D("department")->addDepartment($departmentInfo);
		if($result=="error"){
			$this->ajaxReturn("该店面已存在，请核实之后注册");
		}else{
			$this->ajaxReturn("店面注册成功！");
		}
	}
	/*
	*删除店面信息
	 */
	Public function departmentDel(){
		$departmentInfo["id"] = I("departmentId");
		$result = D("department")->delDepartment($departmentInfo);
		if($result=="error"){
			$this->ajaxReturn("该店面不存在，请核实后再删除！");
		}else{
			$this->ajaxReturn("店面已删除！");
		}
	}
	/*
	*修改店面信息
	 */
	Public function departmentModify(){
		$departmentInfo = I("departmentInfo");
		// $departmentInfoArr = json_decode($departmentInfo);
		$result = D("department")->modifyDepartment($departmentInfo); 
		if($result=="error"){
			$this->ajaxReturn("该店面不存在，请核实之后进行修改");
		}else{
			$this->ajaxReturn("店面修改成功！");
		}
	}
	/*
	根据id获得店铺信息
	 */
	public function idToDeptInfo(){
		$departmentInfo["id"] = I("departmentId");
		$result = D("department")->idToDeptInfo($departmentInfo);
		if($result=="error"){
			$this->ajaxReturn("该店面不存在，请核实后再修改！");
		}else{
			$this->ajaxReturn($result,'JSON');
		}
	}
}

?>