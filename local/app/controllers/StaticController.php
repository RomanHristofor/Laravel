<?
Class StaticController extends BaseController{
    public function __construct(){
        parent::__construct();
    }
    public function getIndex($id='index'){
        $text = DB::table('maintext')
            ->where('url','=',$id)
            ->first();

        return View::make('static')->with('text',$text);


    }
}

