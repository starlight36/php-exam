<?php
namespace api\Controller;
use Think\Controller;
class confirmController extends Controller {    
    public function byId(){
        if(IS_POST){
            $data['id'] = I('post.id'); 
            $result = M('article') -> where($data)->save(['status'=>1]);
            echo json_encode(['statis'=>0,'id'=> $result]);
        }else{
            echo json_encode(['status'=>1, 'message'=>'post needed']);
        }
    }
}