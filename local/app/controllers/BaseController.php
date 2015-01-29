<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */ //'media/bootstrap/bootstrap.min.css',
    public $title=null;
    public $style=array('media/css/styles.css','http://fonts.googleapis.com/css?family=Oswald:400,300');
    public $script=array('http://html5shiv.googlecode.com/svn/trunk/html5.js','https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
                        'media/bootstrap/js/bootstrap.min.js',);
	public function __construct()
	{
		//parent::__construct();
        View::composer(['leauts.default'],function($view){
            if(Session::get('user_id')){
                $links = View::make('templates.userauth');
            }else{
                $links = View::make('templates.usernotauth');
            }
            $view->with('links',$links);

            $view->title='Сайт профессионального фотографа';

            //передача
        $view->with('style',$this->style)
             ->with('script',$this->script);

            //echo Auth::user()->id;

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
