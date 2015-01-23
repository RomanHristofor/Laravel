<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    public $title=null;
    public $style=array();
	public function __construct()
	{
		//parent::__construct();
        View::composer(['leauts.default'],function($view){

        $this->title='Мой сайт';
        $this->style=array('media/css/styles.css','http://fonts.googleapis.com/css?family=Oswald:400,300');
            $this->script=array('http://html5shiv.googlecode.com/svn/trunk/html5.js');
            //передача
        $view->with('style',$this->style)
             ->with('script',$this->script);


    });
	}
	 
	protected function setupLayout()
	{
		if ( !is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
