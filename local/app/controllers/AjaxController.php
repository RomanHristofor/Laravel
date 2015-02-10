<?
Class AjaxController extends Controller{
   public function getIndex(){
        $_GET['id']= (int)$_GET['id'];
        $tovs = DB::table('foto')->where('id','=',$_GET['id'])
                                ->first();


        return View::make('templates.ajax')->with('tovs',$tovs);
    }

}