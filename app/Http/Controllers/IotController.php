<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iot;

class IotController extends Controller
{
    //
    public function index(){
        $iot = Iot::all();
        $humidity = Iot::pluck('humidity');
        $temperature = Iot::pluck('temperature');
        $nilai = Iot::pluck('nilai');
        $labels = Iot::pluck('id');


        return view('iot.index', compact('iot','labels', 'humidity', 'temperature', 'nilai'));
    }
}
