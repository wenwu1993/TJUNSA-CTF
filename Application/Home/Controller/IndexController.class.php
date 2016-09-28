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
			$Verify=new \Think\Verify();
			if(!$Verify->check($_POST['captcha'])){
				$this->error("captcha wrong");
			}
			else{
				if(strlen($_POST["username"])<1||strlen($_POST["password"])<1){
					$this->error("error");
				}
				else{
					$user->create($_POST);
					try {
						$user->add();
						$this->success("success","/");
					} catch (\Exception $e) {
						$this->error("error");
					}
				}
			}
		}
		else{
			$this->display();
		}
	}

	public function login(){
		if(IS_POST){
			$user=M("user")->where($_POST)->find();
			if($user===NULL){
				$this->error("error");
			}
			else{
				session('name',$user["username"]);
				session('id',$user['id']);
				$this->success("success","/");
			}
		}
		else{
			$this->display();
		}
	}

	public function logout(){
		session('[destroy]');
		$this->success("success");
	}

	public function verify(){
		$config=array(
			'fontSize'	=>	30,	// 验证码字体大小
			'length'	  =>	4,	 // 验证码位数
			'useNoise'	=>	false, // 关闭验证码杂点
		);
		$Verify=new \Think\Verify($config);
		$Verify->entry();
	}
}