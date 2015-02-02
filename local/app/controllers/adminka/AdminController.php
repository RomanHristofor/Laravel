<?
Class AdminController extends BaseController{
    public function __construct(){
        parent::__construct();
        $this->beforeFilter('admin');
        $this->style[]='media/css/style_adminka.css';
        $this->script[]='media/bootstrap/js/admin.js';
    }
    public function getIndex(){
        $fotos = DB::table('foto')->get();
        return View::make('adminka.admin')->with('fotos',$fotos);

    }
   public function postAdmin(){
        //print_r($_POST);
        $validation = Validator::make(Input::all(), array(

            'name'  => 'required',

            'photo'  => 'required',

        ));
        if ($validation->fails()) {
            // В случае провала, редиректим обратно с ошибками и самими введенными данными
            return Redirect::to('about')->withErrors($validation)->withInput();
        }
        DB::table('foto')->insert(
            array('name'=>Input::get('name'),
                'photo'=>Input::get('photo'),

                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            )
        );
        return Redirect::to('about');
    }
    public function getDelete($id){
        DB::table('foto')->where('id','=',$id)->delete();
        return Redirect::to('adminka');
    }
}