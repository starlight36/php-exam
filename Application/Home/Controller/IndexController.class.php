<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model = M('article');
        $allArticle = $model -> select();
        $this->assign('allArticle',$allArticle);
        $this->display();
    }
    
    public function api(){
        $this->display();
    }
}