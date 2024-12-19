<?php

namespace App\Mappers;

use App\Interfaces\IexchangeResponseMapper;
class NobitexSpotResponseMapper implements IexchangeResponseMapper{


    public function mapOrderResponse(object $response): array
    {
        return [
            "placed" => $response->status == 'ok'?'success':'failure',
            "side" => $response->order->type,
            "symbol" => $response->order->srcCurrency,
            "asset" => $response->order->dstCurrency,
            "price" => $response->order->amount,
            "amount" => $response->order->amount,
            "id" => $response->order->id,
            "status" => $response->order->status,
            "fee" => $response->order->fee,
            "placed_at" => $response->order->created_at,
            "clientOrderId" => $response->order->clientOrderId,
        ];
    }


}
