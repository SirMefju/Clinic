<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Patients;

class MyController extends Controller
{
    //
    public function showDoctors(){
        $doctors = Doctors::all();
        return view('clinic.doctors',['data' => $doctors]);
    }
    public function showPatients(){
        $patients = Patients::all();
        return view('clinic.patients',['data' => $patients]);
    }

}
