<?php
namespace Home\Controller;
use Think\Controller;
class CookmenuController extends CommonController {
    public function menuStyle_list(){
        $this->display();
    }
    public function menuStyle_add(){
        $this->display();
    }
    public function menu_list(){
         $this->display();
    }
    public function menu_add(){
         $this->display();
    }
    /*
        显示菜系列表
    */
    public function menuStyleList(){
        $user_id = $_SESSION['uid'];
        $user_id = 1;
        /* 
        $list = M("cookmenu")->query("select t.id, t.com_id,t.styleid ,s.stylename ,count(t.styleid) count FROM cookmenu t 
                                        INNER JOIN cookstyle s ON t.styleid = s.id 
                                        INNER JOIN company c ON c.id = t.com_id
                                        INNER JOIN user u ON u.id = c.user_id
                                        WHERE u.id = ".$user_id."
                                        group by t.com_id ,t.styleid ");

        */
        $styleArr = M("cookstyle")->query("select s.com_id,s.id as styleid,s.stylename from cookstyle s inner join company c on c.id = s.com_id inner join user u on u.id=c.user_id where u.id=".$user_id);
        $list = $styleArr;
        for($i=0;$i<count($styleArr);$i++){
            $countArr=M("cookmenu")->query("select styleid,count(styleid) count from cookmenu where  is_delete = 0 and styleid=".$styleArr[$i]["styleid"]);
            $list[$i]["count"]=$countArr[0]["count"];
        }
        if($list){
            $this->ajaxReturn ($list,'JSON');
        }else{
            $this->ajaxReturn("您还没有任何品牌的菜系信息");
        }
    }
    /**
     *菜系新增
     */
    public function menuStyleAdd(){
        $data["stylename"] = I("stylename");
        $data["com_id"] = I("comid");
        if(M("cookstyle")->where($data)->find()){
            $this->ajaxReturn("菜系名称已存在！");
        }else{
            if(M("cookstyle")->add($data)) {
                $this->ajaxReturn("菜系名称添加成功");
            }else{
                $this->ajaxReturn("菜系名称添加失败");
            }
        } 
    }
    /**
     * 菜系修改
     */
    public function menuStyleModify(){
        $data = array("stylename"=>I("stylename"));
        $condition = array("id"=>I("styleid"));
        if(M("cookstyle")->where($condition)->save($data)){
            $this->ajaxReturn("菜系名称修改成功");
        }else{
            // dump(M("cookstyle")->getLastSql());
            $this->ajaxReturn("菜系名称修改失败");
        }
    }
    /**
     * 菜系删除
     */
    public function menuStyleDel(){
        $data = array("styleid"=>I("id"));
        $data["is_delete"] = 0;
        if(M("cookmenu")->where($data)->find()){
            // echo M("cookmenu")->getlastsql();
            $this->ajaxReturn("所属菜系下菜名不为空，不能删除！");
        }
        else{
            $id = array("id"=>I("id")); 
            M('cookstyle')->where($id)->delete();
            // dump(M("cookstyle")->getLastSql());
            // die;
            $this->ajaxReturn("删除成功！");
        }
    }
/***************************************************************************************************
 *                              分割线：下边是对菜名的编辑修改函数
 ****************************************************************************************************/
    /*
        显示菜品列表
    */
    public function menuList(){
        $user_id = $_SESSION['uid'];
        $user_id = 1;
        $list = M("cookmenu")->query(" select t.id, t.com_id,s.stylename ,t.cookname,t.price,t.standard,t.recommend,t.picture,t.styleid FROM cookmenu t 
            INNER JOIN cookstyle s ON t.styleid = s.id 
            INNER JOIN company c ON c.id = t.com_id
            INNER JOIN user u ON u.id = c.user_id
            WHERE t.is_delete = 0 and u.id = ".$user_id 
        );
        if($list){
            $this->ajaxReturn ($list,'JSON');
        }else{
            $this->ajaxReturn("您还没有任何品牌的菜品信息");
        }
    }
    /*
    *根据id找到菜品
     */
    public function menuIdToInfo(){
        $condition["id"] = I("id");
        $info = M("cookmenu")->where($condition)->select();
        if($info){
            $this->ajaxReturn($info[0]);
        }else{
            $this->ajaxReturn("请核实后修改！");
        }
    }
    /**
     *菜品新增
     */
    public function menuAdd(){
        $data["com_id"] = I("com_id"); 
        $data["styleid"] = I("styleid");
        $data["cookname"] = I("cookname");
        $data["price"] = I("price"); 
        $data["standard"] = I("standard");
        $data["recommend"] = I("recommend");
        $data["introduce"] = I("introduce");
        $data["edit_time"] = time();
        $condition["cookname"]=I("cookname"); 
        if(M("cookmenu")->where($condition)->find()){
            echo "<script>parent.callback('您添加的菜已存在请点击修改进行修改',true)</script>";  
        }else{
            if (!empty($_FILES)) {  
                $this->_upload(0,$data);  
            }
        } 
    }

    /**
     * 菜品修改
     */
    public function menuModify(){
        $data["com_id"] = I("com_id"); 
        $data["styleid"] = I("styleid");
        $data["cookname"] = I("cookname");
        $data["price"] = I("price"); 
        $data["standard"] = I("standard");
        $data["recommend"] = I("recommend");
        $data["introduce"] = I("introduce");
        $data["edit_time"] = time(); 
        $condition = array("id"=>I("id"));
        //判断是否有图片上传
        $upload = $this->setUpload(); 
        $upload->upload();
        $uploadList = $upload->getUploadFileInfo();  
        if(count($uploadList)!==0){ 
            //上传了新图片 
            import('ORG.Util.Image');
            $_POST['image'] = $uploadList[0]['savename'];
            $upUrl = substr(C("IMAGES"),1);
            $imageUrl = __ROOT__.$upUrl.$_POST['image']; 
            $data["picture"] = $imageUrl; 
        }  
        $up = M("cookmenu")->where($condition)->save($data); 
        if($up){
            echo "<script>parent.callback('菜品名称修改成功！',true)</script>"; 
        }else{
            echo "<script>parent.callback('菜品名称修改失败！',true)</script>"; 
        } 
    }
    /**
     * 菜品删除
     */
    public function menuDel(){
        //if(!IS_GET) $this->error("非法操作",U('Cookmenu/menu_list'));
        $data = array("id"=>I("cookid"));
        if(M("cookmenu")->where($data)->find()){
            //echo M("cookmenu")->getlastsql();
             $id = array("id"=>I("cookid"));
            $arr = array("is_delete"=>1);
            M('cookmenu')->where($id)->save($arr);
            //dump(M('cookmenu')->getLastSql());
            $this->ajaxReturn("菜品删除成功！");
            
        }else{
           $this->ajaxReturn("该菜品不存在，不能删除");
        }
    }
/***************************************************************************************************
 *                              图片上传函数
 ****************************************************************************************************/
     
    /*图片相关设置*/
    public function setUpload(){
        import("ORG.Net.UploadFile"); 
        $upload = new \UploadFile(); 
        //设置上传文件大小 
        $upload->maxSize = 3292200; 
        //设置上传文件类型 
        $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
        // $upload->rootPath =__ROOT__;  
        //设置附件上传目录 
        $upload->savePath = C("IMAGES"); 
        //设置需要生成缩略图，仅对图像文件有效 
        $upload->thumb = true; 
        // 设置引用图片类库包路径 
        // $upload->imageClassPath = '@.ORG.Image'; 
        //设置需要生成缩略图的文件后缀 
        $upload->thumbPrefix = 'm_';  //缩略图 
        //设置缩略图最大宽度 
        $upload->thumbMaxWidth = '400,200'; 
        //设置缩略图最大高度 
        $upload->thumbMaxHeight = '400,200'; 
        //设置上传文件规则 
        $upload->saveRule = uniqid;
        return $upload; 
    }

    /**
     * 文件上传
     */
    
    protected function _upload($id,$data) { 
        $upload = $this->setUpload();
        if (!$upload->upload()) {    
            $errorMsg = $upload->getErrorMsg();
            echo "<script>parent.callback('".$errorMsg."',true)</script>"; 
            return; 
        } 
        else { 
            //取得成功上传的文件信息 
            $uploadList = $upload->getUploadFileInfo(); 
            import('ORG.Util.Image');
            //给m_缩略图添加水印, Image::water('原文件名','水印图片地址') 
            //Image::water($uploadList[0]['savepath'].'m_'.$uploadList[0]['savename'], '/tp/Examples/File/Tpl/default/Public/Images/logo2.png');
            $_POST['image'] = $uploadList[0]['savename']; 
        } 
        // $baseurl = __ROOT__.C("IMAGES");
        // $imageUrl = substr($baseurl.$_POST['image'],1);
        $upUrl = substr(C("IMAGES"),1);
        $imageUrl = __ROOT__.$upUrl.$_POST['image'];
        //$time = time();
        $data["picture"] = $imageUrl; 
        if($id){
            //修改
            $id = array("id"=>$id);
            $up = M('cookmenu')->where($id)->save($data);
        }else{
            //新增 
            $up = M("cookmenu")->add($data);
        } 
        if ($up !== false) {
            //更新版本信息 
            // $this->success('上传图片成功！');
            echo "<script>parent.callback('上传图片成功！',false)</script>"; 
        } else { 
            // $this->error('上传图片失败!'); 
            echo "<script>parent.callback('上传图片失败！',false)</script>"; 
        } 
    } 
}