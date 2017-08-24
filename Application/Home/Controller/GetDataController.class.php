<?php
namespace Home\Controller;
use Think\Controller;
class GetDataController extends Controller {

    public function index(){
        
        $now = time();
        $value = rand(28,30);
        $arr = array('data' => $value, 'time' => $now, 'date' => date('Y-m-d H:i:s', $now));
        $json = json_encode($arr);
        echo $json;
        //return $this->success('OK', null, $json);
    }

    public function init(){
        
        $t = time();
        $arr = array();
        for($i = 100; $i>=0; $i--)
        {
            $now = date('Y-m-d H:i:s', $t - $i);
            $value = rand(2800, 3000) / 100;
            array_push($arr, array('value' => array($now, $value)));
        }
        $json = json_encode($arr);
        echo $json;
        //return $this->success('OK', null, $json);
    }


}
