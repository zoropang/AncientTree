<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends BaseController {
    public function index(){
        $id = I('get.id');
        $m =M('category');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $this->assign("is_active",$fenleiInfo['id']);
        $this->assign("id",$id);

        if($fenleiInfo['type'] == 4 || $fenleiInfo['type'] == 5) //折线图
        {   
            $tid = I('get.tid');
            if(empty($tid))
            {
                $tid = 1;
            }
            $mtree =M('trees');
            $tree_info = $mtree ->where("id ={$tid}")->find();
            $article_id = $tree_info['article_id'];
            $article_m = M("article");
            $article = $article_m->where("id ={$article_id}")->find();
            $this->assign("tree_info",$tree_info);
            $this->assign("article",$article);
            $this->assign("tid",$tid);
            $arr = array();
            if($fenleiInfo['type'] == 4)
            {
                $this->assign("title","震动情况");
                $arr["type_name"] = "震动情况";
                $arr["unit"] = "1/0";
                $this->assign("type", 0); //震动
            }
            if($fenleiInfo['type'] == 5)
            {
                if($id == 22)
                {
                    $this->assign("title","倾斜情况");
                    $arr["type_name1"] = "位移";
                    $arr["type_name2"] = "角度";
                    $arr["unit1"] = "厘米";
                    $arr["unit2"] = "度";
                    $this->assign("type", 1); //倾斜度
                }
                else
                {
                    $this->assign("title","温湿度");
                    $arr["type_name1"] = "温度";
                    $arr["type_name2"] = "湿度";
                    $arr["unit1"] = "摄氏度";
                    $arr["unit2"] = "百分比";
                    $this->assign("type", 2); //温湿度
                }
            }
            $this->assign("chart_param", json_encode($arr));
        }
        else
        {
            $article = D("article");
            $count      = $article->where("fid = '%s' AND status = 0",$id)->count();//
            $Page       = new \Think\Page($count,10);
            $show       = $Page->show();//
            $articleList = $article->field('a.*,b.truename')->table("__ARTICLE__ a,__USER__ b")->where("a.status = 0 and b.id = a.uid and a.fid = {$id}")->order('a.istop desc,a.id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign("articleList",$articleList);
            $this->assign('page',$show);
        }

        
        $theme = C('DEFAULT_THEME');
        $file = "./Application/Home/View/{$theme}/Category/index{$fenleiInfo['type']}.html";
        if(file_exists($file)){
            $this->display("index{$fenleiInfo['type']}");
        }else{
            $this->display("index");
        }
    }





}
