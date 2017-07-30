<?php
namespace api\Controller;
use Think\Controller;
class addController extends Controller {
    public function addArtile(){
        if(IS_POST){
            $data['digest'] = I('post.digest');
            $data['content'] = I('post.content');
            $data['status'] = 0;

            $result = M('article') -> add($data);
            echo json_encode(['statis'=>0,'id'=> $result]);
        }else{
            echo json_encode(['status'=>1, 'message'=>'post needed']);
        }
    }
}