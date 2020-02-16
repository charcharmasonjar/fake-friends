<?php

namespace App\Http\Controllers;

use App\Cast;
use App\Http\Resources\Cast as CastResource;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        return new CastResource(Cast::all());
    }
}
