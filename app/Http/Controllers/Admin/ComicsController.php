<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $comics = Comics::orderByDesc('id')->get();
        //dd($comics);
        return view('admin.comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$pages = config('comics');
        //dd($request->all());

        /*  $data = [
        'title' => $request->tile,
        'thumb' => $request->thumb,
        'description' => $request->description,
        'price' => $request->price,
        'series' => $request->series,
        'sale_date' => $request->sale_date,
        'type' => $request->type,
        ];
        Comics::create($data); */

        $comics = new Comics();
        $comics->title = $request->title;
        $comics->description = $request->description;
        $comics->thumb = $request->thumb;
        $comics->price = $request->price;
        $comics->series = $request->series;
        $comics->sale_date = $request->sale_date;
        $comics->type = $request->type;
        $comics->save();
        return to_route('admin.comic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comic)
    {
        //dd($comic->all());
        //$pages = config('comics');
        return view('admin.comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comics)
    {
        return view('admin.comic.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comics)
    {
        //dd($request->all());
        $data = [
            'title' => $request->tile,
            'thumb' => $request->thumb,
            'description' => $request->description,
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
        ];
        $comics->update($data);
        return to_route('admin.comic.index', compact('comics'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
