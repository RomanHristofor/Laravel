<?
Class ProductsController extends BaseController{
    public function __construct(){
        parent::__construct();
        $this->script[]='media/js/fotos.js';//при клике увеличивает фото
    }

    public function getIndex(){

       $tovs = DB::table('foto')->where('showhide','=','show')
                       ->orderBy('id','DESC')
                        ->paginate(30);

    return View::make('templates.fotos')->with('tovs',$tovs);
    }

}

