<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarketRequest;
use App\Http\Resources\Crypto\CryptoResources;
use App\Http\Resources\Crypto\MarketResources;
use App\Models\Product;

class MarketController extends Controller
{
    public function index()
    {
        $model = Product::get();
        return response()->json([
            new MarketResources($model)
        ]);
    }

    public function update (StoreMarketRequest $request, int $id)
    {
        try {
            Product::find($id)
                ->update($request->only([
                    'name', 'price', 'image', 'cost', 'teg'
                ]));
            return response()->json([
                'message' => "Модель $id обновлена"
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                "message" => $exception->getMessage()
            ] ,500 );
        }
    }

}
