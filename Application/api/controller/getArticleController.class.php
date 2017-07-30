<?php
namespace api\Controller;
use Think\Controller;
class getArticleController extends Controller {
    public function all(){
        echo json_encode(M('article')->select());
    }
    
    public function byId(){
        if( !I('get.id')){
            die(json_encode([status => 1 ,'message'=>'param error']));
        }

        $data = M('article')->where("id = %d",I('get.id'))->find();
        if(!isset($data)){
             $data = ['status'=>2, message => "article not found"];
        }
        echo json_encode($data);
    }
}