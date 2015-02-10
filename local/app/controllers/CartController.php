<?
Class CartController extends BaseController{
    public function __construct(){
        parent::__construct();
        //$this->script[]='media/js/fotos.js';//при клике увеличивает фото
    }

    public function postIndex(){

       echo $id;


    }
    public function getIndex(){

        print_r ($_COOKIE);


    }

}