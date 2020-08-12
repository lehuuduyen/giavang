<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use DB;
class UserController extends BaseController
{
	protected $limitDateShow = 5;
    public function index(){
    	$data = $this->getPriceGoldMonth();
      	return view('user',['month'=>$data]);
    }
    public function getPriceGoldMonth(){
		$limitDateShow = $this->limitDateShow;
    	$data = DB::select('SELECT * FROM price_gold WHERE id IN (
							    SELECT MAX(id)
							    FROM price_gold
							    GROUP BY date
							) ORDER BY date DESC LIMIT '.$limitDateShow);
    	foreach ($data as $key => $value) {
    		# code...
    		$detail = $this->getPriceGoldDetail($value->date);
    		$data[$key]->detail= $detail;
    	}
    	return $data;
    }
	 
	public function getPriceGoldDetail($date){
		$limitDateShow = $this->limitDateShow;
    	$data = DB::select("SELECT * FROM price_gold  where date  LIKE '%".$date."%'");
    	return $data;
    }
   
}
