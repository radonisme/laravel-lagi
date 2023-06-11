<?php

namespace App\Http\Resources;

use App\Models\Overtime;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowOvertimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // $category->postx->load('category', 'author')
        // $user = Overtime::with('employee')->find($request->id);
        // return [
        //     "overtime_id" => $user->id,
        //     "employee_id" => $user->employee_id,
        //     "time_start" => $user->time_start,
        //     "time_end" => $user->time_end,
        //     "writer" => $user->load('employee')
        // ]; Tidak Bisa

        return [
            "overtime_id" => $this->id,
            "employee_id" => $this->employee_id,
            "time_start" => $this->time_start,
            "time_end" => $this->time_end,
            // "Karyawan" => $this->whenLoaded(relationship:'employee') // Bisa seperti ini.. atau
            "employee" => new EmployeeResource($this->employee)
        ];
    }
}
