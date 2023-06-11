<?php

namespace App\Http\Controllers;

use App\Http\Resources\OvertimePayResource;
use App\Http\Resources\ShowOvertimeResource;
use App\Http\Resources\StoreOvertimeResource;
use App\Models\Employee;
use App\Models\Overtime;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function store(Request $request)
    {
        Overtime::create([
            "employee_id" => $request->employee_id,
            "time_start" => $request->time_start,
            "time_end" => $request->time_end
        ]);
        return new StoreOvertimeResource($request);
    }

    public function show($id)
    {
        // $user = (Overtime::with('employee')->find($id))->get(); // Untuk Collection
        $user = (Overtime::with(relations:'employee')->find($id)); 
        return new ShowOvertimeResource($user);
    }

    public function pay($id){
        
        $overtime = Overtime::find($id);

        $setting = Setting::with('reference')->first();

        // return new OvertimePayResource($overtime, $setting); // Cuma bisa satu parameter
        return new OvertimePayResource([$overtime, $setting]);
    }
}
