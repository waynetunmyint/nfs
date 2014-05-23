<?php

	App::uses('Controller', 'Controller');

	class AppController extends Controller {

	   
	    public $components = array('DebugKit.Toolbar','Session','Auth');

	    function beforeFilter()
	    {
	    	parent::beforeFilter();
	    	$this->Auth->allow('index','register','index','view_cart','add_to_cart');
	    }

	     public $paginate = array(
        			'limit' => 2,
		);
	}
?>