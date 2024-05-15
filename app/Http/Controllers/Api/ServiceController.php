<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Resources\ServiceResources;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return new ServiceResources($service);
    
    }
}
