<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)->orderByDesc('created_at')->get();
        return view('dashboard', compact('tasks'));
    }
}
