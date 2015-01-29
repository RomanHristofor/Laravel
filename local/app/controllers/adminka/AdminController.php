<?
Class AdminController extends BaseController{
    public function __construct(){
        parent::__construct();
        $this->beforeFilter('admin');
        $this->styles[]='media/css/style_adminka.css';
    }
    public function getIndex(){
        return View::make('adminka.admin');
    }
}