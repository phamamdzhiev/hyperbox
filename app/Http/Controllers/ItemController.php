<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $categories = Category::all();
        return view('auth.items', compact('categories'));
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
            'Title' => 'required',
            'Description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120', // max 5MB
            'real_price' => 'required|numeric',
            'cat_number' => 'required',
            'item_category' => 'required',
            'link' => 'required',
            'owner_number' => 'required|numeric',
            'owner_email' => 'required|email',
        ]);

        try {
            $path = $request->file('image')->store('item-images');

            Item::create([
                'title' => $request->input('Title'),
                'desc' => $request->input('Description'),
                'image' => $path,
                'price' => $request->input('real_price'),
                'link' => $request->input('link'),
                'shop_category_number' => $request->input('cat_number'),
                'owner_number' => $request->input('owner_number'),
                'owner_email' => $request->input('owner_email'),
                'tracking_id' => sprintf('%s%s', time(), \Illuminate\Support\Str::random(8)),
                'category_id' => $request->input('item_category')
            ]);

            return back()->with('status', 'Item added!');
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
