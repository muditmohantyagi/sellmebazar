<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
       // $this->Auth->allow('registration');
    }
	public function home()
	{
		$this->viewBuilder()->layout('angularjs_default');
		//$this->autoRender=false;
		
	}
	public function index()
	{
		
		
	}	
	public function registration()
	{
		
		
	}
	public function login()
	{
		
		
	}
	public function submitAdd()
	{
		
		
	}
/*End*/
}	
?>