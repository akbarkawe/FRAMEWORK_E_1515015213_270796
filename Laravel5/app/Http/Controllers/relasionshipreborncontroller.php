<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen;
use App\Http\Requests;

class relasionshipreborncontroller extends Controller
{
    public function ujiHas(){
    	return dosen :: has('dosen_matakuliah')->get();
    }
    public function ujiDoesntHave(){
    	return dosen :: doesntHave('dosen_matakuliah')->get();
    }
}
