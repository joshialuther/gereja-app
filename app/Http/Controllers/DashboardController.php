<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index()
   {
    $wilayah = Wilayah::count();

    return view('dashboard', compact('wilayah'));
   }
}
