<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    protected $model;

    public function __construct(Job $model)
    {
        $this->model = $model;
    }

    public function dashboard()
    {
        return view('welcome');

    }

    public function create()
    {
        return view('job.create');

    }

    public function store(Request $request)
    {

        $this->model->create($request->all());

        return redirect()->back()->with('success', 'successfully add job');
    }

}
