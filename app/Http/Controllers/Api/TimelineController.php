<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimelineController extends Controller
{
    public function index(Request $request)
    {
    	return $request->user();
    }
}
