<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'address' => 'required',
            'box_id' => 'required',
        ],
            [
                'name.required' => 'Името е задължително',
                'email.required' => 'Имейл адресът е задължителен',
                'email.email' => 'Имейл адресът трябва да във валиден формат',
                'mobile.required' => 'Мобилният номер е задължителен',
                'mobile.numeric' => 'Мобилният номер трябва да във валиден формат',
                'address.required' => 'Адресът за доставка е задължителен',

            ]);


        try {
            Delivery::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'address' => $request->input('address'),
                'box_id' => $request->input('box_id'),
            ]);

            DB::table('boxes')
                ->where('id', $request->input('box_id'))
                ->update(['is_opened' => 1]);

            return redirect()->route('default')->with('delivery', 'Успешно направихте своята поръчка!');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
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
        $box = DB::table('boxes')
            ->where('id', '=', $id)
            ->where('is_opened', '=', 0)
            ->select('id', 'title', 'price')
            ->first();

        return view('delivery', compact(['id', 'box']));
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
