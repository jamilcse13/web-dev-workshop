<?php

namespace App\Http\Controllers;

use App\Models\StockMarketData;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function jsonDataStore()
    {
        $path = storage_path('data/stock_market_data.json');
        $datas = json_decode(file_get_contents($path), true);
        
        foreach ($datas as $data) {
            $storage['json_data'] = json_encode($data);
            // dd($storage);
            StockMarketData::create($storage);
        }
    }
}
