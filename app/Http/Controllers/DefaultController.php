<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        $boxes = Box::all();

        return view('homepage', compact('boxes'));
    }
}
