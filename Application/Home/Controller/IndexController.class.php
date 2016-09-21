<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function register(){
    	if(IS_POST){
	    	$user=M("user")->field("username,password,email");
	    	if(strlen($_POST["username"])<1||strlen($_POST["password"])<1){
	    		$this->error("error");
	    	}
	    	else{
		    	$user->create($_POST);
		    	try {
		    		$user->add();
		    		$this->success("success");
		    	} catch (\Exception $e) {
		    		$this->error("error");
		    	}
		    }
	    }
	    else{
	    	$this->display();
	    }
    }

    public function login(){
    	if(IS_POST){
    		$user=M("user");
    		if($user->where($_POST)->find()===NULL){
    			$this->error("error");
    		}
    		else{
    			session('name',$_POST["username"]);
    			$this->success("success");
    		}
    	}
    	else{
    		$this->display();
    	}
    }

    public function logout(){
    	session('[destroy]');
    	$this->success("success","/");
    }
}