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
    public function postOrders(){
        $validation = Validator::make(Input::all(), array(

            'name'  => 'required',

            'phone'  => 'required',
        ));
        if ($validation->fails()) {
            // В случае провала, редиректим обратно с ошибками и самими введенными данными
            return Redirect::to('basketorder')->withErrors($validation)->withInput();
        }
        //
        $arr = array();
        foreach($_COOKIE as $key => $value){
            $key = (int)$key;
            if($key>0){
                $arr[$key] = $value;
                setcookie($key, null,time()-3600,'/');
            }
        }
        $body = serialize($arr);
        DB::table('orders')->insert(
            array('name'=>Input::get('name'),
                'phone'=>Input::get('phone'),
                'body'=>$body,

                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            )
        );
        return Redirect::to('/');
    }

}