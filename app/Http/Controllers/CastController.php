<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CastController extends Controller
{
    public function index(): view 
    {
        $casts = DB::table('casts')->get();
        return view('casts.index', compact('casts'));
    }

    public function create() {
        return view('casts.create');
    }

    public function store(Request $request) {
        
        // dd($request->all());
        $validation = $request->validate([
            "name" => 'required',
            "umur" => 'required',
            "bio" => 'required',
        ]);
        $query = DB::table('casts')->insert([
            'name' => $request['name'],
            'umur' => $request['umur'],
            'bio' => $request['bio'],
        ]);

        return redirect('/cast')->with('success', 'Data Berhasil di Tambahkan.');
    }

    public function show($id){
        $casts = DB::table('casts')->where('id', $id)->get();
        if(!$casts) {
            abort(404);
        }
        return view('casts.show', compact('casts'));
    }

    public function update(Request $request, $id) {
        $validation = $request->validate([
            "name" => 'required',
            "umur" => 'required',
            "bio" => 'required',
        ]);
        $query = DB::table('casts')->where('id', $id)->update([
            'name' => $request['name'],
            'umur' => $request['umur'],
            'bio' => $request['bio'],
        ]);

        return redirect('/cast')->with('success', 'Data Berhasil di Update.');
    }

    public function edit($id)
    {
        $casts = DB::table('casts')->where('id', $id)->get();
        if (!$casts) {
            abort(404);
        }
        return view('casts.edit', compact('casts'));
    }

    public function destroy($id)
    {
        DB::table('casts')->where('id', $id)->delete();
        return redirect()->route('cast.index')->with('success', 'Cast deleted successfully.');
    }
}
