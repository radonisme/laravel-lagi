<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\OneEmployeeResource;
use App\Http\Resources\StoreEmployeeResource;

class EmployeeController extends Controller
{
    public function index(){
        // Kalau Parameter berisi Model berarti berasal dari Database
        $employee = Employee::all();
        return EmployeeResource::collection($employee);  // Wajib Pake Collection dan tidak buat instans baru
        // return response()->json($response);
    }

    public function show(Request $request){
        // $employee = Employee::findOrFail($request->id);
        
        // $data = [
        //     "nama" => $employee->name,
        //     "gaji" => $employee->gaji
        // ];
        // return response()->json($data); // Cara Ke-1
        return new OneEmployeeResource(Employee::findOrFail($request->id)); // Cara Ke-2
    }

    public function store(Request $request)
    {

        // $data = new Employee(); // Cara Lambat
        // $data->name = $request->name;
        // $data->gaji = $request->gaji;

        // $data->save();

        // $dx = [
        //     "namanya" => $request->name,
        //     "gajinya" => $request->gaji,
        // ];
        // return response()->json($dx);

        return new StoreEmployeeResource($request); // Cara Cepat
    }
}
