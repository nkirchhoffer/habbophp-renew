<?php

namespace App\Http\Controllers\Me;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ConfigController;

class MeController extends Controller {
	
	public function show()
    {
        return view('me');
    }
}