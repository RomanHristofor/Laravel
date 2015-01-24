<?
Class AuthController extends BaseController{
    public function getIndex(){
        //parent::__construct();
    }
    public function getReg(){
       
       return View::make('auth.reg');
    }
    public function postReg(){
        //print_r($_POST);
        $rules=array(
                    'username'=>array('required'),//,'unique:user,username'
                    'password'=>array('required','min:7'),
                      );
        $validation = Validator::make(Input::all(),$rules);
				$errors=array();
            if($validation->fails()){
                $errors = $validation->messages();
            }

        if($errors){
            return Redirect::to('auth/reg')->withErrors($errors);//array('Ошибка')
        }
		if(!$errors){
        DB::table('users')->insert(
                                   array('username'=>Input::get('username'),
                                   'email'=>Input::get('email'),
                                   'password'=>Hash::make(Input::get('password')),
                                   'created_at'=>date('Y-m-d h:i:s'),
                                   'updated_at'=>date('Y-m-d h:i:s'),
                                         )
                                   );
        return Redirect::to('/');
		}
    }
    public function postLogin(){
        $data = array('username'=>Input::get('username'),
                      'password'=>Input::get('password'),
                      );
        $auth = Auth::attempt($data,false);
        if($auth){
            return Redirect::to('auth/login')->withErrors(array('Ошибка'));
        }
    }
}

