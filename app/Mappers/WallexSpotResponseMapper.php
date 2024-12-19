<?php

namespace App\Mappers;

use App\Interfaces\IexchangeResponseMapper;
class WallexSpotResponseMapper implements IexchangeResponseMapper{


    public function mapOrderResponse(object $response): array
    {
        return [
            "placed" => $response->status == 'ok'?'success':'failure',
            "side" => $response->type,
            "symbol" => $response->srcCurrency,
            "asset" => $response->dstCurrency,
            "price" => $response->amount,
            "amount" => $response->amount,
            "id" => $response->id,
            "status" => $response->status,
            "fee" => $response->fee,
            "placed_at" => $response->created_at,
            "clientOrderId" => $response->clientOrderId,
        ];
    }


}
