<?php
namespace Home\Controller;
use Think\Controller;

/*
*品牌管理控制器，主要实现品牌的增删改查
 */
class CompanyController extends CommonController{
	public function company_list(){
    	$this->display(); 

	}
	 public function company_add(){
        $this->display();
    }
	/*
	*显示所有品牌列表
	 */
	public function companyList(){
		$user_id = $_SESSION['uid'];
		$user_id = 1;
		$condition['user_id']=$user_id;
		$list = D("company")->getCompany($condition);
		if($list){
            $this->ajaxReturn ($list,'JSON');
        }else{
            $this->ajaxReturn("您还没有任何品牌信息,请新建之后查看。");
        }
	}
	/*
	*新增品牌信息
	 */
	Public function companyAdd(){
		$companyInfo = I("companyInfo");
		$companyInfoArr = json_decode($companyInfo);
		$result = D("company")->addCompany($companyInfoArr);
		if($result=="error"){
			$this->ajaxReturn("该品牌已存在，请核实之后注册");
		}else{
			$this->ajaxReturn("品牌注册成功！");
		}
	}
	/*
	*删除品牌信息
	 */
	Public function companyDel(){
		$companyInfo["id"] = I("companyId");
		$result = D("company")->delCompany($companyInfo);
		if($result=="error"){
			$this->ajaxReturn("该品牌不存在，请核实后再删除！");
		}else if($result=="false"){
			$this->ajaxReturn("该品牌下面还存在店面，不能删除！");
		}else{
			$this->ajaxReturn("品牌已删除！");
		}
	}
	/*
	*修改品牌信息
	 */
	Public function companyModify(){
		$companyInfo = I("companyInfo"); 
		$result = D("company")->modifyCompany($companyInfo); 
		if($result=="error"){
			$this->ajaxReturn("该品牌不存在，请核实之后进行修改");
		}else{
			$this->ajaxReturn("品牌修改成功！");
		}
	}
}

?>