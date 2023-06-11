<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OvertimePayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $overtime = $this[0];
        $setting = $this[1];

        // $start = new Carbon($overtime->time_start);
        // $finish = new Carbon($overtime->time_end);
        // $totalduration = $start->diffInSeconds($finish);
        // $totalduration = gmdate('H:i:s', $totalduration); // Untuk Hasil > Jam:Menit:Detik

        // Hitung durasi
        $start = new Carbon($overtime->time_start);
        $finish = new Carbon($overtime->time_end);
        $totalduration = $start->diffInHours($finish);

        // Hitung Formula (Durasi x Expression)

        $salary = $setting->reference->expression;
        $salary = explode(" ", $salary);
        $salary = str_replace("salary", $overtime->employee->gaji, $salary); // Kata | KataPengganti | Sumber
        $salary = str_replace("overtime_duration_total", $totalduration, $salary); // Untuk yang Reference 2
        $salary = implode(" ", $salary);
        $salary = eval("return $salary;"); // Pakai eval

        return [
            "overtime_id" => $overtime->id,
            "reference" => $setting->reference->expression,
            "overtime_duration" => "{$totalduration} Jam",
            "total_salary" => round($salary) // Dibulatkan
        ];
    }
}
