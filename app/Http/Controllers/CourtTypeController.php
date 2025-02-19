<?php

namespace App\Http\Controllers;

use App\Models\CourtType;
use Illuminate\Http\Request;

class CourtTypeController extends Controller
{
    public function index(){
        $types = CourtType::all();
        return view('mcourt_type', compact('types'));
    }

    public function store(){
        
    }
}
