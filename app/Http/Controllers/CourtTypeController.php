<?php

namespace App\Http\Controllers;

use App\Models\CourtType;
use Illuminate\Http\Request;

class CourtTypeController extends Controller
{
    public function index(){
        $types = CourtType::all();
        return $types;
        return view('mcourt_type');
    }

    public function store(){
        
    }
}
