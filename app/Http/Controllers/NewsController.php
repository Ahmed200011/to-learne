<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = DB::table('news')->get();
        // dd($news);
        return view('News.AllNews', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('News.AddNews');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        DB::table('news')->insert([
            'name' => $request->title,
            'description' => $request->news,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = DB::table('news')->find($id);
        // dd($news);
        return view('News.EditNews', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('news')->where('id', $id)
            ->update([
                'name' => $request->title,
                'description' => $request->news,
                'updated_at' => now()
            ]);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        DB::table('news')->where('id', $id)->delete();
        return redirect()->route('news.index');
    }
}
