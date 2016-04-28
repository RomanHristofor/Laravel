<?
Class MainController extends BaseController{

    public function __construct(){
        parent::__construct();

        $this->styles[]='media/css/style_adminka.css';
    }
    public function getIndex(){
        return View::make('cabinet.main');
    }


}