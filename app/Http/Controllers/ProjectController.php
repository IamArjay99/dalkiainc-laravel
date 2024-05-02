<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Project';

        return view('admin.projects.index', $data);
    }
}
