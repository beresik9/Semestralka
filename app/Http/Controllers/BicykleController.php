<?php

namespace App\Http\Controllers;

use App\Models\Bicykle;
use Illuminate\Http\Request;

class BicykleController extends Controller
{

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'year' => 'required|integer',
            'brand' => 'required|string',
            'model' => 'required|string',
        ]);

        $bicykel = Bicykle::find($id);

        $bicykel->name = $request->name;
        $bicykel->year = $request->year;
        $bicykel->brand = $request->brand;
        $bicykel->model = $request->model;
        if ($request->elktricky) {
            $bicykel->elektricky = $request->elektricky;
        }
        $bicykel->save();

        return view('BicykleView', ['bicykles' => Bicykle::all()]);
    }


    public function delete($id)
    {
        $bicykel = Bicykle::find($id);
        $bicykel->delete();

        return view('BicykleView', ['bicykles' => Bicykle::all()]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'year' => 'required|integer',
            'brand' => 'required|string',
            'model' => 'required|string',

        ]);

        $bicykel = new Bicykle();

        $bicykel->name = $request->name;
        $bicykel->year = $request->year;
        $bicykel->brand = $request->brand;
        $bicykel->model = $request->model;
        if ($request->elktricky) {
            $bicykel->elektricky = $request->elektricky;
        } else {
            $bicykel->elektricky = false;
        }
        $bicykel->save();


        return view('CreateBicyklesView', [
            'message' => "Bicykel vytvoreny!"
        ]);
    }

    public function edit($id)
    {
        return view("CreateBicyklesView", ['bicykel' => \App\Models\Bicykle::find($id)]);
    }
}
