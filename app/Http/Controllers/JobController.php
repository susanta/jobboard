<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() 
    {
        $title = 'Available Job';
        $jobs = [
        ' Web Developer',
        'DB Admin',
        'Software Engineer',
        'System Admin'
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }
}
