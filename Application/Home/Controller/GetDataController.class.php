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
        $json = json_encode(array('data' => $arr));
        echo $json;
        //return $this->success('OK', null, $json);
    }


    public function index2(){
        
        $now = time();
        $value1 = rand(28,30);
        $value2 = rand(50,53);
        $arr = array('data1' => $value1,'data2' => $value2,  'time' => $now, 'date' => date('Y-m-d H:i:s', $now));
        $json = json_encode($arr);
        echo $json;
        //return $this->success('OK', null, $json);
    }

    public function init2(){
        
        $t = time();
        $arr1 = array();
        $arr2 = array();
        for($i = 100; $i>=0; $i--)
        {
            $now = date('Y-m-d H:i:s', $t - $i);
            $value1 = rand(2800, 3000) / 100;
            $value2= rand(5000, 5300) / 100;
            array_push($arr1, array('value' => array($now, $value1)));
            array_push($arr2, array('value' => array($now, $value2)));
        }
        $json = json_encode(array('data1' => $arr1 ,'data2' => $arr2));
        echo $json;
        //return $this->success('OK', null, $json);
    }


}
