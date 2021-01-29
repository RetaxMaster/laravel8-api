<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    // Formatea cada resultado como un resultado individual
    public $collects = PostResource::class;

    public function toArray($request)
    {
        return [
            "data" => $this->collection,
            "meta" => [
                "organization" => "Platzi",
                "authors" => [
                    "RetaxMaster",
                    "Platzi"
                ]
            ],
            "type" => "articles"
        ];
    }
}
