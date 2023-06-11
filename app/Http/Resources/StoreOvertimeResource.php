<?php

namespace App\Http\Resources;

use App\Models\Overtime;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreOvertimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "Overtime baru berhasil dibuat!"
        ];
    }
}
