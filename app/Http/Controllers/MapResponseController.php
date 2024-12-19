<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mappers\Factories\ExchangeMapperFactory;
use Illuminate\Support\Facades\Storage;

class MapResponseController extends Controller
{
    public function index(){
        $exchange = 'BinanceSpot';

        $exchangeNobitexResponse =json_decode(file_get_contents(storage_path('app/nobitexResponse.json')));
        $exchangeWallexResponse =json_decode(file_get_contents(storage_path('app/WallexResponse.json')));


            $mapper = ExchangeMapperFactory::getExchangeMapper($exchange);


            $mappedResponse = $mapper->mapOrderResponse($exchangeWallexResponse);



            echo '<pre>';
            print_r($mappedResponse);
            echo '</pre>';









    }
}
