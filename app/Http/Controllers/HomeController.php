<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list_task_due = Tasks::where('due_date', '=', Carbon::tomorrow())->get();
        $list_count = $list_task_due->count();
        $commonData = [
            'list_count' => $list_count,
        ];
        return view('home', $commonData);
    }
}
