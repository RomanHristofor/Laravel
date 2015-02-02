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
    public function getForma(){
        return View::make('templates.addfoto');
    }
    public function postForma(){
    $data = Input::all();
        $rules = array('name'=>array('required'));
        $validation = Validator::make($data,$rules);
        if($validation->fails()){
            $errors= $validation->message();
        }
        if(!empty($errors)){
            return Redirect::to('adminka/forma')->withErrors($errors);//!
        }
        if(empty($errors)){

           $file = Input::file('file');

            if(!empty($file)){
                $picfile = $this->_img_edit($file,'photo');
                //echo "fffl";
                DB::table('foto')->insert(
                    array(
                        'name' => $data['name'],
                        'photo' => $picfile)
                );
            }

        }

    }
    protected function _img_edit($file,$cat){
        //echo "fffl";
        $destinationPath='media/uploads/'.$cat.'/';
        if(!$destinationPath){
            @mkdir($destinationPath,0777);
        }
        $filename = date('Y_m_d_h_i_s').'.'.$file->getClientOriginalExtension();
        $uploads_success = $file->move($destinationPath,$filename);
        if($uploads_success){
           $im = Image::make($destinationPath. $filename);
            $im -> resize(200,null, function($con){
               $con->aspectRatio();
            });
            $pic_small ='s_'.$filename;
            $im->save($destinationPath. $pic_small);
            return $filename;

        }else false;
    }
}