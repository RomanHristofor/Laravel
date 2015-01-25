<?
Class AuthController extends BaseController{
    public function getIndex(){
        //parent::__construct();
    }
    public function getReg(){
       
       return View::make('auth.reg');
    }

    public function postReg(){
// Проверка входных данных
        //$rules = User::$validation;
        $validation = Validator::make(Input::all(), array(
            // Поле email является обязательным, также это должен быть допустимый адрес
            // электронной почты и быть уникальным в таблице users
            'email'     => 'required|email|unique:users',

            // Поле username является обязательным, содержать только латинские символы и цифры, и
            // также быть уникальным в таблице users
            'username'  => 'required|alpha_num|unique:users',

            // Поле password является обязательным, должно быть длиной не меньше 6 символов, а
            // также должно быть повторено (подтверждено) в поле password_confirmation
            'password'  => 'required|confirmed|min:6',
        ));
        if ($validation->fails()) {
            // В случае провала, редиректим обратно с ошибками и самими введенными данными
            return Redirect::to('auth/reg')->withErrors($validation)->withInput();
        }

        // Сама регистрация с уже проверенными данными
        DB::table('users')->insert(
            array('username'=>Input::get('username'),
                'email'=>Input::get('email'),
                'password'=>Hash::make(Input::get('password')),
                'created_at'=>date('Y-m-d h:i:s'),
                'updated_at'=>date('Y-m-d h:i:s'),
            )
        );

        return Redirect::to('auth/login');
    }
    public function getLogin(){

        return View::make('auth.login');
    }
    public function postLogin(){

        $text = DB::table('users')
              ->where('username','=',Input::get('username'))
              ->first();

        if($text){
            if (Hash::check(Input::get('password'), $text->password))
            {
                Session::put('user_id', $text->id);
            }else{
                echo 'no hash';
            }

        }else{
            echo 'mistake';
        }
        return Redirect::to('/');//в личный кабинет пользователя
    }
    public function getLogout(){
        Session::put('user_id', null);
            return Redirect::to('/');

    }

}

