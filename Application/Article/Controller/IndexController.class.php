<?php
namespace Article\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$article=M('article')->select();
    	$this->assign('article',$article);
        $this->display();
    }

    public function read(){
    	$article=M('article')->where('id='.$_GET['id'])->find();
    	$this->assign('article',$article);
        $this->display($article["id"]);
    }
}