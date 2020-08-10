<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\DomCrawler\Crawler;
use App\PriceGold;
class CrawlingController extends Controller
{
	protected $url = 'https://www.giavangonline.com/';
	protected $pathJsonPriceGold = 'storage/price_gold_last.json';

    public function index(){
        $url = $this->url;
       
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $crawler->filter('.bg7 #SJC_HCM_buy')->each(function ($node) {
            $buy = $node->text()."\n";
        });
        $crawler->filter('.bg7 #SJC_HCM_sell')->each(function ($node) {
            $sell = $node->text()."\n";
        });
        $crawler->filter('.bg7')->each(
            function (Crawler $node) {
                $sell = $node->filter('#SJC_HCM_sell')->text();
                $buy = $node->filter('#SJC_HCM_buy')->text();

                $sell = str_replace(',','',$sell);
                $buy = str_replace(',','',$buy);
                $dateNow = date('Y/m/d');
                $dateTime = date('Y/m/d H:i:s');
        		
		        $param['date']=$dateNow;
		       
        		$param['sell']=$sell;
        		$param['buy']=$buy;
        		$param['datetime']=$dateTime;
                $this->isCheckSaveFile($param);

            }
        );
    }
    public function isCheckSaveFile($param){
    	$paramLast = $this->readFilePriceGoldLast();
    	$message = "No Change";
    	if($param['buy'] != $paramLast->buy || $param['sell'] != $paramLast->sell ){
    		$this->saveFilePriceGoldLast($param);
    		$this->savePriceGold($param);
    		$message = "Have Change";

    	}
    	echo $message;
        die;



    }
    public function readFilePriceGoldLast(){
    	$json = json_decode(file_get_contents($this->pathJsonPriceGold, true)); 
		return $json;
    }
	 public function saveFilePriceGoldLast($array){
	 		$json = (object) $array;
	    	file_put_contents($this->pathJsonPriceGold, json_encode($json));
	    }
    public function savePriceGold($param){
    	$priceGold = new PriceGold;
        $priceGold->date = $param['date'];
        $priceGold->buy = $param['buy'];
        $priceGold->sell = $param['sell'];
        $priceGold->date = $param['date'];

        $priceGold->save();

    }
}
