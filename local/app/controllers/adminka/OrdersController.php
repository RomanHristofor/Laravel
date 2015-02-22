<?
Class OrdersController extends AdminController{
    public function __construct(){
        parent::__construct();

    }
    public function getIndex(){
        $fotos = DB::table('orders')->get();
        return View::make('adminka.orders')->with('fotos',$fotos);

    }
}