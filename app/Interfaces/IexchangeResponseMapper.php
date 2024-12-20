<?php




namespace App\Interfaces;




interface IexchangeResponseMapper{


    /**
     * @param object $response
     * @return array
     */
 public function mapOrderResponse(object $response) : array;


}
