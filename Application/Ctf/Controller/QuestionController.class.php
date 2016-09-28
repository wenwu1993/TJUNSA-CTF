<?php
namespace Ctf\Controller;
use Think\Controller;
class QuestionController extends Controller {
 
 public function question(){
 	$id=$_GET["id"];
 	session('q_id',$id);
 	$this->display($id);
	
 } 

public function base(){
		//echo "111";
		//$id=$_GET['id'];
		if (IS_POST) {
		$question=M("ctf_question");
		$condition['id']=session('q_id');
		$condition['flag']=$_POST["flag"];
			if ($question->where($condition)->find()===null) {
				$this->error("答案错误！");
			}
			else
			{				
				$answer=M("ctf_answer");
				$data['user_id']=session('id');
				$data['question_id']=session('q_id');
				if ($answer->where($data)->find()===null) {
					$answer->add($data);
				}
				unset($_SESSION['q_id']);
				$this->success("答案正确！","/exercise");
			}
	}
}


}
       