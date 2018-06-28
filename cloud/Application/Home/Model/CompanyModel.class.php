<?php 
namespace Home\Model;
use Think\Model;
	/**
	 * 
	 */
Class CompanyModel extends Model{
	//构造函数
	Public function __construct(){
		$this->dbCompany = M("company");
	}
	 //获得品牌信息
	Public function getCompany($condition){ 
		$result = $this->dbCompany->where($condition)->select();
		// dump($this->dbBook->getLastSql()); 
		return $result; 
	}
	//增加品牌
	Public function addCompany($condition){
		$con["bus_lic_num"] = $condition["bus_lic_num"];
		if($this->dbCompany->where($con)->count()){
			return "error";
		}
		$result = $this->dbCompany->add($condition);
		if($result) return $result; 
	}
	//删除品牌
	Public function  delCompany($condition){
		//当该品牌下面的店面不为空时，不能删除。
		if(M("department")->where(array("com_id"=>$condition["id"]))->count()){
			return "false";
		}else{
			if($this->dbCompany->where()->delete($condition["id"])) return  "success";
			else return "error";
		}
	}
	//修改品牌
	Public function modifyCompany($condition){
		$con['id'] = $condition['id'];
		if($this->dbCompany->where($con)->count()){
			unset($condition["id"]); 
			$result = $this->dbCompany->where($con)->save($condition); 
			if($result){
				return $result;
			}else{
				return "error";
			}
		}else{
			return "error";
		}
		
	}
	 
	
}

 ?>