<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FavouriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
         return [
            
            'device_id'  => $this->device_id,
            'recipe'     => [
            
                'name'        => $this->recipe->name,
                'ingredients' => $this->recipe->ingredients,
                'steps'       => $this->recipe->steps,
            ],
            
        ];

     
    }
    
} 

