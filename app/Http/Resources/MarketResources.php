<?php

namespace App\Http\Resources\Crypto;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MarketResources extends JsonResource
{
    public function toArray(Request $request)
    {
        return MarketResource::collection($this->resource);
    }
}
