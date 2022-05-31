<?php

namespace App\Http\Controllers;

use App\Models\Badges;
use App\Models\Box;
use App\Models\Category;
use App\Models\Item;
use App\Models\PriceList;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $priceListOptions = PriceList::all();
        $categories = Category::all();
        $badges = Badges::all();
        $items = Item::all();
        $boxes = Box::all();
        return view('auth.boxes',
            compact(
                ['priceListOptions', 'categories', 'items', 'badges', 'boxes']
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
            'Title' => 'required',
            'Description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120', // max 5MB
            'item_box' => 'required',
            'item_category' => 'required',
            'price_list' => 'required',
            'badge' => 'required'
        ]);

        try {
            $path = $request->file('image')->store('box-images');

            Box::create([
                'Title' => $request->input('Title'),
                'desc' => $request->input('Description'),
                'image' => $path,
                'item_id' => (int)$request->input('item_box'),
                'cat_id' => (int)$request->input('item_category'),
                'price_list_id' => (int)$request->input('price_list'),
                'badge_id' => (int)$request->input('badge'),
//                'price_diff' => 0, // temp solution
                'discount' => 0,
                'tracking_id' => sprintf('%s%s', time(), \Illuminate\Support\Str::random(8))
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
