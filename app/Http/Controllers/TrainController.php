<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $alltrain = Train::where('data_partenza', ">=", Train::raw("curdate()"))->get();
        return view('index', ["arraytreni" => $alltrain]);
    }
}
