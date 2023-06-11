<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        // return parent::toArray($request);

        //  return $this->resource; // Cara cepat

        return [
                'id' => $this->id, 
                'name' => $this->name,
                'salary' => $this->gaji
        ];
    }
}
