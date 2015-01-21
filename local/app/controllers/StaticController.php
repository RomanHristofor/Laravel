<?
Class StaticController extends BaseController{
    public function __construct(){
        parent::__construcr();
    }
    public function getIndex($id=NULL){
       return View::make('static');
    }
}

