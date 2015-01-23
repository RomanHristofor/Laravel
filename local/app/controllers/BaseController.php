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
        $this->style=array('media/bootstrap/bootstrap.min.css','media/css/blog.css');
            $this->script=array('media/bootstrap/js/bootstrap.min.js','media/bootstrap/js/docs.min.js');
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
