<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetrolStationController extends Controller
{
   public function index()
   {
       return view('superAdmin.petrolStations.index');
   }
}
