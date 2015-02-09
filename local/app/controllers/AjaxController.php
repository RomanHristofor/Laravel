<?
Class AjaxController extends BaseController{
    public function __construct(){
        parent::__construct();
        $this->script[]='media/js/fotos.js';//при клике увеличивает фото
    }

    public function getIndex(){

        return View::make('templates.fotos')->with('tovs',$tovs);
    }

}