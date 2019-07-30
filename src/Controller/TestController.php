<?php 
	namespace App\Controller;

	use App\Controller\AppController;

	class TestController extends AppController
	{
		public function index(){
			// $this->autoRender = false;
			// echo "CakePHP";
			$this->set('name','hasan mahmud');
			$this->set('position','web developer');

			$profile = array('name' => 'Hasan Mahmud', 'address' => 'Feni, Bangladesh', 'about' => 'I am a Web Developer.I am a one years experience in IT Sector.');
			$this->set('data',$profile);
			$this->set(compact('profile'));
		}

		public function owt($arg1='', $arg2=''){
			// $this->autoRender = false;
			// echo "<b>Owt method</b>";
			// print_r($this->request->params['pass'][1]);
			// echo $arg2;
			echo $arg1;
		}
	}
 ?>