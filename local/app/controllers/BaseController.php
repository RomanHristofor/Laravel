<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    public $title=null;
    public $style=array();
	public function __construcr()
	{
		//parent::__construcr();
        View::composer(['leauts.default'],function($view){

        $this->title='Мой сайт';
        $this->style=array('media/bootstrap/bootstrap.min.css','media/css/blog.css');

            //передача
        $view->with('style',$this->style)
             ->with('style',$this->style);





    });
	}
	 
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
