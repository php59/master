<?php 
namespace Test\Controller;
use Think\Controller;
class ModelController extends Controller {
	public function index(){
		$this->display();
	}
    public function add(){
      $student = D('Student');
      $data = $student->create();
      if (!$data) {
      	echo $student->getError();
      }else{
      	var_dump($data);
      }
    }
    public function join(){
    	 $user = D('User');
    	 $result = $user->alias('u')
    	 ->field("d.dname,count(*)")
            ->join("left join dept d on u.dept_id=d.id")
            ->group('d.name')
            ->select();
        dump($result);
    }
}

 ?>