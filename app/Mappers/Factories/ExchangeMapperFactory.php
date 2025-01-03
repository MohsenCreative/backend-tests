<?php



namespace App\Mappers\Factories;



use App\Interfaces\IexchangeResponseMapper;
use App\Mappers\NobitexSpotResponseMapper;
use Exception;

class ExchangeMapperFactory{

    /**
     * @throws Exception
     */
    public static function getExchangeMapper(string $exchange) : IexchangeResponseMapper{

    return match ($exchange){
        'NobitexSpot' => new NobitexSpotResponseMapper(),
        //'WallexSpot' => new WallexSpotResponseMapper(), // i.e next exchange
         default => throw new Exception("Response mapper for '$exchange' exchange not found!"),
    };

}


}
