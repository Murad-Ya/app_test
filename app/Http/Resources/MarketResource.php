<?php

namespace App\Http\Resources\Crypto;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MarketResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            "name" => $this->name,
            "price" => $this->price,
            "cost" => $this->cost,
            "image" => $this->image,
            "teg" => $this->teg
        ];
    }
}
