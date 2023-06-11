<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreEmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
    
        // $data = new Employee;
        // $data->name = $request->name;
        // $data->gaji = $request->gaji;
        // $data->save();

        // return $data; // Cara Lambat

        Employee::create([
            "name" => $request->name,
            "gaji" => $request->gaji
        ]);

        return $this->resource; // Cara Cepat
    }

}
