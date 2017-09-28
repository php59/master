<?php 
namespace Test\Controller;
use Think\Controller;
class SCController extends Controller {
	function verify(){
		$config = array(
				'codeSet' =>'123456789',
				'useImgBg' =>false,
				'bg' =>array(110,220,60),
				'useCurve' =>false,
				'useNoise' =>false,
				'fontSize' => 15,
				'fontttf'  =>'4.ttf'
			);
		$verify = new \Think\Verify($config);
		$verify->entry();
	}
	function yanzheng(){
		$this->display();
	}

}
 ?>