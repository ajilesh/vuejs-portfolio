<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ResumeResource;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::all();
        return new ResumeResource($resume);
    
    }
}
