<?
Class BasketController extends BaseController{
    public function __construct(){
        parent::__construct();

        $this->script[]='media/bootstrap/js/admin.js';
    }

    public function postIndex($id){
        $data = Input::all();
        $id = (int)$id;
        $_POST['colvo'] = (int)$_POST['colvo'];

        setcookie($id,$_POST['colvo'],time()+3600,'/');
        return Redirect::to('basket/index/');

    }
    public function getDelete($id){
        setcookie($id,null,time()-3600,'/');
        return Redirect::to('basket/index/');
    }
    public function getIndex(){

        return View::make('templates.basketorder');

    }

}