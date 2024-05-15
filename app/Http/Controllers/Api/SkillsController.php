<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skills;
use App\Http\Resources\SkillsResource;

class SkillsController extends Controller
{
    public function index(){
        $skills = Skills::all();
        return new SkillsResource($skills);
    }
}
