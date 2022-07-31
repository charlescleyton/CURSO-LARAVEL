<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Request $r) {

        $tasks = Task::all()->take(4);

        return view('home', ['tasks' => $tasks]);
    }
}
