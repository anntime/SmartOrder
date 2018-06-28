<?php 
namespace Home\Model;
use Think\Model;
	/**
	 * 
	 */
Class DepartmentModel extends Model{
	//构造函数
	Public function __construct(){
		$this->dbDepartment = M("department");
	}
	 //获得店面信息
	Public function getDepartment($condition){  
		$list =$this->dbDepartment->query("select d.* from department d inner join company c on c.id=d.com_id inner join user u on c.user_id=u.id where u.id=".$condition);
		for($i=0;$i<count($list);$i++){
			$com_id = $list[$i]["com_id"];
			$result = M("company")->where("id=".$com_id)->select(); 
			$list[$i]["com_name"]=$result[0]["com_name"];
		}
		return $list; 
	}
	//增加店面
	Public function addDepartment($condition){
		$con["business_license"] = $condition["business_license"];
		if($this->dbDepartment->where($con)->count()){
			return "error";
		}else{
			
			$result = $this->dbDepartment->add($condition);
			// dump($this->dbDepartment->getLastSql());
			if($result) return $result;
		}


	}
	//删除店面
	Public function  delDepartment($condition){  
		if($this->dbDepartment->where()->delete($condition)){
			return  "success";
		}else{
			// return $this->dbDepartment->getLastSql();
			else return "error";
		} 
		 
	}
	//修改店面
	Public function modifyDepartment($condition){
		$con['id'] = $condition['id'];
		if($this->dbDepartment->where($con)->count()){
			unset($condition["id"]); 
			$result = $this->dbDepartment->where($con)->save($condition); 
			if($result){
				return $result;
			}else{
				return "error";
			} 
		}else{
			return "error";
		}
		
	}
	//根据Id获得店铺信息
	public function idToDeptInfo($condition){ 
		$list = $this->dbDepartment->where($condition)->find();
		if($list){
			return $list;
		}else{
			 return "error"; 
		}
	} 
	 
	
}

 ?>