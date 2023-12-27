<?php

namespace App\Http\Controllers;

use App\Models\Tobuy;
use Illuminate\Http\Request;

class TobuyController extends Controller
{
    public function index(){
        $tobuy = Tobuy::all();
        return view('tobuy.index',compact(['tobuy']));
    }

    public function create()
    {
        return view('tobuy.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        Tobuy::create($request->except(['_token', 'submit']));
        return redirect('/tobuy');
    }

    public function edit($id)
    {
        $tobuy = Tobuy::find($id);
        return view('tobuy.edit',compact(['tobuy']));
    }

    public function update($id, Request $request)
    {
        $tobuy = Tobuy::find($id);
        $tobuy->update($request->except(['_token', 'submit']));
        return redirect('/tobuy');
    }

    public function destroy($id)
    {
        $tobuy = Tobuy::find($id);
        $tobuy->delete();
        return redirect('/tobuy');
    }
}
