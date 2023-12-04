<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{

    //Function Create
    public function create() {
        return view('showroom.create');
    }

    //Function Read
    public function index() {

        $showroom = Showroom::all();

        return view('showroom/index', compact('showroom'));
    }

    //Function Store
    public function store(Request $request) {

        $data = $request->all();

        Showroom::create([
            'name' => $data['name'],
            'brand' => $data['warna'],
            'tipe' => $data['tipe'],
            'harga' => $data['harga'],
        ]);
        
        return redirect(route('showroom.index'));
    }
}
