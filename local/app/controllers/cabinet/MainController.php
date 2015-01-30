<?
Class MainController extends BaseController{

    public function __construct(){
        parent::__construct();

        $this->styles[]='media/css/style_adminka.css';
    }
    public function getIndex(){
        return View::make('cabinet.main');
    }
    public function postIndex(){
        //print_r($_POST);
        $validation = Validator::make(Input::all(), array(

            'username'  => 'required',

            'phone'  => 'required',

            'body'  => 'required',
        ));
        if ($validation->fails()) {
            // В случае провала, редиректим обратно с ошибками и самими введенными данными
            return Redirect::to('cabinet')->withErrors($validation)->withInput();
        }
        DB::table('comments')->insert(
            array('username'=>Input::get('username'),
                'phone'=>Input::get('phone'),
                'body'=>Input::get('body'),
                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            )
        );
        return Redirect::to('cabinet');
    }

}