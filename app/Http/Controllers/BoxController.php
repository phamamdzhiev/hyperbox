<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\Box;
use App\Models\Category;
use App\Models\Item;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $categories = Category::all();
        $badges = Badge::all();
        $items = Item::all();
        $boxes = Box::all();
        return view('auth.boxes',
            compact(
                ['categories', 'items', 'badges', 'boxes']
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Title' => 'required|min:5|max:50',
            'Description' => 'required|min:5|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120', // max 5MB
            'item_box' => 'required',
            'box_category' => 'required',
            'price' => 'required|numeric|min:5|max:999',
        ]);

        try {
            $path = $request->file('image')->store('box-images');

            Box::create([
                'Title' => $request->input('Title'),
                'desc' => $request->input('Description'),
                'image' => $path,
                'item_id' => $request->input('item_box'),
                'category_id' => $request->input('box_category'),
                'price' => $request->input('price'),
                'badge' => $request->input('badge'),
//                'price_diff' => 0, // temp solution
                'discount' => 0,
                'tracking_id' => sprintf('%s%s', time(), Str::random(8))
            ]);

            return back()->with('status', 'Box added!');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show($id): View|Factory|Application
    {
        $box = Box::findOrFail($id);
        return view('auth.box-single', compact('box'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
