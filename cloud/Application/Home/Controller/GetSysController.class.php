<?php
/**
 * 菜单同步模块
 */
namespace Home\Controller;
use Think\Controller;
Class GetSysController extends Controller{
	/**
	 * [获取菜单信息]
	 * Powered By BJUT
	 * @copyright [MrXiao]
	 * @license   [@BJUT]
	 * @version   [0.1]
	 * @return    [type]   [description]
	 */
	Public function getMenu(){
		//判断请求类型
		// if(!IS_POST||empty(I("key"))){
		// 	$this->ajaxReturn("请求参数有误！请核对！");
		// }
		
		$reqVersion = I("version"); //reqVersion客户端的菜单版本。
		$condation = array("dept_key"=>I("key"));
		if(M("department")->where($condation)->find()){
			//当找到这个dept_key 以后检索同步信息
			//1.检索菜系改动
			// $sql = "sel"
			//2.检索菜品改动
			$sql = "select m.* ,d.dept_name from cookmenu m 
					inner join department d on d.com_id = m.com_id where d.dept_key = 'qqq' 
					AND edit_time between 1444551622 and 1444551622";
			$data = M("")->query($sql);
			if(!empty($data)){
				//如果数据有改动，
			}
			
		}
	}
	Public function index(){
		dump(randcode());
	}

}












 ?>
