<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        // $service = Service::first();
        // foreach($service->content as $services)
        // {
        //    echo $services['icon'];
        // }
    }
    public function store()
    {
        Service::create([
            'title' => 'ajilesh',
            'sub-title' => 'ajilesh p p',
            'content' => [
                [
                'icon' => 'icon.jpg',
                'content' => 'content1',
                ],
                [
                    'icon' => 'icon1.jpg',
                    'content' => 'content2',
                ]
            ]
        ]);
    }
}
