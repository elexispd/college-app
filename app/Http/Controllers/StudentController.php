<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create() {
        return view(view: 'students.create');
    }

    public function search() {
        return view(view: 'students.search');
    }
    public function index() {
        return view(view: 'students.index');
    }
}
