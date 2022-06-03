<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        $categories = Category::all();
        $category = $request->query('category');

        $boxes = DB::table('boxes as b')
            ->join('categories as c', 'b.category_id', '=', 'c.id')
            ->where('b.is_opened', '=', 0) //not opened boxes only
            ->when($category, function ($query) use ($category) {
                $query->where('b.category_id', '=', $category);
            })
            ->select(['title', 'price', 'badge', 'image', 'name as category_name'])
            ->get();


        return view('homepage', compact('boxes', 'categories'));
    }
}
